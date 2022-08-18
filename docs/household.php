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

                <li><a class="treeview-item" href="householdrequests.php"><i class="icon fa fa-circle-o"></i>Transactions</a></li>

                <li><a class="treeview-item active" href="#"><i class="icon fa fa-circle-o"></i>Household : <?php echo $hhid;?></a></li>
        
          </ul>
        </li>
      
      </ul>
    </aside>


</div>







<!--SHOWING THE RECORD -->




    <main class="app-content">
      <div class="app-title">
        <div>
          <font color="00CCFF"><h1><i class="fa fa-th-list"></i><b> HOUSE HOLD #<?php echo $hhid ?> PREVIEW</font></h1></b>
          <p>Records below</p>      
        </div>



        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>

        </ul>
      </div>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add">+ Add Member </button>
 &emsp;
 <?php



  $sql2 = "SELECT * from tbl_household WHERE hhid  = $hhid;";
                     $result = $conn->query($sql2) or die($conn->error);
                    
                        // output data of each row
                        $row = $result->fetch_assoc();

                            
                            $verified = $row['verified'];
 if ($verified =="Yes") {
echo "<div title='This household is checked and verified' style='font-size: 24px;'><i class='fa fa-check-square' aria-hidden='true' style='color:green'></i></div>";
 }else{
 echo "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#verify'>✓ Verify Houshold </button>";
}
?>


<?php 
                            
                            $hlname= "";
                            $hfname= "";
                            $hmname= "";
                            $hreltohhhead= "";
                            $hgender = "";"";
                            $hbday = "";
                            $hcivilstatus = "";
                            $hplaceofbirth = "";
                            $hmnumber = "";
                            $hoccupation  = "";
                            $hsalary = "";
                            $hhealth = "";
                            $hbeneof = "";
                            $hvaccinated= "";
                            $hvaccine= "";
                            $hrole= "";
                            $hstatus="";
                            $hremarks= "";
                            $htag= "";

                  
                    $sql = "SELECT * from tbl_people WHERE role = 'head' AND hhid =$hhid  ORDER BY hhid ASC limit 30";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $hid = $row['id'];
                            $hlname= $row['lname'];
                            $hfname= $row['fname'];
                            $hmname= $row['mname'];
                            $hreltohhhead= $row['relationship'];
                            $hgender = $row['gender'];
                            $hbday = $row['bday'];
                            $hcivilstatus = $row['civilstatus'];
                            $hplaceofbirth = $row['placeofbirth'];
                            $hmnumber = $row['phone'];
                            $hoccupation  = $row['work'];
                            $hsalary = $row['salary'];
                            $hhealthc = $row['health'];
                            $hbeneof = $row['sector'];
                            $hvaccinated= $row['vaccinated'];
                            $hvaccine= $row['vaccine'];
                            $hrole= $row['role'];
                            $hstatus= $row['status'];
                            $hremarks= $row['remarks'];
                            $htag= $row['tag'];
                            $hasbiz= $row['sme'];
                            $wantbiz= $row['wantsme'];
                            $lineofbiz= $row['lineofbiz'];
                            $skillforz= $row['skillforz'];

}




} else{
 $noheadrecord = "norecord";}
                  ?>
        <!--EDIT EDIT HEAD -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edithead">
  <div class="modal-dialog modal-xl">
         <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Edit House Hold Head <?php echo $hid; ?> </h3>
            <div class="tile-body">
                <form method="post" role="form">
                  <input class="form-control" type="text" placeholder="Last Name" name="editid" hidden value="<?php echo $hid; ?>">
<!--SME-->
                  <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Has business?</label>
                  <select class="form-control" id="hasbiz" name="hasbiz" required>
                  <option value="<?php echo $hreltohhhead; ?>"><?php echo $hasbiz; ?>
                    
                  </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option></select>
                  
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Want to have biz?</label>
                  <select class="form-control" id="hasbiz" name="wantbiz" required>
                  <option value="<?php echo $hreltohhhead; ?>"><?php echo $wantbiz; ?>
                    
                  </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option></select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Line of Business</label>
                  <input class="form-control" type="x" placeholder="Line of Biz" name="lineofbiz" value="<?php echo $lineofbiz; ?>">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Skills to use</label>
                  <input class="form-control" type="x" placeholder="Skills to use" name="skillforz" value="<?php echo $skillforz; ?>">
                </div>
              </div>

