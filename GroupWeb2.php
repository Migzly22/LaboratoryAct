<?php
    /*Authentication Check */
    session_start();
    if (isset($_SESSION["logged"])) {
        if ( $_SESSION["logged"] != "Web2") {
            header("Location:./Login.php");
            exit;
        }
    }else{
        header("Location:./Login.php");
        exit;
    }

    /*Oncick event of Exit btn */
    if (isset($_POST["exit"])){
        unset($_SESSION["logged"]);
        header("Location:./Login.php");
        exit;
    }


    /*MR Hayag PHP LOGIC */
    $empnumber="123456 "; 
    $numberofdependents="2";
    $empstatus="Job Order"; 
    $department1="Department of Information Technology";
    $paydate="March 30, 2021"; 

    $paydate = date('Y-m-d',strtotime($paydate));// new value of paydate

    $fname="HAYAG"; 
    $mname="ENRIQUEZ"; 
    $sname="MIKE BAEL"; 
    $civilstatus="Single"; 
    $designation="WorkingStudent"; 
    $qualified_dependent_status="ME"; 

    /*Basic Pay*/
    $rateperhour;
    $incomepercutoff;
    $cutoff; 


    /*Honorarium*/
    $rateperhour2;
    $cutoff2 ;
    $totalhonorarium;

    /*Other Income*/
    $rateperhour3;
    $cutoff3 ;
    $totalotherincome;


    /*Income Summary*/
    $gross_income = "";
    $netincome ="";

    /*Regular Deductio  ns*/
    $sss_contribution ="";
    $philhealth= "" ;
    $pagibig = "";
    $tax = "" ;
    /*otherdeductions   Deductions*/
    $sssloan ="";
    $pagibigloan ="";
    $facultysavingsdeposit ="";
    $facultysavingsloan ="";
    $salaryloan ="";
    $totaldeductions ="";

    $netincome = "";

    /*computation*/

    if(isset($_POST['calculate'])){
        /*Basic Pay*/

        $rateperhour = $_POST['rateperhour'];
        $cutoff = $_POST['cutoff'];
        $incomepercutoff = $rateperhour * $cutoff;

        /*Honorarium*/
        $rateperhour2 = $_POST['rateperhour2'];
        $cutoff2 = $_POST['cutoff2'];
        $totalhonorarium = $rateperhour2 * $cutoff2;

        /*Otherincome*/
        $rateperhour3 = $_POST['rateperhour3'];
        $cutoff3 = $_POST['cutoff3'];
        $totalotherincome = $rateperhour3 * $cutoff3;

        /*Income Summary*/
        $gross_income = $incomepercutoff + $totalhonorarium + $totalotherincome;

        /*Regular Deductions*/
        $sss_contribution = $gross_income*.12;
        /*sss contribution                 
            if($gross_income>= 1000 && $gross_income<=1249){ 
                $sss_contribution=73.70; 
            } else if($gross_income>=1250 && $gross_income<=1749){                     
                $sss_contribution=110.50; 
            } else if($gross_income>=1750 && $gross_income<=2249){ 
                $sss_contribution=147.30; 
            } else if($gross_income>=2250 && $gross_income<=2749.99){                     
                $sss_contribution=184.20; 
            } else if($gross_income>=2750 && $gross_income<=3249.99){                     
                $sss_contribution=221.00; 
            } else if($gross_income>=3250 && $gross_income<=3749.99){                     
                $sss_contribution=257.80; 
            } else if($gross_income>=3750 && $gross_income<=4249.99){                     
                $sss_contribution=294.70; 
            } else if($gross_income>=4250 && $gross_income<=4749.99){                     
                $sss_contribution=331.50; 
            } else if($gross_income>=4750 && $gross_income<=5249.99){                     
                $sss_contribution=368.30; 
            } else if($gross_income>=5250 && $gross_income<=5749.99){                     
                $sss_contribution=405.20; 
            } else if($gross_income>=5750 && $gross_income<=6249.99){                     
                $sss_contribution=442.00; 
            } else if($gross_income>=6250 && $gross_income<=6749.99){                     
                $sss_contribution=478.80; 
            } else if($gross_income>=6750 && $gross_income<=7249.99){ 
                $sss_contribution=515.70; 
            } else if($gross_income>=7250 && $gross_income<=7749.99){ 
                $sss_contribution=552.50; 
            } else if($gross_income>=7750 && $gross_income<=8249.99){ 
                $sss_contribution=589.30; 
            } else if($gross_income>=8250 && $gross_income<=8749.99){                     
                $sss_contribution=626.20; 
            } else if($gross_income>=8750 && $gross_income<=9249.99){ 
                $sss_contribution=663.00; 
            } else if($gross_income>=9250 && $gross_income<=9749.99){ 
                $sss_contribution=699.80; 
            } else if($gross_income>=9750 && $gross_income<=10249.99){ 
                $sss_contribution=736.70; 
            } else if($gross_income>=10250 && $gross_income<=10749.99){                     
                $sss_contribution=773.50; 
            } else if($gross_income>=10750 && $gross_income<=11249.99){ 
                $sss_contribution=810.30; 
            } else if ($gross_income>=11250 && $gross_income<=11749.99){ 
                $sss_contribution=847.20; 
            } else if($gross_income>=11750 && $gross_income<=12249.99){ 
                $sss_contribution=884.00; 
            } else if($gross_income>=12250 && $gross_income<=12749.99){                     
                $sss_contribution=920.80; 
            } else if($gross_income>=12750 && $gross_income<=13249.99){ 
                $sss_contribution=957.70; 
            } else if($gross_income>=13250 && $gross_income<=13749.99){                     
                $sss_contribution=994.50; 
            } else if($gross_income>=13750 && $gross_income<=14249.99){ 
                $sss_contribution=1031.30; 
            } else if($gross_income>=14250 && $gross_income<=14749.99){                     
                $sss_contribution=1068.20; 
            } else if($gross_income>=14750 && $gross_income<=15249.99){ 
                $sss_contribution=1105.00; 
            } else if($gross_income>=15250 && $gross_income<=15749.99){ 
                $sss_contribution=1141.80;    
            } else{ 
                $sss_contribution=1178.70; 
            } 
            */


        //PHILHEALTH TABLE CONTRIBUTIIOM
        $philhealth = 100;
        /*
            if($gross_income<=8999.99 && $gross_income>=0){ 
                $philhealth=100.00; 
            } else if($gross_income>=9000 && $gross_income<=9999.99){ 
                $philhealth=112.50; 
            } else if($gross_income>=10000 && $gross_income<=10999.99){                     
                $philhealth=125.00; 
            } else if($gross_income>=11000 && $gross_income<=11999.99){                     
                $philhealth=137.50; 
            } else if($gross_income>=12000 && $gross_income<=12999.99){                     
                $philhealth=150.00; 
            } else if($gross_income>=13000 && $gross_income<=13999.99){                     
                $philhealth=162.50; 
            } else if($gross_income>=14000 && $gross_income<=14999.99){                     
                $philhealth=175.00; 
            } else if($gross_income>=15000 && $gross_income<=15999.99){ 
                $philhealth=187.50; 
            } else if($gross_income>=16000 && $gross_income<=16999.99){                     
                $philhealth=200.00; 
            } else if($gross_income>=17000 && $gross_income<=17999.99){ 
                $philhealth=212.50; 
            } else if($gross_income>=18000 && $gross_income<=18999.99){                     
                $philhealth=225.00; 
            } else if($gross_income>=19000 && $gross_income<=19999.99){ 
                $philhealth=237.50; 
            } else if($gross_income>=20000 && $gross_income<=20999.99){                     
                $philhealth=250.00; 
            } else if($gross_income>=21000 && $gross_income<=21999.99){ 
                $philhealth=262.50; 
            } else if($gross_income>=22000 && $gross_income<=22999.99){                     
                $philhealth=275.00; 
            } else if($gross_income>=23000 && $gross_income<=23999.99){ 
                $philhealth=287.50; 
            } else if($gross_income>=24000 && $gross_income<=24999.99){ 
                $philhealth=300.00; 
            } else if ($gross_income>=25000 && $gross_income<=25999.99){ 
                $philhealth=312.50; 
            } else if($gross_income>=26000 && $gross_income<=26999.99){                     
                $philhealth=325.00; 
            } else if($gross_income>=27000 && $gross_income<=27999.99){ 
                $philhealth=337.50; 
            } else if($gross_income>=28000 && $gross_income<=28999.99){ 
                $philhealth=350.00; 
            } else if ($gross_income>=29000 && $gross_income<=29999.99){ 
                $philhealth=362.50; 
            } else if ($gross_income>=30000 && $gross_income<=30999.99){ 
                $philhealth=375.00; 
            } else if($gross_income>=31000 && $gross_income<=31999.99){ 
                $philhealth=387.50; 
            } else if($gross_income>=32000 && $gross_income<=32999.99){                     
                $philhealth=400.00; 
            } else if($gross_income>=33000 && $gross_income<=33999.99){ 
                $philhealth=412.50; 
            } else if($gross_income>=34000 && $gross_income<=34999.99){ 
                $philhealth=425.00;                 
            } else{ 
                $philhealth=437.50; 
            } 
        */
        //PAGIBIG CONTRIBUTION
        $pagibig=100.00;

        //tax CONTRIBUTION
        $tax = $gross_income*.1;
        /*
            if($gross_income<=150 && $gross_income>=12500){ 
                $tax=(($gross_income-0) + 0); 
            } else if($gross_income>=12501 && $gross_income<=13333){                         
                $tax=((($gross_income-12500)*.05) + 0); 
            } else if($gross_income>=13334 && $gross_income<=15000){                         
                $tax=((($gross_income-13333)*.10) + 41.67); 
            } else if($gross_income>=15001 && $gross_income<=18333){                         
                $tax=((($gross_income-15001)*.15) + 208.33); 
            } else if($gross_income>=18334 && $gross_income<=24167){                         
                $tax=((($gross_income-18333)*.20) + 708.33); 
            } else if($gross_income>=24168 && $gross_income<=33333){                         
                $tax=((($gross_income-24167)*.25) + 1875); 
            } else if($gross_income>=33334 && $gross_income<=54167){ 
                $tax=((($gross_income-33333)*.30) + 4166.67); 
            } else{ 
                $tax=((($gross_income-54167)*.32) + 10416.67); 
            } 
        */
        /*Other Deductions*/
        $sssloan = $_POST['sssloan'];
        $pagibigloan = $_POST['pagibigloan'];
        $facultysavingsdeposit = $_POST['facultysavingsdeposit'];
        $facultysavingsloan = $_POST['facultysavingsloan'];
        $salaryloan = $_POST['salaryloan'];
        $totalotherdeduction = $sssloan + $pagibigloan + $facultysavingsdeposit + $facultysavingsloan + $salaryloan ;

    }

    elseif (isset($_POST['net'])) { 
        $rateperhour = $_POST['rateperhour'];
        $cutoff = $_POST['cutoff'];
        $incomepercutoff = $rateperhour * $cutoff;

        /*Honorarium*/
        $rateperhour2 = $_POST['rateperhour2'];
        $cutoff2 = $_POST['cutoff2'];
        $totalhonorarium = $rateperhour2 * $cutoff2;

        /*Otherincome*/
        $rateperhour3 = $_POST['rateperhour3'];
        $cutoff3 = $_POST['cutoff3'];
        $totalotherincome = $rateperhour3 * $cutoff3;

        /*Income Summary*/
        $gross_income = $incomepercutoff + $totalhonorarium+$totalotherincome;

        $sss_contribution = $gross_income*.12;
    /*
        if($gross_income>= 1000 && $gross_income<=1249){ 
            $sss_contribution=73.70; 
        } else if($gross_income>=1250 && $gross_income<=1749){                     
            $sss_contribution=110.50; 
        } else if($gross_income>=1750 && $gross_income<=2249){ 
            $sss_contribution=147.30; 
        } else if($gross_income>=2250 && $gross_income<=2749.99){                     
            $sss_contribution=184.20; 
        } else if($gross_income>=2750 && $gross_income<=3249.99){                     
            $sss_contribution=221.00; 
        } else if($gross_income>=3250 && $gross_income<=3749.99){                     
            $sss_contribution=257.80; 
        } else if($gross_income>=3750 && $gross_income<=4249.99){                     
            $sss_contribution=294.70; 
        } else if($gross_income>=4250 && $gross_income<=4749.99){                     
            $sss_contribution=331.50; 
        } else if($gross_income>=4750 && $gross_income<=5249.99){                     
            $sss_contribution=368.30; 
        } else if($gross_income>=5250 && $gross_income<=5749.99){                     
            $sss_contribution=405.20; 
        } else if($gross_income>=5750 && $gross_income<=6249.99){                     
            $sss_contribution=442.00; 
        } else if($gross_income>=6250 && $gross_income<=6749.99){                     
            $sss_contribution=478.80; 
        } else if($gross_income>=6750 && $gross_income<=7249.99){ 
            $sss_contribution=515.70; 
        } else if($gross_income>=7250 && $gross_income<=7749.99){ 
            $sss_contribution=552.50; 
        } else if($gross_income>=7750 && $gross_income<=8249.99){ 
            $sss_contribution=589.30; 
        } else if($gross_income>=8250 && $gross_income<=8749.99){                     
            $sss_contribution=626.20; 
        } else if($gross_income>=8750 && $gross_income<=9249.99){ 
            $sss_contribution=663.00; 
        } else if($gross_income>=9250 && $gross_income<=9749.99){ 
            $sss_contribution=699.80; 
        } else if($gross_income>=9750 && $gross_income<=10249.99){ 
            $sss_contribution=736.70; 
        } else if($gross_income>=10250 && $gross_income<=10749.99){                     
            $sss_contribution=773.50; 
        } else if($gross_income>=10750 && $gross_income<=11249.99){ 
            $sss_contribution=810.30; 
        } else if ($gross_income>=11250 && $gross_income<=11749.99){ 
            $sss_contribution=847.20; 
        } else if($gross_income>=11750 && $gross_income<=12249.99){ 
            $sss_contribution=884.00; 
        } else if($gross_income>=12250 && $gross_income<=12749.99){                     
            $sss_contribution=920.80; 
        } else if($gross_income>=12750 && $gross_income<=13249.99){ 
            $sss_contribution=957.70; 
        } else if($gross_income>=13250 && $gross_income<=13749.99){                     
            $sss_contribution=994.50; 
        } else if($gross_income>=13750 && $gross_income<=14249.99){ 
            $sss_contribution=1031.30; 
        } else if($gross_income>=14250 && $gross_income<=14749.99){                     
            $sss_contribution=1068.20; 
        } else if($gross_income>=14750 && $gross_income<=15249.99){ 
            $sss_contribution=1105.00; 
        } else if($gross_income>=15250 && $gross_income<=15749.99){ 
            $sss_contribution=1141.80;    
        } else{ 
            $sss_contribution=1178.70; 
        } 
        
    */
        //PHILHEALTH TABLE CONTRIBUTIIOM
        $philhealth = 100;
        /*
            if($gross_income<=8999.99 && $gross_income>=0){ 
                $philhealth=100.00; 
            } else if($gross_income>=9000 && $gross_income<=9999.99){ 
                $philhealth=112.50; 
            } else if($gross_income>=10000 && $gross_income<=10999.99){                     
                $philhealth=125.00; 
            } else if($gross_income>=11000 && $gross_income<=11999.99){                     
                $philhealth=137.50; 
            } else if($gross_income>=12000 && $gross_income<=12999.99){                     
                $philhealth=150.00; 
            } else if($gross_income>=13000 && $gross_income<=13999.99){                     
                $philhealth=162.50; 
            } else if($gross_income>=14000 && $gross_income<=14999.99){                     
                $philhealth=175.00; 
            } else if($gross_income>=15000 && $gross_income<=15999.99){ 
                $philhealth=187.50; 
            } else if($gross_income>=16000 && $gross_income<=16999.99){                     
                $philhealth=200.00; 
            } else if($gross_income>=17000 && $gross_income<=17999.99){ 
                $philhealth=212.50; 
            } else if($gross_income>=18000 && $gross_income<=18999.99){                     
                $philhealth=225.00; 
            } else if($gross_income>=19000 && $gross_income<=19999.99){ 
                $philhealth=237.50; 
            } else if($gross_income>=20000 && $gross_income<=20999.99){                     
                $philhealth=250.00; 
            } else if($gross_income>=21000 && $gross_income<=21999.99){ 
                $philhealth=262.50; 
            } else if($gross_income>=22000 && $gross_income<=22999.99){                     
                $philhealth=275.00; 
            } else if($gross_income>=23000 && $gross_income<=23999.99){ 
                $philhealth=287.50; 
            } else if($gross_income>=24000 && $gross_income<=24999.99){ 
                $philhealth=300.00; 
            } else if ($gross_income>=25000 && $gross_income<=25999.99){ 
                $philhealth=312.50; 
            } else if($gross_income>=26000 && $gross_income<=26999.99){                     
                $philhealth=325.00; 
            } else if($gross_income>=27000 && $gross_income<=27999.99){ 
                $philhealth=337.50; 
            } else if($gross_income>=28000 && $gross_income<=28999.99){ 
                $philhealth=350.00; 
            } else if ($gross_income>=29000 && $gross_income<=29999.99){ 
                $philhealth=362.50; 
            } else if ($gross_income>=30000 && $gross_income<=30999.99){ 
                $philhealth=375.00; 
            } else if($gross_income>=31000 && $gross_income<=31999.99){ 
                $philhealth=387.50; 
            } else if($gross_income>=32000 && $gross_income<=32999.99){                     
                $philhealth=400.00; 
            } else if($gross_income>=33000 && $gross_income<=33999.99){ 
                $philhealth=412.50; 
            } else if($gross_income>=34000 && $gross_income<=34999.99){ 
                $philhealth=425.00;                 
            } else{ 
                $philhealth=437.50; 
            } 
        */
        //PAGIBIG CONTRIBUTION
        $pagibig=100.00;

        //tax CONTRIBUTION
        $tax = $gross_income*.1;
        /*
            if($gross_income<=150 && $gross_income>=12500){ 
                $tax=(($gross_income-0) + 0); 
            } else if($gross_income>=12501 && $gross_income<=13333){                         
                $tax=((($gross_income-12500)*.05) + 0); 
            } else if($gross_income>=13334 && $gross_income<=15000){                         
                $tax=((($gross_income-13333)*.10) + 41.67); 
            } else if($gross_income>=15001 && $gross_income<=18333){                         
                $tax=((($gross_income-15001)*.15) + 208.33); 
            } else if($gross_income>=18334 && $gross_income<=24167){                         
                $tax=((($gross_income-18333)*.20) + 708.33); 
            } else if($gross_income>=24168 && $gross_income<=33333){                         
                $tax=((($gross_income-24167)*.25) + 1875); 
            } else if($gross_income>=33334 && $gross_income<=54167){ 
                $tax=((($gross_income-33333)*.30) + 4166.67); 
            } else{ 
                $tax=((($gross_income-54167)*.32) + 10416.67); 
            } 
        */

                        /*Other Deductions*/
        $sssloan = $_POST['sssloan'];
        $pagibigloan = $_POST['pagibigloan'];
        $facultysavingsdeposit = $_POST['facultysavingsdeposit'];
        $facultysavingsloan = $_POST['facultysavingsloan'];
        $salaryloan = $_POST['salaryloan'];
        $totalotherdeduction = $sssloan + $pagibigloan + $facultysavingsdeposit + $facultysavingsloan + $salaryloan;

        $totaldeductions = (float)$sss_contribution + (float)$philhealth + (float)$pagibig+ (float)$tax+ (float)$sssloan + (float)$pagibigloan + (float)$facultysavingsdeposit + (float)$facultysavingsloan + (float)$salaryloan ; 
        $netincome = (float)$gross_income - (float)$totaldeductions; 

    }
    elseif (isset($_POST['new'])) {
    /*Basic Pay*/  
        $rateperhour="";
        $incomepercutoff="";
        $cutoff=""; 


        /*Honorarium*/
        $rateperhour="";
        $cutoff2="" ;
        $totalhonorarium="";

        /*Income Summary*/
        $gross_income = "";
        $netincome ="";
        $totalotherdeduction = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payrol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./CSS/style2.css">

    <script src="./js/file.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="./IMG/aLOGO.png">
                Kohi & Pastries
            </a>
        </div>

    </nav>
    <form action="" method="POST">
        <div class="d-flex align-items-center">
            <div class="leftsideofall col-md-3 pb-4 border-end">
                <section class="toplevel  pb-5">
                    <div  class="employeepic p-3 d-flex justify-content-center">
                        <div class="">
                            <label for="formFileSm" class="form-label">
                                <img src="./IMG/userlogo.png" alt="image" >
                                <button class="specialbtn form-control form-control-sm my-1" onclick="importData()">Browse</button>
                            </label>
                        </div>
            
                    </div>
                    <div class="employeeinfo">
                        <div class="align-items-center px-3">
                                <div class="mb-1 row">
                                    <label for="empnumber" class="col-sm-5 col-form-label">Employee Number</label>
                                    <div class="col-sm-7">
                                        <input type="text"  value="<?php echo $empnumber; ?>" class="form-control" id="empnumber" name="empnumber" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="fname" class="col-sm-5 col-form-label">First Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $fname; ?>" class="form-control" id="fname" name="fname" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="mname" class="col-sm-5 col-form-label">Middle Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $mname; ?>" class="form-control" id="mname" name="mname" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="sname" class="col-sm-5 col-form-label">Surname</label>
                                    <div class="col-sm-7">
                                        <input type="text"  value="<?php echo $sname; ?>" class="form-control" id="sname" name="sname" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="civilstatus" class="col-sm-5 col-form-label">Civil Status</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $civilstatus; ?>" class="form-control" id="civilstatus" name="civilstatus" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="designation" class="col-sm-5 col-form-label">Designation</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $designation; ?>" class="form-control" id="designation" name="designation" size="20"  >
                                    </div>
                                </div>
                
            
            

                                <div class="mb-1 row">
                                    <label for="qualified_dependent_status" class="col-sm-5 col-form-label">Qualified Dependents</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $qualified_dependent_status; ?>" class="form-control" id="qualified_dependent_status" name="qualified_dependent_status" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="numberofdependents" class="col-sm-5 col-form-label">Number of Dependent(s)</label>
                                    <div class="col-sm-7">
                                        <input type="text"  value="<?php echo $numberofdependents; ?>" class="form-control" id="numberofdependents" name="numberofdependents" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="paydate" class="col-sm-5 col-form-label">Paydate</label>
                                    <div class="col-sm-7">
                                        <input type="date" value="<?php echo $paydate; ?>" class="form-control" id="paydate" name="paydate" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="empstatus" class="col-sm-5 col-form-label">Employee Status</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $empstatus; ?>" class="form-control" id="empstatus" name="empstatus" size="20"  >
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="department1" class="col-sm-5 col-form-label">Department</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="<?php echo $department1; ?>" class="form-control" id="department1" name="department1" size="20"  >
                                    </div>
                                </div>
                        </div>  
                    </div>

                </section>
            </div>
            <div class="rightsideofall col-md-9">
                <section class="bottomlevel container d-flex justify-content-between my-3">
                    <div class="payments col-md px-3">
                        <fieldset class="mb-2">
                            <legend><h4 class="text-center">BASIC PAY</h4></legend>
                            <div class="mb-1 row">
                                <label for="rateperhour" class="col-sm-5 col-form-label">Rate / Hour </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($rateperhour) ?>"  class="form-control text-end" id="rateperhour" name="rateperhour" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="cutoff" class="col-sm-5 col-form-label">No. of Hours / Cut off </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($cutoff) ?>" class="form-control text-end" id="cutoff" name="cutoff"  placeholder="0.00">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="incomepercutoff" class="col-sm-5 col-form-label">Income Per Cut Off </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($incomepercutoff) ?>" readonly disabled class="form-control text-end" id="incomepercutoff" name="incomepercutoff" placeholder="0.00" >
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="mb-2">
                            <legend><h4 class="text-center">HONORARIUM</h4></legend>
                            <div class="mb-1 row">
                                <label for="rateperhour2" class="col-sm-5 col-form-label">Rate / Hour </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($rateperhour2) ?>" class="form-control text-end" id="rateperhour2" name="rateperhour2" placeholder="0.00"  >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="cutoff2" class="col-sm-5 col-form-label">No. of Hours/ Cut off </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($cutoff2)?>" class="form-control text-end" id="cutoff2" name="cutoff2" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="totalhonorarium" class="col-sm-5 col-form-label">Total Honorarium Pay </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($totalhonorarium) ?>" disabled class="form-control text-end" id="totalhonorarium" name="totalhonorarium"  >
                                </div>
                            </div>
                        </fieldset>   
                        <fieldset class="mb-2" >
                            <legend><h4 class="text-center">OTHER INCOME</h4></legend>
                            <div class="mb-1 row">
                                <label for="rateperhour3" class="col-sm-5 col-form-label">Rate / Hour </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($rateperhour3) ?>" class="form-control text-end" id="rateperhour3" name="rateperhour3" placeholder="0.00"  >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="cutoff3" class="col-sm-5 col-form-label">No. of Hours/ Cut off </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($cutoff3) ?>" class="form-control text-end" id="cutoff3" name="cutoff3" placeholder="0.00" >
                                </div>
                            </div>    
                            <div class="mb-1 row">
                                <label for="totalotherincome" class="col-sm-5 col-form-label">Total Other Income Pay </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($totalotherincome) ?>" disabled class="form-control text-end" id="totalotherincome" name="totalotherincome"  >
                                </div>
                            </div>
                        </fieldset>
                        <fieldset  >
                            <legend><h4 class="text-center">INCOME SUMMARY</h4></legend>
                            <div class="mb-1 row">
                                <label for="gross_income" class="col-sm-5 col-form-label">GROSS INCOME </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($gross_income) ?>" disabled class="form-control text-end" id="gross_income" name="gross_income"  >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="netincome" class="col-sm-5 col-form-label">NET INCOME </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($netincome) ?>" disabled class="form-control text-end" id="netincome" name="netincome"  >
                                </div>
                            </div>
                        
                        </fieldset>
                    </div>
                    <div class="deductions col-md px-3">
                        <fieldset >
                            <legend><h4 class="text-center">REGULAR DEDUCTIONS</h4></legend>
                            <div class="mb-1 row">
                                <label for="sss_contribution" class="col-sm-5 col-form-label">SSS Contribution </label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($sss_contribution) ?>" readonly disabled class="form-control text-end" id="sss_contribution" name="sss_contribution" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="philhealth" class="col-sm-5 col-form-label">PhilHealth Contribution </label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($philhealth) ?>"  readonly disabled class="form-control text-end" id="philhealth" name="philhealth" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="pagibig" class="col-sm-5 col-form-label">Pagibig Contribution </label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($pagibig) ?>"  readonly disabled class="form-control text-end" id="pagibig" name="pagibig" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="tax" class="col-sm-5 col-form-label">Tax </label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($tax) ?>"  readonly disabled class="form-control text-end" id="tax" name="tax" placeholder="0.00" >
                                </div>
                            </div>
                        </fieldset>
                        <fieldset  >
                            <legend><h4 class="text-center">OTHER DEDUCTIONS</h4></legend>
                            <div class="mb-1 row">
                                <label for="sssloan" class="col-sm-5 col-form-label">SSS Loan </label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($sssloan) ?>" class="form-control text-end" id="sssloan" name="sssloan" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="pagibigloan" class="col-sm-5 col-form-label">Pagibig Loan </label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($pagibigloan) ?>" class="form-control text-end" id="pagibigloan" name="pagibigloan" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="facultysavingsdeposit" class="col-sm-5 col-form-label">Faculty Savings Deposit</label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($facultysavingsdeposit) ?>" class="form-control text-end" id="facultysavingsdeposit" name="facultysavingsdeposit" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="facultysavingsloan" class="col-sm-5 col-form-label">Faculty Savings Loan</label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($facultysavingsloan) ?>" class="form-control text-end" id="facultysavingsloan" name="facultysavingsloan" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="salaryloan" class="col-sm-5 col-form-label">Salary Loan</label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($salaryloan) ?>" class="form-control text-end" id="salaryloan" name="salaryloan" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="otherdeductions" class="col-sm-5 col-form-label">Others</label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?php echo($totalotherdeduction) ?>" name="totalotherdeduction"  disabled class="form-control text-end" id="otherdeductions" name="otherdeductions"  >
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend><h4 class="text-center">DEDUCTION SUMMARY</h4></legend>
                            <div class="mb-1 row">
                                <label for="totaldeductions" class="col-sm-5 col-form-label">Total Deductions </label>
                                <div class="col-sm-7">
                                    <input type="number" value="<?php echo($totaldeductions) ?>" disabled class="form-control" id="totaldeductions" name="totaldeductions"  >
                                </div>
                            </div>
            
                    
                        </fieldset>
                    </div>
                </section>

            
            </div>
        </div>
        <section class="footer fixed-bottom p-2">
            <div class="btnscontrol d-flex justify-content-center gap-3  align-items-center">
                <input type="submit" class="btn" name="calculate" id="calculate" value="CALCULATE GROSS INCOME">
                <input type="submit" class="btn " name="net" id="net" value="CALCULATE NET INCOME">
                <input type="submit" class="btn "name="new" id="new" value="NEW" >
                <input type="submit" class="btn " value="CANCEL" >   
                <input type="submit" class="btn " value="PRINT PAYSLIP  ">
                <input type="submit" class="btn" value="PREVIEW PAYSLIP DETAILS">
                <input type="submit" class="btn" name="exit" value="EXIT">
            </div>
        </section>
    </form>
</body>
</html>