<?php include '../include/controller.php';

  ob_start();


//$cidd = $_SESSION['myVariable'];
if(isset($_SESSION['username'])){
    
       $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];

 



}else{
    header("location:logout.php");
}

   if(time() - $_SESSION['timestamp'] > 3600) { //subtract new timestamp from the old one
    echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['username']);
    
    header("Location:  logout.php"); //redirect to index.php
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
?>




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
    <title>BTO-House Hold Enrollment</title>
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
      <p class="app-sidebar__user-name"><?php echo $userfname ?></p>
          <p class="app-sidebar__user-designation"><?php echo $userrole ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
       
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
        
            <li><a class="treeview-item active" href="page1.php"><i class="icon fa fa-circle-o"></i>Beneficiary Enrollment</a></li>

                <li><a class="treeview-item" href="householdrequests.php"><i class="icon fa fa-circle-o"></i>Transactions</a></li>
        
          </ul>
        </li>
      
      </ul>
    </aside>


</div>







<!--SHOWING THE RECORD -->




    
    <main class="app-content">
      <div class="app-title">
        <div>
          <font color="FFA500"><h1><i class="fa fa-th-list"></i><b>CLIENTS</font></h1></b>
          <p>Records below</p>      
        </div>


        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>

        </ul>
      </div>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#xl">+ Add Client</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">SEARCH CLIENT</button>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable"   style="font-family:tahoma; font-size:115%">
                  <thead>
                    <tr>
                      <th>HH ID</th>
                      <th>Barangay</th>
                      <th>Classification</th>
                      <th>Remarks</th>
                   
                      <th>ACTIONS</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                 
                    $sql = "SELECT * FROM `tbl_people`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id= $row["id"];
                            $hhid = $row['hhid'];
                            $barangay= $row['barangay'];
                            $fname = $row['fname'];
                            $mname  = $row['mname'];
                            $lname = $row['lname'];
                            $xname = $row['xname'];
                            $sector = $row['sector'];
                            
                         ?>



      
                   
                      <td><?php echo $hhid ?></td>
                      <td><?php echo $barangay?></td>
                      <td><?php echo $fname." ".$mname." ".$lname;?></td>
                   
                      <td><?php echo $sector ?></td>
                 
                   
                    
                   

<td>
<a href="household.php?id=<?php echo $hhid?>">
<button type='button' class='btn btn-info btn-sm'><i class="fa fa-list" aria-hidden="true"></i></button>

 <!--EDIT <a href="#edit<?php echo $id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'>
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>-->

  <a href="#delete<?php echo $hhid; ?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><i class="fa fa-trash-o" aria-hidden="true"></i></i>
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
                                        <div class="alert alert-danger">YOU ARE NOT ALLOWED TO DELETE <?php echo $id; ?> <strong>
                                                <?php echo $item_name; ?></strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" disabled name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

<?php 
                  

                
                         ?>



<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit<?php echo $id; ?>">
  <div class="modal-dialog modal-xl">
   
       <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Add Household <?php echo $idget; ?></h3>
            <div class="tile-body"></title>
              <form  method="post" role="form">

              
                <p>  <label class="control-label"><b><font color="skyblue">Household info </font><br></b></label></p>
                  <label class="control-label">House Hold ID</label>
                  <input class="form-control" type="text" name="hhid" disabled placeholder="House Hold ID" value="<?php echo $id; ?>">

                   <label class="control-label">Barangay</label>
                  <input class="form-control" type="text" name="barangay"  placeholder="Barangay" value="<?php echo $barangay ?>">

                   <label class="control-label">Address line 1</label>
                  <input class="form-control" type="text" placeholder="Stree/House no" name="addline1" value="<?php echo $addline1 ?>">

                   <label class="control-label">Household Fully Vaccinated?</label>
                  <select class="form-control" id="vaccinated" name="vaccinated" required>
                       <option value="<?php echo $vaccinated ?>"><?php echo $vaccinated ?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>

                  <label class="control-label">Classification</label>
                  <input class="form-control" type="text" placeholder="Classification" name="classification" value="<?php echo $classification ?>">
                </div>

             <!--column 2-->
          
                 <p>  <label class="control-label"><b><font color="orange">programs selected </font><br></b></label></p>
                  
             <p>  &emsp; &emsp; <input class="form-check-input" type="checkbox" name="program[]" value="RESPONSIBLE PET OWNERSHIP"> RESPONSIBLE PET OWNERSHIP<br></p>
             <p>  &emsp; &emsp; <input class="form-check-input" type="checkbox" name="program[]" value="SOLID WASTE MANAGEMENT PROGRAM"> SOLID WASTE MANAGEMENT PROGRAM<br></p>
             <p>  &emsp; &emsp; <input class="form-check-input" type="checkbox" name="program[]" value="SMOKE FREE ORANI PROGRAM"> SMOKE FREE ORANI PROGRAM<br></p>
             <p>  &emsp; &emsp; <input class="form-check-input" type="checkbox" name="program[]" value="EDUCHILD PARENTING PROGRAM">EDUCHILD PARENTING PROGRAM<br></p>
               
   
                



