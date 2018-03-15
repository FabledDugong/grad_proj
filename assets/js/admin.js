'use strict'

let letterCount = function () {
    let letterMaxCount = 110
    let letterCountWrapper = $("#letterCount")
    let str = $("#newsMessage")
    str.keyup(function(){
        letterCountWrapper.text("Zbývá znaků: " + (letterMaxCount - $(this).val().length))
    });
}

$(document).ready(function(){
    loginFailAlert.popOut()
    loginSuccessAlert.popOut()
    logoutSuccessAlert.popOut()
    letterCount()
});