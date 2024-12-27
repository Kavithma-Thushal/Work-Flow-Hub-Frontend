$(document).ready(function () {
    $('#storeEmployee').click(function (e) {
        e.preventDefault();

        let employeeData = {
            name: $('#employeeName').val(),
            address: $('#employeeAddress').val(),
            salary: $('#employeeSalary').val(),
            _token: '{{ csrf_token() }}'
        };

        $.ajax({
            url: '/employees',
            method: 'POST',
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
});
