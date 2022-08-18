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
$hhid = $_GET['id'];
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
    <title>BTO-House Hold Enrollment </title>
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
        
            <li><a class="treeview-item" href="page1.php"><i class="icon fa fa-circle-o"></i>House Hold Enrollment</a></li>

                <li><a class="treeview-item active" href="householdrequests.php"><i class="icon fa fa-circle-o"></i>Transactions</a></li>

             
        
          </ul>
        </li>
      
      </ul>
    </aside>


</div>







<!--SHOWING THE RECORD -->




    <main class="app-content">
      <div class="app-title">
        <div>
          <font color="00CCFF"><h1><i class="fa fa-th-list"></i><b>ENCODING MONITORING</font></h1></b>
          <p>Records below</p>      
        </div>



        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>

        </ul>
      </div>




















            </div></div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                       <?php
                        $date = date('Y-m-d');
                        $yesterdaydate =date('Y-m-d',strtotime("-1 days"));

                
$sql = "SELECT today, yesterday,totalencoded,totalofall
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '9' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '9' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '9') totalencoded
CROSS JOIN (SELECT COUNT(`encoderid`) as totalofall FROM tbl_household WHERE `encoderid` != '') totalofall";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $today = $row['today'];
                            $yesterday = $row['yesterday'];
                            $total = $row['totalencoded'];
                             $totalofall = $row['totalofall'];
                             }


$sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '11' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '11' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '11') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayMaryJoy = $row['today'];
                            $yesterdayMaryJoy = $row['yesterday'];
                            $totalMaryJoy = $row['totalencoded'];
                            
                             }
                           

$sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '8' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '8' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '8') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayVerge = $row['today'];
                            $yesterdayVerge = $row['yesterday'];
                            $totalVerge = $row['totalencoded'];
                            
                             }

$sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '7' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '7' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '7') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayEdlin = $row['today'];
                            $yesterdayEdlin = $row['yesterday'];
                            $totalEdlin = $row['totalencoded'];
                            
                             }
$sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '12' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '12' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '12') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayNilda = $row['today'];
                            $yesterdayNilda = $row['yesterday'];
                            $totalNilda = $row['totalencoded'];
                            
                             }

$sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '13' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '13' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '13') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayamen = $row['today'];
                            $yesterdayamen = $row['yesterday'];
                            $totalamen = $row['totalencoded'];
                            
                             }
 $sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '15' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '15' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '15') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayroma = $row['today'];
                            $yesterdayroma = $row['yesterday'];
                            $totalroma = $row['totalencoded'];
                            
                             }


 $sql = "SELECT today, yesterday,totalencoded
FROM (SELECT COUNT(`encoderid`) as today FROM tbl_household WHERE `encoderid` = '14' AND `encodedate` = '$date') today
CROSS JOIN (SELECT COUNT(`encoderid`) as yesterday FROM tbl_household WHERE `encoderid` = '14' AND `encodedate` = '$yesterdaydate') yesterday
CROSS JOIN (SELECT COUNT(`encoderid`) as totalencoded FROM tbl_household WHERE `encoderid` = '14') totalencoded";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $todayshid = $row['today'];
                            $yesterdayshid  = $row['yesterday'];
                            $totalshid  = $row['totalencoded'];
                            
                             }


?>
               <h5>Total Encoded :<font color="Sky-Blue"><?php echo $totalofall; ?></font></h5>
                      <th>Encoder</th>
                      <th>Encoded Today</th>
                      <th>Encoded Yesterday</th>
                      <th>Total Encoded</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Alyssa </td>
                      <td><?php echo $today; ?></td>
                      <td><?php echo $yesterday; ?></td>
                      <td><?php echo $total; ?></td>
                      
                    </tr>
                     <tr>
                      <td>Mary Joy </td>
                      <td><?php echo $todayMaryJoy; ?></td>
                      <td><?php echo $yesterdayMaryJoy; ?></td>
                      <td><?php echo $totalMaryJoy; ?></td>
                      
                    </tr>
                     <tr>
                      <td>Verge </td>
                      <td><?php echo $todayVerge; ?></td>
                      <td><?php echo $yesterdayVerge; ?></td>
                      <td><?php echo $totalVerge; ?></td>
                      
                    </tr>
                     <tr>
                      <td>Edlin </td>
                      <td><?php echo $todayEdlin; ?></td>
                      <td><?php echo $yesterdayEdlin; ?></td>
                      <td><?php echo $totalEdlin; ?></td>
                      
                    </tr>
                    <tr>
                      <td>Nilda </td>
                      <td><?php echo $todayNilda; ?></td>
                      <td><?php echo $yesterdayNilda; ?></td>
                      <td><?php echo $totalNilda; ?></td>
                      
                    </tr>
                   
                    <tr>
                      <td>Charmaine </td>
                      <td><?php echo $todayamen; ?></td>
                      <td><?php echo $yesterdayamen; ?></td>
                      <td><?php echo $totalamen; ?></td>
                      
                    </tr>
                     <tr>
                      <td>Jamaica </td>
                      <td><?php echo $todayroma; ?></td>
                      <td><?php echo $yesterdayroma; ?></td>
                      <td><?php echo $totalroma; ?></td>
                      
                    </tr>
                    <tr>
                      <td>Rashid </td>
                      <td><?php echo $todayshid; ?></td>
                      <td><?php echo $yesterdayshid; ?></td>
                      <td><?php echo $totalshid; ?></td>
                      
                    </tr>
                    
                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form class="row" method="post" role="form">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search HouseHold </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label>Input HouseHold ID: </label> <input type="text" name="searchidbox" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-info" type="submit" name="searchid" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Search</button>
      </div>
    </div>
  </div>
