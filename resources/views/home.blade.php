@extends('layouts.admin')

@section('content')
<style>
    
    .container{
        border-radius:200px;
        width:900px;
        margin-left:25%;
    }
</style>
<div class="container">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
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

  {{-- <div class="col-md-7">
    @include('layouts/_flash')
    <div class="card elevation-5 shadow p-2 " style="background-color:rgb(221, 221, 221)) ;">
        
        <div class="card-header pb-3 " style="background-color: rgb(143, 188, 240)">
            Absensi 
        </div> --}}
        
        {{-- <div class="card-body bg-light " >
            <div class="table-responsive">
              <table class="table align-middle" id="dataTable">
                  <form action="{{route('absenmasuk')}}" method="post">
                      @csrf
                      <tr>
                        <td>
                          <button type="submit" name="btnIn">Absen Masuk</button>
                        </td>
                        <td>
                          <button type="submit" name="btnOut">Absen Keluar</button>
                        </td>
                      </tr>
                    </form>
                  </table>
            </div>
        </div> --}}
    </div>
  </div>
</div>
  @endsection