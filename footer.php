<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html">list<span>race</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll">
									<?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
                				<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
                				<?php endif; ?>
								</li>
								<li class="scroll"><a href="#works"></a></li>
								<li class="scroll"><a href="#works"></a></li>
								<li class="scroll"><a href="#works"></a></li>
								<li class="scroll"><a href="#works">how it works</a></li>
			                    <li class="scroll"><a href="#explore">explore</a></li>
			                    <li class="scroll"><a href="#reviews">review</a></li>
			                    <li class="scroll"><a href="#blog">blog</a></li>
			                    <li class="scroll"><a href="#contact">contact</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								<?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
                				<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
                				<?php endif; ?>
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
                				<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
                				<?php endif; ?>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="<?= get_template_directory_uri() ?>/assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="<?= get_template_directory_uri() ?>/assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.counterup.min.js"></script>
		<script src="<?= get_template_directory_uri() ?>/assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="<?= get_template_directory_uri() ?>/assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="<?= get_template_directory_uri() ?>/assets/js/custom.js"></script>
        <?php wp_footer();?>	
    </body>
	
</html>