<?php

$connection = new mysqli("localhost","root","","ajax_crud");
$action = $_POST['action'];
$action();

//Employees Insert
function insert(){
    global $connection;
    $empName = $_POST['emp_name'];
    $empEmail = $_POST['emp_email'];
    $empPhone = $_POST['emp_phone'];
    $empStatus = $_POST['emp_status'];

    $sql = "INSERT INTO `employees`(`emp_name`, `emp_email`, `emp_phone`, `emp_status`) VALUES ('$empName','$empEmail','$empPhone','$empStatus')";
    $result = $connection->query($sql);

    if($result)
    {
        echo "Data Insert Successfully";
        // header("location: index.php");
    }
}

//imployees Show
function show()
{
    global $connection;
    $sql = "SELECT * FROM `employees`";
    $result = $connection->query($sql);
    //using foreach loop for data showing
    $s = 1;
    foreach($result as $employee){ ?>
        <tr>
            <td><?php echo $s++ ;?></td>
            <td><?php echo $employee['emp_name'];?></td>
            <td><?php echo $employee['emp_email'];?></td>
            <td><?php echo $employee['emp_phone'];?></td>
            <td>
                <?php
                    if($employee['emp_status'] == 1){?>
                    <button class="btn btn-sm btn-info" id="activebtn" value="<?php echo $employee['id'];?>"><i class="fa-solid fa-user-check"></i></button>
                    <?php
                    }else{?>
                    <button class="btn btn-sm btn-danger" id="Inactivebtn" value="<?php echo $employee['id'];?>"><i class="fa-solid fa-user-xmark"></i></button>
                <?php
                    }
                ?>
            </td>
            <td>
                <button href="" class="btn btn-primary" id="editBtn" value="<?php echo $employee['id'];?>" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa fa-pen-to-square fa-sm"></i></button>

                <button class="btn btn-danger" id="deleteBtn" value="<?php echo $employee['id'];?>" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
    <?php
    }
}

//delete employees

function delete()
{
   global $connection;
   $id = $_POST['id'];
   $result = $connection->query("DELETE FROM `employees` WHERE id ='$id'");
}
// active to inactive

function activeToInactive()
{
    global $connection;
    $id = $_POST['id'];

    $result = $connection->query("UPDATE `employees` SET `emp_status`='0' WHERE id ='$id'");
}

function InactiveToActive()
{
    global $connection;
    $id = $_POST['id'];

    $result = $connection->query("UPDATE `employees` SET `emp_status`='1' WHERE id ='$id'");
}
?>