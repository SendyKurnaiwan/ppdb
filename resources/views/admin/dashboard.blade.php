@extends('admin.layout.main')
@section('content')
<?php $a = \App\Models\User::all()->count(); $b = $a - 1?> 
<div class="col-xl-5 col-md-6 mb-4" style="margin-left: 35%">
  <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                  <div class=" font-weight-bold text-primary text-uppercase mb-1" style="font-size: 25px">
                      Total Siswa Registrasi</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$b}}</div>
              </div>
              <div class="col-auto">
                  <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection