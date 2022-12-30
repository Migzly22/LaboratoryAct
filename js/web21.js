const calculate = document.getElementById("calculateid")
calculate.addEventListener('click',(e)=>{
    
    let container = []
    container.push(document.getElementsByTagName('input')[11].value.length)
    container.push(document.getElementsByTagName('input')[12].value.length)
    container.push(document.getElementsByTagName('input')[14].value.length)
    container.push(document.getElementsByTagName('input')[15].value.length)
    container.push(document.getElementsByTagName('input')[17].value.length)
    container.push(document.getElementsByTagName('input')[18].value.length)

    for (let i = 0; i < container.length; i++) {
        if(container[i]  == 0){
            e.preventDefault()
            Swal.fire(
                'Oops...',
                'Please Insert Some value',
                'error'
            )
            break
        }
    }

});

const net = document.getElementById("net")
net.addEventListener('click',(e)=>{
    

    let container = []
    container.push(document.getElementsByTagName('input')[26].value.length)
    container.push(document.getElementsByTagName('input')[27].value.length)
    container.push(document.getElementsByTagName('input')[28].value.length)
    container.push(document.getElementsByTagName('input')[29].value.length)
    container.push(document.getElementsByTagName('input')[30].value.length)

    for (let i = 0; i < container.length; i++) {
        if(container[i]  == 0){
            e.preventDefault()
            Swal.fire(
                'Oops...',
                'Please Insert Values in Other Deduction',
                'error'
            )
            break
        }
    }

});