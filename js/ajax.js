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
    //delete employee
    $(document).on("click", "#deleteBtn", function() {
        var id = $(this).val();
        $("#yesdelete").val(id);

    });
    $(document).on("click", "#yesdelete", function() {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "classes/Process.php",
            data: {
                id: id,
                action: "delete"
            },
            success: function(response) {
                show()
                $("#deleteModal").modal("hide");
            }
        });
    });

    // edit employee
    $(document).on("click", "#editBtn", function() {
        var id = $(this).val();
        $("#yesUpdate").val(id);
        $.ajax({
            type: "POST",
            url: "classes/Process.php",
            dataType: "JSON",
            data: {
                id: id,
                action: "edit"
            },
            success: function(response) {
                $("#uemp_name").val(response.emp_name)
                $("#uemp_email").val(response.emp_email)
                $("#uemp_phone").val(response.emp_phone)
            }
        });

    });


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
    //Inactive To Active
    $(document).on("click", "#Inactivebtn", function() {
        var id = $(this).val();
        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                id: id,
                action: "InactiveToActive"
            },
            success: function(response) {
                show();
            }
        })
    });
});