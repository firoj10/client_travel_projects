@extends('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-star"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Stay</h4>
              </div>
              <div class="card-body">
                {{$stay_count}}
                {{-- 'guest_house_count',
                'resort_count',
                'experiences_count',
                'packages_count',
                'stay_count',
                --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-history"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Packages</h4>
              </div>
              <div class="card-body">
               {{$packages_count}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Guest House</h4>
              </div>
              <div class="card-body">
                {{$guest_house_count}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Resorts</h4>
              </div>
              <div class="card-body">
                {{$resort_count}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Experiences</h4>
              </div>
              <div class="card-body">
               {{$experiences_count}}
              </div>
            </div>
          </div>
        </div>                  
                         
      </div>
   
    </section>
  </div>
@endsection