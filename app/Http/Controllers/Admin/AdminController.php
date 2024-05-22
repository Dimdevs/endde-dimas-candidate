<?php

namespace App\Http\Controllers\Admin;

// Library Local
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// Library Installer
use RealRashid\SweetAlert\Facades\Alert;

// Models
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
    public $view = 'admin.pages.admin.';
    public $route = 'admin.admins.';
    public $title = 'Akun Admin';
    public $model;

    public function __construct(User $model)
    {
        $this->middleware(function ($request, $next) {
            $user = auth()->user();

            if (!$user->hasRole('super_admin')) {
                Alert::warning('information', 'You don`t have access');
                return redirect()->route('admin.dashboard');
            }

            return $next($request);
        });

        $this->model = $model;
        View::share('route', $this->route);
        View::share('view', $this->view);
        View::share('title', $this->title);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::where('role' , 'admin')->get();
        return view($this->view.'index' , [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view.'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:1|regex:/^(?=.*[A-Z]).*$/',
            'status' => 'required|in:1,0',
        ], [
            'password.regex' => 'Password harus minimal 1 karakter dengan setidaknya satu huruf besar.'
        ]);

        $input = $request->all();

        $role = 'admin';
        $time = Carbon::now('Asia/Jakarta');
        $result = $this->model->create([
            'role' => $role,
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => $time,
            'status' => $input['status'],
            'password' => Hash::make($input['password'])
        ]);
        $result->assignRole($role);

        if($result) {
            Alert::success('Created' , 'Create ' . $this->title . ' Success');
            return redirect()->route($this->route.'index');
        }
        Alert::error('Created' , 'Create ' . $this->title . ' Failed');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->model->where('id' , $id)->first();
        return view($this->view.'detail' , [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->model->where('id' , $id)->first();
        return view($this->view.'edit' , [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'status' => 'required|in:1,0'
        ]);

        $input = $request->all();

        $result = $this->model->where('id' , $id)->update([
            'name' => $input['name'],
            'email' => $input['email'],
            'status' => $input['status'],
        ]);

        if($request->password) {
            $password = $this->model->where('id' , $id)->update([
                'password' => Hash::make($input['password'])
            ]);
        }

        if($result) {
            Alert::success('Updated' , 'Update ' . $this->title . ' Success');
            return redirect()->route($this->route.'index');
        }
        Alert::error('Updated' , 'Update ' . $this->title . ' Failed');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'ID tidak valid'], 400);
        }

        $result = $this->model->where('id', $id)->forceDelete();
        if ($result) {
            return response()->json(['message' => 'Hapus ' . $this->title . ' Success'], 200);
        }
        return response()->json(['message' => 'Hapus ' . $this->title . ' Gagal'], 500);
    }
}
