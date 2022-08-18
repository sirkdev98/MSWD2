<?php include '../include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
  
//if(isset($_SESSION['myVariable']) && $_SESSION['myVariable'] != null) {
 // $cidd = $_SESSION['myVariable'];
//}


//$cidd = $_SESSION['myVariable'];

 if (isset($_GET["id"])) {
      $cidd = $_GET["id"];

}else{

}?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>BPABO - Customer Enrollment</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
       <!-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>-->
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="a.png" alt="User Image" width="60px">
        <div>
          <p class="app-sidebar__user-name">MENU</p>
          <p class="app-sidebar__user-designation">-</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
       
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
        
            <li><a class="treeview-item active" href="page1.php"><i class="icon fa fa-circle-o"></i> Customer Enrollment</a></li>
                <li><a class="treeview-item" href="expenses.php"><i class="icon fa fa-circle-o"></i> EXPENSES</a></li>
            <li><a class="treeview-item" href="petty.php"><i class="icon fa fa-circle-o"></i>PETTY CASH</a></li>
             <li><a class="treeview-item " href="deposit.php"><i class="icon fa fa-circle-o"></i>DEPOSITS</a></li>
          </ul>
        </li>
      
      </ul>
    </aside>


</div>







<!--SHOWING THE RECORD -->












    <main class="app-content">
      <div class="app-title">
        <div>
          <font color="00CCFF"><h1><i class="fa fa-th-list"></i><b> CUSTOMER</font></h1></b>
          <p>Records below</p>      
        </div>


        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>

        </ul>
      </div>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#xl">+ Enroll Customer</button>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable"   style="font-family:tahoma; font-size:115%">
                  <thead>
                    <tr>
                      <th>Reference ID</th>
                      <th>Client/Business Name</th>
                      <th>TIN No.</th>
                      <th>Type of Tax</th>
                      <th>Status</th>
                      <th>Monthly Retainer's Fee</th>
                      <th>ACTIONS</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $sql = "SELECT * from tbl_customer ORDER BY id ASC;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $name= $row['name'];
                            $tin = $row['tin'];
                            $address = $row['address'];
                            $business = $row['business'];
                            $typeoftax = $row['typeoftax'];
                            $dateofcommencement = $row['dateofcommencement'];
                            $monthlyfee = $row['monthlyfee'];
                            $sched = $row['sched'];
                            $status = $row['status'];
                            $inactive = $row['inactivedate'];
                         

          ?>  
                   
                      <td><?php echo $id?></td>
                      <td><?php echo $name?></td>
                      <td><?php echo $tin?></td>
                      <td><?php echo $typeoftax ?></td>
                      <td><?php echo $status ?></td>
                      <td><?php echo $monthlyfee ?></td>
                   
                    
                   

<td>
<a href="page1monthly.php?id=<?php echo $id?>">
<button type='button' class='btn btn-info btn-sm'><i class="fa fa-list" aria-hidden="true"></i></button>

 <a href="#edit<?php echo $id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'>
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

  <a href="#delete<?php echo $id; ?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><i class="fa fa-trash-o" aria-hidden="true"></i></i>
  </button></a>
</td>
</tr>



               

                 
   <?php  ?>
   
          <!--EDIT EDIT EDIT EDIT EDIT Large modal -->








<!--Delete Modal -->
                    <div id="delete<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Delete</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                        <div class="alert alert-danger">Are you sure you want DELETE record: <?php echo $id; ?> <strong>
                                                <?php echo $item_name; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit<?php echo $id; ?>">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      
          <div class="tile">
            <h3 class="tile-title">EDIT CUSTOMER DETAILS</h3>
            <div class="tile-body">
              <form class="row" method="post" role="form">
                 <div class="row">
                <div class="form-group col-md-6">
               <input type="text" hidden="true" value= "<?php echo $id; ?>" name="edit_id">
                  
                  
                  <div class="form-group row">
                  <label class="control-label col-md-3"><b>Name</b></label>
                  <div class="col-md-6"><input class="form-control" type="text" placeholder="Business/Client Name"  name="name" value= "<?php echo $name; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3"><b>TIN No.</b></label>
                  <div class="col-md-6"> <input class="form-control" type="text" placeholder="TIN No."  name="tin" value= "<?php echo $tin; ?>">
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-3"><b>Address</b></label>
                  <div class="col-md-6">   <input class="form-control" type="text" placeholder="Address"  name="address" value= "<?php echo $address; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3"><b>Business</b></label>
                  <div class="col-md-6">   <input class="form-control" type="text" placeholder="Business"  name="business" value= "<?php echo $business; ?>">
                  </div>
                </div>
               
                
                  
                 <div class="form-group row">
                 <div class="col-md-22"> 



</div></div>
  
<!--end of first ro w   asdasdw-->
        </div>

         <div class="form-group col-md-6">
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Type of Tax</b></label>
                  <div class="col-md-6">    <select class="form-control"  name="typeoftax">
                     <option value= "<?php echo $typeoftax; ?>"><?php echo $typeoftax; ?></option>
                    <option value="% & Withholding">% & Withholding</option>
                    <option value="VAT & Withholding">VAT & Withholding</option>                  
                  </select>
                  </div>
                </div>
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Commencement date</b></label>
                  <div class="col-md-6"> <input class="form-control" type="date" name="commencement"  value= "<?php echo $dateofcommencement; ?>">
                  </div>
                </div>
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Monthly Retainer's Fee</b></label>
                  <div class="col-md-6"> <input class="form-control" type="number" name="monthlyfee" placeholder="Amount here"  value= "<?php echo $monthlyfee; ?>">
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-4"><b>Schedule of Payment</b></label>
                   <div class="col-md-6">    <select class="form-control"  name="sched">
                     <option  value= "<?php echo $sched; ?>"> <?php echo $sched; ?></option>
                    <option value="Quarterly">Quarterly</option>
                    <option value="Monthly">Monthly</option>                  
                  </select>
                  </div>
                </div>
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Status</b></label>
                   <div class="col-md-6">    <select class="form-control"  name="status">
                      <option  value= "<?php echo $status; ?>"> <?php echo $status; ?></option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>                  
                  </select>
                  </div>
                </div>
                          
