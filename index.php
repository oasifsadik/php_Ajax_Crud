<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Crud</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="employee mt-5">
                <h1 class="text-center text-primary display-3 mb-5">Ajax Crud </h1>
                <div class="row">
                    <div class="col-md-4 border shadow rounded">
                        <div class="emp p-5">
                            <div class="msg mb-3">
                                
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" id="emp_name" class="form-control" placeholder="Enter Employee Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" id="emp_email" class="form-control"
                                    placeholder="Enter Employee Email">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" id="emp_phone" class="form-control"
                                    placeholder="Enter Employee Phone">
                            </div>
                            <div class="form-group mb-3">
                                <select class="form-control" id="emp_status">
                                    <option value="">----Select----</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-sm btn-primary w-100" id="add">Add
                                    Employee</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-border shadow">
                            <thead style="background-color: gray; color:white;">
                                <tr>
                                    <th>#SL</th>
                                    <th>Employee Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <!-- table body -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- js -->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/ajax.js"></script>
</body>

</html>