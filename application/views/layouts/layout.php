<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php $this->load->view('includes/header');?>
  </head>

  <body>
        <!-- BEGAIN PRELOADER -->
        <div id="preloader">
            <div class="loader">&nbsp;</div>
        </div>
        <!-- END PRELOADER -->   

        <!-- SCROLL TOP BUTTON -->
            <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->
    
        <?php $this->load->view($subview); ?>

        <?php $this->load->view('includes/footer');?>

         <!-- initialize jQuery Library --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
        <!-- Slick Slider -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/waypoints.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.counterup.js"></script>
        <!-- mixit slider -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mixitup.js"></script>
        <!-- Add fancyBox -->        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js"></script>
        <!-- Wow animation -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.js"></script> 

        <!-- Custom js -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
			
  </body>
</html>