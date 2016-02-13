<header>
	<nav id="desktop-header" class="hidden-xs">
		<div class="container-fluid">
			<div class="row row-1">
				<div class="pull-left">
					<a href="http://www.dnb.com/"></a>
				</div>
				<div class="pull-right">
					<ul class="list-inline">
						<li><span class="icon phone"></span> Call Us  @if($agent->isMobile())<a href="tel:+18006492568"> (800) 649-2568 </a>  @else() (800) 649-2568 @endif</li>
						<li><span class="icon chat"></span><a><script>getBoldchatLink("header")</script></a></li>
						<li><a href="https://www.dandb.com/product/ecomm/login?execution=e1s1" target="_blank">Login</a></li>
					</ul>
				</div>
			</div>
			<div class="row row-2">
				<div class="pull-left">
					<ul class="list-inline">
						<li><a href="/cos">Manage My Business Credit</a></li>
						<li><a href="/coo">Business Credit Reports</a></li>
						<li><a href="https://dnb.com/duns-number.html" target="_blank">D-U-N-S Number</a></li>
					</ul>
				</div>
				<div class="pull-right">
					<span class="toggle-search"><img src="/images/magnify-glass-icon.png"></span>
				</div>
			</div>
		</div>
	</nav>
	<nav id="mobile-header" class="hidden-lg hidden-md hidden-sm">
		<div class="navbar-header">
			<div class="navbar-toggle pull-left">
				<div class="toggle-menu" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</div>
			<div class="navbar-toggle pull-right">
				<span class="toggle-search"><img src="/images/magnify-glass-icon.png"></span>
			</div>
			<div class="logo navbar-nav"><a href="http://www.dnb.com/"></a></div>
		</div>
		<div id="mobile-menu" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="toggle-menu text-right"><a><span class="glyphicon glyphicon-remove"></span></a></li>
				<li><a href="/cos">Manage My Business Credit</a></li>
				<li><a href="/coo">Business Credit Reports</a></li>
				<li><a href="https://dnb.com/duns-number.html">D-U-N-S Number</a></li>
				<li><a><script>getBoldchatLink("header")</script></a></li>
				<li><a href="https://www.dandb.com/product/ecomm/login?execution=e1s1">Login</a></li>
				<li><a href="http://www.dnb.com/company/contact-us.html">Contact Us</a></li>
			</ul>
		</div>
	</nav>
</header>
