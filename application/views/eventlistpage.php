<section id="eventlistpage">
	<div class="ui container">
		<?php foreach ($events as $event) { ?>
			<div class="ui segment">
			<div class="ui blue ribbon label"><?php echo $event->category_name ?></div>
			<h3><a href="<?php echo base_url('event/'.$event->event_id) ?>"><?php echo $event->event_name; ?></a></h3>
			<h4><?php echo $event->ngo_name; ?></h4>
			<p><?php echo $event->event_details; ?></p>
			<p><?php echo date('M d, D H:i a', strtotime($event->event_start)); ?> - <?php echo date('M d, D H:i a', strtotime($event->event_end));?></p>
			<p><?php echo $event->event_limit; ?> slots left</p>
			</div>
		<?php } ?>
	</div>
</section>
