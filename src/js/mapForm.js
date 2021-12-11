document.addEventListener("DOMContentLoaded", () => {
    mapboxgl.accessToken = 
        'pk.eyJ1Ijoiam9zZWFybWFuZDAiLCJhIjoiY2t4MG40bGs3MTZnbTJ1cW9mOGt4YnZkcCJ9.hie8MIkaX_l_cP_ANsHJvw';

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-110.31665754876958,24.163999345065207],
        zoom: 15,
    });

    const marker = new mapboxgl.Marker({
        draggable: true,
    })
        .setLngLat([ -110.31665754876958,24.163999345065207])
        .addTo(map);

});
