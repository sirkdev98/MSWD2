<?php include '../include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
  
//if(isset($_SESSION['myVariable']) && $_SESSION['myVariable'] != null) {
 // $cidd = $_SESSION['myVariable'];
//}


//$cidd = $_SESSION['myVariable'];

if(isset($_SESSION['username'])){
    
       $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];

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
    <title>Basta Taga Orani</title>
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
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
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
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
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
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
       
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
        
            <li><a class="treeview-item" href="page1.php"><i class="icon fa fa-circle-o"></i>House Hold Enrollment</a></li>

                <li><a class="treeview-item" href="householdrequests.php"><i class="icon fa fa-circle-o"></i>Transactions</a></li>

             
        
          </ul>
        </li>
      
      </ul>
    </aside>


</div>
    <?php     
     $sql1 = "SELECT count(*) as hhtotal from tbl_household";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $hh = $row['hhtotal'];
                       
 }
 $sql1 = "SELECT count(*) as population from tbl_people";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $population = $row['population'];
                       
 }
   $sql2 = "SELECT count(*) as approvedrequests from assistance WHERE status = 'approved'";
                  $result2 = $conn->query($sql2);
           if ($result2->num_rows > 0) {
                 $row = $result2->fetch_assoc();
                            $approvedrequests = $row['approvedrequests'];
                       
 }$sql2 = "SELECT count(*) as pendingreq from assistance WHERE status = 'pending'";
                  $result2 = $conn->query($sql2);
           if ($result2->num_rows > 0) {
                 $row = $result2->fetch_assoc();
                            $pendingreq = $row['pendingreq'];
                       
 }
 $sql2 = "SELECT count(*) as vhh from tbl_household WHERE verified = 'yes'";
                  $result2 = $conn->query($sql2);
           if ($result2->num_rows > 0) {
                 $row = $result2->fetch_assoc();
                            $vhh = $row['vhh'];
                       
 }
  $sql2 = "SELECT sum(appamount) as gltotal from assistance WHERE tos = 'GL'";
                  $result2 = $conn->query($sql2);
           if ($result2->num_rows > 0) {
                 $row = $result2->fetch_assoc();
                            $gltotal = $row['gltotal'];
                       
 }
                      
                      ?>
                   ?>

      
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Data as of : <?php echo date('M');?></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-home fa-3x"></i>
            <div class="info">
              <h4>Registered House Holds</h4>
              <p><b><h3><font color="green"><?php echo $hh; ?></font></b></p></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Approved Requests</h4>
              <p><b><h3><font color="green"><?php echo $approvedrequests; ?></font></b></p></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
            <div class="info">
              <h4>TOTAL ASSITANCE</h4>
              <p><b><h3><font color="green"></font></b></p></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-credit-card fa-3x"></i>
            <div class="info">
              <h6>FUND BALANCE</h6>
              <p><h3><font color="green">...</font></b></p></h3>
            </div>
          </div>
        </div>
      </div>


<!-- 2nd row-->


<div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-check fa-3x"></i>
            <div class="info">
              <h4>Verified House Holds</h4>
              <p><b><h3><font color="green"><?php echo $vhh; ?></font></b></p></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-exclamation fa-3x"></i>
            <div class="info">
              <h4>Pending Requests</h4>
              <p><b><h3><font color="red"><?php echo $pendingreq; ?></font></b></p></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-envelope fa-3x"></i>
            <div class="info">
              <h4>TOTAL ASSITANCE in GL</h4>
              <p><b><h3><font color="green"><?php echo $gltotal; ?></font></b></p></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-bank fa-3x"></i>
            <div class="info">
              <h6>............</h6>
              <p><h3><font color="green"></font></b></p></h3>
            </div>
          </div>
        </div>
           <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h6>Total Population</h6>
              <p><h3><font color="green"><?php echo $population; ?></font></b></p></h3>
            </div>
          </div>
        </div>
      </div>

      </div>


