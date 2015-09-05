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
								<br/><br/><br/>
								<div
								    class="fb-like"
								    data-send="true"
								    data-width="450"
								    data-show-faces="true">
								</div>
							</div>
						</div>
					</div>
					<!--Milestones-->
					<br><div class="ui horizontal divider">Milestones</div><br>
					<div class="ui centered grid container">
						<div class="ui statistics">
							<div class="statistic">
								<div class="value">100</div>
								<div class="label">Trees Planted</div>
							</div>
							<div class="statistic">
								<div class="text value">Two <br>Hundred</div>
								<div class="label">Signups</div>
							</div>
							<div class="statistic">
								<div class="value">
									<i class="computer icon"></i>3
								</div>
								<div class="label">
									Sessions
								</div>
							</div>
							<div class="statistic">
								<div class="value">
									<i class="users icon"></i> 10
								</div>
								<div class="label">Team Leaders</div>
							</div>
						</div>
					</div>
					<br><div class="ui horizontal divider">Photos</div><br>
					<div class="ui grid">
						<div class="four wide computer column">
							<a class="ui circular medium image" href="">
								<img src="<?php echo base_url('img/forever.png') ?>" alt="">
							</a>
						</div>
						<div class="four wide computer column">
							<a class="ui circular medium image" href="">
								<img src="<?php echo base_url('img/forever.png') ?>" alt="">
							</a>
						</div>
						<div class="four wide computer column">
							<a class="ui circular medium image" href="">
								<img src="<?php echo base_url('img/forever.png') ?>" alt="">
							</a>
						</div>
						<div class="four wide computer column">
							<a class="ui circular medium image" href="">
								<img src="<?php echo base_url('img/forever.png') ?>" alt="">
							</a>
						</div>
						<div class="ui right floated button">View more photos</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
