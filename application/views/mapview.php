<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js"
    type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js"
    type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    <div style="width: 640px; height: 480px" id="mapContainer"></div>
    <script>
      // Initialize the platform object:
      var platform = new H.service.Platform({
        'app_id': 'wScDqULZdhwRKBl6uT56',
        'app_code': 'OHzXFtZctm12TKOqE5i1Bg'
      });

      // Obtain the default map types from the platform object
      var maptypes = platform.createDefaultLayers();

      // Instantiate (and display) a map object:
      var map = new H.Map(
        document.getElementById('mapContainer'),
        maptypes.normal.map,
        {
          zoom: 10,
          center: { lng: 13.4, lat: 52.51 }
        });
    </script>
  </body>
</html>
