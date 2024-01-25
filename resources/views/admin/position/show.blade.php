@extends('admin.layouts.base')

@section('content')
    <div class="py-4 row">
        <div class="col-6">
            <h1>Position: {{$position->name}}</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{route('admin.position.index')}}" class="btn btn-primary">Go back</a>
        </div>
    </div>
    <div class="py-4 row">
        <div class="col-12">
            <div class="card bg-white-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">#</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">First Name</th>
                                    <th class="border-0">Last Name</th>
                                    <th class="border-0 rounded-end">Division</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($position->employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->firstname }}</td>
                                    <td>{{ $employee->lastname }}</td>
                                    <td>{{ $employee->division }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
