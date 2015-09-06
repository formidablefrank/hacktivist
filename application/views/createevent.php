<section id="create-event">
	<div class="ui left aligned grid container">
		<div class="ui segment container">
			<?php echo form_open('create', array('class' => 'ui form', 'method' => 'POST')) ?>
				<div class="ui dividing header">Promote your event!</div>
				<div class="field">
					<div class="label">Event name</div>
					<input type="text" placeholder="Title" name="title">
				</div>
				<div class="field">
					<div class="label">About</div>
					<textarea name="desc" id="" cols="30" rows="8" placeholder="What is it all about?"></textarea>
				</div>
				<div class="two fields">
					<div class="field">
						<div class="label">When</div>
						<input type="date" name="date">
					</div>
					<div class="field">
						<div class="label">Where</div>
						<input type="text" name="address">
						<input type="hidden" name="lat" value="15.5175512">
						<input type="hidden" name="lon" value="120.5963779">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<div class="label">Number of participants</div>
						<input type="number" name="limit">
					</div>
					<div class="field">
						<div class="label">Number of tokens</div>
						<input type="number" name="token">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<div class="label">Category</div>
						<select class="ui dropdown" name="">
							<option value="">Choose here</option>
							<?php foreach ($categories as $category) { ?>
								<option value="<?php echo $category->category_id ?>"><?php echo $category->category_name ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="field">
						<div class="label">For Featured Events</div>
						<select class="ui dropdown" name="category">
							<option value="">Choose here</option>
							<option value="no">I won't pay for feature advertisements</option>
							<option value="oneweek">1 week</option>
							<option value="threeweeks">3 weeks</option>
						</select>
					</div>
				</div>
				<input type="submit"></a>
			</form>
		</div>
	</div>
</section>