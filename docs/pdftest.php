


<?php
include '../include/controller.php';

              

$sessid = $_SESSION['id'];
$session_username =  $_SESSION['username'];
$session_role = $_SESSION['role'];
$sessfname = $_SESSION['fname'];
$sessmname = $_SESSION['mname'];
$sesslname = $_SESSION['lname'];
$sesspos= $_SESSION['position'];
$usessfname =strtoupper($sessfname);
$usessmname=strtoupper($sessmname);
$usesslname=strtoupper($sesslname);

require('fpdf181/fpdf.php');
$id = $_GET['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bastatagaorani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



 $sql = "SELECT * from assistance where id = '$id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id  = $row['id'];
                            $cdate  = $row['cdate'];
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $mname = $row['mname'];
                            $clientid= $row['clientid'];

                            $relationship = $row['relationship'];
                            $barangay =$row['Barangay'];
                            $reqservice = $row['reqservice'];
                            $reqamount = $row['reqamount'];
                        
                            $appservice = $reqservice;
                            $appamount = $row['appamount'];
                            $servicepro = $row['servicepro'];
                            $type = $row['type'];
                            $category = $row['category'];
                            $clname = $fname." ".$mname." ".$lname;
                            $bename = $clname;
                            $clname=strtoupper($clname);
                            $bename=strtoupper($clname);



}}

$formattednum = number_format($appamount,2);

$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);

 









//
$pdf = new FPDF ('p','mm','A4');

$pdf->AddPage();

//set font
$pdf->SetFont('Arial', '', 12);

//cell width, height, text, border, end line, [align]
$pdf->Image('orani2.png',160,10,28);

$pdf->Image('orani.png',25,10,28);
$pdf->Image('Capture.png',8,270,200);
$pdf->Image('esig.png',132,215,50);
$pdf ->Cell(72,10,'',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,5,'Republic of the Philippines',0,1);
$pdf ->Cell(79,10,'',0,0);
$pdf ->Cell(9,5,'Province of Bataan',0,1);

$pdf ->Cell(55,5,'',0,0);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(9,5,'MUNICIPAL GOVERNMENT OF ORANI',0,1);

$pdf ->Cell(51,5,'',0,0);
$pdf->SetFont('Arial', 'B', 14);
$pdf ->Cell(9,5,'OFFICE OF THE MUNICIPAL MAYOR',0,1);


$pdf ->Cell(51,5,'',0,1);
$pdf ->Cell(51,5,'',0,1);
$pdf ->Cell(60,5,'',0,0);
$pdf->SetFont('Arial', 'UB', 14);
$pdf ->Cell(9,5,'G U A R A N T E E   L E T T E R',0,1);

$pdf->SetFont('Arial', '', 12);



$pdf ->Cell(50,10,'',0,1);
$pdf ->Cell(155,10,'',0,0);
$pdf ->Cell(5,10,$cdate,0,1);
$pdf ->Cell(50,10,'',0,1);

if ($servicepro == 'ODH') {



$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'ORANI DISTRICT HOSPITAL',0,1);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Lourdes St., Ma. Fe',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);


}else if($servicepro =='TGP') {




$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'THE GENERICS PHARMACY',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Centro I Orani, Bataan',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'',0,1);

}else if($servicepro =='De Guzman') {




$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'DE GUZMAN PHARMACY',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Mulawin Orani, Bataan',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'',0,1);

}else if($servicepro =='CDBDCC') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'CLINICA DE BATAAN DIAGNOSTIC CENTER CORP',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'t National Road, Parang-parang',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);

}else if($servicepro =='SPECTRO') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'SPECTRO DIAGNOSTIC LABORATORY',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'National Road, Centro I',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);
}
else if($servicepro =='BATOL-CANLAS') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'BATOL-CANLAS DIAGNOSTIC CENTER',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'National Road, Centro I',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);
}
else if($servicepro =='Tongol') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'TONGOL FUNERAL SERVICES',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'National Road, Ma. Fe',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);


}else if($servicepro =='Punzalan') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'D.C. PUNZALAN FUNERAL SERVICES',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'National Road, Parang-Parang',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);

}
else if($servicepro =='BGH') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'BATAAN GENERAL HOSPITAL AND MEDICAL CENTER',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Manahan Street, Tenejero',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Balanga City, Bataan',0,1);
}

else if($servicepro =='ICMC') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'ISAAC & CATALINA MEDICAL CENTER',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Calero Street, Ibayo',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Balanga City, Bataan',0,1);
}else if($servicepro =='BDHMC') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'BATAAN DOCTORS HOSPITAL AND MEDICAL CENTER',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Cuaderno St., Dona Francisca Subdivision',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Balanga City, Bataan',0,1);
}else if($servicepro =='OMP') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'Orani Memorial Park',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Orani Bataan',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'',0,1);

}else if($servicepro =='ST. Joseph') {


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'BATAAN ST. JOSEPH HOSPITAL & MEDICAL CENTER CORP.',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Don Manuel Banzon Avenue, Doña Francisca Subd.',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Balanga City, Bataan',0,1);
}






































