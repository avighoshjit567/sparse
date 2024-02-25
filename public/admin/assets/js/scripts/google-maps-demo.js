$(function() {
  new GMaps({
    div: '#gmap_1',
    lat: -12.043333,
    lng: -77.028333
  });

  var map2 = new GMaps({
    div: '#gmap_2',
    lat: -12.043333,
    lng: -77.028333
  });
  map2.addMarker({
    lat: -12.043333,
    lng: -77.03,
    title: 'Lima',
    details: {
      database_id: 42,
      author: 'HPNeo'
    },
    click: function(e){
      if(console.log)
        console.log(e);
      alert('You clicked in this marker');
    }
  });
  map2.addMarker({
    lat: -12.042,
    lng: -77.028333,
    title: 'Marker with InfoWindow',
    infoWindow: {
      content: '<p>HTML Content</p>'
    }
  });

  new GMaps({
    div: '#gmap_3',
    lat: -12.043333,
    lng: -77.028333
  }).drawPolygon({
    paths: [[-12.040397656836609,-77.03373871559225],
              [-12.040248585302038,-77.03993927003302],
              [-12.050047116528843,-77.02448169303511],
              [-12.044804866577001,-77.02154422636042]],
    strokeColor: '#BBD8E9',
    strokeOpacity: 1,
    strokeWeight: 3,
    fillColor: '#BBD8E9',
    fillOpacity: 0.6
  });

  new GMaps({
    div: '#gmap_4',
    lat: -12.043333,
    lng: -77.028333,
    click: function(e){
      console.log(e);
    }
  }).drawPolyline({
    path: [[-12.044012922866312, -77.02470665341184], [-12.05449279282314, -77.03024273281858], [-12.055122327623378, -77.03039293652341], [-12.075917129727586, -77.02764635449216], [-12.07635776902266, -77.02792530422971], [-12.076819390363665, -77.02893381481931], [-12.088527520066453, -77.0241058385925], [-12.090814532191756, -77.02271108990476]],
    strokeColor: '#131540',
    strokeOpacity: 0.6,
    strokeWeight: 6
  });

  var map5 = new GMaps({
    div: '#gmap_5',
    lat: -12.043333,
    lng: -77.028333
  });
  $('#gmap_geocoding_btn').click(function(e){
    e.preventDefault();
    GMaps.geocode({
      address: $('#gmap_geocoding_address').val().trim(),
      callback: function(results, status){
        if(status=='OK'){
          var latlng = results[0].geometry.location;
          map5.setCenter(latlng.lat(), latlng.lng());
          map5.addMarker({
            lat: latlng.lat(),
            lng: latlng.lng()
          });
        }
      }
    });
  });

  var map6 = new GMaps({
    div: '#gmap_6',
    lat: -12.043333,
    lng: -77.028333
  });
  map6.drawOverlay({
    lat: map6.getCenter().lat(),
    lng: map6.getCenter().lng(),
    content: '<div class="gmap-overlay">Lima<div class="gmap-overlay_arrow above"></div></div>',
    verticalAlign: 'top',
    horizontalAlign: 'center'
  });

});