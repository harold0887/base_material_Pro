@extends('layouts.app', [
'class' => 'off-canvas-sidebar',
'classPage' => 'login-page',
'activePage' => 'home',
'title' =>"Inicio",
'pageBackground' => asset("material").'/img/login.jpg',
'navbarClass'=>'text-primary'
])

@section('content')

<div class="container pt-5" style="height: auto; color: black">
    <div class="row my-5 pb-5 justify-content-center border border-danger bg-white shadow rounded shadow-lg">
    <div class="col-md-4">
          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <h4>Dashboard</h4>
            </div>

            <div class="card-body">
              You are logged in!
            </div>
          </div>
        </div>
    </div>

</div>






@endsection
