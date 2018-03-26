'use strict'

// //Getters login
// let loginPass = $("input[name='password']")
//
// //Validate
// let initialState = false
// function Validate(el, rx, sm) {
//     this.el = el
//     this.rx = rx
//     this.sm = sm
//     this.validate = function () {
//         let index = mailErrors.indexOf(el.attr("name"))
//         if (!rx.test(el.val())) {
//             el.addClass("error")
//             sm.addClass("error")
//             if (index === -1) {
//                 mailErrors.push(el.attr("name"))
//             }
//         } else {
//             el.removeClass("error")
//             mailErrors.splice(index, 1)
//         }
//         initialState = true
//     }
//     this.disableManipulation = function () {
//         el.bind("cut copy paste contextmenu", function (ev) {
//             ev.preventDefault();
//             manipulationAlertControl.popOut()
//         })
//     }
//     this.evalForm = function () {
//         if (mailErrors.length === 0 && initialState) {
//             sm.removeClass("error")
//         }
//     }
// }
// mailForm.submit(function (ev) {
//     if (mailErrors.length > 0 || !initialState) {
//         ev.preventDefault()
//     }
// })

//Alert
function Alert(tar, itv) {
    this.tar = tar
    this.itv = itv
    this.popOut = function () {
        if (tar.css("display", "block")) {
            setTimeout(function () {
                tar.fadeOut("fast");
            }, itv);
        } else {
            tar.fadeIn("fast");
        }
    }
    this.tipSeen = function (cls) {
        this.cls = cls
        if (localStorage.getItem("seenState") !== "seen") {
            tar.delay(itv).fadeIn()
            localStorage.setItem("seenState", "seen")
        } else {
            localStorage.clear()
        }
        cls.click(function (ev) {
            tar.fadeOut()
        })
    }
}

// let validatePassword = new Validate(loginPass)

let loginAlert = $(".login-alert")
let loginAlertControl = new Alert(loginAlert, 3000)

let registerAlert = $(".register-alert")
let registerAlertControl = new Alert(registerAlert, 3000)

let galleryTipAlert = $(".gallery-tip")
let galleryTipAlertControl = new Alert(galleryTipAlert, 3000)

// let manipulationAlert = $(".manipulation-alert")
// let manipulationAlertControl = new Alert(manipulationAlert, 3000)