<!--column 3-->

             
                <p>  <label class="control-label"><b><font color="orange">Responsible Pet </font><br></b></label></p>
                  <label class="control-label">Pet cat or dog</label>
                  <select class="form-control" id="selectpet" name="selectpet" required>
                       <option value="<?php echo $havepet ?>"> <?php echo $havepet ?></option>
                      <option>Yes</option>
                      <option>No</option>
                    </select>

                   <label class="control-label">How Many Dog?</label>
                  <input class="form-control" type="number" name="dogcount"  placeholder="Dog Count" value="<?php echo $dog; ?>">

                   <label class="control-label">How many Cat?</label>
                  <input class="form-control" type="text" placeholder="Stree/House no" name="catcount" placeholder="Cat Count" value="<?php echo $cat; ?>">

                   <label class="control-label">How many vaccinated Cat?</label>
                  <input class="form-control" type="number" placeholder="Vaccinated cat Count" name="vaxcat" value="<?php echo $vaxcat; ?>">

                  <label class="control-label">How many vaccinated Dog?</label> 
                  <input class="form-control" type="number" placeholder="Vaccinated dog Count" name="vaxdog" value="<?php echo $vaxdog; ?>">
           
<!--column 4-->

                
                <p>  <label class="control-label"><b><font color="orange">Smoke Free Orani </font><br></b></label></p>
                  <label class="control-label">Are there any smoker in your house?</label>
                  <select class="form-control" id="selectpet" name="selectpet" required>
                       <option value="<?php echo $smoker; ?>"> <?php echo $smoker; ?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>

                   <label class="control-label">How Many Smokers?</label>
                  <input class="form-control" type="number" name="dogcount"  placeholder="Smoker Count" value="<?php echo $countsmoker; ?>">
        
<!--column 5-->
 <div class="form-group col-md-3">
                <p>  <label class="control-label"><b><font color="orange">Solid Waste Management </font><br></b></label></p>
                  <label class="control-label">Are you segregating your wastes?</label>
                  <select class="form-control" id="selectpet" name="selectpet" required>
                      <option value="<?php echo $segregate; ?>"> <?php echo $segregate; ?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>

                   <label class="control-label">How frequent your gabage is being collected weekly?</label>
                  <input class="form-control" type="number" name="garbagecount"  placeholder="How many times a week" value="<?php echo $segregatecount; ?>">
                  
                </div>

<!--column 6-->
  
                <p>  <label class="control-label"><b><font color="orange">Educhild</font><br></b></label></p>
                 
                  

                   <label class="control-label">How Many are studying elementary?</label>
                  <input class="form-control" type="number" name="elemcount"  placeholder="Elementary count" value="<?php echo $elemcount; ?>">

                   <label class="control-label">How Many are studying High School</label>
                  <input class="form-control" type="text" placeholder="Stree/House no" name="hscount" placeholder="High School Count" value="<?php echo $hscount; ?>">

                   <label class="control-label">How Many are studying College?</label>
                  <input class="form-control" type="number" placeholder="College Count" name="collegecount" value="<?php echo $collegecount; ?>">

                
         
