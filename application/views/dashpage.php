<div class="ui centered grid container">
	<div class="fourteen wide mobile four wide tablet four wide computer column">
		<div class="ui card">
			<div class="image">
				<img src="img/forever.png" alt="">
			</div>
			<div class="content">
				<div class="header">User</div>
				<div class="meta">
					volunteer
				</div>
				<div class="description">
					<div class="ui label">
						<strong><i class="star icon"></i> #</strong>
						rank
					</div>
					<div class="ui label">
						<strong><i class="certificate icon"></i> x</strong>
						tokens
					</div>
				</div>
			</div>
			<div class="extra content">
				extra content
			</div>
		</div>
	</div>
	<div class="fourteen wide mobile ten wide tablet ten wide computer column">
		<div class="ui fluid segment">
			<div class="ui huge green ribbon label">Featured Events</div>
			<?php foreach ($userevents as $event) { ?>
				<div class="ui vertical segment">
					<h3><?php echo $event->event_name; ?></h3>
					<h4><?php echo $event->ngo_name; ?></h4>
					<p><?php echo $event->event_details; ?></p>
					<p><?php echo $event->event_address; ?></p>
					<p><?php echo date('M d, l', strtotime($event->event_start)); ?> - <?php echo date('M d, l', strtotime($event->event_end));?></p>
					<p><?php echo $event->event_tokens; ?> token(s)</p>
					<p><?php echo $event->event_limit;?> slots</p>
					<a href="<?php echo base_url('join/'.$user_id.'/'.$event->event_id) ?>">Join the Event</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
