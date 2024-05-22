<?php

namespace App\Http\Controllers\Admin;

// Library Local
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

// Library Installer
use RealRashid\SweetAlert\Facades\Alert;

// Models
use App\Models\User;;

class DashboardController extends Controller
{
    public $view = 'admin.pages.dashboard.';
    public $route = 'admin.dashboard.';
    public $title = 'Dashboard ';
    public $title_company = 'Perusahaan';


    public function __construct()
    {
        // $this->middleware('roles:super_admin');
        View::share('title', $this->title);
        View::share('route', $this->route);
        View::share('view', $this->view);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::all();
        return view($this->view . 'index' , [
            'datas' => $datas,
        ]);
    }

    public function system_logo()
    {
        $this->middleware(function ($request, $next) {
            $user = auth()->user();

            if (!$user->hasRole('super_admin')) {
                Alert::warning('information', 'You don`t have access');
                return redirect()->route('admin.dashboard');
            }

            return $next($request);
        });

        $logos = Logo::first();

        // Validasi
        if (!$this->validateLogoURLs($logos)) {
            Alert::warning('information', 'Please make sure the latest logo is updated once first');
            return redirect()->route('admin.logo.index');
        }

        return view('admin.pages.system.logo', compact('logos'));
    }

    private function validateLogoURLs($logos) {
        if ($logos && (strpos($logos->logo_single, 'http://') === 0 || strpos($logos->logo_single, 'https://') === 0) &&
            (strpos($logos->logo_text, 'http://') === 0 || strpos($logos->logo_text, 'https://') === 0)) {
            return true;
        }
        return false;
    }
}