<?php
$sqlcountmed = "SELECT COUNT(*) as medreq FROM `assistance` WHERE `reqservice` = 'Medicines'";
$result = $conn->query($sqlcountmed);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                        $medreq = $row['medreq'];
                        }


 ?>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Assistance requested', 'Count'],
          ["Hospital Bill", 0],
          ["Medicine", <?php echo $medreq; ?>],
          ["Laboratory", 1],
          ["Hemodialysis", 0],
          ["2D Echo", 0],
          ["Burial", 0],
          ["Funeral", 0],
          ["CT scan/MRI", 0],
          ["Chemo Theraphy", 0],
          ["Libreng Libing - Funeral", 0],
          ["Libreng Libing - Memorial", 0],
          ["Libreng Libing - Funeral & Memorial", 0],
          ["Fire assistance", 0],
     
        ]);

        var options = {
          title: 'Requested Assistance',
          width: 600,
          legend: { position: 'none' },
          chart: { title: 'Requested assistance',
                   subtitle: 'Count' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Count'} // Top x-axis.
            }
          },
          bar: { groupWidth: "100%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
 









      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">GRAPH</h3>
         
            <div class="" id="top_x_div" style="height: 370px; width: 100%;"></div>
    
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">PIE CHART</h3>

      

            
            </div>
          </div>
        </div>
      </div>

          <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                       <?php 
                
                    $sql = "SELECT a, b,c,d
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'SIBUL') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'sibul') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'SIBUL' and `verified` = 'Yes') c
CROSS JOIN (SELECT COUNT(`verified`) as d FROM tbl_household WHERE `encoderid` != '') d";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encodedsibul = $row['a'];
                            $barangayhhsibul = $row['b'];
                            $verifiedsibul = $row['c'];
                             $totalencoded = $row['d'];
                           


}
  
                
                    $sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'silahis') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'silahis') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'silahis' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_silahis = $row['a'];
                            $barangayhh_silahis = $row['b'];
                            $verified_silahis = $row['c'];
                           


}                
                    $sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'maria fe') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'maria fe') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'maria fe' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_mariafe = $row['a'];
                            $barangayhh_mariafe = $row['b'];
                            $verified_mariafe = $row['c'];
                           


}
      $sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'mulawin') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'mulawin') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'mulawin' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_mulawin = $row['a'];
                            $barangayhh_mulawin = $row['b'];
                            $verified_mulawin = $row['c'];
                           


}
 $sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'centro ii') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'centro ii') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'centro ii' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_centro_ii = $row['a'];
                            $barangayhh_centro_ii = $row['b'];
                            $verified_centro_ii = $row['c'];
                           


}
 $sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'PANTALAN BAGO') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'PANTALAN BAGO') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'PANTALAN BAGO' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_PANTALANBAGO = $row['a'];
                            $barangayhh_PANTALANBAGO = $row['b'];
                            $verified_PANTALANBAGO = $row['c'];
                           


}
 $sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'pagasa') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'pagasa') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'pagasa' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_pagasa = $row['a'];
                            $barangayhh_pagasa = $row['b'];
                            $verified_pagasa = $row['c'];
                           


}
$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'tala') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'tala') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'tala' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_tala = $row['a'];
                            $barangayhh_tala = $row['b'];
                            $verified_tala = $row['c'];
                           


}
$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'tenejero') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'tenejero') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'tenejero' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_tj = $row['a'];
                            $barangayhh_tj = $row['b'];
                            $verified_tj = $row['c'];
                           


}$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'parang parang') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'parang parang') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'parang parang' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_parang = $row['a'];
                            $barangayhh_parang = $row['b'];
                            $verified_parang = $row['c'];
                           


}
$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'Palihan') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'Palihan') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'Palihan' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_palihan = $row['a'];
                            $barangayhh_palihan = $row['b'];
                            $verified_palihan = $row['c'];
                           


}
$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'wawa') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'wawa') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'wawa' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_wawa = $row['a'];
                            $barangayhh_wawa = $row['b'];
                            $verified_wawa = $row['c'];
                           


}$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'puksuan') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'puksuan') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'puksuan' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_puksuan = $row['a'];
                            $barangayhh_puksuan = $row['b'];
                            $verified_puksuan = $row['c'];
                           


}
$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'masantol') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'masantol') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'masantol' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_masantol = $row['a'];
                            $barangayhh_masantol = $row['b'];
                            $verified_masantol = $row['c'];
                           


}

