@extends('admin.layouts.base')

@section('content')
    <div class="py-4 row">
        <div class="col-6">
            <h1>Add New Employee</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{route('admin.employee.index')}}" class="btn btn-primary">Go back</a>
        </div>
    </div>
    <div class="py-4 row">
        <div class="col-12">
            <div class="card bg-white-100 border-0 shadow">
                <div class="card-body p-4">
                    <form action="{{route('admin.employee.store')}}" method="post">
                        @csrf
                        <div class="mb-4 row">
                            <div class="col-12 col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phone">Phone</label>
                                <input type="phone" name="phone" class="form-control" id="phone" required>
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <div class="col-12 col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" required>
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <div class="col-12 col-md-6">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-select">
                                    <option selected>Open this select menu</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <div class="col-12 col-md-6">
                                <label for="division_id">Division</label>

                                <select name="division_id" class="form-select">
                                    <option selected>Open this select menu</option>
                                    @foreach ($divisions as $division)
                                    <option value="{{$division->id}}">{{$division->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="position_id">Position</label>

                                <select name="position_id" class="form-select">
                                    <option selected>Open this select menu</option>
                                    @foreach ($positions as $position)
                                    <option value="{{$position->id}}">{{$position->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="address">Address</label>
                            <textarea name="address" id="address"rows="3" class="form-control"></textarea>
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
