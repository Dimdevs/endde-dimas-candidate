@extends('admin.layouts.app')
@section('title' , $title)
@section('content')
<div class="row mb-3">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users-cog"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Super Admin User</h4>
                </div>
                <div class="card-body">
                    {{ $datas->where('role' , 'super_admin')->count() ?? 0 }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Admin User</h4>
                </div>
                <div class="card-body">
                    {{-- {{ $datas->where('role' , 'admin')->count() ?? 0}} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fab fa-speakap"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Speaker</h4>
                </div>
                <div class="card-body">
                    {{-- {{ $speakers->count() ?? 0 }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Guidelines</h4>
                </div>
                <div class="card-body">
                    {{-- {{ $guidelines->count() ?? 0 }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>File Download</h4>
                </div>
                <div class="card-body">
                    {{-- {{ $template_form->count() ?? 0 }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-video"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Live Streaming</h4>
                </div>
                <div class="card-body">
                    {{-- {{ $live_stream->count() ?? 0 }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="text-center">Review Content Website</h6>
                {{-- <iframe src="{{ url('/') }}" style="width: 100%; height: 600px; border: none"></iframe> --}}
            </div>
        </div>
    </div>
</div>
@endsection
