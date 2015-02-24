var peccole = new Maplace({
            controls_on_map: false,
            locations: [
            {
                //Durango Commons
                lat: 36.159648,
                lon: -115.279289,
                icon: 'http://maps.google.com/mapfiles/markerA.png',
                type:'marker'
            },
            {
                //Hualapai Commons
                lat: 36.1529526,
                lon: -115.3065585,
                icon: 'http://maps.google.com/mapfiles/markerB.png',
                type:'marker'
            },
            {
                //Fort Apache Commons
                lat: 36.1553271,
                lon: -115.2864462,
                icon: 'http://maps.google.com/mapfiles/markerC.png',
                type:'marker'
            },
            {
                //Crossroads Commons
                lat: 36.1609531,
                lon: -115.2846403,
                icon: 'http://maps.google.com/mapfiles/markerD.png',
                type:'marker'
            },
            {
                //Peccole Professional Park
                lat: 36.1616632,
                lon: -115.3082638,
                icon: 'http://maps.google.com/mapfiles/markerE.png',
                type:'marker'
            },
            {
                //Rampart Commons
                lat: 36.1585888,
                lon: -115.2871273,
                icon: 'http://maps.google.com/mapfiles/markerF.png',
                type:'marker'
            },
            {
                //Sir Williams Court
                lat: 36.1634996,
                lon: -115.2924899,
                icon: 'http://maps.google.com/mapfiles/markerA.png',
                type:'marker'
            }],
            map_options:{
                set_center: [36.1634996, -115.2924899],
                zoom: 13
            },
            styles:{
                'peccole':[
                {
                    stylers:[
                        {
                            hue: "#00aaff"
                        },
                        {
                            saturation: -100
                        },
                        {
                            gamma: .70
                        },
                        {
                            lightness: 12
                        }
                    ]
                },
                {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [
                        {
                            lightness: 57
                        }
                    ]
                },
                {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            lightness: 24
                        },
                        {
                            visibility: "on"
                        }
                    ]
                }]
            }
        });
        peccole.o.afterCreateMarker = function (index, location, marker) {
            google.maps.event.addListener(marker, 'click', function() {
                window.open('http://goo.gl/TRUaSL');
            });
            
        };
        google.maps.event.addDomListener(window, 'load', peccole.Load());
        google.maps.event.addDomListener(window, "resize", function() {
            google.maps.event.trigger(peccole, "resize");
            peccole.oMap.setCenter(peccole.oMap.getCenter());
            peccole.Load(); 
        });
    // peccole.Load();