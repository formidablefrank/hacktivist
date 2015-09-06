
	$('#subscribe').on('click', function(){
		$.ajax({
			url: "https://post.chikka.com:443/smsapi/request",
			type: "POST",
			data: "&message_type=SEND&mobile_number=63"+ $('#number').val() +"&shortcode=29290469148&message_id=1231425&message=Good morning! See you at the event. Thank you so much for participating!" + "&client_id=f3be0f5b7d2abc0ce6fc0dccf7ecc049272af5679fbf5a547429cbaddb0391ff&secret_key=36718d987648bb0e46b32dcff3c751d7c445453091dcf4079c7662b6cad653d0",
			dataType: "json",
			success: function(result){
				console.log(result);
			},
			error: function(err){
				console.log(err);
			}
		});
	});