<!--SME-->

















              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="lname" value="<?php echo $hlname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="fname" value="<?php echo $hfname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Middle Name</label>
                  <input class="form-control" type="x" placeholder="Middle Name" name="mname" value="<?php echo $hmname; ?>">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Relationship w/ the HH head </label>
                  
                  <select class="form-control" id="reltohhhead" name="reltohhhead" required>
                  <option value="<?php echo $hreltohhhead; ?>"><?php echo $hreltohhhead; ?></option>
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
                  <option value="<?php echo $hgender; ?>"><?php echo $hgender; ?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Birthday</label>
                  <input class="form-control" type="date" placeholder="Middle Name" name="bday"  value="<?php echo $hbday; ?>">
                </div>
              </div>

                  <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Place of Birth</label>
                  <input class="form-control" type="text" placeholder="Place of Birth" name="pob"  value="<?php echo $hplaceofbirth; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Civil Status</label>
                  <select class="form-control" id="civilstat" name="civilstat" required>
                  <option  value="<?php echo $hcivilstatus ; ?>"><?php echo $hcivilstatus ; ?></option>
                  <option value="Single">1 - Single</option>
                  <option value="Married">2 - Married</option>
                  <option value="Widowed">3 - Widowed</option>
                  <option value="Divorced/Separated">4 - Divorced/Separated</option>
                  <option value="Common-law/Live-in">5 - Common-law/Live-in</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Contact Number</label>
                  <input class="form-control" type="text"  maxlength="11" placeholder="Mobile Number" name="mnumber" value="<?php echo $hmnumber; ?>">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Occupation</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="occupation" value="<?php echo $hoccupation; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Monthly Salary</label>
                  <input class="form-control" type="number" placeholder="Monthly salary" name="salary" value="<?php echo $hsalary; ?>">
                </div>
              
              </div>
               <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label"><b><font color="orange">Health Condition </font></b></label><br>
  &ensp;&ensp; &ensp;&ensp; <input class="form-check-input" type="checkbox" name="healthc[]" value="Diabetes"> 1 - Diabetes<br>
  &ensp;&ensp; &ensp;&ensp; <input class="form-check-input" type="checkbox" name="healthc[]" value="Hypertension">2 - Hypertension <br>
  &ensp;&ensp;  &ensp;&ensp;<input class="form-check-input" type="checkbox" name="healthc[]" value="Chronic Kidney Disease"> 3 - Chronic Kidney Disease <br>
  &ensp;&ensp; &ensp;&ensp; <input class="form-check-input" type="checkbox" name="healthc[]" value="Cancer"> 4 - Cancer<br>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Beneficiary of Program</label>
                  
                  <select class="form-control" id="beneof" name="beneof">
                  <option value="<?php echo $hbeneof; ?>"><?php echo $hbeneof; ?></option>
                  <option value="NONE"></option>
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
                  <label class="control-label">Vaccinated ?</label>
                   <select class="form-control" id="vaccinated" name="vaccinated" required>
                  <option value="<?php echo $hvaccinated; ?>"><?php echo $hvaccinated; ?></option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">If yes, Vaccine Name</label>
                   <select class="form-control" id="vaccine" name="vaccine" required>
                  <option value="<?php echo $hvaccine; ?>"><?php echo $hvaccine; ?></option>
                  <option value="not vaccinated">not vaccinated</option>
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
                 
                  <input class="form-control" type="text" readonly placeholder="Monthly salary" name="role" value="<?php echo $hrole; ?>">
                  
                </div>
            

            </div>

             <button class="btn btn-primary" name="edithead" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
               </form>
        
        </div></div></div>

</div>  </div>





<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="assistancehead">
  <div class="modal-dialog modal-xl">
         <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Add Assistance </h3>
            <div class="tile-body">
                <form method="post" role="form">
                  <input class="form-control" type="text" placeholder="Last Name" name="editid" hidden value="<?php echo $hid; ?>">
                <div class="row">
                  <div class="form-group col-md-3">
                  <label class="control-label">Request Status</label>
                  <input class="form-control" type="text" readonly placeholder="Status.........." name="lname" value="">
                </div>   </div>
              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="lname" value="<?php echo $hlname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="fname" value="<?php echo $hfname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Middle Name</label>
                  <input class="form-control" type="x" placeholder="Middle Name" name="mname" value="<?php echo $hmname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Date</label>
                  <input class="form-control" type="date" placeholder="Date" name="date" required>
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Request Service</label>
                  
 <select class="form-control" id="reqservice" name="reqservice" required>
 <option value=""></option>
 <option value="Hospital Bill">Hospital Bill</option>
  <option value="Medicines">Medicines</option>
  <option value="Laboratory">Laboratory</option>
  <option value="Hemodialysis">Hemodialysis</option>
  <option value="2D Echo">2D Echo</option>
  <option value="Animal Bite">Animal Biten</option>
  <option value="Burial">Burial</option>
  <option value="Funeral">Funeral</option>
  <option value="CT Scan">CT Scan</option>
  <option value="MRI">MRI</option>
  <option value="Chemotherapy">Chemotherapy</option>
  <option value="X-Ray">X-Ray</option>
  <option value="Ultra Sound">Ultra Sound</option>

  <option value="LL-Funeral">Libreng Libing-Funeral</option>
  <option value="LL-Memorial">Libreng Libing-Memorial</option>
  <option value="LL-Funeral &Memorial">Libreng Libing-Funeral &Memorial</option>
  <option value="Fire Assistance">Fire Assistance</option>
  <option value="Special Case">Special Case</option>
  
                </select>

                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">MSWD Amount</label>
                  <input class="form-control" type="number" placeholder="Amount" name="reqamount">
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Service Provider</label>
                  
 <select class="form-control" id="reqservice" name="servicepro" required>
 <option value=""></option>
 <option value="TGP">TGP</option>
  <option value="De Guzman">De Guzman</option>
  <option value="Punzalan">Punzalan</option>
  <option value="Tongol">Tongol</option>
  <option value="ODH">ODH</option>
  <option value="CDBDCC">CLINICA DE BATAAN DIAGNOSTIC CENTER CORP</option>
  <option value="SPECTRO">SPECTRO DIAGNOSTIC LABORATORY</option>
  <option value="BATOL-CANLAS">BATOL-CANLAS DIAGNOSTIC CENTER</option>
  <option value="BDHMC">Bataan Doctors</option>
  <option value="BGH">BGH</option>
  <option value="ICMC">ICMC</option>
  <option value="ST. Joseph">ST. Joseph</option>
  <option value="OMP">Orani Memorial Park</option>
  <option value="OTHERS">OTHERS</option>
  
                </select>

                </div>
<div class="form-group col-md-3">
<label class="control-label">Type</label>
                  
 <select class="form-control" id="type" name="type" required>
