<!-- set bodyTheme = "u-card-v1" -->

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
							<span>Nueva Solicitud </span>
						</li>
					</ul>
				</div>
				<!-- End Breadcrumbs -->
				<!--div class="g-pa-20"-->
					<div class="row g-brd-gray-light-v7">	
						<div class="container">
							<h2> Solicitud de nuevo estudiante</h2>
							<form class=" g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" name='formNew' id='formNew'>
								<h4>Complete los datos solicitados</h4>
								<div class="form-group row g-mb-25">
									<label for="name" class="col-2 col-form-label">Nombre</label>
									<div class="col-5">
										<input class="form-control rounded-0 form-control-md" type="text" placeholder="nombre" id="nombre" ng-model='data.name' required="">
									</div>
								</div>
								<div class="form-group row g-mb-25">
									<label for="apellido" class="col-2 col-form-label">Apellido</label>
									<div class="col-5">
										<input class="form-control rounded-0 form-control-md" type="search" placeholder="apellido" id="apellido" ng-model="data.apellido" required="">
									</div>
								</div>
								<div class="form-group row g-mb-25">
									<label for="sexo" class="col-2 col-form-label">Sexo</label>
									<div class="col-5">
										<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" value="female" name="radioGenero" ng-model='data.sexo' type="radio" checked="">
											<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
												<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
											</div>
											Femenino
										</label>

										<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" value="male" name="radioGenero" ng-model='data.sexo'  type="radio">
											<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
												<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
											</div>
											Masculino
										</label>
									</div>
								 
								</div>		  
								<div class="form-group row g-mb-25">
									<label for="nacimiento" class="col-2 col-form-label">Fecha de nacimiento</label>
									<div class="col-5">
										<input class="form-control rounded-0 form-control-md" type="date" placeholder="2011-08-19" id="nacimiento" ng-model='data.nacimiento' required="">
									</div>
								</div>
								
								<div class="form-group row g-mb-25">
									<label class="col-2 col-form-label" >Selecciona una casa</label>
									<div class="col-5">
										<select class="js-custom-select w-100 u-select-v1 g-brd-gray-light-v3 g-color-black g-color-primary--hover g-bg-white g-py-12 " 
												data-placeholder="SELECCIONE UNA CASA"
												data-open-icon="fa fa-angle-down"
												data-close-icon="fa fa-angle-up"
												ng-model="data.CASA" allow-single-deselect="true"
												required=""
												ng-options="tx as tx for (co,tx) in options.casa"
												>
												
										  
										</select>
									</div>
								</div>
								<div class="form-group row g-mb-25">
									<button type="submit" class="btn btn-lg u-btn-primary g-mr-10 g-mb-15" ng-click="addSolicitud()">
										<i class="fa fa-database g-mr-5"></i>
										Guardar
									</button>
									<button type="button" class="btn btn-lg u-btn-primary g-mr-10 g-mb-15" ng-click="clear()">
										<i class="fa fa-eraser g-mr-5"></i>
										Resetear
									</button>
									
								</div>
								
								
							</form>
						</div>
					</div>
				<!--/div-->
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
