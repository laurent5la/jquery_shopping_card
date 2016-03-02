<?php
		if (! isset($footer)) {
			$footer = Config::get("footer");
		}
?>
<footer id="footer">
	<div id="contact-us-section" class="row">
		<div class="col-md-3 col-sm-12 text-uppercase title">
			Contact Us:
		</div>
		<div class="col-md-3 col-sm-12">
			<ul class="list-inline list-unstyled">
				<li>
					<!-- <span class="glyphicon glyphicon-earphone"></span>
					 --><span class="icon phone white"></span><img src="images/phone-icon-white.png"> Call Us<a href=""> (800) 649-2568 </a>
				</li>
			</ul>
		</div>
		<div class="col-md-3 col-sm-12">
			<ul class="list-inline list-unstyled">

				<li><span class="icon chat white"></span><img src="images/chat-icon-white.png">Start a Live Chat<script>getBoldchatLink("footer")</script></li>
			</ul>
		</div>
		<div id="toggle-contact-form" class="col-md-3 col-sm-12">
			<ul class="list-inline list-unstyled">
				<li><span class="icon pencil white"></span><img src="images/form-icon-white.png"> Fill out the Contact Form</li>
				<!-- <span id="toggle-contact-form-chevron" class="glyphicon glyphicon-chevron-down"></span>
			 --></ul>
		</div>
	</div>
	
	
	<div id="links-section">
		<div class="row links">
			<div class="col-md-3 col-sm-12">
				<a class="logo" href="http://www.dnb.com/"></a>
			</div>
			@for($i=0;$i<count($footer);$i++)
				<div class="col-md-2 col-sm-12 group-link-heading">
					<b>{{($footer[$i]['name'])}}</b><span class="glyphicon glyphicon-plus pull-right hidden-lg hidden-md hidden-sm"></span>
					<div>
						<ul class="list-unstyled">
						@for($j=0;$j<count($footer[$i]['items']);$j++)
							<li><a href="">{{($footer[$i]['items'][$j])}}</a></li>
						@endfor
						</ul>
					</div>
				</div>
			@endfor
			<div class="col-md-3 col-sm-12">
				<ul class="list-inline">
					<li>
						<a href="" target="_blank"><img class="social" src="/images/twitter-icon.png"></a>
						<a href="" target="_blank"><img class="social" src="/images/linkedin-icon.png"></a>
						<a href="" target="_blank"><img class="social" src="/images/facebook-icon.png"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row legal">
			<div class="col-md-12 col-sm-12">
				<ul class="list-inline">
					<li>© Company Name, Inc. 2000-<?php echo date("Y");?>. All rights reserved.</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