<option value=""></option>
 <option value="GL">GL</option>
  <option value="Cash">CASH</option>
  <option value="CO Mayor">CO Mayor</option>
  
                </select>

                </div>
                
              </div>

                  <div class="row">
                 <div class="form-group col-md-3">
                  <label class="control-label">Category</label>
                  <select class="form-control" id="category" name="category" required>
 <option value=""></option>
 <option value="Children">Children</option>
  <option value="Family Head">Family Head</option>
  <option value="PWD">PWD</option>
  <option value="Senior">Senior</option>
  <option value="Solo Parent">Solo Parent</option>
  <option value="Women">Women</option>
  <option value="4PS">4PS</option>
  <option value="Youth">Youth</option>
  <option value="Adult">Adult</option>
                </select>
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Burial/Illness</label>
                  <select class="form-control" id = "ddburial" onchange = "ShowHideDiv()" name="burialorillness" required>
                  
                  <option value="Burial">Burial</option>
                  <option value="Illness">Illness</option>  
                </select>
                </div>


 <script type="text/javascript">
    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddburial");
        var dvPassport = document.getElementById("dvillness");
        dvPassport.style.display = ddlPassport.value == "Illness" ? "block" : "none";
    }
</script>        
                  <div class="form-group col-md-3" id="dvillness" style="display: none">
                  <label class="control-label">Illness</label>
                   <input class="form-control" type="text" id="txtPassportNumber" placeholder="ILNESS HERE" name="typeofillness" />
                </div>
              </div>

             
            

            </div>

             <button class="btn btn-primary" name="add_assistance_head" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>SAVE</button>
           
          
               </form>
        
        </div></div></div></div>

</div>  













<div class="tile">
  <h4>Household Head Details:</h4>

 <p>Name :<font color="blue" size="+1"><?php echo $hfname." ".$hmname." ".$hlname;?></font> &emsp; 
Bday : <font color="blue" size="+1"><?php echo $hbday ?> </font></p>
<p> Contact # : <font color="blue" size="+1"><?php echo $hmnumber ?> </font>  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp; 
Sector : <font color="blue" size="+1"><?php echo $hbeneof;?> </font></p>

<a href="#edithead" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></button></a>
<a href="#assistancehead" data-toggle="modal"><button type='button' class='btn btn-info btn-sm'><i class="fa fa-plus" aria-hidden="true"> Add Assistance</i></button></a>


 
    <div class="tile-body">
</div>











            </div></div>
 <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h1>House Hold Requests</h1>
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Client ID</th>
                      <th>Name</th>
                      <th>Request service</th>
                      <th>Type of Service</th>
                      <th>Service Prodiver</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $hhid = $_GET['id'];
                    $sql = "SELECT * from assistance  WHERE hhid =$hhid  ORDER BY hhid ASC limit 30";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $lname = $row['lname'];
                            $fname= $row['fname'];
                            $mname= $row['mname'];
                            $cdate= $row['cdate'];
                            $relationship = $row['relationship'];
                            $barangay= $row['Barangay'];
                            $reqservice= $row['reqservice'];
                            $reqamount= $row['reqamount'];
                            $appserv= $row['appservice'];
                            $appamount= $row['appamount'];
                            $tos= $row['tos'];
                            $servicepro = $row['servicepro'];
                            $type = $row['type'];
                            $status= $row['status'];
                            $notes= $row['notes'];
                            $category = $row['category'];
                           $fullname = $fname." ".$mname." ".$lname;
                           ?>

                    <tr>
                      <td><?php echo $id; ?></td>
                       <td><?php echo $fullname;  ?></td>
                       <td><?php echo $reqservice;   ?></td>
                       <td><?php echo $tos; ?></td>
                        <td><?php echo $servicepro; ?></td>

                         <td> <?php echo $status; ?></td>
                         <td><!--td start of actions-->

 <a href="#assistanceedit<?php echo $id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'>
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i><i class="fa fa-print" aria-hidden="true"></i></button></a>                           
<a href='#deleteassistance<?php echo $id; ?>' data-toggle='modal'><button type='button' class='btn btn-danger btn-sm' dis><i class='fa fa-trash-o' aria-hidden='true'></i></i>
  </button></a>




                         </td>
                    




<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="assistanceedit<?php echo $id; ?>">
  <div class="modal-dialog modal-xl">
         <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Edit/Print Assistance <?php echo $id ?> </h3>
            <div class="tile-body">
                <form method="post" role="form">
                  <input class="form-control" type="text" placeholder="Last Name" name="editid" hidden value="<?php echo $id; ?>">
                <div class="row">
                  <div class="form-group col-md-3">
                  <label class="control-label">Request Status</label>
                  <input class="form-control" type="text" readonly placeholder="Last Name" name="lname" value="<?php echo $status  ; ?>">
                </div>   </div>
              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Middle Name</label>
                  <input class="form-control" type="x" placeholder="Middle Name" name="mname" value="<?php echo $mname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Date</label>
                  <input class="form-control" type="date" placeholder="Date" name="editdate" value="<?php echo $cdate; ?>">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Request Service</label>
                  
 <select class="form-control" id="reqservice" name="reqservice" required>
 <option value="<?php echo $reqservice; ?>"><?php echo $reqservice; ?></option>
 <option value="Hospital Bill">Hospital Bill</option>
  <option value="Medicines">Medicines</option>
  <option value="Laboratory">Laboratory</option>
  <option value="Hemodialysis">Hemodialysis</option>
  <option value="2D Echo">2D Echo</option>
  <option value="Animal Bite">Animal Biten</option>
  <option value="Burial">Burial</option>
  <option value="Funeral">Funeral</option>
  <option value="CT Scan">CT Scan</option>
  <option value="MRI">MRI</option>
  <option value="Chemotherapy">Chemotherapy</option>
  <option value="X-Ray">X-Ray</option>
  <option value="Ultra Sound">Ultra Sound</option>

  <option value="LL-Funeral">Libreng Libing-Funeral</option>
  <option value="LL-Memorial">Libreng Libing-Memorial</option>
  <option value="LL-Funeral &Memorial">Libreng Libing-Funeral &Memorial</option>
  <option value="Fire Assistance">Fire Assistance</option>
  <option value="Special Case">Special Case</option>
  
                </select>

                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">MSWD Amount</label>
                  <input class="form-control" type="number" placeholder="Amount" name="reqamount" value="<?php echo $reqamount; ?>" >
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Service Provider</label>
                  
 <select class="form-control" id="reqservice" name="servicepro" required>
 <option value="<?php echo $servicepro; ?>"><?php echo $servicepro; ?></option>
 <option value="TGP">TGP</option>
  <option value="De Guzman">De Guzman</option>
  <option value="Punzalan">Punzalan</option>
  <option value="Tongol">Tongol</option>
  <option value="ODH">ODH</option>
  <option value="Padilla">Padilla</option>
  <option value="BDHMC">Bataan Doctors</option>
  <option value="BGH">BGH</option>
  <option value="ICMC">ICMC</option>
  <option value="ST. Joseph">ST. Joseph</option>
  <option value="OMP">Orani Memorial Park</option>
  <option value="OTHERS">OTHERS</option>
  
                </select>

                </div>
