<section id-"eventpage">
	<div class="ui centered grid container">
		<div class="fourteen wide column">
			<div class="ui segment">
				<div class="ui items">
					<div class="item">
						<div class="ui medium image">
							<img src="<?php echo base_url('img/forever.png') ?>" alt="Main photo">
						</div>
						<div class="content">
							<div class="header">
								<h2><?php echo $event->event_name; ?></h2>
							</div>
							<div class="meta">
								<?php echo $event->ngo_name; ?>
							</div>
							<div class="ui divider"></div>
							<div class="description">
								<p>What: <?php echo $event->event_details; ?></p>
								<p>When: <?php echo date('M d, D h:i a', strtotime($event->event_start)); ?> 
								- <?php echo date('M d, D h:i a', strtotime($event->event_end));?></p>
								<p>Where: <?php echo $event->event_address; ?></p>
							</div>
							<div class="extra content">
								<div class="ui label">
									<i class="certificate icon"></i>
									<?php echo $event->event_tokens; ?> token(s)
								</div>
								<div class="ui label">
									<i class="users icon"></i>
									<?php echo $event->event_limit;?> slots
								</div>
								<a href="<?php echo base_url('join/'.$user_id.'/'.$event->event_id) ?>" 
								class="ui right floated button">
									Join the Event
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


Milestones


Pictures


whatever
