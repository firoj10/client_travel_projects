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
                                    <h4>Stay Form </h4>
                                </div>
                                <div> <a href="{{route('admin.stay.create')}}">Create Stay</a></div>
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