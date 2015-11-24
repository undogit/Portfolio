/**
 * Created by Strauss on 24/11/2015.
 */
function initialize() {
    var styles = [
        {
            "featureType": "road",
            "elementType": "labels.text",
            "stylers": [
                { "visibility": "off" }
            ]
        },{
            "featureType": "landscape",
            "stylers": [
                { "visibility": "on" }
            ]
        },{
            "featureType": "poi.business",
            "stylers": [
                { "visibility": "off" }
            ]
        },{
            "featureType": "landscape",
            "stylers": [
                { "color": "#596D74" },
                { "weight": 0.1 }
            ]
        },{
            "featureType": "road",
            "stylers": [
                { "color": "#596D74" },
                { "lightness": 43 },
                { "gamma": 0.76 }
            ]
        },{
            "featureType": "poi.park",
            "stylers": [
                { "visibility": "off" }
            ]
        },{
            "featureType": "poi.school",
            "stylers": [
                { "visibility": "off" }
            ]
        },{
            "featureType": "poi",
            "stylers": [
                { "visibility": "off" }
            ]
        },{
            "featureType": "transit.line",
            "stylers": [
                { "visibility": "off" }
            ]
        },{
            "featureType": "water",
            "stylers": [
                { "color": "#19262D" }
            ]
        },{
            "featureType": "administrative",
            "elementType": "labels.text",
            "stylers": [
                { "color": "#F28A22" },
                { "gamma": 0.98 },
                { "visibility": "on" },
                { "weight": 0.1 },
                { "lightness": 2 }
            ]
        },{
            "featureType": "transit.station.rail",
            "stylers": [
                { "visibility": "simplified" },
                { "color": "#F28A22" }
            ]
        },{
        }
    ]
    var styledMap = new google.maps.StyledMapType(styles, {name: "Gmap"});
    var marker = new google.maps.Marker({
        position:{lat: 45.776751, lng: 4.833376},
        map: map,
        title: 'Hello World!'
    });
    var mapOptions = {
        center: new google.maps.LatLng(45.776751,4.833376),
        zoom: 14,
        draggable: false,
        scrollwheel: true,
        disableDoubleClickZoom: true,
        zoomControl: false
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');


    var marker = new google.maps.Marker({
        position:{lat: 45.776751, lng: 4.833376},
        map: map,
        title: "Rue du chariot d'or",
        icon:'image/map_pos.png'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);

