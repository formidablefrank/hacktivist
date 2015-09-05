<section id="join-form">
	<div class="ui centered grid container">
		<div class="fourteen wide column">
			<div class="ui segment">
				<div class="ui dividing header">Thank you for joining!</div>
				<div class="description">To get more updates via sms, pls provide your contact number below:</div>
				<form action=""><br>
					<div class="ui fluid centered grid">
						<div class="fourteen wide mobile ten wide tablet eight wide computer column">
							<div class="ui fluid labeled input">
								<div class="ui label">
									<i class="phone icon"></i>
								</div>
								<input type="text" placeholder="639xxXXXxxxx" id="number">
							</div><br>
							<div class="ui right floated submit button" id="subscribe">Subscribe</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$('#subscribe').on('click', function(
	$.ajax({
		url: "https://post.chikka.com:443/smsapi/request",
		type: "POST",
		data: "&message_type=SEND&mobile_number=63"+ $('#number').val() +"&shortcode=29290469148&message_id=1231425&message=Good morning! See you at the event. Thank you so much for participating! Lorem Lorem Lorem",
		dataType: "json",
		success: function(result){
			console.log('yeahuhh');
		},
		error: function(err){
			window.location.href = "<?php echo base_url() ?>";
		}
	});
));
</script>
