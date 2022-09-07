<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "ceylonflavors";

$id = "";
$name = "";
$phone = "";
$email = "";
$address = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['phone'];
    $posts[3] = $_POST['email'];
    $posts[4] = $_POST['address'];

    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM customer WHERE cus_id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['cus_id'];
                $name = $row['cus_name'];
                $phone = $row['cus_phone'];
                $email = $row['cus_email'];
                $address = $row['cus_address'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `customer`( `cus_name`, `cus_phone`, `cus_email`, `cus_address`) VALUES ('$data[1]','$data[2]','$data[3]',
    '$data[4]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `customer` WHERE `cus_id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `customer` SET `cus_name`='$data[1]',`cus_phone`='$data[2]',`cus_email`='$data[3]',`cus_address`='$data[4]' WHERE `cus_id` = '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
        <style type="text/css">
            h1 {
                text-align: center;
                font-size: 16px;
                font-weight: 600;
                text-transform: uppercase;
                display:inline-block;
                margin: 40px 8px 10px 8px; 
                color: #cccccc;
               }
               body {
                    font-family: "Poppins", sans-serif;
                    background-image: url('food_order/images/r.jpg');
                     height: 80vh;
                    }
        </style>
    </head>
    <body><h1>Manage Customer </h1>
        <form action="manage_customer.php" method="post">
            <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
            <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>"><br><br>
            <input type="number" name="phone" placeholder="Phone" value="<?php echo $phone;?>"><br><br>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>"><br><br>
            <input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"><br><br>
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Find">
            </div>
        </form>
    </body>
</html>
