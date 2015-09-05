<?php foreach ($events as $event) { ?>
  <div class="ui vertical segment">
    <h3><?php echo $event->event_name; ?></h3>
    <h4><?php echo $event->ngo_name; ?></h4>
    <p><?php echo $event->event_details; ?></p>
    <p><?php echo date('M d, D H:i a', strtotime($event->event_start)); ?> - <?php echo date('M d, D H:i a', strtotime($event->event_end));?></p>
    <p><?php echo $event->event_limit; ?> slots left</p>
    <a href="<?php echo base_url('join/'.$user_id.'/'.$event->event_id) ?>">Join the Event</a>
    <a href="<?php echo base_url('event/'.$event->event_id) ?>">More details</a>
  </div>
<?php } ?>
