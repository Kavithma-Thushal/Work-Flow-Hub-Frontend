$(document).ready(function () {

    loadAllEmployees();

    $('#storeEmployee').click(function (e) {
        e.preventDefault();

        let employeeData = {
            name: $('#employeeName').val(),
            address: $('#employeeAddress').val(),
            salary: $('#employeeSalary').val(),
        };

        $.ajax({
            url: `employee/store`,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: employeeData,
            success: function (response) {
                successNotification(response.message);
                $('#addEmployeeModal').modal('hide');
                $('#employeeName').val('');
                $('#employeeAddress').val('');
                $('#employeeSalary').val('');
                loadAllEmployees();
            },
            error: function (xhr) {
                errorNotification(error.responseJSON.message);
            }
        });
    });

    $('#updateEmployee').click(function (e) {
        e.preventDefault();

        const employeeId = 1;

        let employeeData = {
            name: $('#employeeName').val(),
            address: $('#employeeAddress').val(),
            salary: $('#employeeSalary').val(),
        };

        $.ajax({
            url: `employee/update/${employeeId}`,
            method: 'PATCH',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: employeeData,
            success: function (response) {
                successNotification(response.message);
                loadAllEmployees();
            },
            error: function (xhr) {
                errorNotification(error.responseJSON.message);
            }
        });
    });

    $('#getAllEmployees').click(function (e) {
        e.preventDefault();
        loadAllEmployees();
    });

    function loadAllEmployees() {
        $.ajax({
            url: `employee/getAll`,
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                let employees = response.data;
                let tableRows = '';
                employees.forEach(function (employee) {
                    tableRows += `
                    <tr>
                        <td>${employee.id}</td>
                        <td>${employee.name}</td>
                        <td>${employee.address}</td>
                        <td>${employee.salary}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm w-25" id="updateEmployee">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm w-25">Delete</button>
                        </td>
                    </tr>
                `;
                });
                $('table tbody').html(tableRows);
            },
            error: function (xhr) {
                errorNotification(error.responseJSON.message);
            }
        });
    }
});
