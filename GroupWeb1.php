<?php
    session_start();
    if (isset($_SESSION["logged"])) {
        if ( $_SESSION["logged"] != "Web1") {
            header("Location:./index.php");
            exit;
        }
    }else{
        header("Location:./index.php");
        exit;
    }


    if (isset($_POST["exit"])){
        unset($_SESSION["logged"]);
        header("Location:./index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kohi&Pastries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./CSS/style12.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/web1.js" defer></script>
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

    <section class="d-flex justify-content-between gap-5">
        <div class="centerside col-md-2 py-3 ms-3">
            <div class="mb-2">
                
                <form method="post"class="orderchoice" > 
                    <h5 class="text-center">K&P Bundles</h5> 
                    <select class="form-select" id="bundleselection" aria-label="Default select example">
                        <option selected value="none">Select</option>
                        <option value="K&P1">K&P 1</option>
                        <option value="K&P2">K&P 2</option>
                    </select>   
                </form>
            </div>
            <div class="mb-2">
                <form method="post"action="" class="d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center mb-2 bundlebox p-2">
                        <h5 class="text-center bundleword">K&P1</h5>
                        <div class="col-sm-10">
                            <label class="container">
                                <input type="checkbox" name="donutbundle1" id="bundle1" value="bundle1">
                                <label class="checkmark">1pcs. Bread</label>
                            </label>
                            <label class="container">
                                <input type="checkbox" name="donutbundle1" id="bundle2" value="bundle2">
                                <label class="checkmark">1pcs. Pastry</label>
                            </label>
                            <label class="container">
                                <input type="checkbox" name="donutbundle1" id="bundle3" value="bundle3">
                                <label class="checkmark">1 Random Cake</label>
                            </label>
                            <label class="container">
                                <input type="checkbox" name="donutbundle1" id="bundle4" value="bundle4">
                                <label class="checkmark">Iced Coffee</label>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2 bundlebox p-2">
                        <h5 class="text-center bundleword">K&P2</h5>
                        <div class="col-sm-10">
                            <label class="container">
                                <input type="checkbox" name="donutbundle2" id="bundles1" value="bundles1">
                                <label class="checkmark">5pcs. of Bread</label>
                            </label>
                            <label class="container">
                                <input type="checkbox" name="donutbundle2" id="bundles2" value="bundles2">
                                <label class="checkmark">5pcs. of Pastries</label>
                            </label>

                            <label class="container">
                                <input type="checkbox" name="donutbundle2" id="bundles3" value="bundles3">
                                <label class="checkmark">2 Random Cakes</label>
                            </label>

                            <label class="container">
                                <input type="checkbox" name="donutbundle2" id="bundles4" value="bundles4">
                                <label class="checkmark">Iced Coffee</label>
                            </label>
                        </div>
                    </div>
                </form>
                
            </div>

            <div class="mb-2 ">
                <h5 class="text-center">Order Image</h5>
                <div class="orderimg shadow-lg p-3">

                </div>
            </div>
        </div>
        <div class="rightside col-md-9">
            <div class="container">
                <div class="topright pt-2">
                    <h3 class="text-center m-0 pb-3 ">Menu</h3>
                </div>
                <div class="d-flex flex-column menubox">
                    <div class="divbox">
                        <label  for="order1" class="gallery d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/dish1.jpg">
                            </div>
                            <label class="product col-sm-6" for="order1">
                                <div class="text-center">
                                    <label  name="order1label" id="order1label" for="order1">
                                        Iced Coffee
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order1"  id="order1">
                                </div>
    
                            </label>
                        </label>
                        <label for="order2" class="gallery d-flex align-items-center ">
                            <div class="col-sm-6">
                                <img src="./IMG/menu1.jpg">
                            </div>
                            <label class="product col-sm-6" for="order2">
                                <div class="text-center">
                                    <label class="checkmark" for="order2">Cappuccino
                                    </label>
                                    
                                </div>
                                
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order2"  id="order2">
                                </div>
                            </label>
                        </label>
                        <label for="order3" class="gallery  d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu2.jpg">
                            </div>
                            <label class="product col-sm-6" for="order3">
                                <div class="text-center">
                                    
                                    <label class="checkmark"  for="order3">Americano
                                        
                                    </label>
                                    
                                </div>
                                
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order3"  id="order3">
                                </div>
                            </label>
                        </label>
                        <label for="order4" class="gallery d-flex align-items-center ">
                            <div class="col-sm-6">
                                <img src="./IMG/menu3.jpg" >
                            </div>
                            
                            <label class="product col-sm-6" for="order4">
                                <div class="text-center">
                                    
                                    <label class="checkmark "  for="order4">Espresso Martini
                                        
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order4"  id="order4">
                                </div>

                            </label>
                        </label>
                        <label for="order5" class="gallery  d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/dish5.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order5">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order5">Frappe
                                       
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order5"  id="order5">
                                </div>
                                
                              
                              
                            </label>
                        </label>
                    </div>
                    <div class="divbox">
                        <label for="order6" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/dish7.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order6">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order6">Strawberry Cake
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order6"  id="order6">
                                </div>
                            </label>
                        </label>
                        <label for="order7" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu4.jpg">
                            </div>
                            <label class="product col-sm-6" for="order7">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order7">Chocolate Cake
                                        
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order7"  id="order7">
                                </div>
                            </label>
                        </label>
                        <label for="order8" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/dish3.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order8">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order8">Ice Cream Cake
                                       
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order8"  id="order8">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order9" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu5.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order9">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order9">Blackforest Cake
                                       
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order9"  id="order9">
                                </div>
                                
                              
                              
                          </label>
                        </label>
                        <label for="order10" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu6.jpg">
                            </div>
                           
                            <label class="product col-sm-6" for="order10">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order10">BlueBerry Cake
                                        
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order10"  id="order10">
                                </div>
                            </label>
                        </label>
                    </div>
                    <div class="divbox">
                        <label for="order11" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu7.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order11">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order11">Éclair
                                        
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order11"  id="order11">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order12" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu8.jpg">
                            </div>
                           
                            <label class="product col-sm-6" for="order12">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order12">Cream Puffs
                                       
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order12"  id="order12">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order13" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/menu9.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order13">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order13">Macarons
                                       
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order13"  id="order13">
                                </div>
                                
                               
                                
                            </label>
                        </label>
                        <label for="order14" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                
                                <img src="./IMG/dish4.jpg">
                            </div>
                            <label class="product col-sm-6" for="order14">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order14">Crossant
                                       
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order14"  id="order14">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order15" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/dish8.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order15">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order15">BlueBerry Pie
                                      
                                    </label>
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order15"  id="order15">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                    </div>
                    <div class="divbox">
                        <label for="order16" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/j1.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order16">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order16">Melon Pan
                                        
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order16"  id="order16">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order17" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/j2.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order17">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order17">Red Bean Bun
                                        
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order17"  id="order17">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order18" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/j3.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order18">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order18">Parmesan Cheese Bun
                                        
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order18"  id="order18">
                                </div>
                                
                               
                                
                            </label>
                        </label>
                        <label for="order19" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/j4.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order19">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order19">Soft Milk Bun
                                        
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order19"  id="order19">
                                </div>
                                
                                
                                
                            </label>
                        </label>
                        <label for="order20" class="gallery col-md-3 d-flex align-items-center">
                            <div class="col-sm-6">
                                <img src="./IMG/j5.jpg">
                            </div>
                            
                            <label class="product col-sm-6" for="order20">
                                <div class="text-center">
                                    
                                    <label class="checkmark" for="order20">Milky Cheese Roll
                                        
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" name="order20"  id="order20">
                                </div>
                                
                                
                                
                               
                            </label>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer fixed-bottom p-2">

    <form method="post" class="">
        <div class=" btnscontrol d-flex justify-content-center gap-3  align-items-center">
            <a class="btn" id="Orderdetail" name="od">Order Details</a>
            <button class="btn" id="calculate" name="calculate">Calculate</button>
            <button class="btn" id="changebutton" name="changebutton">Change</button>
            <button class="btn" id="new" name="new">New</button>
            <button class="btn" id="print" name="print">Print</button>
            <button class="btn" id="exit" name="exit">Exit</button>
        </div>
        <div class="sub-menu" >
            <div class="leftside p-3 orderdetails">
                <h5 class="text-center text-color">Order Details</h3>
                <form  method="post" action="">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4 text-color">
                            <div class="mb-3 row">
                                <label for="price" class="col-sm-5 col-form-label">Price</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" id="price" name="price" readonly >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="quantity" class="col-sm-5 col-form-label" >Quantity</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="quantity" name="quantity" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="discount_amount" class="col-sm-5 col-form-label">Discount Amount</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="discount_amount" name="discount_amount" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="discounted_amount" class="col-sm-5 col-form-label">Discounted Amount</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="discounted_amount" name="discounted_amount" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-color">
                            <div class="mb-3 row">
                                <label for="total_bills" class="col-sm-5 col-form-label">Total Bills</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="total_bills" name="total_bills" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="total_quantity" class="col-sm-5 col-form-label">Total Quantity</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="total_quantity" name="total_quantity" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="total_quantity" class="col-sm-5 col-form-label">Cash Given</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="cash_given" name="cash_given" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="total_quantity" class="col-sm-5 col-form-label">Change</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="change" name="change" readonly >
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 text-color">
                            <label for="summary" class="form-label">ORDER SUMMARY</label>
                            <textarea class="form-control"  id="summary" name="summary" rows="4" cols="50" readonly></textarea>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </form>
    
    </section>


<script type="text/javascript">
    $(document).ready(function(){
        //jquery for toggle sub menus
        $('#Orderdetail').click(function(){
            let parentname = $(this).parent()
            console.log( $('#Orderdetail'))
            console.log(parentname)
            parentname.next('.sub-menu').slideToggle();
        //$(this).next('.sub-menu').slideToggle();
        //$(this).find('.dropdown').toggleClass('rotate');
        });

    });
</script>
</body>
</html>