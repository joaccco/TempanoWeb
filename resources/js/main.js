
mapboxgl.accessToken = 'pk.eyJ1Ijoiam9hY2NvIiwiYSI6ImNsOXFldWlyYzA1cGQ0MHFtd2tib2xycGQifQ.w6tQzCYY0lIO0b6_v1wxGA';

let map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/joacco/cl9qlbl52007x15khmdhgscp1', // style URL
    center: [ -58.816, -27.500], // starting position [lng, lat]
    zoom: 12, // starting zoom
    projection: 'globe' // display the map as a 3D globe
});
map.on('style.load', () => {
    map.setFog({}); // Set the default atmosphere style
});

let element = document.createElement('div')
element.className = 'marker'

element.addEventListener('click',()=>{
    window.alert('diste click')
})

let marker = new mapboxgl.marker(element)
.setLngLat({
    lng: -58.816,
    lat: -27.500
})
.addTo(map)