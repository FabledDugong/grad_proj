'use strict'

function AlertShown(at, il) {
    this.at = at
    this.il = il
    this.shown = function () {
        if(at.css("display", "block")) {
            setTimeout(function() {
                at.fadeOut("fast");
            }, il);
        }
    }
}
let mailAlertSuccess = $(".successAlert")
let mailAlert = new AlertShown(mailAlertSuccess, 3000);