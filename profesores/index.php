<!-- set bodyTheme = "u-card-v1" -->
<?php

?>
<!DOCTYPE html>
<html lang="en" ng-app="ListaOrden">

<head>
  <!-- Title -->
  <title>Lista de profesores</title>

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
            <a class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover" href="#">profesores</a>
            <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
          </li>
          <li class="list-inline-item g-color-primary">
            <span>List View</span>
          </li>
        </ul>
        <h2 class="h2 mb-0">Profesores </h2>
      </div>
      <!-- End Breadcrumbs -->
	  <!-- Filters -->
      <div class="container g-pb-20">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 g-mb-30">
            <div class="d-flex align-items-center">
              <h3 class="h6 g-font-weight-600 mr-4 mb-0">Visualizar resultados en:</h3>

              <!-- Filters - List -->
              <ul class="list-inline g-bg-secondary g-pa-3 mb-0">
                <li class="list-inline-item mr-0">
                  <button type="button" class="btn btn-link gridView d-block  g-bg-white g-bg-secondary--active g-color-text g-color-primary--hover g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-px-20 g-py-10" ng-click="cambiarView('GRID')"><i class="g-color-main mr-1 icon-grid"></i> GRID</button>
				  
                </li>
                <li class="list-inline-item mr-0">
				<button type="button" class="btn btn-link listView d-block  g-bg-white g-bg-secondary--active g-color-text g-color-primary--hover g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-px-20 g-py-10" ng-click="cambiarView('TABLA')"><i class="g-color-main mr-1 icon-list"></i> Tabla</button>	
                  
                </li>
              </ul>
              <!-- End Filters - List -->
            </div>
          </div>

          
        </div>
      </div>
      <!-- End Filters -->
		<div class="g-pa-20">
          <div class="row g-brd-gray-light-v7">	
			
           
			<!-- Agents -->
      <div class="container">
		<!-- Grid de datos-->
        <div class="row g-mb-70" ng-show="view=='GRID'">
          <div class="col-sm-6 col-lg-3 g-mb-30 " ng-repeat="profesor in listaData">
							<!-- Agents -->
								<div class="u-shadow-v11 u-shadow-v21--hover  text-center g-transition-0_3 ">
									<div class="g-bg-white g-pa-20">
										<div class=" mx-auto mb-10">
										  <img class="img-fluid g-brd-around g-brd-3 g-brd-gray-light-v3 g-width-130 g-height-130 rounded-circle rounded " src="{{profesor.image}}" alt="Image Description">
										</div>
										<h3 class="h5"><a class="g-color-main" href="#">{{profesor.name}}</a></h3>
										<span class="d-block g-color-gray-dark-v5 g-font-size-13 mb-1 g-height-20" >Patronus: {{profesor.patronus}}</span>
										<span class="d-block g-font-size-13 g-height-20" >Age: {{profesor.age}} <span ng-hide="profesor.age==''">years old</span> </span>
									</div>
									
									
								</div>
							<!-- End Agents -->
							</div>
		  </div>
		  <!-- End Grid de datos -->
		  <!-- Tabla de datos -->
              <div class="card g-brd-gray-light-v7 g-mb-30" ng-show="view=='TABLA'">
                

                <div class="tOrdenes" >
					<table id="ListaOrdenes" class="display w-100">
						<thead>
						  <tr>
							<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">Name</th>
							<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Patronus</th>
							<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Age</th>
							<th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Image</th>
							
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
