$(document).ready(function() {
    //Add employees
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
                $(".msg").fadeOut(2000);

                $("#emp_name").val("");
                $("#emp_email").val("");
                $("#emp_phone").val("");
                $("#emp_status").val("");
                show();
            }
        });

    });
    //show employees
    show();

    function show() {
        $.ajax({
            type: "POST",
            url: "classes/Process.php",
            data: {
                action: "show"
            },
            success: function(response) {
                $(".tbody").html(response);
            }
        });
    }

    //active to inactive
    $(document).on("click", "#activebtn", function() {
        var id = $(this).val();
        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                id: id,
                action: "activeToInactive"
            },
            success: function(response) {
                show();
            }
        })
    });
});