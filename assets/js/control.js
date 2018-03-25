'use strict'

//Getters mail
let mailForm = $("#mail-form")
let submitMail = $("input[name='submit-mail']")
let inName = $("input[name='name']")
let rxName = /^[A-ZÁ-Ž]{1}[a-zá-ž]*\s?[A-ZÁ-Ž]{1}[a-zá-ž]*$/
let inMail = $("input[name='mail']")
let rxMail = /^[a-zA-Z0-9]+\@{1}[a-z]{3,}\.[a-z]{2,3}$/
let inSubject = $("input[name='subject']")
let rxSubject = /^[a-zA-Zá-žÁ-Ž0-9]{1}[a-zA-Zá-žÁ-Ž0-9\W]*$/
let inMessage = $("textarea[name='message']")
let rxMessage = /^[a-zA-Zá-žÁ-Ž0-9\W]{1,500}$/
let mailErrors = ["name", "mail", "subject", "message",]

//Getters login
let loginPass = $("input[name='password']")

//Validate
let initialState = false
function Validate(el, rx, sm) {
    this.el = el
    this.rx = rx
    this.sm = sm
    this.validate = function () {
        let index = mailErrors.indexOf(el.attr("name"))
        if (!rx.test(el.val())) {
            el.addClass("error")
            sm.addClass("error")
            if (index === -1) {
                mailErrors.push(el.attr("name"))
            }
        } else {
            el.removeClass("error")
            mailErrors.splice(index, 1)
        }
        initialState = true
    }
    this.disableManipulation = function () {
        el.bind("cut copy paste contextmenu", function (ev) {
            ev.preventDefault();
            manipulationAlertControl.popOut()
        })
    }
    this.evalForm = function () {
        if (mailErrors.length === 0 && initialState) {
            sm.removeClass("error")
        }
    }
}
mailForm.submit(function (ev) {
    if (mailErrors.length > 0 || !initialState) {
        ev.preventDefault()
    }
})

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
            tar.fadeIn().css("display", "block")
        }
    }
}

let validateName = new Validate(inName, rxName, submitMail)
let validateMail = new Validate(inMail, rxMail, submitMail)
let validateSubject = new Validate(inSubject, rxSubject, submitMail)
let validateMessage = new Validate(inMessage, rxMessage, submitMail)
let validateMailForm = new Validate(null, null, submitMail)

let validatePassword = new Validate(loginPass)

let mailAlert = $(".mail-alert")
let mailAlertControl = new Alert(mailAlert, 3000)

let loginAlert = $(".login-alert")
let loginAlertControl = new Alert(loginAlert, 3000)

let manipulationAlert = $(".manipulation-alert")
let manipulationAlertControl = new Alert(manipulationAlert, 3000)