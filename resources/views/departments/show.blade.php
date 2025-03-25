@extends('layouts.app')

@section('content')
    <button id="toggle-theme" class="btn btn-secondary m-3">Toggle Dark/Light Mode</button>
    <div class="row theme-bg text-theme">
        <div class="col-md-8 mx-auto">
            <div class="card border-theme shadow-sm">
                <div class="card-header theme-bg text-theme">
                    <h4>Department Details</h4>
                </div>
                <div class="card-body theme-bg text-theme">
                    <table class="table text-theme">
                        <tr>
                            <th>Department ID:</th>
                            <td>{{ $department->DepartmentID }}</td>
                        </tr>
                        <tr>
                            <th>Department Name:</th>
                            <td>{{ $department->DepartmentName }}</td>
                        </tr>
                        <tr>
                            <th>Department Code:</th>
                            <td>{{ $department->DepartmentCode }}</td>
                        </tr>
                        <tr>
                            <th>College:</th>
                            <td>
                                <a href="{{ route('colleges.show', $department->CollegeID) }}" class="text-theme">
                                    {{ $department->college->CollegeName }} ({{ $department->college->CollegeCode }})
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>{{ $department->IsActive ? 'Active' : 'Inactive' }}</td>
                        </tr>
                    </table>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('departments.edit', $department->DepartmentID) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.theme-toggle')

@endsection
