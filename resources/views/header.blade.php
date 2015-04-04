
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand page-scroll" href="#page-top">
				<span class="light" style="font-weight: 700;font-size: 25px;">Pi</span>
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-justified navbar-main-collapse">
			<ul class="nav navbar-nav">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="#about">About</a>
				</li>
				<li>
                    {!! HTML::linkRoute('browsemarket', 'Market Insights', array() ,array('class' => 'page-scroll')) !!}
				</li>
				<li>
					<a class="page-scroll" href="#contact">Find your Advisor</a>
				</li>


			</ul>
			<a class="login light" id="modal_trigger" href="#modal"> Login    </a>
		</div>
		<!-- /.navbar-collapse -->

	</div>
	<!-- /.container -->
</nav>
