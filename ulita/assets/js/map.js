function initMap() {
    let mapCanvas = document.getElementById("map")
    let office = {lat: 50.367856, lng: 15.631285}
    let mapOptions = {
        center: office,
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        draggable: true,
        scrollwheel: false,
        scaleControl: false,
        mapTypeControl: false,
        disableDefaultUI: true
    }
    let marker = new google.maps.Marker({
        position: office,
    })
    let map = new google.maps.Map(mapCanvas, mapOptions)
    marker.setMap(map)
}
initMap()