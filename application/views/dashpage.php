<div class="ui centered grid container">
	<div class="fourteen wide mobile four wide tablet four wide computer column">
		<div class="ui card">
			<div class="image">
				<img src="img/forever.png" alt="">
			</div>
			<div class="content">
				<div class="header">User</div>
				<div class="meta">
					volunteer/organization
				</div>
				<div class="description">
					x total tokens as of xxxx
				</div>
			</div>
			<div class="extra content">
				<div class="ui medium vertical inverted green animated button">
					<div class="visible content">
						<i class="circle thin icon"></i>
						xxx tokens
					</div>
					<div class="hidden content">
						<i class="cart icon"></i>
						Redeem rewards
					</div>
				</div>
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
					<a href="<?php echo base_url('join/'.$user_id.'/'.$event->event_id) ?>">Join the Event</a>
					<a href="<?php echo base_url('event/'.$event->event_id) ?>">More details</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
