<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"
    async defer></script>
<script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 14.6547158, lng: 121.0649147},
    zoom: 15
  });

  <?php foreach ($events as $event) { ?>
    var infowindow<?php echo $event->event_id; ?> = new google.maps.InfoWindow({
      content: "<h3><?php echo $event->event_name; ?></h3><h4><?php echo $event->ngo_name; ?></h4><p><?php echo $event->event_details; ?></p><p><?php echo date('M d, l', strtotime($event->event_start)); ?></p><p><?php echo $event->event_address; ?></p>"
    });
    var marker<?php echo $event->event_id; ?> = new google.maps.Marker({
      position: {lat: <?php echo $event->event_lat ?>, lng: <?php echo $event->event_long ?>},
      title: '<?php echo $event->event_name; ?>',
      map: map
    });
    marker<?php echo $event->event_id; ?>.addListener('click', function() {
      infowindow<?php echo $event->event_id; ?>.open(map, marker<?php echo $event->event_id; ?>);
    });
  <?php } ?>
}
</script>
