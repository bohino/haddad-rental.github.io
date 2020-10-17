<?php

include_once("../fpdf/fpdf.php");
//$conn =mysqli_connect("localhost", "root", "", "dearlife_inventory");
 $conn =mysqli_connect("localhost", "root", "", "carrental");
       if ($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
       }

$img = "../fpdf/logo.PNG";


if ($_GET["order_date"]){

  $pdf = new FPDF();
//  $pdf->AddPage();
//  $pdf =& new FPDI();
      $pdf->addPage('P');
       $pdf->SetLineWidth(0);
 $pdf->SetDrawColor(0,80,180);
    $pdf->SetFillColor(200,220,255);
  //  $pdf->SetTextColor(220,50,50);
      $pdf->SetFont("Arial","B",19);
     $pdf->Cell(10,10, $pdf->Image($img, $pdf->GetX(5), $pdf->GetY(10), 160.8), 0, 0, 'R', false );
      $pdf->Cell(5,10,"",0,1);
     // $pdf->Cell(260,10,"INVOICE",0,1,"C"); 
 // $pdf->Cell(190,10,"INVOICE",0,1,"C"); 
     $pdf->Cell(40,2,"",0,1);
      //$pdf->Cell(260,10,"  Dear Life BD Tours & Travel Ltd. ",0,0,"C"); 
 
       $pdf->Cell(20,10,"",0,1);
   $pdf->SetFont("Arial","B",10);
   
   $pdf->Cell(10,10,".",0,0,"L");
   
    for ($i=0; $i <0; $i++){
   
   $pdf->Cell(-30,10, $_GET["t_no"][$i],0,1,"L");
    // $pdf->Cell(-40,10, $_GET["coustomer_name"][$i],1,0,"C");
    break;
    $pdf->Cell(40,10,"Address :",0,0,"L");
    $pdf->Cell(10,10," ".$_GET["c_adress"],0,0,"L");
    break;
    }
  $pdf->Cell(240,10,"             ",0,0,"C");
    $pdf->Cell(-140,10,"  ",0,1,"C");
    $query="SELECT * FROM `invoice` WHERE 1";


 $res=mysqli_query($conn, $query);
 // $data= mysqli_fetch_field($res);
  //$data=mysqli_fetch_array($res);
while($row = $res->fetch_assoc()){
  //print_r($row);

$invoice_noo =$row ["invoice_no"];
     
 }
   
   $pdf->Cell(55,10,"Invoice No :              ",0,0,"L");
   $pdf->Cell(10,10," $invoice_noo " ,0,1,"C");
    
   $pdf->Cell(55,10,"Issue date : ",0,0,"L");
   $pdf->Cell(40,10," ".$_GET["order_date"],0,1,"L");
 
   $pdf->Cell(55,10,"Company Name :",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["c_name"],0,1,"L");
 
   $pdf->Cell(55,10,"Legal License Number :",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["licence"],0,1,"L");
   
   $pdf->Cell(55,10,"Customer Adress :",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["c_adress"],0,1,"L");
   
    $pdf->Cell(55,10,"Contact Person Name:",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["contact_name"],0,1,"L");
   
   $pdf->Cell(55,10,"Designation:",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["designation"],0,1,"L");
   
    $pdf->Cell(55,10,"Mobile Number:",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["mobile"],0,1,"L");
   
   $pdf->Cell(55,10,"Email :",0,0,"L");
   $pdf->Cell(40,10,"".$_GET["email"],0,1,"L");
   
    
    
    $pdf->SetFont("Arial","B",12);
     
   
  
   
    $pdf->Cell(35,7,"",0,1);
 // $pdf->Cell(190,10, "href="./images/ddd.PNG"",0,1,"C");
 




    $pdf->SetFont("Arial","B",10);
   
  
   // $pdf->Cell(40,10,"Customer Email",0,0);
    // $pdf->Cell(40,10," : ".$_GET["coun_name"],0,1);
   // $pdf->Cell(40,10,": ".$_GET["invoice_no"],0,1);
   
 //  $pdf->Cell(40,10," : ".$_GET["country"],0,1);
  // $pdf->Cell(40,10,"vendor",0,0);
//  $pdf->Cell(40,10," : ".$_GET["fly_date"],0,0);
 //$pdf->SetX((210-$w)/2);
 
    //$pdf->SetFillColor(200,220,255);
    
    $pdf->Cell(12,10,"SL",1,0,"C"); 
    
   
   
   $pdf->Cell(35,10,"Product",1,0,"C");
 
  
   //$pdf->Cell(55,10,"Customer Name",1,0,"C");
    $pdf->Cell(55,10,'Unit',1,0,'C',0);
   
    $pdf->Cell(45,10,"Quantity",1,0,"C");
   // $pdf->Cell(35,10,"Air Lines",1,0,"C");
 // $pdf->Cell(33,10,"Ticket No",1,0,"C");
   //  $pdf->Cell(28,10,"Travel Date",1,0,"C");
      //$pdf->Cell(15,10,"Unit",1,0,"C");
   $pdf->Cell(40,10,"Total Amount USD",1,1,"C");
//  $pdf->Cell(35,10, "Sadex",1,1,"C");
//   $pdf->Cell(20,10, $_GET["total"],1,1,"C");
//for ($i=0; $i < count($_GET["invoice_no"]); $i++){}

  
     $pdf->Cell(12,10, ($i+1),1,0,"C");
     $pdf->SetFont("Arial","B",8);
     $pdf->Cell(35,10, "".$_GET["product"],1,0,"C");
    // $pdf->Cell(55,10, RPT,1,0,"C");
    // $pdf->Cell(45,10, One,1,0,"C");
    // $pdf->Ln( );
     //$pdf->Cell(35,10, $_GET["air"][$i],1,0,"C");
 //  $pdf->Cell(33,10, $_GET["t_no"][$i],1,0,"C");
    // $pdf->Cell(28,10, $_GET["fly_d"][$i],1,0,"C");
    // $pdf->Cell(15,10, $_GET["qty"][$i],1,0,"C");
      $pdf->Cell(40,10, $_GET["tot_pin_requested"] ,1,1,"C");
     //$pdf->Cell(40,10, ($_GET["qty"][$i] * .$_GET["net_total"][$i]),1,1,"C");
     
  // }
//$fpdf->LN;

// $pdf->Cell(147,8,"Product Name",1,0,"R");
//   $pdf->Cell(40,8,"Sadex",1,1,"C");

$vat=("".$_GET["tot_pin_requested"]);
$bvat= $vat*0.15;
$pdf->Cell(147,8,"Vat 15%",1,0,"R");
  $pdf->Cell(40,8,"$bvat",1,1,"C");

  
 $pdf->Cell(147,8,"Registration",1,0,"R");
  $pdf->Cell(40,8,"".$_GET["optradio"],1,1,"C");
  

  
 
   
$pdf->Cell(147,8,"Sub Total",1,0,"R");
  $pdf->Cell(40,8,"".$_GET["net_total"],1,1,"C");
$a=("".$_GET["net_total"]);
$b= $a*85;
   $pdf->Cell(147,8,"Total Amount BDT",1,0,"R");
   $pdf->Cell(40,8,"$b",1,1,"C");
   
    $pdf->Cell(50,10,"",0,1);
 $pdf->SetFont("Arial","B",8);
   // $pdf->Cell(150,10,"Sub Total    ",0,0,"R");
   // $pdf->Cell(140,10,":        ".$_GET["sub_total"],0,1);
    //  $pdf->Cell(150,10,"Gst Tax    ",0,0,"R");
 //  $pdf->Cell(50,10,":        ".$_GET["gst"],0,1);
 // $pdf->Cell(150,10,"Discount    ",0,0,"R");
   // $pdf->Cell(50,10,":        ".$_GET["discount"],0,1);
  // $pdf->Cell(240,10,"Total Amount    ",0,0,"R");
   // $pdf->Cell(50,10,":        ".$_GET["net_total"],0,1);
   
  
      $pdf->Cell(70,10,"",0,1);
      
       
       $pdf->Cell(100,8,"                 ",0,1,"L");
       $img = "../fpdf/logo.PNG";
       
       
        $pdf->Cell(100,10, $pdf->Image($img, $pdf->GetX(50), $pdf->GetY(10), 185.8), 0, 0, 'R', false );
       $pdf->Cell(200,8,"",0,1,"L");
       $pdf->Cell(200,8,"",0,1,"L");
       
       
        $pdf->Cell(50,10,"",0,1);
      $pdf->Cell(250,8," ",0,1,"C");
       $pdf->SetFont("Arial","B",7);
     $pdf->Cell(250,8," ",0,1,"C");
      $pdf->Cell(250,8,"",0,1,"C");
  $pdf->Output();
    //   $img2 = "../fpdf/imgpsh_fulsize.png";
  //$pdf->Output();
}
    
 ?>