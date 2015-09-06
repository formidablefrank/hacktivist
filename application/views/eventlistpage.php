<section id="eventlistpage">
	<div class="ui centered grid container">
		<div class="fourteen wide column">
			<div id="content-seek" class="ui text container">
				<!-- search bar to ask a question -->
				<div class="ui fluid large icon input">
					<input placeholder="Type keywords here..." type="text" id="queryText">
					<i class="search icon"></i>
				</div>
			</div>
			<br>	
			
				<div class="ui grid">
					<?php foreach ($events as $event) { ?>
							<div class="ui fluid image container">
								<a href="<?php> echo base_url('event/' .$event->event_id) ?>">
									<img src="<?php echo $event->event_pic?>" alt="Event Image">
								</a>
							</div>		
					<?php } ?>
				</div>
			
		</div>
		<?php foreach ($events as $event) { ?>
			<div class="ui segment">
			<div class="ui green ribbon label"><?php echo $event->category_name ?></div>
			<h3><a href="<?php echo base_url('event/'.$event->event_id) ?>" class="header"><?php echo $event->event_name; ?> </a></h3>
			<h4><?php echo $event->ngo_name; ?></h4>
			<p><?php echo $event->event_details; ?></p>
			<p><?php echo date('M d, D H:i a', strtotime($event->event_start)); ?> - <?php echo date('M d, D H:i a', strtotime($event->event_end));?></p>
			<div class="extra">
				<div class="ui label">
					<?php echo $event->event_limit; ?>
					<strong>slots left</strong>
				</div>
			</div>
			</div>
		<?php } ?>
	</div>
</section>

<script type="text/javascript" src="<?php echo base_url('js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
// give the query text field focus by default on page load
$('#queryText').focus();

// declare a timeout variable to track typing and temporarily delay execution of ajax
var typeTimeout;

// handle query input field changes
$('#queryText').on('input', function(){
  // append the loading state to the input field
  $("#queryText").parent().addClass("loading");

  // set input field value into this function's scope for use within the timeout callback
  var query = $(this).val();

  // clear timeout if it exists
  clearTimeout(typeTimeout);

  // reset typeTimeout since input has changed yet again
  typeTimeout = setTimeout(function() {
    // user hasn't edited the text field for 500ms, process execute ajax request
    if(query === '') {
      $("#queryText").parent().removeClass("loading");
      $('div .result').remove();
      return 0;
    }

    $.ajax({
      url: '<?php echo base_url('home/ajax_search'); ?>',
      type: "POST",
      data: "query=" + query,
      dataType: "json",
      success: function(results){
        $("#queryText").parent().removeClass("loading");
        //remove all old search results first
        $('div .result').remove();
        //for each new search result found, allocate a box for them
        for (var i = results.length - 1; i >= 0; i--) {
          var resultTemplate =
            "<div class='ui result segment'>" +
              "<span class='ui green ribbon label'>" + results[i].category_name +"</span>" +
              "<h3><a href='<?php echo base_url('event/'.$event->event_id) ?>'><?php echo $event->event_name; ?></a></h3>" +
              "<p>" + results[i].faq_answer + "</p>" +
            "</div>";
          $(resultTemplate).insertAfter('#content-seek .input');
        };
      },
      error: function(){
        $("#queryText").parent().removeClass("loading");
      }
    });
    }, 500);
  });
});

</script>
