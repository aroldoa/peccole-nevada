var peccole = new Maplace({
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
                'peccole':[
                ]
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
    peccole.Load();