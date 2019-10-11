<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php $this->load->view('includes2/header');?>
  </head>
  <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/jquery-3.3.1.min.js"></script>

  <body id="top">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    	<!-- <a href="contact.html" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp">
    		<i class="material-icons">mail</i>
    	</a> -->
  		<header class="mdl-layout__header mdl-layout__header--waterfall site-header">
    		<div class="mdl-layout__header-row site-logo-row">
    			<span class="mdl-layout__title">
        			<div class="site-logo"></div>
        			<!-- <span class="site-description">CV star soft</span> -->
        		</span>
        	</div>
	        <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
	          <?php $this->load->view('includes2/navigation');?>
	        </div>
        </header>
  	<div class="mdl-layout__drawer mdl-layout--small-screen-only">
    	<?php $this->load->view('includes2/navigation_small');?>
  	</div>
  	<main class="mdl-layout__content">
	    <div class="site-content">
	    	<div class="container">
          		<?php $this->load->view($subview); ?>
			</div>
        </div>
        <footer class="mdl-mini-footer">
          <div class="footer-container">
            <div class="mdl-logo">&copy; Star Team.</div>
            <ul class="mdl-mini-footer__link-list">
              <li><a href="#">Privacy & Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
  </div>
    
      <!--<script src="https://code.getmdl.io/1.3.0/material.min.js" defer></script>-->
      <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/material.min.js"></script>
      <!-- SCRIPTS -->
    
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/mdb.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/index.js"></script>

    <!-- datetime picker -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/moment.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/moment-with-locales.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/bootstrap-material-datetimepicker.js"></script>
    
     <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/forms.js"></script> 
 
    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/materialize.js"></script> 

    <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/custom.js"></script> 
 <!--   <script type="text/javascript" src="<?php echo base_url();?>/assets2/js/materialize.min.js"></script>

     -->
    </div>
  </body>
</html>