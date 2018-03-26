'use strict'

// Cache selectors
let lastId,
    topMenu = $("#navigation"),
    more = $(".more"),
    // All list items
    menuItems = topMenu.find("a"),
    otherLinks = more.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
        let item = $($(this).attr("href"));
        if (item.length) { return item; }
    });

let smoothScroll = function (e) {
    let href = $(this).attr("href")
    let offsetTop = href === "#" ? 0 : $(href).offset().top+1
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 500);
    e.preventDefault()
}
menuItems.click(smoothScroll);
otherLinks.click(smoothScroll);

// Bind to scroll
$(window).scroll(function(){
    // Get container scroll position
    let fromTop = $(this).scrollTop();

    // Get id of current scroll item
    let cur = scrollItems.map(function(){
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length-1];
    let id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[href='#"+id+"']").parent().addClass("active");
    }
});

/*
window.onbeforeunload = function() {
    window.scrollTo(0, 0);
}
*/

let loginCall = $("#login-call")
let loginModal = $("#login-modal")
let loginPop = function () {
    loginModal.fadeIn()
}
let keyBlur = function (ev) {
     if(ev.keyCode === 27) {
        loginModal.fadeOut()
    }
}
let loginBlur = function (ev) {
    let tar = ev.target.id
    if(tar === loginModal.attr("id")) {
        loginModal.fadeOut()
    }
}

let menuModal = $("#menu-modal")
let navIcon = $("#nav-icon")
let initialState = false
let menuPop = function () {
    if (!initialState) {
        initialState = true
        menuModal.stop().slideToggle()
        navIcon.attr("src", "assets/img/ico/close.svg")
    } else {
        initialState = false
        menuModal.stop().slideToggle()
        navIcon.attr("src", "assets/img/ico/menu.svg")
    }
}


let tabContent = $("#tab-content")
let tabControls = $("#tab-controls")
let tab = $(".tab-tab")

let swapFocus = function () {
    tab.click(function () {
        let currentTab = tabControls.find(".active")
        let requestedTab = $(this)
        currentTab.toggleClass("active")
        currentTab.attr("disabled",false)
        requestedTab.toggleClass("active")
        requestedTab.attr("disabled",true)
        let href = $(this).find("a").attr("href")
        let id = href.replace("#","")
        let currentContent = tabContent.find(".active")
        let currentContentId = currentContent.attr("id")
        if(id !== currentContentId) {
            currentContent.toggleClass("active")
            let requestedContent = tabContent.find("#" + id)
            requestedContent.toggleClass("active")
        }
    })
}

$(document).ready(function(){
    loginCall.click(loginPop)
    $(window).click(loginBlur)
    $(window).bind("keyup", keyBlur)
    navIcon.click(menuPop)
    loginAlertControl.popOut()
    registerAlertControl.popOut()
    swapFocus()
    galleryTipAlertControl.tipSeen($(".tip-close"))
});