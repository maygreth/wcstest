<!-- set bodyTheme = "u-card-v1" -->
<?php

?>
<!DOCTYPE html>
<html lang="en" ng-app="ListaOrden">

<head>
  <!-- Title -->
  <title>Solicitud de nuevo estudiante</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <?php require("../basics.php")?>
</head>

<body>
  <?php require("../header.php")?>
  


<main class="container-fluid px-0 g-mt-0">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden" >
     

		<div class="col g-ml-45 g-ml-0--lg g-pb-65--md" id="ListaContainer" ng-controller="ListaCtrl" ng-cloak>
			<?php require("../filtros.php")?>
			<!-- Breadcrumbs -->
			<div class="container g-py-50">
				<ul class="u-list-inline g-font-weight-500 mb-2">
					<li class="list-inline-item g-mr-5">
						<a class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover" href="#">Inicio</a>
						<i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
					</li>
					<li class="list-inline-item g-mr-5">
						<a class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover" href="#">Solicitudes</a>
						<i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
					</li>
					<li class="list-inline-item g-color-primary">
						<span>Lista Solicitudes</span>
					</li>
				</ul>
				
			</div>
			<!-- End Breadcrumbs -->
	 
			<div class="g-pa-20">
				<div class="row g-brd-gray-light-v7">	
					<div class="container">
						<div class="text-center text-uppercase u-heading-v6-2 g-mb-20 g-pt-40">
							<h2 class="h3 u-heading-v6__title g-brd-primary">Lista de solicitudes</h2>
						</div>
						<!-- Tabla de datos -->
						<div class="row ">
							<div class="col-md-2  g-mb-30 ">
								<a class="btn btn-block pull-right u-btn-primary g-color-white g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15" href="../solicitud" >
									<i class="g-color-white mr-1 icon-hotel-restaurant-002 u-line-icon-pro"></i> 
									Nueva Solicitud
								</a>	
							</div>
						</div>
						<div class="card g-brd-gray-light-v7 g-mb-30">
							<div class="tOrdenes" >
								<table id="ListaOrdenes" class="display w-100">
									<thead>
									  <tr>
										<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">Nombre</th>
										<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Edad</th>
										<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Sexo</th>
										<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Casa</th>
										
										
									  </tr>
									</thead>
								
								</table>
							</div>
						</div>
						<!-- End tabla de datos -->
					</div>
				</div>
			</div>
			<?php require("../footer.php")?>
       
		</div>
	</div>
</main>

 <script src="javascript.js"></script> 
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();
  
      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
  
      // initialization of charts
     /*  $.HSCore.components.HSAreaChart.init('.js-area-chart');
      $.HSCore.components.HSDonutChart.init('.js-donut-chart');
      $.HSCore.components.HSBarChart.init('.js-bar-chart'); */
  
      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav', {
        afterOpen: function() {
          setTimeout(function() {
            /* $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart'); */
          }, 400);
        },
        afterClose: function() {
          setTimeout(function() {
           /*  $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart'); */
          }, 400);
        }
      });
  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');
  
      // initialization of datepicker
      $.HSCore.components.HSDatepicker.init('#datepicker', {
        dayNamesMin: [
          'SU',
          'MO',
          'TU',
          'WE',
          'TH',
          'FR',
          'SA'
        ]
      });
  
      /* // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false}); */
  
      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));
  
      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
    });
  </script>
</body>

</html>