$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'bagong paraiso') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'bagong paraiso') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'bagong paraiso' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_paraiso = $row['a'];
                            $barangayhh_paraiso = $row['b'];
                            $verified_paraiso = $row['c'];
                           


}
$sql = "SELECT a, b,c
FROM (SELECT COUNT(`encoderid`) as A FROM tbl_household WHERE `encoderid` != '' AND barangay = 'apollo') a
CROSS JOIN (SELECT COUNT(`barangay`) as B FROM tbl_household WHERE `barangay` = 'apollo') b
CROSS JOIN (SELECT COUNT(`verified`) as C FROM tbl_household WHERE `barangay` = 'apollo' and `verified` = 'Yes') c";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            
                           $encoded_apollo = $row['a'];
                            $barangayhh_apollo = $row['b'];
                            $verified_apollo = $row['c'];
                           


}









                         ?>  <h5>Total Encoded :<font color="Sky-Blue"><?php echo $totalencoded; ?></font></h5>
                      <th>BARANGAY</th>
                      <th>TOTAL HH</th>
                      <th>ENCODED HH</th>
                      <th>VERIFIED HH</th>
                      <th>Status</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Sibul</td>
                      <td><?php echo $barangayhhsibul; ?></td>
                      <td><?php echo $encodedsibul; ?></td>
                      <td><?php echo $verifiedsibul; ?></td>
                      <td><font color="Blue">DONE</font></td>
                      
                      
                    </tr>
                    <tr>
                      <td>Silahis</td>
                      <td><?php echo $barangayhh_silahis; ?></td>
                      <td><?php echo $encoded_silahis; ?></td>
                      <td><?php echo $verified_silahis; ?></td>
                      <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                    <tr>
                      <td>Maria Fe</td>
                      <td><?php echo $barangayhh_mariafe; ?></td>
                      <td><?php echo $encoded_mariafe; ?></td>
                      <td><?php echo $verified_mariafe; ?></td>
                      <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                      <tr>
                      <td>Mulawin</td>
                      <td><?php echo $barangayhh_mulawin; ?></td>
                      <td><?php echo $encoded_mulawin; ?></td>
                      <td><?php echo $verified_mulawin; ?></td>
                      <td></td>
                      
                    </tr>
                     <tr>
                      <td>Centro II</td>
                      <td><?php echo $barangayhh_centro_ii; ?></td>
                      <td><?php echo $encoded_centro_ii; ?></td>
                      <td><?php echo $verified_centro_ii; ?></td>
                      <td></td>
                      
                    </tr>
                    <tr>
                      <td>Pantalan Bago</td>
                      <td><?php echo $barangayhh_PANTALANBAGO; ?></td>
                      <td><?php echo  $encoded_PANTALANBAGO; ?></td>
                      <td><?php echo $verified_PANTALANBAGO; ?></td>
                       <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                      <tr>
                      <td>Pag-asa</td>
                      <td><?php echo $barangayhh_pagasa; ?></td>
                      <td><?php echo  $encoded_pagasa; ?></td>
                      <td><?php echo $verified_pagasa; ?></td>
                      <td></td>
                      
                    </tr>
                    <tr>
                      <td>Tala</td>
                      <td><?php echo $barangayhh_tala; ?></td>
                      <td><?php echo  $encoded_tala; ?></td>
                      <td><?php echo $verified_tala; ?></td>
                      <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                     <tr>
                      <td>Tenejero</td>
                      <td><?php echo $barangayhh_tj; ?></td>
                      <td><?php echo  $encoded_tj; ?></td>
                      <td><?php echo $verified_tj; ?></td>
                       <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                    <tr>
                      <td>Parang-Parang</td>
                      <td><?php echo $barangayhh_parang; ?></td>
                      <td><?php echo  $encoded_parang; ?></td>
                      <td><?php echo $verified_parang; ?></td>
                       <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                    <tr>
                      <td>Palihan</td>
                      <td><?php echo $barangayhh_palihan; ?></td>
                      <td><?php echo  $encoded_palihan; ?></td>
                      <td><?php echo $verified_palihan; ?></td>
                      <td></td>
                      
                    </tr>
                     <tr>
                      <td>Wawa</td>
                      <td><?php echo $barangayhh_wawa; ?></td>
                      <td><?php echo  $encoded_wawa; ?></td>
                      <td><?php echo $verified_wawa; ?></td>
                      <td></td>
                      
                    </tr>
                     <tr>
                      <td>Puksuan</td>
                      <td><?php echo $barangayhh_puksuan; ?></td>
                      <td><?php echo  $encoded_puksuan; ?></td>
                      <td><?php echo $verified_puksuan ?></td>
                      <td></td>
                      
                    </tr>
                      <tr>
                      <td>Masantol</td>
                      <td><?php echo $barangayhh_masantol; ?></td>
                      <td><?php echo  $encoded_masantol; ?></td>
                      <td><?php echo $verified_masantol; ?></td>
                       <td><font color="Blue">DONE</font></td>
                      
                    </tr>
                         <tr>
                      <td>Paraiso</td>
                      <td><?php echo $barangayhh_paraiso; ?></td>
                      <td><?php echo  $encoded_paraiso; ?></td>
                      <td><?php echo $verified_paraiso; ?></td>
                       <td></td>
                      
                    </tr>

                     <tr>
                      <td>Apollo</td>
                      <td><?php echo $barangayhh_apollo; ?></td>
                      <td><?php echo  $encoded_apollo; ?></td>
                      <td><?php echo $verified_apollo; ?></td>
                       <td></td>
                      
                    </tr>
                   

                    
                    
                    
                    
                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
   <!--  <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>