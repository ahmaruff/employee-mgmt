@extends('admin.layouts.base')

@section('content')
    <div class="py-4 row">
        <div class="col-6">
            <h1>Employees</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{route('admin.employee.create')}}" class="btn btn-primary">Add new employee</a>
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
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Division</th>
                                    <th class="border-0">Salary</th>
                                    <th class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->firstname.' '.$employee->lastname }}</td>
                                    <td>{{ $employee->division->name }}</td>
                                    <td>{{ $employee->salary->amount }}</td>
                                    <td class="row gap-3">
                                        <div class="col-1">
                                            <a href="{{route('admin.employee.show', $employee->id)}}" class="col btn btn-sm btn-icon-only btn-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </div>
                                        <div class="col-1">
                                            <a href="{{route('admin.employee.edit', $employee->id)}}" class="col btn btn-sm btn-icon-only btn-secondary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </div>
                                        <div class="col-1">
                                            <form action="{{route('admin.employee.destroy', $employee->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="col btn btn-sm btn-icon-only btn-danger">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
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
