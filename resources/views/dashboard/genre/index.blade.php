@extends('dashboard.layouts.main')
@section('container')
<section>
    <div class="row">
        <div class="col-lg-12">                        
            <div class="box h-100">
                <div class="d-flex justify-content-between mb-3">
                    <h1 class="box-title mb-0">Genre</h1>
                    <button class="main-btn active" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</button>
                </div>
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $genre->name }}</td>
                            <td class="">
                                <button class="btn label"><i class="bi bi-pen-fill"></i></button>
                                <button class="btn label"><i class="bi bi-bucket-fill"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                                                 
            </div>
        </div>
    </div>
</section>
@endsection