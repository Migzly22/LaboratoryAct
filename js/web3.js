const numpad = document.getElementById('numpad')
var activestatus = true;
var discount = 0
const items = [
    ["Iced Coffee",50],
    ["Cappuccino",50],
    ["Americano",50],
    ["Espresso Martini",50],
    ["Frappe",50],
    ["Strawberry Cake",250],
    ["Chocolate Cake",250],
    ["Icecream Cake",250],
    ["Blackforest Cake",250],
    ["Blueberry Cake",250],
    ["Éclair",75],
    ["Cream Puffs",75],
    ["Macarons",75],
    ["Crossant",75],
    ["Blueberry Pie",75],
    ["Melon Pan",40],
    ["Red Bean Bun",40],
    ["Parmesan Cheese Bun",40],
    ["Soft Milk Bun",40],
    ["Milky Cheese Roll",40],
]
var price = 0

// to show the numpad
numpad.addEventListener('click',()=>{
    
    let activestat1 = document.querySelector('#activestat1')
    let activestat2 = document.querySelector('#activestat2')

    if(activestatus) {
        activestat1.classList.remove('activate')
        activestat2.classList.add('activate')
        activestatus = !activestatus

    }else{
        activestat2.classList.remove('activate')
        activestat1.classList.add('activate')
        activestatus = !activestatus
    }

})

//new
const newbtn = document.getElementById('newbtn')
newbtn.addEventListener('click',()=>{
    let activestat1 = document.querySelector('.active')
    activestat1.classList.remove('active')

    let lefty = document.getElementsByClassName('form-control')
    for (let i = 0; i < lefty.length; i++) {
        lefty[i].value = ""
    }
    let form_select = document.getElementsByClassName('form-select')[0]
    form_select.value = 0

    price = 0
    discount = 0
});

// Discount option
$(".form-select").change(function(e){
    let thisvalue = this.value
    discount = thisvalue
});


// selecting item
const itemdisplay = document.getElementsByClassName('itemdisplay')[0]
itemdisplay.addEventListener('click',(e)=>{
    let tags = e.target
    let targetid = "12312312";

    if (tags.tagName == "IMG") {
        targetid = tags.parentElement.id
    }else if (tags.tagName == "LABEL"){
        targetid = tags.parentElement.id
    }else{
        if(tags.id.length == 0) {
            return 0
        }else{
            targetid = tags.id
        }
    }

    let activestat = document.getElementById(targetid)
    let activecheck = document.getElementsByClassName('active')[0]

    if(activecheck != undefined){
        activecheck.classList.remove('active')
    }
    activestat.classList.add('active')

    document.getElementById('nameitem').value = items[targetid-1][0]

    let quantity = 0

    if(document.getElementById('quan').value.length == 0 ){
        document.getElementById('quan').value = 1
        quantity = 1
    }else{
        quantity = document.getElementById('quan').value
    }

    price = items[targetid-1][1]
    document.getElementById('price').value = price * quantity




})

// quantity change
$("#quan").change(function(e){
    if( document.getElementsByClassName('active').length == 0) {
        this.value = ""
        return 0
    }

    let thisvalue = this.value

    if (thisvalue <= 0 ) {
        this.value = 1
        thisvalue = 1
    }

    document.getElementById('price').value = price * thisvalue

});

const calculate = document.getElementById('calculate')
calculate.addEventListener('click',()=>{
    let quan = document.getElementById('quan').value
    let discount_amount = (price*quan)*discount


    let discounted = (price*quan) - discount_amount

    document.getElementById('discount_amount').value = discount_amount
    document.getElementById('discounted_amount').value = discounted
    document.getElementById('totalquan').value = quan
    document.getElementById('totaldiscount_given').value = discount_amount
    document.getElementById('totaldiscount_amount').value = discounted
})


const change = document.getElementById('change')
change.addEventListener('click',()=>{
    let totalprice = document.getElementById('totaldiscount_amount').value
    let cash = document.getElementById('cashrendered').value

    if(cash.length == 0) {
        alert("Please Enter The Cash Amount First")
    }else if(parseInt(cash) < parseInt(totalprice)) {
        alert("Wrong Cash Amount.. Please Try Again")
    }

    document.getElementById('changecash').value = parseInt(cash) - parseInt(totalprice)

})