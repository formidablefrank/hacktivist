<section id="create-event">
	<div class="ui left aligned grid container">
		<div class="ui segment container">
			<form action="<? php echo base_url('/dashpage') ?>" class="ui form">
				<div class="ui dividing header">Promote your event!</div>
				<div class="field">
					<div class="label">Event name</div>
					<input type="text" placeholder="Title">
				</div>
				<div class="field">
					<div class="label">About</div>
					<textarea name="" id="" cols="30" rows="10" placeholder="What is it all about?"></textarea>
				</div>
				<div class="two fields">
					<div class="field">
						<div class="label">When</div>
						<input type="date">
					</div>
					<div class="field">
						<div class="label">Where</div>
						<input type="text">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<div class="label">Category</div>
						<select class="ui dropdown">
							<option value="">Choose here</option>
							<option value="Wildlife">Wildlife</option>
							<option value="Pollution">Pollution</option>
							<option value="Wastemanagement">Waste Management</option>
							<option value="renewableenergy">Renewable Energy</option>
							<option value="greentech">Green Technology</option>
						</select>
					</div>
					<div class="field">
						<div class="label">For Featured Events</div>
						<select class="ui dropdown">
							<option value="">Choose here</option>
							<option value="no">I won't pay for feature advertisements</option>
							<option value="oneweek">1 week</option>
							<option value="threeweeks">3 weeks</option>
						</select>
					</div>
					<div class="field">
						<div class="label"></div>
					</div>
				</div>
				<a class="ui right floated submit button" href='<?php echo base_url('org')?>'>Submit</a>
			</form>
		</div>
	</div>
</section>