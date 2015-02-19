if(jQuery('#houston').length){
    var houston = new Maplace({
            map_div: '#houston',
            locations: [{
                lat: 29.58223,
                lon: -95.155769,
                icon: 'http://maps.google.com/mapfiles/markerA.png',
                type:'marker'
            }],
            map_options:{
                set_center: [29.58223,-95.155769],
                zoom: 15
            },
            styles:{
                'Legend_PT':[
                {
                    stylers:[
                        {hue: "#e7ecf0"},
                        {saturation: 0}
                    ]
                },
                {
                    featureType: 'road',
                    stylers:[
                        {saturation: -70}
                    ]
                },
                {
                    featureType: 'water',
                    stylers:[
                        {visibility: 'simplified'},
                        {saturation: -60}
                    ]
                }]
            }
        });
    houston.o.afterCreateMarker = function (index, location, marker) {
        google.maps.event.addListener(marker, 'click', function() {
            window.open('http://goo.gl/c7fyPF');
        });
    };
    houston.Load();

}
if(jQuery('#san_antonio').length){
    var san_antonio = new Maplace({
            map_div: '#san_antonio',
            locations: [{
                lat: 29.577786,
                lon: -98.514651,
                icon: 'http://maps.google.com/mapfiles/markerA.png',
                type:'marker'
            }],
            map_options:{
                set_center: [29.577786,-98.514651],
                zoom: 15
            },
            styles:{
                'Legend_PT':[
                {
                    stylers:[
                        {hue: "#e7ecf0"},
                        {saturation: 0}
                    ]
                },
                {
                    featureType: 'road',
                    stylers:[
                        {saturation: -70}
                    ]
                },
                {
                    featureType: 'water',
                    stylers:[
                        {visibility: 'simplified'},
                        {saturation: -60}
                    ]
                }]
            }
    });
    san_antonio.o.afterCreateMarker = function (index, location, marker) {
        google.maps.event.addListener(marker, 'click', function() {
            window.open('http://goo.gl/6G5UWG');
        });
    };
    san_antonio.Load();
}