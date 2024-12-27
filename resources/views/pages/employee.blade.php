@extends('layouts.app')

@section('title', 'Employee')

@section('content')
    <div class="container" style="margin-top: 80px">

        <!-- Employee Management Title -->
        <div class="row mb-5">
            <div class="col">
                <h1 class="text-center">Employee Management</h1>
            </div>
        </div>

        <!-- Add Employee Button -->
        <div class="row mb-3">
            <!-- Search Bar -->
            <div class="col">
                <div class="d-flex">
                    <input type="text" class="form-control me-2 w-50" placeholder="Search Here">
                    <button class="btn btn-success" type="button">Search</button>
                </div>
            </div>
            <!-- Add Employee Button -->
            <div class="col text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">Add Employee
                </button>
            </div>
        </div>

        <!-- Employee Modal -->
        <div class="modal fade" id="addEmployeeModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Employee</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="employeeName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="employeeName" placeholder="Enter name">
                            </div>
                            <div class="mb-3">
                                <label for="employeeAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="employeeAddress"
                                       placeholder="Enter address">
                            </div>
                            <div class="mb-3">
                                <label for="employeeSalary" class="form-label">Salary</label>
                                <input type="number" class="form-control" id="employeeSalary"
                                       placeholder="Enter salary">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Employee Table -->
        <table class="table table-bordered">
            <thead class="table-light">
            <tr>
                <th class="col-3">Name</th>
                <th class="col-3">Address</th>
                <th class="col-3">Salary</th>
                <th class="col-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Kavithma Thushal</td>
                <td>Galle</td>
                <td>90000</td>
                <td class="text-center">
                    <button class="btn btn-warning btn-sm w-25">Edit</button>
                    <button class="btn btn-danger btn-sm w-25">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