<div class="form-group col-md-3">
<label class="control-label">Type</label>
                  
 <select class="form-control" id="type" name="type" required>
 <option value="<?php echo $tos; ?>"><?php echo $tos; ?></option>
 <option value="GL">GL</option>
  <option value="Cash">CASH</option>
  <option value="CO Mayor">CO Mayor</option>
  
                </select>

                </div>
                
              </div>

                  <div class="row">
                 <div class="form-group col-md-3">
                  <label class="control-label">Category</label>
                  <select class="form-control" id="category" name="category" required>
 <option value="<?php echo $category  ; ?>"><?php echo $category; ?></option>
 <option value="Children">Children</option>
  <option value="Family Head">Family Head</option>
  <option value="PWD">PWD</option>
  <option value="Senior">Senior</option>
  <option value="Solo Parent">Solo Parent</option>
  <option value="Women">Women</option>
  <option value="4PS">4PS</option>
  <option value="Youth">Youth</option>
  <option value="Adult">Adult</option>
                </select>
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Burial/Illness</label>
                  <select class="form-control" id="burialorillness" name="burialorillness" required>
                  <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                  <option value="Burial">Burial</option>
                  <option value="Illness">Illness</option>  
                </select>
                </div>
              </div>

             
            

            </div>

<?php if ($status =="pending" ) {
               echo "
 <button class='btn btn-primary' name='edit_assistance' type='submit'><i class='fa fa-fw fa-lg fa-check-circle'></i>SAVE</button>";

             
           } if($status !="pending" ) {
               echo "


               <a href='pdftest.php?id=$id'>
<button type='button' class='btn btn-success'><i class='fa fa-print fa-lg'  aria-hidden='true'> Print PDF</i></button></a>";
             }  ?>
          
               </form>
        
        </div></div></div></div>

</div>  






  <div id="deleteassistance<?php echo $id; ?>" class="modal fade" role="dialog">
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


                                        <div class="alert alert-danger">Are you sure you want DELETE assistance record: <?php echo $id; ?> <strong>
                                                <?php echo $item_name; ?>?</strong> </div>
                                          <label class="control-label">Reason of deletion</label>
                                         <input class="form-control" type="text" name="reason" value="" required>       
                                        <div class="modal-footer">
                                            <?php
                                              if ($status !='approved') {
                                              echo " <button type='submit' name='deleterequest' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> YES</button>";
                                                
                                              }

                                            ?>


                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>







                  <?php }}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</tr>

























      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
<h1>Household members</h1>
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable"   style="font-family:tahoma; font-size:115%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>Sector</th>

                   
                      <th>ACTIONS</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $hhid = $_GET['id'];
                    $sql = "SELECT * from tbl_people WHERE hhid =$hhid AND role = 'member' OR role ='Secondary Head'  AND hhid =$hhid  ORDER BY hhid ASC limit 30";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $lname= $row['lname'];
                            $fname= $row['fname'];
                            $mname= $row['mname'];
                            $reltohhhead= $row['relationship'];
                            $gender = $row['gender'];
                            $bday = $row['bday'];
                            $civilstatus = $row['civilstatus'];
                            $placeofbirth = $row['placeofbirth'];
                            $mnumber = $row['phone'];
                            $occupation  = $row['work'];
                            $salary = $row['salary'];
                            $health = $row['health'];
                            $beneof = $row['sector'];
                            $vaccinated= $row['vaccinated'];
                            $vaccine= $row['vaccine'];
                            $role= $row['role'];
                            $status= $row['status'];
                            $remarks= $row['remarks'];
                            $tag= $row['tag'];







                         ?>

      
                   
                      <td><?php echo $id ?></td>
                      <td><?php echo $fname ?></td>
                      <td><?php echo $mname ?></td>
                      <td><?php echo $lname ?></td>
                      <td><?php echo $beneof ?></td>
                 
                   
                    
                   

<td>
<!-- <a href="household.php?id=<?php echo $id?>"> -->
<button type='button' class='btn btn-info btn-sm' disabled><i class="fa fa-list" aria-hidden="true"></i></button>

 <a href="#edit<?php echo $id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'>
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
<?php if ($userrole =='admin') {
 echo "<a href='#delete$id' data-toggle='modal'><button type='button' class='btn btn-danger btn-sm' dis><i class='fa fa-trash-o' aria-hidden='true'></i></i>
  </button></a>";
}else{
  echo "<a href='#delete$id' data-toggle='modal'><button type='button' class='btn btn-danger btn-sm' disabled><i class='fa fa-trash-o' aria-hidden='true'></i></i>
  </button></a>";
}
  ?>
  <a href="#assistance<?php echo $id;?>" data-toggle="modal">
  <button type='button' class='btn btn-info btn-sm'><i class="fa fa-plus" aria-hidden="true"></i></button>

</td>
</tr>
</td>








               

                 
   <?php  ?>
   
  





















