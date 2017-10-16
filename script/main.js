$(function(){
	var callback = $(".callback");
	var callbackForm = $(".callback-form");
	callback.click(function(){
		callbackForm.toggleClass("hide");
		callback.toggleClass("hide");
	});
	$('[data-form]').on('submit', function(e){
		$this = $(this);
		e.preventDefault();

		checkInputs($this.find('input[type=tel]'));

		if (!$this.find('.text-input.error').length){
			var ajaxData = {
				url: 'index.php',
				type: $this.attr('method'),
				data: $this.serialize()
			};
			$this.find('button[type=submit]').prop('disabled', true);
			$this.find('.text-input').addClass('disabled');
			$.ajax(ajaxData).done(function(req) {
				$this.find('button[type=submit]').prop('disabled', false).addClass('success').text('Отправлено!');
			});
		}
	});


});