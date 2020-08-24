<?php
   include('session.php');
   include('dbremote_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <style>
        #header {
            background: url("imgs/header.jpeg");
            /* background: url("imgs/header.jpeg") center center / cover no-repeat; */
        }
    </style>

    <title>DataBase View</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="home.php">Hobbies</a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php">HOME</a>
              </li>
              <li class="nav-item">
                    <a href="article.php" class="nav-link">ARTICLE</a>
                </li>
                <li class="nav-item">
                    <a href="dbreview.php" class="nav-link">DB REVIEW </a>
                </li>
                <li class="nav-item">
                    <a href="report.php" class="nav-link">REPORT </a>
         </li>
         </ul>
     </nav>
                
    <div class="row">
            <div class="col-sm-12" style=" text-align: right">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
         
    </div>



    <div class="row">
            <div class="col-sm-12" style=" text-align: center">

            <h1>Data base review</h1>
         <form action="" method="post">

            <h3> show departaments</h3>
            
                <input type="submit" value="Departament" name="depart"  > <br>

            <h3> search employees</h3>

                <input type="number" name="idEmp">
                <input type="submit" value="search" name="emp" />
        </form>

            </div>     
    </div>


    


    
             <!--form action="" method="post">

<h2> show departaments</h2>
 <input type="submit" value="Departament" name="depart" /> <br>

</form-->



  
     <?php


        if(isset($_POST['depart'])){
        $sql = "SELECT dept_no, dept_name FROM departments";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output table header
                echo "<table class='table'><tr><th>Dept No</th><th>Dept Name</th></tr>";    
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["dept_no"]. "</td><td>" . $row["dept_name"] . "</td>" ;    
        }
             echo "</table>";
        } else {
             echo "0 results";
        }

    mysqli_close($conn);

}





if(isset($_POST['emp'])){
    $query = $_POST['idEmp']; 
    
    echo $query;

//    $sql = "SELECT  emp_no, dept_no, from_date, to_date  FROM dept_emp where emp_no LIKE '%".$query."%' ";
$sql = "SELECT  emp_no, dept_no, from_date, to_date  FROM dept_emp where emp_no like $query ";
  
$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output table header
        echo "<table class='table'><tr><th>Emp No</th><th>Dept No</th><th>From date</th><th>dept Emp</th></tr>";    
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["emp_no"]. "</td><td>" . $row["dept_no"]. "</td><td>" . $row["from_date"]. "</td><td>" . $row["to_date"] . "</td>" ;
    }
         echo "</table>";
    } else {
         echo "0 results";
    }

mysqli_close($conn);

}


?>


 
</body>
</html>