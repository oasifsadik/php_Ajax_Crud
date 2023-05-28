$(document).ready(function() {
    $("#add").click(function() {
        var name = $("#emp_name").val();
        var email = $("#emp_email").val();
        var phone = $("#emp_phone").val();
        var status = $("#emp_status").val();


        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                emp_name: name,
                emp_email: email,
                emp_phone: phone,
                emp_status: status,
                action: "insert"
            },
            success: function(response) {
                $('.msg').html(`
                <div class="alert alert-success" role="alert">
                    ${response}
                 </div>
                `);
            }
        });
    });
});