<?php

namespace App\Http\Services;

use Exception;
use App\Enums\HttpStatus;
use App\Repositories\Employee\EmployeeRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EmployeeService
{
    protected EmployeeRepositoryInterface $employeeRepositoryInterface;

    public function __construct(EmployeeRepositoryInterface $employeeRepositoryInterface)
    {
        $this->employeeRepositoryInterface = $employeeRepositoryInterface;
    }

    public function store(array $data)
    {
        DB::beginTransaction();
        try {
            $employee = $this->employeeRepositoryInterface->store([
                'name' => $data['name'],
                'address' => $data['address'],
                'salary' => $data['salary'],
            ]);

            DB::commit();
            return $employee;
        } catch (Exception $e) {
            DB::rollBack();
            throw new HttpException(HttpStatus::INTERNAL_SERVER_ERROR, 'Employee store failed: ' . $e->getMessage());
        }
    }
}
