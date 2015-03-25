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
                lat: 36.1569258,
                lon: -115.3079225,
                icon: 'http://maps.google.com/mapfiles/markerB.png',
                type:'marker'
            },
            {
                //Fort Apache Commons
                lat: 36.1579692,
                lon: -115.2940207,
                icon: 'http://maps.google.com/mapfiles/markerC.png',
                type:'marker'
            },
            {
                //Crossroads Commons
                lat: 36.1566039,
                lon: -115.2892412,
                icon: 'http://maps.google.com/mapfiles/markerD.png',
                type:'marker'
            },
            {
                //Peccole Professional Park
                lat: 36.1685232,
                lon: -115.314862,
                icon: 'http://maps.google.com/mapfiles/markerE.png',
                type:'marker'
            },
            {
                //Rampart Commons
                lat: 36.160148,
                lon: -115.2932749,
                icon: 'http://maps.google.com/mapfiles/markerF.png',
                type:'marker'
            },
            {
                //Sir Williams Court
                lat: 36.1636902,
                lon: -115.2922056,
                icon: 'http://maps.google.com/mapfiles/markerG.png',
                type:'marker'
            }],
            map_options:{
                // set_center: [36.1634996, -115.2924899],
                set_center: [36.165484, -115.359621],
                zoom: 13,
                scrollwheel: false
            },
            listeners: {
                click: function(map, event) {
                    map.setOptions({
                        scrollwheel: true
                    });
                }
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
                switch( index ){
                    //Durango Commons
                    case 0:
                        window.open('http://goo.gl/v9pohT');
                    break;
                    //Hualapai Commons
                    case 1:
                        window.open('http://goo.gl/41YHgs');
                    break;
                    //Fort Apache Commons
                    case 2:
                        window.open('http://goo.gl/6DgNcQ');
                    break;
                    //Crossroads Commons
                    case 3:
                        window.open('http://goo.gl/wijYKf');
                    break;
                    //Peccole Professional Park
                    case 4:
                        window.open('http://goo.gl/B2Fa1A');
                    break;
                    //Rampart Commons
                    case 5:
                        window.open('http://goo.gl/ISS11e');
                    break;
                    //Sir Williams Court
                    case 6:
                        window.open('http://goo.gl/8tNWpY');
                    break;

                }
                console.log(index);
            });
            
        };
        google.maps.event.addDomListener(window, 'load', peccole.Load());
        google.maps.event.addDomListener(window, "resize", function() {
            google.maps.event.trigger(peccole, "resize");
            peccole.oMap.setCenter(peccole.oMap.getCenter());
            peccole.Load(); 
        });
    // peccole.Load();