<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit<?php echo $id; ?>">
  <div class="modal-dialog modal-xl">
         <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Edit Member <?php echo $id ?> </h3>
            <div class="tile-body">
                <form method="post" role="form">
                  <input class="form-control" type="text" placeholder="Last Name" name="editid" hidden value="<?php echo $id; ?>">
              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Middle Name</label>
                  <input class="form-control" type="x" placeholder="Middle Name" name="mname" value="<?php echo $mname; ?>">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Relationship w/ the HH head </label>
                  
                  <select class="form-control" id="reltohhhead" name="reltohhhead" required>
                  <option value="<?php echo $reltohhhead; ?>"><?php echo $reltohhhead; ?></option>
                  <option value="">0 - N/A</option>
                  <option value="Head">1 - Head</option>
                  <option value="Spouse">2 - Spouse</option>
                  <option value="Son/Daughter">3 - Son/Daughter</option>
                  <option value="Son-in-law/Daughter-in-law">4 - Son-in-law/Daughter-in-law</option>
                  <option value="Grandson/Granddaughter">5 - Grandson/Granddaughter</option>
                  <option value="Grandfather/Grandmother">6 - GrandFather/GrandMother</option>
                  <option value="Father/Mother">7 - Father/Mother</option>
                  <option value="Uncle/Auntie">8 - Uncle/Auntie</option>
                  <option value="Brother/Sister">9 - Brother/Sister</option>
                  <option value="Mother-in-law/Father-in-law">10 - Mother-in-law/Father-in-law</option>
                  <option value="Cousin">11 - Cousin</option>
                  <option value="Brother-in-law/Sister-in-law">12 - Brother-in-law/Sister-in-law</option>
                   <option value="Niece/Nephew">13 - Niece/Nephew</option>
                   <option value="Friend">14 - Friend</option>
                </select>

                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Gender</label>
                  <select class="form-control" id="gender" name="gender" required>
                  <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Birthday</label>
                  <input class="form-control" type="date" placeholder="Middle Name" name="bday"  value="<?php echo $bday; ?>">
                </div>
              </div>

                  <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Place of Birth</label>
                  <input class="form-control" type="text" placeholder="Place of Birth" name="pob"  value="<?php echo $placeofbirth; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Civil Status</label>
                  <select class="form-control" id="civilstat" name="civilstat" required>
                  <option  value="<?php echo $civilstatus ; ?>"><?php echo $civilstatus ; ?></option>
                  <option value="Single">1 - Single</option>
                  <option value="Married">2 - Married</option>
                  <option value="Widowed">3 - Widowed</option>
                  <option value="Divorced/Separated">4 - Divorced/Separated</option>
                  <option value="Common-law/Live-in">5 - Common-law/Live-in</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Contact Number</label>
                  <input class="form-control" type="text"  maxlength="11" placeholder="Mobile Number" name="mnumber" value="<?php echo $mnumber; ?>">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Occupation</label>
                  <input class="form-control" type="text" placeholder="Occupation" name="occupation" value="<?php echo $occupation; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Monthly Salary</label>
                  <input class="form-control" type="number" placeholder="Monthly salary" name="salary" value="<?php echo $salary; ?>">
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
                  <option value="<?php echo $beneof; ?>"><?php echo $beneof; ?></option>
                  <option value="None">NONE</option>
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
                  <label class="control-label">Vaccinated ?</label>
                   <select class="form-control" id="vaccinated" name="vaccinated" required>
                  <option value="<?php echo $vaccinated; ?>"><?php echo $vaccinated; ?></option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">If yes, Vaccine Name</label>
                   <select class="form-control" id="vaccine" name="vaccine" required>
                  <option value="<?php echo $vaccine; ?>"><?php echo $vaccine; ?></option>
                  <option value="not vaccinated">not vaccinated</option>
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
                  <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                  <option value="Member">Household Member</option>
                  <option value="Secondary Head">Secondary Head</option></select>
                </div>
            

            </div>

             <button class="btn btn-primary" name="editmember" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
               </form>
        
        </div></div></div></div>

</div>  
</div>  </div>  



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
                                           <input type="hidden" name="hhidget" value="<?php echo $hhid; ?>">

                                        <div class="alert alert-danger">Are you sure you want DELETE record: <?php echo $id; ?> <strong>
                                                <?php echo $item_name; ?>?</strong> </div>

                                                <div class="form-group col-md-8">
                  <label class="control-label">DELETE REASON</label>
                  <input class="form-control" type="text"  maxlength="11" placeholder="DELETE REASON" name="deleteres" required>
                </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="deletemember" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


<!--- ADD ASSISTANCE-->





