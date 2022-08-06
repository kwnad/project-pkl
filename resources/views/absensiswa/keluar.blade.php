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
    
  <div class="col-md-7">
    @include('layouts/_flash')
    <div class="card elevation-5 shadow p-2 " style="background-color:rgb(221, 221, 221)) ;">
        
        <div class="card-header pb-3 " style="background-color: rgb(143, 188, 240)">
            Absensi 
        </div>
        
        <div class="card-body bg-light " >
            <div class="table-responsive">
              <table class="table align-middle" id="dataTable">
                  <form action="{{route('absenkeluar')}}" method="post">
                      @csrf
                      <tr>
                        <td>
                          <button type="submit" class="btn btn-primary">Absen Keluar</button>
                        </td>
                      </tr>
                    </form>
                  </table>
            </div>
        </div>
    </div>
  </div>
</div>
  @endsection