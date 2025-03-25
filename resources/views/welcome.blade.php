@extends('layouts.app')

@section('content')
    <button id="toggle-theme" class="btn btn-secondary m-3">Toggle Dark/Light Mode</button>
    <div class="jumbotron text-center p-5 rounded theme-bg text-theme">
        <h1 class="display-4">College Department System</h1>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card border-theme shadow-sm">
                <div class="card-header bg-gradient-warning text-black">
                    <h4>Colleges</h4>
                </div>
                <div class="card-body theme-bg text-theme">
                    <p>Manage all colleges in the system:</p>
                    <ul>
                        <li>Create new colleges</li>
                        <li>Update existing college information</li>
                        <li>View college details</li>
                        <li>Delete colleges (soft deletion)</li>
                    </ul>
                    <a href="{{ route('colleges.index') }}" class="btn btn-warning text-black">Go to Colleges</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-theme shadow-sm">
                <div class="card-header bg-gradient-warning text-black">
                    <h4>Departments</h4>
                </div>
                <div class="card-body theme-bg text-theme">
                    <p>Manage all departments in the system:</p>
                    <ul>
                        <li>Create new departments</li>
                        <li>Update existing department information</li>
                        <li>View department details</li>
                        <li>Delete departments (soft deletion)</li>
                    </ul>
                    <a href="{{ route('departments.index') }}" class="btn btn-warning text-black">Go to Departments</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('light-mode');
        });
    </script>

    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .theme-bg {
            background-color: #121212;
        }
        .text-theme {
            color: white;
        }
        .border-theme {
            border-color: white !important;
        }
        
        .light-mode {
            background-color: #f8f9fa !important;
            color: black !important;
        }
        .light-mode .theme-bg {
            background-color: white !important;
        }
        .light-mode .text-theme {
            color: black !important;
        }
        .light-mode .border-theme {
            border-color: black !important;
        }
    </style>
@endsection
