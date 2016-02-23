function appendPrice()
{
	var quantity = $('input[class=product_quantity]:checked').val();
	var price_string = eval("'price_dollars_' + quantity");
	var price_dollars = document.getElementById((price_string)).value;
	var price_cents = document.getElementById((eval("'price_cents_' + quantity"))).value;
	$(".modal-body #price_dollars").html('$' + price_dollars +'<sup>'+ price_cents +'</sup>');
	if(quantity > 1){
		$(".modal-body #quantity").html("Report for "+ quantity + " companies");
	}else{
		$(".modal-body #quantity").html("Report for "+ quantity + " company");
	}
}
