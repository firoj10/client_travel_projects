@extends('admin.layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="col-12 col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex  justify-between">
                                <div>
                                    <h4>Package Form </h4>
                                </div>
                                <div> <a class="btn btn-primary" href="{{route('admin.experience.create')}}">Create Package </a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
                       
                    </div>



                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush