<?php

namespace App\Http\Controllers\Admin;

// Library Local
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

// Library Installer
use RealRashid\SweetAlert\Facades\Alert;

// Models
use App\Models\Item;

class ItemController extends Controller
{
    public $view = 'admin.pages.item.';
    public $route = 'admin.items.';
    public $title = 'Item';
    public $model;

    public function __construct(Item $model)
    {
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
        $datas = $this->model->all();
        return view($this->view.'index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
