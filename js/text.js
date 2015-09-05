
	$('#subscribe').on('click', function(){
		$.ajax({
			url: "https://post.chikka.com:443/smsapi/request",
			type: "POST",
			data: "&message_type=SEND&mobile_number=63"+ $('#number').val() +"&shortcode=29290469148&message_id=1231425&message=Good morning! See you at the event. Thank you so much for participating! Lorem Lorem Lorem",
			dataType: "json",
			success: function(result){
				console.log(result);
			},
			error: function(err){
				console.log(err);
			}
		});
	});