<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="assistance<?php echo $id; ?>">
  <div class="modal-dialog modal-xl">
         <div class="modal-content">
          <div class="tile">
            <h3 class="tile-title">Add assistance for <?php echo $id ?> </h3>
            <div class="tile-body">
                <form method="post" role="form">
                  <input class="form-control" type="text" placeholder="Last Name" name="editid" hidden value="<?php echo $id; ?>">
              <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Middle Name</label>
                  <input class="form-control" type="x" placeholder="Middle Name" name="mname" value="<?php echo $mname; ?>">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Date</label>
                  <input class="form-control" type="date" placeholder="Date" name="date" required>
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Request Service</label>
                  
 <select class="form-control" id="reqservice" name="reqservice" required>
 <option value="" selected disabled hidden>Choose here</option>
 <option value="Hospital Bill">Hospital Bill</option>
  <option value="Medicines">Medicines</option>
  <option value="Laboratory">Laboratory</option>
  <option value="Hemodialysis">Hemodialysis</option>
  <option value="2D Echo">2D Echo</option>
  <option value="Animal Bite">Animal Biten</option>
  <option value="Burial">Burial</option>
  <option value="Funeral">Funeral</option>
  <option value="CT Scan">CT Scan</option>
  <option value="MRI">MRI</option>
  <option value="Chemotherapy">Chemotherapy</option>
  <option value="X-Ray">X-Ray</option>
  <option value="Ultra Sound">Ultra Sound</option>

  <option value="LL-Funeral">Libreng Libing-Funeral</option>
  <option value="LL-Memorial">Libreng Libing-Memorial</option>
  <option value="LL-Funeral &Memorial">Libreng Libing-Funeral &Memorial</option>
  <option value="Fire Assistance">Fire Assistance</option>
  <option value="Special Case">Special Case</option>
  
                </select>

                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">MSWD Amount</label>
                  <input class="form-control" type="number" placeholder="Amount" name="reqamount">
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Service Provider</label>
                  
 <select class="form-control" id="reqservice" name="servicepro" required>
  <option option value="" >Choose here</option>
 <option value="TGP">TGP</option>
  <option value="De Guzman">De Guzman</option>
  <option value="Punzalan">Punzalan</option>
  <option value="Tongol">Tongol</option>
  <option value="ODH">ODH</option>
  <option value="CDBDCC">CLINICA DE BATAAN DIAGNOSTIC CENTER CORP</option>
  <option value="SPECTRO">SPECTRO DIAGNOSTIC LABORATORY</option>
  <option value="BATOL-CANLAS">BATOL-CANLAS DIAGNOSTIC CENTER</option>
  <option value="BDHMC">Bataan Doctors</option>
  <option value="BGH">BGH</option>
  <option value="ICMC">ICMC</option>
  <option value="ST. Joseph">ST. Joseph</option>
  <option value="OMP">Orani Memorial Park</option>
  <option value="OTHERS">OTHERS</option>
  
                </select>

                </div>
<div class="form-group col-md-3">
<label class="control-label">Type</label>
                  
 <select class="form-control" id="type" name="type" required>
  <option value="" >Choose here</option>
 <option value="GL">GL</option>
  <option value="Cash">CASH</option>
  <option value="CO Mayor">CO Mayor</option>
  
                </select>

                </div>
                
              </div>

                  <div class="row">
                 <div class="form-group col-md-3">
                  <label class="control-label">Category</label>
                  <select class="form-control" id="category" name="category" required>
                  <option value="">Choose here</option>
 <option value="Children">Children</option>
  <option value="Family Head">Family Head</option>
  <option value="PWD">PWD</option>
  <option value="Senior">Senior</option>
  <option value="Solo Parent">Solo Parent</option>
  <option value="Women">Women</option>
  <option value="4PS">4PS</option>
  <option value="Youth">Youth</option>
  <option value="Adult">Adult</option>
                </select>
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Burial/Illness</label>
                  <select class="form-control" id="burialorillness" name="burialorillness" required>
                  <option value="">Choose here</option>
                  <option value="Burial">Burial</option>
                  <option value="Illness">Illness</option>  
                </select>
                </div>
                  <div class="form-group col-md-3">
                  <label class="control-label">Proof</label>
                 <input class="form-control" type="file" name="file" size="50" />
                </div>
              </div>

             
            

            </div>

             <button class="btn btn-primary" name="add_assistance" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
               </form>
        
        </div></div></div></div>

</div>  





























  <?php }}



