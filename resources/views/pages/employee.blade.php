@extends('layouts.app')

@section('title', 'Employee')

@section('content')
    <div class="container" style="margin-top: 80px">

        <!-- Title -->
        <div class="row mb-5">
            <div class="col">
                <h1 class="text-center">Employee Management</h1>
            </div>
        </div>

        <!-- Buttons -->
        <div class="row mb-3">
            <!-- Search Bar -->
            <div class="col">
                <div class="d-flex">
                    <input type="text" class="form-control me-2 w-50" placeholder="Search Here">
                    <button class="btn btn-success me-2">Search</button>
                    <button class="btn btn-success" id="getAllEmployees">Get All</button>
                </div>
            </div>
            <!-- + Add -->
            <div class="col text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">+ Add</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addEmployeeModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Employee</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="employeeName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="employeeName">
                            </div>
                            <div class="mb-3">
                                <label for="employeeAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="employeeAddress">
                            </div>
                            <div class="mb-3">
                                <label for="employeeSalary" class="form-label">Salary</label>
                                <input type="number" class="form-control" id="employeeSalary">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="storeEmployee">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div style="overflow-y: auto; max-height: 400px;">
            <table class="table table-bordered">
                <thead class="table-light">
                <tr>
                    <th class="col">ID</th>
                    <th class="col-3">Name</th>
                    <th class="col-3">Address</th>
                    <th class="col-3">Salary</th>
                    <th class="col-3">Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/scripts/employee.js') }}"></script>
@endsection
