
$(document).ready(function() {

//DECLARATION OF GLOBAL VARIABLES

    var price = 0;
    var quantity = 0; 
    var	discount_amount = 0;
    var discounted_amount = 0;
    var cash_given = 0;
    var total_bills = 0;
    var total_quantity = 0;



    // FUNCTIONS FOR THE CHECKBOXES OF ITEMS
    function price_ordersummary(price,summary) {
    document.getElementById("price").value = price;
    document.getElementById("summary").value = summary;
    document.getElementById("quantity").focus();
    }
    function price_ordersummary_empty() {
        document.getElementById("price").value = "";
        document.getElementById("summary").value = "";
    }

    //FUNCTIONS FOR THE RADIO BUTTONS AND CHECKBOXES
    function KPBundle1() {

        $("#bundle1").prop( "checked", true );
        $("#bundle2").prop( "checked", true );
        $("#bundle3").prop( "checked", true );
        $("#bundle4").prop( "checked", true );

        $("#bundles1").prop( "checked", false );
        $("#bundles2").prop( "checked", false );
        $("#bundles3").prop( "checked", false );
        $("#bundles4").prop( "checked", false );

        document.getElementById("price").value = 415.00;
        document.getElementById("summary").value = "K&P BUNDLE 1";
        document.getElementById("quantity").focus();
        
    }

    function KPBundle1_deselect() {
        document.getElementById("price").value = "";
        document.getElementById("summary").value = "";
    }

    function KPBundle2() {

        $("#bundle1").prop( "checked", false );
        $("#bundle2").prop( "checked", false );
        $("#bundle3").prop( "checked", false );
        $("#bundle4").prop( "checked", false );

        $("#bundles1").prop( "checked", true );
        $("#bundles2").prop( "checked", true );
        $("#bundles3").prop( "checked", true );
        $("#bundles4").prop( "checked", true );

        document.getElementById("price").value = 1125.00;
        document.getElementById("summary").value = "K&P BUNDLE 2";
        document.getElementById("quantity").focus();
        
    }

    function KPBundle2_deselect() {
        document.getElementById("price").value = "";
        document.getElementById("summary").value = "";
    }

    function calculatebills_button (price,quantity) {
        price = $("#price").val();
        quantity = $("#quantity").val();

        //FORMULAS FOR DISCOUNT AND DISCOUNTED AMOUNT

        if (price.length == 0) {
            alert("Please Select An Item First")
            return 0
        }else if (quantity.length == 0){
            alert("Please Enter The Quantity")
            return 0
        }


        discount_amount = (price * quantity) * 0.10;
        discounted_amount = (price * quantity) - discount_amount;
        document.getElementById("discount_amount").value = discount_amount;
        document.getElementById("discounted_amount").value = discounted_amount;
        document.getElementById("cash_given").focus();

    }

    function change_button (cash_given,discounted_amount,total_bills,total_quantity) {
        cash_given = $("#cash_given").val() ;
        discounted_amount = $("#discounted_amount").val() ;
        quantity = $("#quantity").val() - 0;

        if(discount_amount.length == undefined){
            alert("Discounted Amount Has no Value. Please Try Again")
            return 0
        }

        //FORMULA FOR CHANGE
        change = cash_given - discounted_amount;

        document.getElementById("total_bills").value = discounted_amount;
        document.getElementById("total_quantity").value = quantity;

        if(change < 0){
            alert("Incorrect Amount. Please Try Again")
        }else{
            document.getElementById("change").value = change;
        }
        


    }

    function new_button () {

        //CLEAR ALL TEXTBOXES
        document.getElementById("price").value = "";
        document.getElementById("quantity").value = "";
        document.getElementById("discount_amount").value = "";
        document.getElementById("discounted_amount").value = "";
        document.getElementById("cash_given").value = "";
        document.getElementById("change").value = "";
        document.getElementById("summary").value = "";
        document.getElementById("total_bills").value = "";
        document.getElementById("total_quantity").value = "";
        
    document.getElementById("bundleselection").value = "none";

    //CLEAR ALL RADIO BUTTONS SELECTIONS WITH ITS CHECKBOXES
        functionuncheck()
        
    //CLEAR ALL CHECKBOXES IN ITEMS
        $("#order1").prop("checked",false);
        $("#order2").prop("checked",false);
        $("#order3").prop("checked",false);
        $("#order4").prop("checked",false);
        $("#order5").prop("checked",false);
        $("#order6").prop("checked",false);
        $("#order7").prop("checked",false);
        $("#order8").prop("checked",false);
        $("#order9").prop("checked",false);
        $("#order10").prop("checked",false);
        $("#order11").prop("checked",false);
        $("#order12").prop("checked",false);
        $("#order13").prop("checked",false);
        $("#order14").prop("checked",false);
        $("#order15").prop("checked",false);
        $("#order16").prop("checked",false);
        $("#order17").prop("checked",false);
        $("#order18").prop("checked",false);
        $("#order19").prop("checked",false);
        $("#order20").prop("checked",false);
            

    }

    //ITEMS -- IMAGES (ITEMS MENU )
    $("#order1").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(50.00,"Iced Coffee");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order2").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(50.00,"Cappuccino");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order3").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(50.00,"Americano");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order4").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(50.00,"Espresso Martini");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order5").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(50.00,"Frappe");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order6").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(250.00,"Strawberry Cake");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order7").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(250.00,"Chocolate Cake");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order8").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(250.00,"Ice Cream Cake");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order9").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(250.00,"Blackforest Cake");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order10").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(250.00,"BlueBerry Cake");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order11").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(75.00,"Éclair");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order12").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(75.00,"Cream Puffs");
    } else {
        price_ordersummary_empty();
    }
    });

    $("#order13").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(75.00,"Macarons");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order14").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(75.00,"Crossant");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order15").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(75.00,"BlueBerry Pie");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order16").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(40.00,"Melon Pan");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order17").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(40.00,"Red Bean Bun");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order18").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(40.00,"Parmesan Cheese Bun");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order19").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(40.00,"Soft Milk Bun");
    } else {
        price_ordersummary_empty();
    }
    });
    $("#order20").click(function(e) {
    if ($(this).prop("checked") == true ) {
        price_ordersummary(40.00,"Milky Cheese Roll");
    } else {
        price_ordersummary_empty();
    }
    });

    // New Added Testing Feature
    const functionuncheck = ()=>{
        $("#bundle1").prop( "checked", false );
        $("#bundle2").prop( "checked", false );
        $("#bundle3").prop( "checked", false );
        $("#bundle4").prop( "checked", false );

        $("#bundles1").prop( "checked", false );
        $("#bundles2").prop( "checked", false );
        $("#bundles3").prop( "checked", false );
        $("#bundles4").prop( "checked", false );
    }
    $("#bundleselection").change(function(e){
        let thisvalue = this.value

        KPBundle1_deselect();
        KPBundle2_deselect();
        functionuncheck()

        if(thisvalue == "K&P1") {
            KPBundle1();
        } else if (thisvalue == "K&P2") {
            KPBundle2();
        }
    });




    /*BUTTONS*/

    $("#calculate").click(function(e){
            e.preventDefault();
            calculatebills_button();

    });


    $("#changebutton").click(function(e){
        e.preventDefault();
        change_button();

    });

    $("#new").click(function(e) {
        e.preventDefault();
        new_button();

    });


});



  
