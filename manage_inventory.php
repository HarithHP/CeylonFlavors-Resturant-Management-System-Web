<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "ceylonflavors";

$i_no = "";
$i_foodtype = "";
$i_foodname= "";
$i_price = "";

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
    $posts[0] = $_POST['i_no'];
    $posts[1] = $_POST['i_foodtype'];
    $posts[2] = $_POST['i_foodname'];
    $posts[3] = $_POST['i_price'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM inventory WHERE i_no = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $i_no = $row['i_no'];
                $i_foodtype = $row['i_foodtype'];
                $i_foodname = $row['i_foodname'];
                $i_price = $row['i_price'];
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
    $insert_Query = "INSERT INTO `inventory`( `i_foodtype`, `i_foodname`, `i_price`) VALUES ('$data[1]','$data[2]','$data[3]')";
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
    $delete_Query = "DELETE FROM `inventory` WHERE `i_no` = $data[0]";
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
    $update_Query = "UPDATE `inventory` SET `i_foodtype`='$data[1]',`i_foodname`='$data[2]',`i_price`='$data[3]' WHERE `i_no` = '$data[0]'";
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
    <body><h1>Manage Inventory </h1><br><br>
        <form action="manage_inventory.php" method="post">
            <input type="number" align="center" name="i_no" placeholder="Id" value="<?php echo $i_no;?>"><br><br>
            <input type="text" name="i_foodtype" placeholder="Foodtype" value="<?php echo $i_foodtype;?>"><br><br>
            <input type="text" name="i_foodname" placeholder="Foodname" value="<?php echo $i_foodname;?>"><br><br>
            <input type="text" name="i_price" placeholder="Price" value="<?php echo $i_price;?>"><br><br>
            <div>
                <!-- Input For Add Values To Database-->
                <input  type="submit" name="insert" value="Add">
                
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
