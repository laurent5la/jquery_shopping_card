(function ($) {
	// $.fn.warning = function() {
	//    return this.each(function() {
	//       alert('Tag Name:"' + $(this).prop("tagName") + '".');
	//    });
	// };

	$.fn.upsaleProduct = function(product) {
	  return this.click(onClick)
      function onClick(){
         console.log(this.id);   
         $(".modal-body #main_product").html(`
		 <div class="hidden-xs hidden-sm">
			<div class="modal-body row">
				<div class="col-md-12 modal_product cs-bg">
					<div class="col-md-6">
						<p class="short_description">Free Access to Changes in your D&amp;B<sup>Â®</sup> Scores and Ratings<sup>Â®</sup><br>Some of the features of CreditSignal<sup>Â®</sup>:</p>
						<ul class="bullets">
							<li>D&amp;B scores and ratings change alerts</li>
							<li>Inquiry alerts<sup>â€ </sup></li>
							<li>Special event alerts</li>
							<li>Mobile access to CreditReporter<sup>â„¢</sup></li>
						</ul>
					</div>
					<div class="col-md-1" style="display:table;"></div>
					<div class="col-md-5 modal_border">
						<h2 class="modal_title">CreditSignal<sup>Â®</sup></h2>
						<div class="price"></div>
						<p class="description">Report for one company</p>
						<button type="submit" class="cm credit_signal_signup">Sign Up for Free</button>
					</div>
				</div>
				<div class="col-md-12 upgrade_banner cs-dark-bg"><h2>Upgrade to <strong>CreditMonitor<sup>â„¢</sup></strong> to receive these additional features:</h2></div>
				<div class="col-md-12 modal_upgrade cm">
					<div class="col-md-6">
						<ul class="bullets">
							<li>Unlimited access to your D&amp;B<sup>Â®</sup> scores and ratings</li>
							<li>Industry benchmarking</li>
							<li>Receive alerts to changes in your D&amp;B business credit file</li>
							<li>Expedited D&amp;B D-U-N-S<sup>Â®</sup> Number</li>
						</ul>
						<h3 class="short_description"><strong>and all of the CreditSignal<sup>Â®</sup> features!</strong></h3>
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-5 modal_border cm-border-color">
						<h2 class="modal_title">CreditMonitor<sup>â„¢</sup></h2>
						<div class="price">
							<h1>$49<sup>00</sup> <small class="cm">/mo</small></h1>
						</div>
						<p class="description">Report for one company</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-content modal-small cs-bg">
			<div class="hidden-md hidden-lg row">
				<div class="modal-body text-center col-sm-12 col-xs-12">
					<div class="modal_title">CreditSignal<sup>Â®</sup></div>
						<button id="modal_call" class="cm credit_signal_signup">Sign Up for Free</button>
						<h3>or</h3>
						<button id="modal_chat"><div class="bcText"><a href="#"><div>Chat</div></a></div></button>
				</div>
			</div>
		</div>
`);   
         //$(this).parent(); // This is the <ul>
      }

   }
 
    // $.fn.changeColor = function( options ) {
    //     var settings = $.extend({
    //         color: "#556b2f",
    //         backgroundColor: "white"
    //     }, options );
 
    //     return this.css({
    //         color: settings.color,
    //         backgroundColor: settings.backgroundColor
    //     });
 
    // };
 
}( jQuery ));