$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(15,5,'',0,1);
$pdf ->Cell(15,5,'',0,1);
$pdf ->Cell(10,5,'',0,0);
$pdf ->Cell(50,10,"Dear Ma'am/Sir:",0,1);

$pdf ->Cell(20,5,'',0,0);
$pdf ->Cell(50,8,"The Municipality of Orani thru the Municipality Social Welafare and Development office",0,1);
$pdf ->Cell(10,8,'',0,0);
$pdf ->Cell(60,8,"guarantees to pay the amount of ",0,0);

/*$a = "&#8369;";
$b = iconv('UTF-8', 'windows-1252',html_entity_decode($a));*/
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(5,8,'________________________________________________',0,0);
$pdf ->Cell(5,8,'      '.strtoupper($f->format($appamount)).' PESOS ONLY    ',0,1);
$pdf ->Cell(10,8,'',0,0);
$pdf->SetFont('Arial', 'U', 12);;
$pdf ->Cell(45,8,'(P        '.$formattednum.'       )',0,0);
$pdf->SetFont('Arial', '', 12);;
$pdf ->Cell(5,8,'for',0,0);
$pdf ->Cell(5,8,'_______________________________',0,0);
$pdf ->Cell(70,8,$bename,0,0);
$pdf ->Cell(5,8,'of',0,0);
$pdf ->Cell(2,8,'__________________',0,0);
$pdf ->Cell(10,8,$barangay,0,1);
$pdf->SetFont('Arial', '', 12);

$pdf ->Cell(10,8,'',0,0);
$pdf ->Cell(50,8,'Orani, Bataan for his/her',0,0);
$pdf ->Cell(10,8,'_______________________',0,0);
$pdf ->Cell(20,8,$appservice,0,1);
$pdf ->Cell(20,8,'',0,0);
$pdf ->Cell(55,8,'This is upon the request of _____________________________, ',0,0);
$pdf ->Cell(65,8,$clname,0,0);

$pdf ->Cell(1,8,"     ".$relationship,0,0);
$pdf ->Cell(10,8,'__________________',0,1);
$pdf ->Cell(20,8,'',0,0);
$pdf ->Cell(50,8,'Please be informed that the check is payable to your company/agency/office.',0,0);
$pdf ->Cell(50,8,'',0,1);
$pdf ->Cell(20,8,'',0,0);
$pdf ->Cell(50,8,'Thank you for your usual support.',0,0);

$pdf ->Cell(50,10,'',0,1);
$pdf ->Cell(50,10,'',0,1);
$pdf ->Cell(10,8,'',0,0);
$pdf ->Cell(50,10,'Prepared by:',0,0);
$pdf ->Cell(50,15,'',0,1);

$pdf ->Cell(10,10,'',0,0);
$pdf->SetFont('Arial', 'Bu', 12);
$pdf ->Cell(50,5,$usessfname.' '.$usessmname.' '.$usesslname ,0,1);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(15,5,'',0,0);
$pdf ->Cell(10,5,$sesspos,0,0);
$pdf ->Cell(10,10,'',0,1);
$pdf ->Cell(10,60,'',0,0);
$pdf ->Cell(50,10,'Noted by:',0,0);
$pdf ->Cell(50,15,'',0,1);

$pdf ->Cell(10,10,'',0,0);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(50,5,'ELIZABETH M. CRUZ, RSW',0,1);
$pdf->SetFont('Arial', '', 11);
$pdf ->Cell(30,5,'',0,0);
$pdf ->Cell(10,5,'MSWDO',0,1);
$pdf ->Cell(125,5,'',0,0);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(50,5,'EFREN E. PASCUAL, JR.',0,1);
$pdf->SetFont('Arial', '', 11);
$pdf ->Cell(130,5,'',0,0);
$pdf ->Cell(10,5,'MUNICIPAL MAYOR',0,1);
$pdf ->Cell(50,5,'',0,0);
$pdf ->Cell(50,5,'',0,0);
$pdf ->Cell(50,5,'',0,0);
$pdf ->Cell(50,12,'',0,0);


$pdf ->Cell(50,16,'',0,1);
$pdf ->Cell(20,5,'',0,0);
$pdf->SetFont('Arial', 'I', 7);
$pdf ->Cell(10,5,'*VALID FOR 30 DAYS UPPON ISSUANCE',0,1);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,5,'',0,0);
$pdf ->Cell(10,5,'',0,0);
$pdf ->Cell(35,5,'Control No.',0,0);
$pdf->SetFont('Arial', 'u', 12);

  $newDate = date("m d", strtotime($cdate));  

$pdf ->Cell(50,5,$id." ".$newDate,0,1);




$pdf->Output();



?>