</div></form>

</div>

      
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="add">
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
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Relationship w/ the HH head </label>
                  
                  <select class="form-control" id="reltohhhead" name="reltohhhead" required>
                  <option>-Select here-</option>

                  <option value="Head">1 - Head</option>
                  <option value="Spouse">2 - Spouse</option>
                  <option value="Son/Daughter">3 - Son/Daughter</option>
                  <option value="Son-in-law/Daughter-in-law">4 - Son-in-law/Daughter-in-law</option>
                  <option value="Grandson/Granddaughter">5 - Grandson/Granddaughter</option>
                  <option value="Grandfather/Grandmother">6 - GrandFather/GrandMother</option>
                  <option value="Father/Mother">7 - Father/Mother</option>
                  <option value="Uncle/Auntie">8 - Uncle/Auntie</option>
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
                  <input class="form-control" type="date" placeholder="Middle Name" name="bday">
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
                  <option value="Male">1 - Single</option>
                  <option value="Female">2 - Married</option>
                  <option value="Male">3 - Widowed</option>
                  <option value="Male">4 - Divorced/Separated</option>
                  <option value="Female">5 - Common-law/Live-in</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Contact Number</label>
                  <input class="form-control" type="text"  maxlength="11" placeholder="Mobile Number" name="mnumber">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Occupation</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="occupation">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Monthly Salary</label>
                  <input class="form-control" type="text" placeholder="Monthly salary" name="salary">
                </div>
              
              </div>
               <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label"><b><font color="orange">Health Condition </font></b></label><br>
  &ensp;&ensp; &ensp;&ensp;  <input class="form-check-input" type="checkbox" name="healthc[]" value="Diabetes"> 1 - Diabetes<br>
  &ensp;&ensp; &ensp;&ensp; <input class="form-check-input" type="checkbox" name="healthc[]" value="Hypertension">2 - Hypertension <br>
  &ensp;&ensp;  &ensp;&ensp; <input class="form-check-input" type="checkbox" name="healthc[]" value="Chronic Kidney Disease"> 3 - Chronic Kidney Disease <br>
  &ensp;&ensp; &ensp;&ensp; <input class="form-check-input" type="checkbox" name="healthc[]" value="Cancer"> 4 - Cancer<br>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Beneficiary of Program</label>
                  
                  <select class="form-control" id="beneof" name="beneof" required>
                  <option>-Select here-</option>
                  <option value="Tulong Galing">1 - Tulong Galing</option>
                  <option value="Bigay Pag-asa">2 - Bigay Pag-asa</option>
                  <option value="BHW">3 - BHW</option>
                  <option value="PWD">4 - PWD</option>
                  <option value="Tanod">5 - Tanod</option>
                  <option value="Senior Citizen">6 – Senior Citizen</option>
                </select>
                </div>

              </div>
               <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Vaccnated ?</label>
                   <select class="form-control" id="vaccinated" name="vaccinated" required>
                  <option>-Select here-</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">If yes, Vaccine Name</label>
                   <select class="form-control" id="vaccine" name="vaccine" required>
                  <option>-Select here-</option>
                  <option value="ASTRAZENECA">ASTRAZENECA</option>
                  <option value="JANSSEN">JANSSEN</option>
                  <option value="MODERNA">MODERNA</option>
                  <option value="PFIZER">PFIZER</option>
                  <option value="SINOPHARM">SINOPHARM</option>
                  <option value="SINOVAC">SINOVAC</option>
                  <option value="SPUTNIK LITE">SPUTNIK LITE</option>
                  <option value="SPUTNIK V">SPUTNIK V</option>

                </select>
                </div>   
              </div>
                <div class="row">
                 <div class="form-group col-md-3">
                  <label class="control-label">Role</label>
                 <select class="form-control" id="role" name="role" required>
                  <option></option>
                  <?php if ($noheadrecord == "norecord") {
                    echo  "
                  <option value='Head'>HEAD</option>
                  <option value='Member'>Household Member</option>
                  <option value='Secondary Head'>Secondary Head</option>";
                  }else {echo  "
                  
                  <option value='Member'>Household Member</option>
                  <option value='Secondary Head'>Secondary Head</option>";

                  }
                  ?>  
                </select>
                  
                </div>
          

            </div>

             <button class="btn btn-primary" name="addmember" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
               </form>
        
        </div></div></div>

<?php  
   $hhid = $_GET['id'];

   ?>
</div></div></div></div>
<div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form class="row" method="post" role="form">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search HouseHold</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                            <input type="hidden" name="verifyid" value="<?php echo $hhid; ?>">
                           <div class="alert alert-primary">Are you sure this houshold  is <?php echo $hhid; ?> verified?</div>
                          <div class="modal-footer">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" name="verifybtn" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Verify</button>
      </div>
    </div>
  </div>
</div></form></div></div>




   



   

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