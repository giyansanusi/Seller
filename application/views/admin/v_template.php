<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url(); ?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url(); ?>assets/admin/js/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/js/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url(); ?>assets/admin/js/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/owl.carousel.css" type="text/css">
	<link href="<?php echo base_url(); ?>assets/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/fullcalendar.css">
	<link href="<?php echo base_url(); ?>assets/admin/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/css/xcharts.min.css" rel=" stylesheet">
    	<!-- TINY MCE -->
	<link href="<?php echo base_url(); ?>assets/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/admin/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- Style tambahan oleh giyan -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/giyanstyle.css" type="text/css">


  </head>

  <body onload="myLoader()">

    <div id="loader" class="loaderProperties"></div>

  <!-- container section start -->
    <section id="container" class="">
       
       <div class="animate-bottom">
        
        <?php $this->load->view('admin/header'); ?>

        <?php $this->load->view('admin/sidebar'); ?>
        
        <?php $this->load->view($vcontent); ?>
        
      </div>

    </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="<?php echo base_url(); ?>assets/admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url(); ?>assets/admin/js/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url(); ?>assets/admin/js/calendar-custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.customSelect.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/easy-pie-chart.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/xcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/gdp-data.js"></script>	
	<script src="<?php echo base_url(); ?>assets/admin/js/morris.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/sparklines.js"></script>	
	<script src="<?php echo base_url(); ?>assets/admin/js/charts.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  <!-- Ini script buat loader -->
  <script>
    var myVar;

    function myLoader() {
        myVar = setTimeout(showPage, 750);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
    }
  </script>

  </body>
</html>
