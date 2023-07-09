var mymap = L.map('mapid').setView([39.165325, -86.526382], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

var marker = L.marker([39.165325, -86.526382]).addTo(mymap);

var circle = L.circle([39.165325, -86.526382], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap);

var polygon = L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
]).addTo(mymap);

marker.bindPopup("<b>Luddy School of</b><br>Informatics, Computing and Engineering.").openPopup();
circle.bindPopup("I am a circle.");
polygon.bindPopup("I am a polygon.");

var popup = L.popup()
    .setLatLng([39.165325, -86.526382])
    .setContent("Luddy School of Informatics, Computing and Engineering.")
    .openOn(mymap);