if(isset($_POST['deleterequest'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $reason = $_POST['reason'];
                            $sql = "INSERT INTO assistance_delete
SELECT * FROM assistance WHERE id = '$delete_id'";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM assistance WHERE id='$delete_id' ";
       if ($conn->query($sql) === TRUE) {
            $sql = "UPDATE `assistance_delete` SET `status` = 'deleted', `notes` = '$reason' WHERE `assistance_delete`.`id` = '$delete_id'";
                                   } if ($conn->query($sql) === TRUE) {
                                 echo "<script type='text/javascript'>alert(\"Successfully deleted  \")</script>";
           echo "<script>window.location.href='household.php?id=$hhid'</script>";
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }


if(isset($_POST['edit_assistance'])){

                        $edit = $_POST['editid'];  
                        $id = $hhid;
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        
                        $date = $_POST['editdate'];
                        $reqservice = $_POST['reqservice'];
                        $reqamount = $_POST['reqamount'];
                        $servicepro = $_POST['servicepro'];
                        $type = $_POST['type'];
                        $category = $_POST['category'];
                        $burialorillness = $_POST['burialorillness'];


                    $sqlget = "SELECT tbl_household.hhid, tbl_people.relationship, tbl_people.fname,tbl_household.barangay, tbl_people.mname, tbl_people.lname FROM tbl_household INNER JOIN tbl_people ON tbl_people.hhid= tbl_household.hhid WHERE tbl_people.id= '$client'";
                    



                    $result = $conn->query($sqlget);
                    if ($result->num_rows > 0) {
                        // output data of each row
              $row = $result->fetch_assoc();
                            $selectedhhid = $row['hhid'];
                             $relationship = $row['relationship'];
                              $barangay = $row['barangay'];
                        

                        
}
              

 $sql = "UPDATE `assistance` SET `cdate` = '$date', `lname` = '$lname', `fname` = '$fname', `mname` = '$mname', `relationship` = '$relationship', `Barangay` = '$barangay', `reqservice` = '$reqservice', `reqamount` = '$reqamount', `tos` = '$type', `servicepro` = '$servicepro', `type` = '$burialorillness', `category` = '$category' WHERE `assistance`.`id` = '$edit'";



if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully edited  \")</script>";
           echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
         }  else{

 echo "<script>window.location.href='page1.php'</script>";

           }}


   if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM tbl_people     WHERE id='$delete_id' ";
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

                         if(isset($_POST['deletemember'])){
                            // sql to delete a record
                      

                            $delete_id = $_POST['delete_id'];
                            $deletereason = $_POST['deleteres'];
                            $sql = "INSERT INTO `tbl_people_deleted` (`id`, `hhid`, `lname`, `fname`, `mname`, `relationship`, `gender`, `bday`, `placeofbirth`, `civilstatus`, `phone`, `work`, `salary`, `health`, `sector`, `vaccinated`, `vaccine`, `role`, `status`, `remarks`, `tag`, `sme`, `wantsme`, `lineofbiz`, `skillforz`, `deleted`, `deleted_reason`) 
SELECT `id`, `hhid`, `lname`, `fname`, `mname`, `relationship`, `gender`, `bday`, `placeofbirth`, `civilstatus`, `phone`, `work`, `salary`, `health`, `sector`, `vaccinated`, `vaccine`, `role`, `status`, `remarks`, `tag`, `sme`, `wantsme`, `lineofbiz`, `skillforz`, 'Yes', '$deleted_reason' FROM tbl_people WHERE id = '$delete_id'";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM tbl_people WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    echo "<script type='text/javascript'>alert(\"Successfully DELETED \")</script>";
                                    echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }







 if(isset($_POST['editmember'])){
                        $editid = $_POST['editid'];
                        
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $reltohhhead = $_POST['reltohhhead'];
                        $gender = $_POST['gender'];
                        $bday = $_POST['bday'];
                        $pob = $_POST['pob'];
                        $civilstat = $_POST['civilstat'];
                        $mnumber = $_POST['mnumber'];
                        $occupation = $_POST['occupation'];
                        $salary = $_POST['salary'];
                        $chckbox = $_POST['healthc'];
                        $chck= "";
                        foreach ($chckbox  as $chckboxresult) {
                          $chck.=$chckboxresult.",";
                        }

                        
                        $beneof = $_POST['beneof'];
                        $vaccinated= $_POST['vaccinated'];
                        $vaccine = $_POST['vaccine'];
                        $role = $_POST['role'];

                       



     $sql = "UPDATE `tbl_people` SET `lname` = '$lname', `fname` = '$fname', `mname` = '$mname', `relationship` = '$reltohhhead', `gender` = '$gender', `bday` = '$bday', `placeofbirth` = '$pob', `civilstatus` = '$civilstat', `phone` = '$mnumber', `work` = '$occupation', `salary` = '$salary', `health` = '$chck', `sector` = '$beneof', `vaccinated` = '$vaccinated', `vaccine` = '$vaccine', `role` = '$role' WHERE `tbl_people`.`id` = '$editid'";
                            if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>alert(\"Successfully edited  \")</script>";
                               echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }





 if(isset($_POST['addmember'])){
                        $id = $hhid;
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $reltohhhead = $_POST['reltohhhead'];
                        $gender = $_POST['gender'];
                        $bday = $_POST['bday'];
                        $pob = $_POST['pob'];
                        $civilstat = $_POST['civilstat'];
                        $mnumber = $_POST['mnumber'];
                        $occupation = $_POST['occupation'];
                        $salary = $_POST['salary'];
                        $chckbox = $_POST['healthc'];
                        $chck= "";
                        foreach ($chckbox  as $chckboxresult) {
                          $chck.=$chckboxresult.",";
                        }

                        
                        $beneof = $_POST['beneof'];
                        $vaccinated= $_POST['vaccinated'];
                        $vaccine = $_POST['vaccine'];
                        $role = $_POST['role'];



              

 $sql = "INSERT INTO `tbl_people` (`id`, `hhid`, `lname`, `fname`, `mname`, `relationship`, `gender`, `bday`, `placeofbirth`, `civilstatus`, `phone`, `work`, `salary`, `health`, `sector`, `vaccinated`, `vaccine`, `role`) VALUES (NULL, '$hhid', '$lname', '$fname', '$mname', '$reltohhhead', '$gender', '$bday', '$pob', '$civilstat', '$mnumber', '$occupation', '$salary', '$chck', '$beneof', '$vaccinated', '$vaccine', '$role')";



if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
         }  else{

 echo "<script>window.location.href='page1.php'</script>";

           }
         
       
}
 if(isset($_POST['add_assistance_head'])){
  $typeofillness = "";
                        $client = $_POST['editid'];  
                        $id = $hhid;
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        
                        $date = $_POST['date'];
                        $reqservice = $_POST['reqservice'];
                        $reqamount = $_POST['reqamount'];
                        $servicepro = $_POST['servicepro'];
                        $type = $_POST['type'];
                        $category = $_POST['category'];
                        $burialorillness = $_POST['burialorillness'];
                        $typeofillness= $_POST ['typeofillness'];


                    $sqlget = "SELECT tbl_household.hhid, tbl_people.relationship, tbl_people.fname,tbl_household.barangay, tbl_people.mname, tbl_people.lname FROM tbl_household INNER JOIN tbl_people ON tbl_people.hhid= tbl_household.hhid WHERE tbl_people.id= '$client'";
                    



                    $result = $conn->query($sqlget);
                    if ($result->num_rows > 0) {
                        // output data of each row
              $row = $result->fetch_assoc();
                            $selectedhhid = $row['hhid'];
                             $relationship = $row['relationship'];
                              $barangay = $row['barangay'];
                        

                        
}
              

 $sql = "INSERT INTO `assistance` (`id`, `hhid`, `clientid`, `cdate`, `lname`, `fname`, `mname`, `relationship`, `Barangay`, `reqservice`, `reqamount`, `appservice`, `appamount`, `tos`, `servicepro`, `type`,`typeofillness`, `category`, `status`, `notes`)VALUES (NULL, '$id','$client', '$date', '$lname', '$fname', '$mname', '$relationship', '$barangay', '$reqservice', '$reqamount', '', '', '$type', '$servicepro', '$burialorillness','$typeofillness','$category', 'pending', '')";



if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
         }  else{

 echo "<script>window.location.href='page1.php'</script>";
}
}

if(isset($_POST['add_assistance'])){
                        $client = $_POST['editid'];  
                        $id = $hhid;
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        
                        $date = $_POST['date'];
                        $reqservice = $_POST['reqservice'];
                        $reqamount = $_POST['reqamount'];
                        $servicepro = $_POST['servicepro'];
                        $type = $_POST['type'];
                        $category = $_POST['category'];
                        $burialorillness = $_POST['burialorillness'];


                    $sqlget = "SELECT tbl_household.hhid, tbl_people.relationship, tbl_people.fname,tbl_household.barangay, tbl_people.mname, tbl_people.lname FROM tbl_household INNER JOIN tbl_people ON tbl_people.hhid= tbl_household.hhid WHERE tbl_people.id= '$client'";
                    



                    $result = $conn->query($sqlget);
                    if ($result->num_rows > 0) {
                        // output data of each row
              $row = $result->fetch_assoc();
                            $selectedhhid = $row['hhid'];
                             $relationship = $row['relationship'];
                              $barangay = $row['barangay'];
                        

                        
}
              

 $sql = "INSERT INTO `assistance` (`id`, `hhid`, `clientid`, `cdate`, `lname`, `fname`, `mname`, `relationship`, `Barangay`, `reqservice`, `reqamount`, `appservice`, `appamount`, `tos`, `servicepro`, `type`, `category`, `status`, `notes`)VALUES (NULL, '$id','$client', '$date', '$lname', '$fname', '$mname', '$relationship', '$barangay', '$reqservice', '$reqamount', '', '', '$type', '$servicepro', '$burialorillness','$category', 'pending', '')";



if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
         }  else{

 echo "<script>window.location.href='page1.php'</script>";

           }
         
       

}
///aaaaaaaaaaaaaaaaaaaaaaa search
if(isset($_POST['searchid'])){
                        $hhid = $_POST['searchidbox'];
                                  
  header('location:page2.php?id='.$hhid);


  // echo "<script type='text/javascript'>alert(\"Searchingscript>";
         //  echo "<script>window.location.href='page1.php?id=$hhid'</script>";
         
       
}

if(isset($_POST['verifybtn'])){
                        $hhid = $_POST['verifyid'];
                                  

$sql = "UPDATE `tbl_household` SET `verified` = 'Yes',`verifiedby` = '$cidd' WHERE `tbl_household`.`hhid` = '$hhid';";
if ($conn->query($sql) === TRUE) {
           
            echo "<script type='text/javascript'>alert(\"Household Verified\")</script>";
            echo "<script>window.location.href='household.php?id=$hhid'</script>";
                          
                     
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        


  // echo "<script type='text/javascript'>alert(\"Searchingscript>";
         //  echo "<script>window.location.href='page1.php?id=$hhid'</script>";
         
       
}
if(isset($_POST['edithead'])){
                        $editidhead = $_POST['editid'];
                        
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $reltohhhead = $_POST['reltohhhead'];
                        $gender = $_POST['gender'];
                        $bday = $_POST['bday'];
                        $pob = $_POST['pob'];
                        $civilstat = $_POST['civilstat'];
                        $mnumber = $_POST['mnumber'];
                        $occupation = $_POST['occupation'];
                        $salary = $_POST['salary'];
                        $chckbox = $_POST['healthc'];
                        $chck= "";
                        foreach ($chckbox  as $chckboxresult) {
                          $chck.=$chckboxresult.",";
                        }

                        
                        $beneof = $_POST['beneof'];
                        $vaccinated= $_POST['vaccinated'];
                        $vaccine = $_POST['vaccine'];
                        $role = $_POST['role'];
                        $hasbiz = $_POST['hasbiz'];
                        $wantbiz = $_POST['wantbiz'];
                        $lineofbiz = $_POST['lineofbiz'];
                        $skillforz = $_POST['skillforz'];

                       



                       
       $sql = "UPDATE `tbl_people` SET `skillforz` = '$skillforz',`lineofbiz` = '$lineofbiz',`wantsme` = '$wantbiz',`sme` = '$hasbiz',`lname` = '$lname', `fname` = '$fname', `mname` = '$mname', `relationship` = '$reltohhhead', `gender` = '$gender', `bday` = '$bday', `placeofbirth` = '$pob', `civilstatus` = '$civilstat', `phone` = '$mnumber', `work` = '$occupation', `salary` = '$salary', `health` = '$chck', `sector` = '$beneof', `vaccinated` = '$vaccinated', `vaccine` = '$vaccine', `role` = '$role' WHERE `tbl_people`.`id` = '$editidhead'";

                            if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>alert(\"Successfully edited House hold head $editidhead \")</script>";
                               echo "<script>window.location.href='household.php?id=$hhid'</script>"; 
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }
?>           

<!-- Large modal -->

</tbody></table>






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
                  <option value="Father/Mother">6 - Father/Mother</option>
                  <option value="Grandfather/Grandmother">7 - GrandFather/GrandMother</option>
                  
                  <option value="Uncle/Auntie">8 - Uncle/Auntie</option>
                  <option value="Brother/Sister">9 - Brother/Sister</option>
                  <option value="Mother-in-law/Father-in-law">10 - Mother-in-law/Father-in-law</option>
                  <option value="Cousin">11 - Cousin</option>
                  <option value="Brother-in-law/Sister-in-law">12 - Brother-in-law/Sister-in-law</option>
                  <option value="Niece/Nephew">13 - Niece/Nephew</option>
                  <option value="Friend">14 - Friend</option>
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
                  <label class="control-label">Occupation</label>
                  <input class="form-control" type="text" placeholder="Occupation" name="occupation">
                </div>
                 <div class="form-group col-md-3">
                  <label class="control-label">Monthly Salary</label>
                  <input class="form-control" type="number" placeholder="Monthly salary" name="salary">
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
                  <option value="">-Select here-</option>
                  <option value="None">None</option>
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