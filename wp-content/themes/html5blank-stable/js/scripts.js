(function ($, root, undefined) {
	

	$(function () {
		var company_price = $('input[name=input_7]'),
			less = $('input[name=input_8]'),
				net_price = $('input[name=input_9]'),
			wRate = $('input[name=input_10]'),
				wPrice = $('input[name=input_11]'),
			rRate = $('input[name=input_12]'),
				rPrice = $('input[name=input_13]');

		// when company price field is focusout 
		company_price.focusout(function(){
			set_netPrice();
			set_wholesalePrice();
			set_retailPrice();
		});

		// when less field is focusout
		less.focusout(function(){
			set_netPrice();
			set_wholesalePrice();
			set_retailPrice();
		});

		// when wholesale rate field is focusout
		wRate.focusout(function(){
			set_wholesalePrice();
		});

		// when retail rate field is focusout
		rRate.focusout(function(){
			set_retailPrice();
		});
	

		// custom function declaration
		function set_netPrice(){
			net_price.val( (parseFloat(company_price.val()) - parseFloat( (less.val()/100) * company_price.val() )).toFixed(2) );
		}	

		function set_wholesalePrice(){
			wPrice.val( (parseFloat(net_price.val()) + parseFloat( (wRate.val()/100) * net_price.val() )).toFixed(2) );
		}

		function set_retailPrice(){
			rPrice.val( (parseFloat(net_price.val()) + parseFloat( (rRate.val()/100) * net_price.val() )).toFixed(2) );
		}

	});
})(jQuery, this);