<!--column 4-->


        </Div>
                 
              

    <div class="modal-footer">
                           <button class="btn btn-info" type="submit" name="edit_item" id="demoNotify"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close Modal</button>
            



             
    </div>   </div>
        </div>
</div>

                 </form>


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
 if(isset($_POST['addmember'])){

                       
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $lname = $_POST['lname'];
                        $xname = $_POST['xname'];
                        $barangay = $_POST['barangay'];
                        $gender = $_POST['gender'];
                        $bday = $_POST['bday'];
                        $pob = $_POST['pob'];
                        $civilstat = $_POST['civilstat'];
                        $mnumber = $_POST['mnumber'];
                        $sector = $_POST['sector'];
                       

                      $sql = "SELECT * FROM `tbl_people` WHERE fname = '$fname' and mname='$mname' and lname = '$lname' and xname = '$xname' and bday = '$bday'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                    $row = $result->fetch_assoc();
                           $hhidcheck = $row['hhid'];
                            echo "<script type='text/javascript'>alert(\"Client Recort already exists $hhid\")</script>";
           echo "<script>window.location.href='household.php?id=$hhidcheck'</script>";

}
                    $sql = "SELECT * from tbl_household ORDER BY hhid DESC limit 1";
                    $result = $conn->query($sql);
                    $result->num_rows;
                        // output data of each row
                    $row = $result->fetch_assoc();
                           $getlastid = $row['hhid'];
                          

$autohhid = $getlastid + 1;
                       
 $sqlc = "SELECT * from  tbl_household WHERE hhid = $autohhid";
 $resultc = $conn->query($sqlc);
    if ($resultc->num_rows > 0) {

   echo "<script type='text/javascript'>alert(\"House Hold ID already exists $autohhid\")</script>";
           echo "<script>window.location.href='page1.php'</script>";
              }else  {

 $sql = "INSERT INTO `tbl_household` (`id`, `hhid`, `add_line1`, `barangay`,`encoderid`) VALUES (NULL, '$autohhid', '', 'barangay','$cidd')";


if ($conn->query($sql) === TRUE) {  



 $sql = "INSERT INTO `tbl_people` (`id`, `hhid`, `lname`, `fname`, `mname`, `xname`, `gender`, `bday`, `placeofbirth`, `civilstatus`, `phone`, `sector`, `barangay`) VALUES (NULL, '$autohhid', '$lname', '$fname', '$mname', '$xname', '$gender', '$bday', '$pob', '$civilstat', '$mnumber', '$sector', '$barangay')";


if ($conn->query($sql) === TRUE) {  

  
   echo "<script type='text/javascript'>alert(\"Successfully added record id is : $autohhid \")</script>";
           echo "<script>window.location.href='page1.php'</script>";


}

         
      
}}}
///aaaaaaaaaaaaaaaaaaaaaaa search
if(isset($_POST['searchid'])){
                        $hhid = $_POST['searchidbox'];
                                  
  header('location:page2.php?id='.$hhid);


  // echo "<script type='text/javascript'>alert(\"Searchingscript>";
         //  echo "<script>window.location.href='page1.php?id=$hhid'</script>";
         
       
}
?>           

<!-- Large modal -->

</tbody></table>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form class="row" method="post" role="form">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search Beneficiary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label>Search </label> 
      <input class="form-control" type="text" name="fname" placeholder ="First Name" required>
      <input class="form-control" type="text" name="mname" placeholder ="Middle Name">
      <input class="form-control" type="text" name="lname" placeholder ="Last Name" required>
      <input class="form-control" type="text" name="xname" placeholder ="xname">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-info" type="submit" name="searchid" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Search</button>
      </div>
    </div>
  </div>
