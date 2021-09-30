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
  


  <main class="container-fluid px-0 ">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden" >
     

      <div class="col g-ml-45 g-ml-0--lg g-pb-65--md" id="ListaContainer" ng-controller="ListaCtrl" ng-cloak>
       <!-- Promo Block -->
      <div class="g-bg-white g-bg-pos-top-center g-bg-img-hero  g-py-120" >
        <div class="container g-pos-rel g-z-index-1">
          <div class="text-center g-mb-35">
            <h1 class="h2 g-color-white mb-0">Ingrese los datos del nuevo estudiante</h1>
          </div>

          <!-- Input Group -->
          <form id="filtersForm">
            <div class="row justify-content-center">
				<div class="form-group g-mb-20">
                  <label class="g-mb-10">Nombre</label>
                  <div class="input-group g-brd-primary--focus">
                    <div class="input-group-prepend">
                      <span class="input-group-text rounded-0 g-bg-white g-color-gray-light-v1" ><i class="icon-user"></i></span>
                    </div>
                    <input class="form-control form-control-md border-left-0 border-right-0 rounded-0 px-0" type="text" placeholder="Nombre del estudiante" ng-model="new.name">
                    
                  </div>
                </div>
              <div class="col-sm-4 col-lg-3 g-mb-30">
				<label class="g-color-white mb-0" ng-show="tipo=='PERSONAJE'">Selecciona una casa</label>
                <!-- Button Group -->
                <select class="js-custom-select w-100 u-select-v1 g-brd-gray-light-v3 g-color-black g-color-primary--hover g-bg-white g-py-12 " 
                        data-placeholder="SELECCIONE UNA CASA"
                        data-open-icon="fa fa-angle-down"
                        data-close-icon="fa fa-angle-up"
						ng-model="filters.CASA" allow-single-deselect="true"
						ng-show="tipo=='PERSONAJE'"
						ng-options="tx as tx for (co,tx) in options.casa"
						ng-change='buscarPersonaje()'>
						<option>Seleccione una casa </option>
                  
                </select>
                <!-- End Button Group -->
              </div>

             

              
            </div>
          </form>
          <!-- End Input Group -->
        </div>
      </div>
      <!-- End Promo Block -->
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
			
           
			<!-- Agents -->
      <div class="container">
		
		  <!-- Tabla de datos -->
              <div class="card g-brd-gray-light-v7 g-mb-30">
                

                <div class="tOrdenes" >
					<table id="ListaOrdenes" class="display w-100">
						<thead>
						  <tr>
							<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">Name</th>
							<!--th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Patronus</th-->
							<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Age</th>
							<!--th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Image</th-->
							
						  </tr>
						</thead>
						
					</table>
                </div>

                
              </div>
              <!-- End tabla de datos -->
      </div>
      <!-- End Agents -->
          

            

            
           
            
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
