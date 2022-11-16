@extends('layouts.admin')

@section('main-content')
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Laravel 9 Import Export Excel & CSV File - <a href="https://techvblogs.com/blog/laravel-9-import-export-excel-csv-file" target="_blank">TechvBlogs</a>
        </h2>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import Users</button>
            <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
        </form>
    </div>
@endsection