</div></form>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="xl">
  <div class="modal-dialog modal-xl">
   
       <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Add a member</h3>
            <div class="tile-body">
                <form method="post" role="form">
              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="lname">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="fname">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Middle Name</label>
                  <input class="form-control" type="x" placeholder="Middle Name" name="mname">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Ext Name</label>
                  <input class="form-control" type="x" placeholder="Extension Name" name="xname">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Barangay</label>
                  <select class="form-control" id="barangay" name="barangay" required>
                  <option disabled selected>Select Here</option>

                  <option value="APOLLO">APOLLO</option>
                  <option value="BALUT">BALUT</option>
                  <option value="BAYAN">BAYAN</option>
                  <option value="BAGONG PARAISO">BAGONG PARAISO</option>
                  <option value="CALERO">CALERO</option>
                  <option value="CENTRO I">CENTRO I</option>
                  <option value="CENTRO II">CENTRO II</option>
                  <option value="DOÑA">DOÑA</option>
                  <option value="KABALUTAN">KABALUTAN</option>
                  <option value="KAPARANGAN">KAPARANGAN</option>
                  <option value="MARIA FE">MARIA FE</option>
                  <option value="MASANTOL">MASANTOL</option>
                  <option value="MULAWIN">MULAWIN</option>
                  <option value="PACAR">PACAR</option>
                  <option value="PAGASA">PAGASA</option>
                  <option value="PALIHAN">PALIHAN</option>
                  <option value="PANTALAN BAGO">PANTALAN BAGO</option>
                  <option value="PANTALAN LUMA">PANTALAN LUMA</option>
                  <option value="PARANG PARANG">PARANG PARANG</option>
                  <option value="PUKSUAN">PUKSUAN</option>
                  <option value="SIBUL">SIBUL</option>
                  <option value="SILAHIS">SILAHIS</option>
                  <option value="TAGUMPAY">TAGUMPAY</option>
                  <option value="TALA">TALA</option>
                  <option value="TALIMUNDOC">TALIMUNDOC</option>
                  <option value="TAPULAO">TAPULAO</option>
                  <option value="TENEJERO">TENEJERO</option>
                  <option value="TUGATOG">TUGATOG</option>
                  <option value="WAWA">WAWA</option>
                  </select>

                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Gender</label>
                  <select class="form-control" id="gender" name="gender" required>
                  <option>-Select here-</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Birthday</label>
                  <input class="form-control" type="date" placeholder="BDAY" name="bday">
                </div>
              </div>

                  <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Place of Birth</label>
                  <input class="form-control" type="text" placeholder="Place of Birth" name="pob">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Civil Status</label>
                  <select class="form-control" id="civilstat" name="civilstat" required>
                  <option>-Select here-</option>
                  <option value="Single">1 - Single</option>
                  <option value="Married">2 - Married</option>
                  <option value="Widowed">3 - Widowed</option>
                  <option value="Divorced/Separated">4 - Divorced/Separated</option>
                  <option value="Common-law/Live-in">5 - Common-law/Live-in</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Contact Number</label>
                  <input class="form-control" type="text"  maxlength="11" placeholder="Mobile Number" name="mnumber">
                </div>
              </div>

              <div class="row">
               <div class="form-group col-md-3">
                  <label class="control-label">Sector</label>
                  <select class="form-control" id="civilstat" name="sector" required>
                  <option>-Select here-</option>
                  <option value="CHILDREN">CHILDREN</option>
                  <option value="FAMILY HEAD">FAMILY HEAD</option>
                  <option value="PWD">PWD</option>
                  <option value="SENIOR">SENIOR</option>
                  <option value="SOLO PARENT">SOLO PARENT</option>
                  <option value="WOMEN">WOMEN</option>
                  <option value="4PS">4PS</option>
                  <option value="YOUTH">YOUTH</option>
                  <option value="ADULT">ADULT</option>

                </select>
                </div>
              
              </div>
             
                  
                </div>
          


             <button class="btn btn-primary" name="addmember" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
               </form>
        
        </div></div></div>

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
       $(document).ready(function() {
                 $('#sampleTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
            });
   </script>


    <!-- Google analytics script-->


    
    
  </body>
</html>