@extends('admin.layouts.base')

@section('content')
    <div class="py-4 row">
        <div class="col-6">
            <h1>{{$employee->firstname.' '.$employee->lastname}}</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{route('admin.employee.edit', $employee->id)}}" class="btn btn-warning me-2">Edit data</a>
            <a href="{{route('admin.employee.index')}}" class="btn btn-primary">Go back</a>
        </div>
    </div>
    <div class="py-4 row">
        <div class="col-12">
            <div class="card bg-white-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="col-12">
                        <div class="card bg-white-100 border-0 shadow">
                            <div class="card-body p-4">
                                <div class="mb-4 row">
                                    <div class="col-12 col-md-6">
                                        <span class="small">Email</span>
                                        <h5>{{$employee->email}}</h5>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="small">Phone</span>
                                        <h5>{{$employee->phone}}</h5>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-12 col-md-6">
                                        <span class="small">First Name</span>
                                        <h5>{{$employee->firstname}}</h5>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="small">Last Name</span>
                                        <h5>{{$employee->lastname}}</h5>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-12 col-md-6">
                                        <span class="small">Gender</span>
                                        <h5>{{$employee->gender}}</h5>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="small">Date of Birth</span>
                                        <h5>{{$employee->date_of_birth}}</h5>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-12 col-md-6">
                                        <span class="small">Division</span>
                                        <h5>{{$employee->division->name}}</h5>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="small">Position</span>
                                        @foreach ($employee->positions as $item)
                                            <div class="mb-2">
                                                <h6>{{ $item->name }}</h6>
                                                <p class="small">
                                                    {{ $item->pivot->start_date. " s/d ". $item->pivot->end_date}}
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="small">Address</span>
                                    <p>{{ $employee->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
