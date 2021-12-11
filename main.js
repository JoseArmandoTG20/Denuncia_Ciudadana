mapboxgl.accessToken = 'pk.eyJ1IjoibmFsYWZ1cmZhZ2VudGkiLCJhIjoiY2s3ZTJvb3hoMjYwNDNmcDlmbmdmN21vOSJ9.jS0dfF8_VRA6TlJROczJHw';

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-110.3, 24.1],
    zoom: 9
});


//PARA HACER LA FUNCION DE LA BARRA DE BUSQUEDA

const coordinatesGeocoder = function (query) {
    // Match anything which looks like
    // decimal degrees coordinate pair.
    const matches = query.match( /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i );
    if (!matches) {
        return null;
    }
     
    function coordinateFeature(lng, lat) {
        return {
            center: [lng, lat],
            geometry: {
                type: 'Point',
                coordinates: [lng, lat]
            },
            place_name: 'Lat: ' + lat + ' Lng: ' + lng,
            place_type: ['coordinate'],
            properties: {},
            type: 'Feature'
        };
    }
     
    const coord1 = Number(matches[1]);
    const coord2 = Number(matches[2]);
    const geocodes = [];
     
    if (coord1 < -90 || coord1 > 90) {
    // must be lng, lat
    geocodes.push(coordinateFeature(coord1, coord2));
    }
     
    if (coord2 < -90 || coord2 > 90) {
    // must be lat, lng
    geocodes.push(coordinateFeature(coord2, coord1));
    }
     
    if (geocodes.length === 0) {
    // else could be either lng, lat or lat, lng
    geocodes.push(coordinateFeature(coord1, coord2));
    geocodes.push(coordinateFeature(coord2, coord1));
    }
     
    return geocodes;
};
     
// Add the control to the map.
map.addControl(
    new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        localGeocoder: coordinatesGeocoder,
        zoom: 4,
        placeholder: 'lugares o coordenadas',
        mapboxgl: mapboxgl,
        reverseGeocode: true
    
    })
);


//PARA HACER LA FUNCION DE MARCADOR

let element = document.createElement('div')
element.className = 'marker'

var marker;

var x = "";
var y = "";



if(addi == true){
    map.on('click', (e) => {
        var str = JSON.stringify(e.lngLat.wrap());
        var str = str.replace('"lat":',"" );
        var str = str.replace('{"lng":',"" );
        var str = str.replace('}',"" );

        var str1 = str.split(',',1 );
        var str2 = str.split(/[\s,]+/);
        var str2 = str2[str2.length - 1];

        console.log("lng " + str1 + " lat " + str2);
        x=str1;
        y=str2;

        
        document.getElementById("lonn").defaultValue = x;
        document.getElementById("latt").defaultValue = y;

    marker = new mapboxgl.Marker(element).setLngLat({
        lng:parseFloat(str1),
        lat:parseFloat(str2)
    })
    .addTo(map);
    
    });
}
function clean(){
    marker.remove();
    console.log("marcador eliminado");
}



//COORDENATES

map.on('mousemove', (e) => {
    document.getElementById('info').innerHTML =
    // `e.point` is the x, y coordinates of the `mousemove` event
    // relative to the top-left corner of the map.
    JSON.stringify(e.point) +
    '<br />' +
    // `e.lngLat` is the longitude, latitude geographical position of the event.
    JSON.stringify(e.lngLat.wrap());
});

//????????????????????????????????????????????????????


// test marker
    /*var mark = new mapboxgl.Marker({
    color: "#FFFFFF",
    draggable: false
    }).setLngLat([-121.91, 37.7])
    .setPopup(new mapboxgl.Popup().setHTML("<h3>Dublin, CA</h3>"))
    .addTo(map);
    */
  // import markers 
  
  //var mapdata = new Array();
    //mapdata.push(['bache','-110.31280737517648','24.142009992789724']) 
    //mapdata.push(['ayuda','-110.31157193011893','24.123727345910737']) 
    //mapdata.push(['accidente','-110.32646462954557','24.130569473251114'])
    
  var mapdatalength = mapdata.length;
  
  for (var i = 0; i < mapdatalength; i++) {
    var mark = new mapboxgl.Marker({
        color: "#e74c3c",
        draggable: false
        }).setLngLat({
            lng:parseFloat(mapdata[i][1]), 
            lat:parseFloat(mapdata[i][2])
        })
        .setPopup(new mapboxgl.Popup().setHTML(mapdata[i][0]))
        .addTo(map);
      
    /*new mapboxgl.Marker().setLngLat({
        lng:mapdata[i][2],
        lat:mapdata[i][3]
    })
    .addTo(map);
    */
    
  }


//????????????????????????????????????????????????????

