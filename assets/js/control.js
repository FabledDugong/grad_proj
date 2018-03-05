'use strict'
let form = $("form")
let submit = $("input[name='submit']")
let inName = $("input[name='name']")
let rxName = /^[A-ZÁ-Ž]{1}[a-zá-ž]*\s?[A-ZÁ-Ž]{1}[a-zá-ž]*$/
let inMail = $("input[name='mail']")
let rxMail = /^[a-zA-Z0-9]+\@{1}[a-z]{3,}\.[a-z]{2,3}$/
let inSubject = $("input[name='subject']")
let rxSubject = /^[a-zA-Zá-žÁ-Ž0-9]{1}[a-zA-Zá-žÁ-Ž0-9\W]*$/
let inMessage = $("textarea[name='message']")
let rxMessage = /^[a-zA-Zá-žÁ-Ž0-9]+[a-zA-Zá-žÁ-Ž0-9\W]+$/

let errors = ["name", "mail", "subject", "message",]
let initialState = false

function Validate(el, rx) {
    this.el = el
    this.rx = rx
    this.validate = function () {
        let index = errors.indexOf(el.attr("name"))
        if (!rx.test(el.val())) {
            el.addClass("error")
            submit.addClass("error")
            if (index === -1) {
                errors.push(el.attr("name"))
            }
        } else {
            el.removeClass("error")
            errors.splice(index, 1)
        }
        initialState = true
    }
    this.evalForm = function () {
        if (errors.length === 0 && initialState) {
            submit.removeClass("error")
        }
    }
}

let validateName = new Validate(inName, rxName)
let validateMail = new Validate(inMail, rxMail)
let validateSubject = new Validate(inSubject, rxSubject)
let validateMessage = new Validate(inMessage, rxMessage)
let validateForm = new Validate(submit)

inName.blur(function () {
    validateName.validate()
    validateForm.evalForm()
})
inMail.blur(function () {
    validateMail.validate()
    validateForm.evalForm()
})
inSubject.blur(function () {
    validateSubject.validate()
    validateForm.evalForm()
})
inMessage.blur(function () {
    validateMessage.validate()
    validateForm.evalForm()
})

form.submit(function (ev) {
    if (errors.length > 0 || !initialState) {
        ev.preventDefault()
    }
})