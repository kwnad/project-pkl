@extends('layouts.admin')

@section('content')
<style>
    
    .container{
        border-radius:200px;
        width:1000px;
        margin-left:25%;
    }
</style>
<div class="container">
<div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <p class="mb-4">
               Kamu Berhasil Login 
            </p>
            <h5 class="">Selamat Datang 🎉</h5>
            
            <p class="mb-4">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h4>{{Auth::user()->name}}! Kamu berhasil login</h4> 
            </p>

            
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img
              src="pokok/assets/img/illustrations/man-with-laptop-light.png"
              height="140"
              alt="View Badge User"
              data-app-dark-img="illustrations/man-with-laptop-dark.png"
              data-app-light-img="illustrations/man-with-laptop-light.png"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection