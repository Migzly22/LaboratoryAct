<?php
    session_start();
    if (isset($_SESSION["logged"])) {
        if ( $_SESSION["logged"] != "Web3") {
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
    <title>Point Of Sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./CSS/style1.css">
    <link rel="stylesheet" href="./CSS/style31.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/web31.js" defer></script>
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
    <section class="testing">
        <div class=" d-flex">
            <div class=" rightside container-fluid">
                <div class="topright">
                    <h5 class="text-center fw-bolder">Item Display</h5>
                </div>
                <div class="itemdisplay pb-2">
                    <div class="line " id="1">
                        <img src="./IMG/dish1.jpg"><br>
                        <label name="order1label" id="order1label" for="order1">Iced Coffee</label>
                    </div>
                    <div class="line  " id="2">
                        <img src="./IMG/menu1.jpg"><br>
                        <label class="checkmark" for="order2">Cappuccino </label>
                    </div>
                    <div class="line  " id="3">
                        <img src="./IMG/menu2.jpg"><br>
                                <label class="checkmark"  for="order3">Americano
                                    
                                </label>
                    </div>
                    <div class="line  " id="4">
                        <img src="./IMG/menu3.jpg"><br>
                                <label class="checkmark "  for="order4">Espresso Martini
                                    
                                </label>
                    </div>
                    <div class="line  " id="5">
                        <img src="./IMG/dish5.jpg"><br>
                                <label class="checkmark" for="order5">Frappe
                                    
                                </label>
                    </div>
                    <div class="line  " id="6">
                        <img src="./IMG/dish7.jpg"><br>
                                <label class="checkmark" for="order6">Strawberry Cake
                                    
                                </label>
                    </div>
                    <div class="line  " id="7">
                        <img src="./IMG/menu4.jpg"><br>
                                <label class="checkmark" for="order7">Chocolate Cake
                                    
                                </label>
                    </div>
                    <div class="line  " id="8">
                        <img src="./IMG/dish3.jpg"><br>
                                <label class="checkmark" for="order8">Icecream Cake
                                    
                                </label>    
                    </div>
                    <div class="line  " id="9">
                        <img src="./IMG/menu5.jpg"><br>
                                <label class="checkmark" for="order9">Blackforest Cake
                                    
                                </label>
                    </div>
                    <div class="line  " id="10">
                        <img src="./IMG/menu6.jpg"><br>
                                <label class="checkmark" for="order10">Blueberry Cake
                                    
                                </label>
                    </div>
                    <div class="line  " id="11">
                        <img src="./IMG/menu7.jpg"><br>
                                <label class="checkmark" for="order11">Éclair
                                    
                                </label>
                    </div>
                    <div class="line  " id="12">
                        <img src="./IMG/menu8.jpg"><br>
                                <label class="checkmark" for="order12">Cream Puffs
                                    
                                </label>
                    </div>
                    <div class="line  " id="13">
                        <img src="./IMG/menu9.jpg"><br>
                                <label class="checkmark" for="order13">Macarons
                                    
                                </label>
                    </div>
                    <div class="line  " id="14">
                        <img src="./IMG/dish4.jpg"><br>
                                <label class="checkmark" for="order14">Crossant
                                    
                                </label>
                    </div>
                    <div class="line  " id="15">
                        <img src="./IMG/dish8.jpg"><br>
                                <label class="checkmark" for="order15">Blueberry Pie
                                    
                                </label>
                    </div>
                    <div class="line  " id="16">
                        <img src="./IMG/j1.jpg"><br>
                                <label class="checkmark" for="order16">Melon Pan
                                    
                                </label>
                    </div>
                    <div class="line  " id="17">
                        <img src="./IMG/j2.jpg"><br>
                                <label class="checkmark" for="order17">Red Bean Bun
                                    
                                </label>
                    </div>
                    <div class="line  " id="18">
                        <img src="./IMG/j3.jpg"><br>
                                <label class="checkmark" for="order18">Parmesan Cheese Bun
                                    
                                </label>
                    </div>
                    <div class="line  " id="19">
                        <img src="./IMG/j4.jpg"><br>
                                <label class="checkmark" for="order19">Soft Milk Bun
                                    
                                </label>
                    </div>
                    <div class="line  " id="20">
                        <img src="./IMG/j5.jpg"><br>
                                <label class="checkmark" for="order20">Milky Cheese Roll
                                    
                                </label>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="bottompart">
            <div class="Toppart">
                <div class="Tleft d-flex justify-content-between align-items-center">
                    <div class="lefty col-md-5 pt-3">
                        <div class="mb-1 row px-3 align-items-center">
                            <label for="nameitem" class="col-sm-5 col-form-label">Name of Item</label>
                            <div class="col-sm-7">
                                <input type="text" disabled  class="form-control  text-end" id="nameitem" name="nameitem" >
                            </div>
                        </div>
                        <div class="mb-1 row px-3 align-items-center">
                            <label for="quan" class="col-sm-5 col-form-label">Quantity</label>
                            <div class="col-sm-7">
                                <input type="number"  class="form-control  text-end" id="quan" name="quan" >
                            </div>
                        </div>
                        <div class="mb-1 row px-3 align-items-center">
                            <label for="price" class="col-sm-5 col-form-label">Price</label>
                            <div class="col-sm-7">
                                <input type="number" disabled  class="form-control text-end" id="price" name="price" >
                            </div>
                        </div>
                        <div class="mb-1 row px-3 align-items-center">
                            <label for="discounted_amount" class="col-sm-5 col-form-label">Discount</label>
                            <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="0" selected>No Discount</option>
                                    <option value="0.1">With Discount Card</option>
                                    <option value="0.12">Employee Discount</option>
                                    <option value="0.2">Senior Citizen</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mb-1 row px-3 align-items-center">
                            <label for="cashrendered" class="col-sm-5 col-form-label">Cash Rendered</label>
                            <div class="col-sm-7">
                                <input type="number"  class="form-control  text-end" id="cashrendered" name="cashrendered" >
                            </div>
                        </div>
                        <div class="mb-1 row px-3 align-items-center">
                            <label for="changecash" class="col-sm-5 col-form-label">Change</label>
                            <div class="col-sm-7">
                                <input type="number" disabled  class="form-control text-end" id="changecash" name="changecash" >
                            </div>
                        </div>

                    </div>
                    
                    <div class="summary col-md-6 p-2">
                        <div class="Summary changeable activate " id="activestat1">
                            <h5 class="text-center">Summary</h5>
                            <div class="mb-1 row px-3 align-items-center">
                                <label for="discount_amount" class="col-sm-5 col-form-label">Discount Amount</label>
                                <div class="col-sm-7">
                                    <input type="number" disabled  class="form-control text-end" id="discount_amount" name="discount_amount" >
                                </div>
                            </div>
                            <div class="mb-1 row px-3 align-items-center">
                                <label for="discounted_amount" class="col-sm-5 col-form-label">Discounted Amount</label>
                                <div class="col-sm-7">
                                    <input type="number" disabled  class="form-control text-end" id="discounted_amount" name="discounted_amount" >
                                </div>
                            </div>
                            <div class="mb-1 row px-3">
                                <label for="totalquan" class="col-sm-5 col-form-label">Total Quantity</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control text-end" id="totalquan" name="totalquan" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row px-3">
                                <label for="totaldiscount_given" class="col-sm-5 col-form-label">Total Discount Given</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control text-end" id="totaldiscount_given" name="totaldiscount_given" placeholder="0.00" >
                                </div>
                            </div>
                            <div class="mb-1 row px-3">
                                <label for="totaldiscount_amount" class="col-sm-5 col-form-label">Total Discounted Amount </label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control text-end" id="totaldiscount_amount" name="totaldiscount_amount" placeholder="0.00" >
                                </div>
                            </div>
                        </div>
                        <div class="changeable " id="activestat2">
                            <div class="calcubtn  mt-2 p-3 ">
                                <div class="d-flex justify-content-center gap-3 ">
                                    <div class="enter col-md-2">
                                        <button type="button" class="btn btn-primary col-sm-3">ENTER</button>
                                    </div>
                                    <div class="btnscal col-md-7 row gap-1">
                                        <button type="button" class="btn btn-primary col-sm-3">/</button>
                                        <button type="button" class="btn btn-primary col-sm-3">*</button>
                                        <button type="button" class="btn btn-primary col-sm-3">-</button>
                                        
                
                                        <button type="button" class="btn btn-primary col-sm-3">7</button>
                                        <button type="button" class="btn btn-primary col-sm-3">8</button>
                                        <button type="button" class="btn btn-primary col-sm-3">9</button>
                
                                        <button type="button" class="btn btn-primary col-sm-3">4</button>
                                        <button type="button" class="btn btn-primary col-sm-3">5</button>
                                        <button type="button" class="btn btn-primary col-sm-3">6</button>
                                        
                
                                        <button type="button" class="btn btn-primary col-sm-3">1</button>
                                        <button type="button" class="btn btn-primary col-sm-3">2</button>
                                        <button type="button" class="btn btn-primary col-sm-3">3</button>
                                        
                
                                        <button type="button" class="btn btn-primary col-sm-3">.</button>
                                        <button type="button" class="btn btn-primary col-sm-3">0</button>
                                        <button type="button" class="btn btn-primary col-sm-3">+</button>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post" class="central col-md-1 px-2 d-flex  flex-column gap-1">
                        <button type="button" class="btn " id="calculate">Calculate</button>
                        <button type="button" class="btn " id="change">Change</button>
                        <button type="button" class="btn " id="newbtn">New</button>
                        <button type="button" class="btn " id="numpad">Numpad</button>
                        <button type="button" class="btn " id="cancel">Cancel</button>
                        <input type="submit" class="btn" name="exit" value="Exit">
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>