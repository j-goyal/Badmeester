function initMap() 
{
        let options = 
        {
            center: {lat: 29.9267, lng: 75.5542},
            zoom: 10
        }

        // New Map
        let map = new google.maps.Map(document.getElementById("map"), options);


        // //Listen for click on a map
        // google.maps.event.addListener(map, 'click', function(event){
        //     addMarker({coords:event.latLng});
        // })


        // Add Marker
        function addMarker(props)
        {
            let marker = new google.maps.Marker({
                position:props.coords,
                map: map,
                animation:google.maps.Animation.BOUNCE,
            });

            //check for custom icon
            if (props.iconImage)
            {
                marker.setIcon(props.iconImage);
            }

            //check for custom content
            if (props.content)
            {
                //Add Window info marker
                let infowindow = new google.maps.InfoWindow({
                    content:props.content
                });

                marker.addListener('click', function(){
                    infowindow.open(map,marker);
                });
            }
      
        }

        // Create array of markers
        let markersArray = [
            {
                coords:{lat: 29.9234, lng: 75.5535},
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content:"<h1>My Home<h1>"
            },

            // {
            //     coords:{lat: 29.9434, lng: 75.8635}
            // }
        ];

        //Loop Through the markers
        for (markers in markersArray)
        {
            addMarker(markersArray[markers]);
        }

        
        // // Add circle
        // function addCircle(coordinates)
        // {
        //     let myCity = new google.maps.Circle({
        //         center:coordinates,
        //         radius:20000,
        //         strokeColor:"#9090f0",
        //         strokeOpacity:0.8,
        //         strokeWeight:2,
        //         fillColor:"#9090f0",
        //         fillOpacity:0.4,
        //         map:map
        //     });
        // }
        // addCircle({lat: 29.9267, lng: 75.5542});
        


        // // Add Polyline from one path to another
        // function addPolyline(mytrip)
        // {
        //     let flightPath = new google.maps.Polyline({
        //         path:myTrip,
        //         strokeColor:"#e61f00",
        //         strokeOpacity:0.8,
        //         strokeWeight:2,
        //         map:map
        //     });
        // }
        // let myTrip = [{lat: 29.9267, lng: 75.5542}, {lat: 29.9995, lng: 75.3937}, {lat: 30.2110, lng: 74.9455}, {lat: 30.3398, lng: 76.3869}];

        // addPolyline(myTrip);
     
  
}