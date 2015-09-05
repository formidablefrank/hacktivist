<section id="dashpage">
	<div class="ui centered grid container">
		<div class="fourteen wide mobile only column">
			<div class="ui fluid card">
				<div class="content">
					<div class="left floated mini ui image">
						<img src="<?php echo base_url('img/forever.png') ?>" alt="">
					</div>
					<div class="header">User</div>
					<div class="meta">Volunteer</div>
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
					Extra content
				</div>
			</div>
		</div>
		<div class="four wide tablet four wide computer only column">
			<div class="ui card">
				<div class="image">
					<img src="<?php echo base_url('img/forever.png') ?>" alt="">
				</div>
				<div class="content">
					<div class="header">User</div>
					<div class="meta">
						Volunteer
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
					Extra content
				</div>
			</div>
		</div>
		<div class="fourteen wide mobile ten wide tablet ten wide computer column">
			<div class="ui fluid segment">
				<div class="ui green ribbon label">Featured Events</div>
				<?php foreach ($userevents as $event) { ?>
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
			</div>
		</div>
	</div>
</section>
