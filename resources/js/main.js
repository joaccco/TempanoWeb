mapboxgl.accessToken = 'pk.eyJ1Ijoiam9hY2NvIiwiYSI6ImNsOXFldWlyYzA1cGQ0MHFtd2tib2xycGQifQ.w6tQzCYY0lIO0b6_v1wxGA';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/joacco/cl9roe1yw004r14n777mt9rdy', // style URL
    center: [-58.827, -27.460], // starting position [lng, lat]
    zoom: 12 // starting zoom
});
