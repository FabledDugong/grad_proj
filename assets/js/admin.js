'use strict'

let letterCount = function () {
    let letterMaxCount = 110
    let letterCountWrapper = $("#letter-count")
    let str = $("#news-message")
    str.keyup(function(){
        letterCountWrapper.text("Zbývá znaků: " + (letterMaxCount - $(this).val().length))
    });
}

$(document).ready(function(){
    validatePassword.disableManipulation()
    loginAlertControl.popOut()
    letterCount()
});