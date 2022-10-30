mapboxgl.accessToken = 'pk.eyJ1Ijoiam9hY2NvIiwiYSI6ImNsOXFldWlyYzA1cGQ0MHFtd2tib2xycGQifQ.w6tQzCYY0lIO0b6_v1wxGA';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/joacco/cl9roe1yw004r14n777mt9rdy', // style URL
    center: [-58.827, -27.460], // starting position [lng, lat]
    zoom: 12 // starting zoom
});
map.on('load', () => {
    // Load an image from an external URL.
    map.loadImage(
    '/img/logo.png',
    (error, image) => {
    if (error) throw error;
     
    // Add the image to the map style.
    map.addImage('cat', image);
     
    // Add a data source containing one point feature.
    map.addSource('point', {
    'type': 'geojson',
    'data': {
    'type': 'FeatureCollection',
    'features': [
    {
    'type': 'Feature',
    'geometry': {
    'type': 'Point',
    'coordinates': [-58.827, -27.46]
    }
    }
    ]
    }
    });
     
    // Add a layer to use the image to represent the data.
    map.addLayer({
    'id': 'points',
    'type': 'symbol',
    'source': 'point', // reference the data source
    'layout': {
    'icon-image': 'cat', // reference the image
    'icon-size': 0.15
    }
    });
    }
    );
    });