<?php 
require_once('connection.php');
session_start();

 $query_username = "SELECT * from STUDENT  ";

   $result =  mysqli_query($connection,$query_username);

 $row_username = mysqli_num_rows($result);



 $query_course = "SELECT * from CLASS";
 $result_course = mysqli_query($connection,$query_course);



  

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Site made with Mobirise Website Builder v4.7.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x122.jpg" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> </head>

<body>





  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <div class="menu-logo">
        <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="index.php">
              <img src="assets/images/logo-122x122.jpg" alt="Mobirise" title="" style="height: 3.8rem;"> </a>
          </span>
          <span class="navbar-caption-wrap">
            <a class="navbar-caption text-white display-5" href="index.php">Kungfu Master</a>
          </span>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
           

          <li class="nav-item">
            <span class="nav-link link text-white display-4" >
              <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Students</span>
          </li>
           
        </ul>
        <div class="navbar-buttons mbr-section-btn" style = "float:right;">
          <a class="btn btn-sm btn-white display-4" href="logout.php">
            <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log Out</a>
        </div>
      </div>
    </nav>
  </section>
    <section class="section-table cid-qVmB9nihVz" id="table1-3"></section>
  <div class="py-5">

    <div class="container" style = "margin-top:100px;">
      




  <div class="row">
        <h3> Students</h3>
        <div class="col-md-12">
          <!-- Website Overview -->
          <div class="panel panel-default animated slideInRight">
            <div class="panel-heading main-color-bg">
              
            </div>
            <div class="panel-body">
               
              <br>
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <th>Name</th>
                    <th>STUDENT ID</th>
                    
                    <th>Phone</th>
                    <th>Joined</th>
                   
                     <th>Address</th>
                      <th>Mom's phone</th>
                       <th>Dad's phone</th>
                       <th>Rank</th>
                       <th>Update Rank</th>
                  </tr>

                   <?php 
            
                    while($rows = mysqli_fetch_assoc($result)){

                echo '
                <form method = "POST" action = "changerank.php">
                  <tr>
                    <td>'. $rows['STU_FNAME']." ".$rows['STU_LNAME'].'</td>
                    <td>'.$rows['STU_ID'].'</td>
                    <td>'.$rows['STU_PHONE'].'</td>
                    <td>'.$rows['STU_JOINDATE'].'</td>
                    <td>'.$rows['STU_ADDRESS'].'</td>
                    <td>'. $rows['STU_MOMPHONE'].'</td>
                    <td>'.$rows['STU_DADPHONE'].'</td>
                    <td>'.$rows['STU_RANK'].'</td>

                     
                    <td> <input type = "text" name = "rank"><button class = "btn btn-warning"  name = "email" value = '.$rows['STU_EMAIL'].'>Change Rank </button></td>
                                      </tr>
                                      '; } ?>

                   
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>






<div class="row">
        <h3> Course Registeration</h3>
        <div class="col-md-12">
          <!-- Website Overview -->
          <div class="panel panel-default animated slideInRight">
            <div class="panel-heading main-color-bg">
              
            </div>
            <div class="panel-body">
               
              <br>
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <th>Course Level</th>
                    <th>Course Time</th>
                    
                    <th>Course Day</th>
                    <th>Course Price</th>
                   
                     <th>Coure Number</th>
                     <th>Coure Registration</th>
                       
                  </tr>

                   <?php 
            
                    while($rows = mysqli_fetch_assoc($result_course)){

                echo '
                <form method = "POST" action = "registration.php">
                  <tr>
                    <td>'. $rows['CLASS_LEVEL'].'</td>
                    <td>'.$rows['CLASS_TIME'].'</td>
                    <td>'.$rows['CLASS_DAY'].'</td>
                    <td>'.$rows['CLASS_PRICE'].'</td>
                    <td>'.$rows['CLASS_NUM'].'</td>
                    <td><input type = "text" class = "form-control" name = "student_id" placeholder = "Please enter the student id "> <button type = "submit" class = "btn btn-small btn-warning" name = "course_id" value = '.$rows['CLASS_NUM'].'> Register for students</button></td>
  
                                      </tr>

                                      </form>
                                      '; } ?>

                   
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>





  <div class="row">
        <h3> Payment</h3>
        <div class="col-md-12">
          <!-- Website Overview -->
          <div class="panel panel-default animated slideInRight">
            <div class="panel-heading main-color-bg">
              
            </div>
            <div class="panel-body">

              <form method = "POST" action = "payment.php">

                   <label for = "student_id"> Student ID </label>
                <input type = "text" class = "form-control"  name = "student_id" id = "student_id" placehoder = "student id "/>
              <br />
                <label for = "amount">Amount </label>
                <input type = "text" class = "form-control" name = "amount" id = " amount " placehoder = "payment amount"/>
               <label for = "type"> </label>
                 

                 <select name = "payment_type" class = "form-control" >
  <option value="tuition">Tuition</option>
  <option value="membership">Membership</option>
  <option value="test">Test</option>
  <option value="product">Product</option>
</select>


  <button type = "submit" class = "btn btn-danger"> Pay</button>



              </form>
               
              <br>
               
            </div>

          </div>
        </div>
      </div>




<div class="row">
        <h3> Transction</h3>
        <div class="col-md-12">
          <!-- Website Overview -->
          <div class="panel panel-default animated slideInRight">
            <div class="panel-heading main-color-bg">
              
            </div>
            <div class="panel-body">
               
              <br>
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <th>Student ID </th>
                    <th>Payment Type</th>
                    
                    <th>Payment Time</th>
                    <th>Payment Amount</th>
                    <th>Transction Code</th>
                   
                   
                       
                  </tr>

                   <?php 

                   $query_payment = "SELECT * FROM PAYMENT";
                   $result_payment = mysqli_query($connection,$query_payment);

 

            
                    while($rows = mysqli_fetch_assoc( $result_payment)){

                echo '
                
                  <tr>
                    <td>'. $rows['STU_ID'].'</td>
                    <td>'.$rows['PAYMENT_TYPE'].'</td>
                    <td>'.$rows['PAYMENT_TIME'].'</td>
                    <td>'.$rows['PAYMENT_AMOUNT'].'</td>
                    <td>'.$rows['PAYMENT_ID'].'</td></tr>

                                    
                                      '; } ?>

                   
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>


      












    </div>






  </div>
 <?php include('footer.php') ?>