jQuery(function($){
	$('#delete-site-form').hide()
	$(document).on( 'submit', '#site-search-form', function (e) {
		e.preventDefault()
		var $form = $( this ).serializeArray()
		$.ajax({
			url: settings.ajaxurl,
			data: $form,
			type: 'POST',
			dataType: 'JSON',
			success: function(res){
				$('#delete-site-form').show()				
				$('#site_selector').val(res.site_selector)
				$('#site-list').html(res.site_list)
				console.log(res)
			},
			error: function(res) {
				console.log(res)
			}
		})
	} );
	$(document).on( 'submit', '#delete-site-form', function (e) {
		e.preventDefault()
		var $form = $( this ).serializeArray()
		$.ajax({
			url: settings.ajaxurl,
			data: $form,
			type: 'POST',
			dataType: 'JSON',
			success: function(res){
				// $('#delete-site-form').hide()
				$('#site-list').html(res.site_list)
				$('#response_message').html(res.message)
				console.log(res)
			},
			error: function(res) {
				console.log(res)
			}
		})
	} );
})