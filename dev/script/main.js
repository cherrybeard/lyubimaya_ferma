(function($){
    $(document).ready(function() {
			var $callback = $("[data-callback-show]");
			var $callbackForm = $("[data-callback-form]");

			function checkInputs($inputs){
				$inputs.each(function(){
					var $input = $(this).closest('.text-input');
					if (!$(this).val()) {$input.addClass('error'); }
				});
			}

			$callback.click(function(){
				$(this).closest('[data-callback-state]').attr('data-callback-state', 'form');
			});

			$callbackForm.on('submit', function(e){
				var $this = $(this);
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
					$.ajax(ajaxData).done(function() {
						$this.find('button[type=submit]').prop('disabled', false).addClass('success').text('Отправлено!');
					});
				}
			});

	});
})(jQuery);
