<?php

namespace App\Http\Controllers;

use App\Classes\ErrorResponse;
use App\Http\Requests\EmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\SuccessResource;
use App\Http\Services\EmployeeService;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EmployeeController extends Controller
{
    private EmployeeService $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function store(EmployeeRequest $request)
    {
        try {
            $data = $this->employeeService->store($request->validated());
            return new SuccessResource(['message' => 'Employee Stored Successfully!', 'data' => new EmployeeResource($data)]);
        } catch (HttpException $e) {
            ErrorResponse::throwException($e);
        }
    }
}
