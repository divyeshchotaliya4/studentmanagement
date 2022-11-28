@extends('layout')

@section('content')
    <div class="container">
        {{-- <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        You are Logged In
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="pt-5 row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col" class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto@gmail.com</td>
                            <td>Surat</td>
                            <td>123456789</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
