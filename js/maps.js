//get current location of user then store to session
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.

var map;

var platform = new H.service.Platform({
  'app_id': 'wScDqULZdhwRKBl6uT56',
  'app_code': 'OHzXFtZctm12TKOqE5i1Bg'
});

var defaultLayers = platform.createDefaultLayers();
var map = new H.Map(
  document.getElementById('mapContainer'),
  defaultLayers.normal.map,
  {
    zoom: 10,
    center: { lat: 52.5, lng: 13.4 }
});
