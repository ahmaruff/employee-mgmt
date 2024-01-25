@extends('admin.layouts.base')

@section('content')
    <div class="py-4 row">
        <div class="col-6">
            <h1>Create New Position</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{route('admin.position.index')}}" class="btn btn-primary">Go back</a>
        </div>
    </div>
    <div class="py-4 row">
        <div class="col-12">
            <div class="card bg-white-100 border-0 shadow">
                <div class="card-body p-4">
                    <form action="{{route('admin.position.store')}}" method="post" class="w-50">
                        @csrf
                        <div class="mb-4">
                            <label for="name">Position Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
