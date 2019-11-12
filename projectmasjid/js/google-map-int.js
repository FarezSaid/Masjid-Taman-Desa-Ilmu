$(document).ready(function () {
    'use strict';

    var marker;

    function initMap() {
        var map = new google.maps.Map(document.getElementById('loc-mp'), {
            zoom: 13,
            center: {lat: 1.451821, lng: 110.451994}
        });

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: 1.451821, lng: 110.451994}   
        });
        marker.addListener('click', toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initMap);

});