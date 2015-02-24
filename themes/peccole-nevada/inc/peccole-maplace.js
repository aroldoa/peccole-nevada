
    var peccole = new Maplace({
        map_div: '#gmap',
        locations: [{
            lat: 29.611417, 
            lon: -98.607020,
            icon: 'http://maps.google.com/mapfiles/markerA.png',
            type:'marker'
        }],
        map_options:{
            set_center: [29.611417, -98.607020],
            zoom: 15
        },
        styles:{
            'Peccole':[
            {
                stylers:[
                    {hue: "#ff1a00"},
                    {invert_lightness: 'true'},
                    {saturation: -100},
                    {lightness: 33},
                    {gamma: 0.5}
                ]
            }]
        }
        });

        peccole.o.afterCreateMarker = function (index, location, marker) {
            google.maps.event.addListener(marker, 'click', function() {
                window.open('http://goo.gl/TRUaSL');
            });

            google.maps.event.addDomListener(window, 'load', peccole.Load());
            google.maps.event.addDomListener(window, "resize", function() {
                google.maps.event.trigger(peccole, "resize");
                peccole.oMap.setCenter(peccole.oMap.getCenter());
                peccole.Load();
            });
        };