<!--en of column 2-->

              </div>

            </div>

          </div>

           <div class="modal-footer">
                           <button class="btn btn-info" type="submit" name="edit_item" id="demoNotify"><i class="fa fa-fw fa-lg fa-check-circle"></i>SAVE</button>
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close Modal</button>
                 
    </div>

  </div>

</div>         <!--end MODAL--></div>

</div>  


<?php }

   if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM tbl_customer     WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM tbl_customer WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM tbl_customer WHERE id='$delete_id' ";
                                    echo '<script>window.location.href="page1.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }



if(isset($_POST['edit_item'])){
                        $editid = $_POST['edit_id'];
                        $name = $_POST['name'];
                        $tin = $_POST['tin'];
                        $address = $_POST['address'];
                        $business = $_POST['business'];
                        $typeoftax = $_POST['typeoftax'];
                        $commencement = $_POST['commencement'];
                        $monthlyfee = $_POST['monthlyfee'];
                        $sched = $_POST['sched'];
                        $status = $_POST['status'];
                       



                       
                            $sql = "UPDATE `tbl_customer` SET `name` = '$name', `tin` = '$tin', `address` = '$address', `business` = '$business', `typeoftax` = '$typeoftax', `dateofcommencement` = '$commencement', `monthlyfee` = '$monthlyfee', `sched` = '$sched', `status` = '$status', `inactivedate` = '' WHERE `tbl_customer`.`id` = '$editid'";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="page1.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }



}
?>


<?php if(isset($_POST['add_item'])){
                        $name = $_POST['name'];
                        $tin = $_POST['tin'];
                        $address = $_POST['address'];
                        $business = $_POST['business'];
                        $typeoftax = $_POST['typeoftax'];
                        $commencement = $_POST['commencement'];
                        $monthlyfee = $_POST['monthlyfee'];
                        $sched = $_POST['sched'];
                        $status = $_POST['status'];
                       

              

 $sql = "INSERT INTO `tbl_customer` (`id`, `name`, `tin`, `address`, `business`, `typeoftax`, `dateofcommencement`, `monthlyfee`, `sched`, `status`, `inactivedate`) VALUES (NULL, '$name', '$tin', '$address', '$business', '$typeoftax', '$commencement', '$monthlyfee', '$sched', '$status', '')";



if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='page1.php'</script>";
         
       
}}

?>           

<!-- Large modal -->

</tbody></table>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="xl">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      
          <div class="tile">
            <h3 class="tile-title">Enroll Customer</h3>
            <div class="tile-body">
              <div class="row">
              <form class="row" method="post" role="form">
                <div class="form-group col-md-6">

                 
                  <div class="form-group row">
                  <label class="control-label col-md-3"><b>Name</b></label>
                  <div class="col-md-6"><input class="form-control" type="text" placeholder="Business/Client Name"  name="name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3"><b>TIN No.</b></label>
                  <div class="col-md-6"> <input class="form-control" type="text" placeholder="TIN No."  name="tin">
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-3"><b>Address</b></label>
                  <div class="col-md-6">   <input class="form-control" type="text" placeholder="Address"  name="address">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3"><b>Business</b></label>
                  <div class="col-md-6">   <input class="form-control" type="text" placeholder="Business"  name="business">
                  </div>
                </div>
               
                
                  
                 <div class="form-group row">
                 <div class="col-md-22"> 



</div></div>
  
<!--end of first ro w   asdasdw-->
        </div>

         <div class="form-group col-md-6">
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Type of Tax</b></label>
                  <div class="col-md-6">    <select class="form-control"  name="typeoftax">
                     <option>--CHOOSE HERE--</option>
                    <option value="% & Withholding">% & Withholding</option>
                    <option value="VAT & Withholding">VAT & Withholding</option>                  
                  </select>
                  </div>
                </div>
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Commencement date</b></label>
                  <div class="col-md-6"> <input class="form-control" type="date" name="commencement">
                  </div>
                </div>
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Monthly Retainer's Fee</b></label>
                  <div class="col-md-6"> <input class="form-control" type="number" name="monthlyfee" placeholder="Amount here" required>
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-4"><b>Schedule of Payment</b></label>
                   <div class="col-md-6">    <select class="form-control"  name="sched">
                     <option>--CHOOSE HERE--</option>
                    <option value="Quarterly">Quarterly</option>
                    <option value="Monthly">Monthly</option>                  
                  </select>
                  </div>
                </div>
                  <div class="form-group row">
                  <label class="control-label col-md-4"><b>Status</b></label>
                   <div class="col-md-6">    <select class="form-control"  name="status">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>                  
                  </select>
                  </div>
                </div>
                
                


</div>
          </div>
<!--en of column 2-->


             



             
    </div>  





    <div class="modal-footer">
                           <button class="btn btn-info" type="submit" name="add_item" id="demoNotify"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close Modal</button>
            



             
    </div> 


                 </form>



   



   



   

<!--end MODAL-->









    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#sampleTable').DataTable();</script>
       <script type="text/javascript">$('#sampleTable2').DataTable();</script>
    <!-- Google analytics script-->


    
    
  </body>
</html>