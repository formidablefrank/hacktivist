<h3><?php echo $event->event_name; ?></h3>
<h4><?php echo $event->ngo_name; ?></h4>
<p><?php echo $event->event_details; ?></p>
<p><?php echo $event->event_address; ?></p>
<p><?php echo date('M d, D h:i a', strtotime($event->event_start)); ?> - <?php echo date('M d, D h:i a', strtotime($event->event_end));?></p>
<p><?php echo $event->event_tokens; ?> token(s)</p>
<p><?php echo $event->event_limit;?> slots</p>
<a href="<?php echo base_url('join/'.$user_id.'/'.$event->event_id) ?>">Join the Event</a>

Milestones


Pictures


whatever
