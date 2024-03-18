@extends('frontend/layout.app')
@section('content')

    <div class="container-fluid bg-primary d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center">
                        <a href="{{ route('addresses') }}" class="btn btn-primary mr-2" style="background-color: white; color: #007bff;">Address</a>
                        <a href="{{ route('frontend.tables.cars') }}" class="btn btn-primary ml-2" style="background-color: white; color: #007bff;">Cars</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
