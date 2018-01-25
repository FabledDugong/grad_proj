/*

let div = document.getElementById('tictactoe')
console.log(div)
div.innerHTML = "test"
div.style.backgroundColor = "purple"
div.style.color = "white"
div.classList.add("my_class")

div.addEventListener("click", function () {
    this.style.backgroundColor = "pink"
})

div.addEventListener("dblclick", function (){
    this.style.backgroundColor = "green"
})

let table = document.createElement("table")
table.classList.add("tictactoe_table")
let tictactoe_table = div.appendChild(table)
for (i = 0; i < 3; i++) {
    let tr = document.createElement("tr")
    let row = tictactoe_table.appendChild(tr)
    for(j = 0; j < 3; j++) {
        let td = document.createElement("td")
        row.appendChild(td)
    }
}

*/

/*
document.addEventListener("DOMContentLoaded", function() {
    let initMap = function() {
        let map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 50.368554, lng: 15.6268647},
            zoom: 8
        })
    }
});
*/
'use strict';

let office = {lat: 50.367856, lng: 15.6290964}
let mapCanvas = document.getElementById("map")

function initMap() {
    let mapOptions = {
        center: office,
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        draggable: true,
        scrollwheel: false,
        scaleControl: false,
        mapTypeControl: false,
    }
    let marker = new google.maps.Marker({
        position: office,
        animation: google.maps.Animation.BOUNCE,
    })
    let map = new google.maps.Map(mapCanvas, mapOptions)
    marker.setMap(map)
    google.maps.event.addDomListener(window, 'load', initMap)
}


/* Carousel */
let orbitContent = document.getElementsByClassName("orbit-content")
let orbitControls = document.getElementsByClassName("orbit-neutron")
for (let j = 0; j < orbitContent.length; j++) {
    console.log(orbitContent[j])
}
for (let i = 0; i < orbitControls.length; i++) {
        orbitControls[i].addEventListener("click", function() {
            this.classList.toggle("active")
            return this
    })
}

/* Form validation */
/*
let form = document.getElementById("message-form")
form.addEventListener("submit", function (e) {
    let formStatus = document.getElementById("formStatus")
    let val_cond_name = /^[A-Za-z]{1,15}$/
    //let val_cond_pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/
    let formNameField = document.forms["message-form"]["name"]
    let formNameValue = formNameField.value
    let regex_eval_name = val_cond_name.test(formNameValue)
    if (formNameValue == "" || regex_eval_name == false) {
        formNameField.style.backgroundColor = "red"
        formStatus.innerHTML = "Mail not sent!!!"
        e.preventDefault()
    } else {
        formNameField.style.backgroundColor = "green"
        formStatus.innerHTML = "Mail sent!"
        e.preventDefault()
    }
})*/
