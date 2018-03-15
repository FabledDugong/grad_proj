'use strict'

function Alert(tar, itv) {
    this.tar = tar
    this.itv = itv
    this.popOut = function () {
        if(tar.css("display", "block")) {
            setTimeout(function() {
                tar.fadeOut("fast");
            }, itv);
        }
    }
}
let mailAlertSuccess = $(".mailAlert")
let mailAlert = new Alert(mailAlertSuccess, 3000)

let loginFail = $(".loginFailAlert")
let loginFailAlert = new Alert(loginFail, 3000)

let loginSuccess = $(".loginSuccessAlert")
let loginSuccessAlert = new Alert(loginSuccess, 3000)

let logoutSuccess = $(".logoutSuccessAlert")
let logoutSuccessAlert = new Alert(logoutSuccess, 3000)