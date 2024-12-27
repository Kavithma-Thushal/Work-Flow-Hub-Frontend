$(document).ready(function () {

    $('#storeEmployee').click(function (e) {
        e.preventDefault();

        let employeeData = {
            name: $('#employeeName').val(),
            address: $('#employeeAddress').val(),
            salary: $('#employeeSalary').val(),
        };

        $.ajax({
            url: 'employee/store',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: employeeData,
            success: function (response) {
                alert('Employee stored successfully!');
                $('#addEmployeeModal').modal('hide');
            },
            error: function (xhr) {
                alert('Error: ' + xhr.responseText);
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
                alert('Employee updated successfully!');
                $('#addEmployeeModal').modal('hide');
            },
            error: function (xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});
