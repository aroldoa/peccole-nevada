var primo = new Maplace({
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
                'Primo':[
                {
                    stylers:[
                        {hue: "#ff1a00"},
                        {invert_lightness: 'true'},
                        {saturation: -100},
                        {lightness: 33},
                        {gamma: 0.5}
                    ]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers:[
                        {color: '#2D333C'}
                    ]
                }]
            }
        });
        primo.o.afterCreateMarker = function (index, location, marker) {
        google.maps.event.addListener(marker, 'click', function() {
            window.open('http://goo.gl/TRUaSL');
        });
    };
    primo.Load();