 <!-- Promo Block -->
      <div class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-cover g-bg-black-opacity-0_5--after g-py-120" style="background-image: url(../assets/img/background-hogwarts.jpg);">
        <div class="container g-pos-rel g-z-index-1">
          <div class="text-center g-mb-35">
            <h1 class="h2 g-color-white mb-0">Selecciona el portafolio que deseas visualizar</h1>
          </div>

          <!-- Filters - List -->
          <div class="text-center">
            <ul class="d-inline-block list-inline g-bg-secondary g-pa-3 mb-5">
              <li class="list-inline-item mr-0">
                <a class="btn_personaje d-block active g-bg-white g-bg-primary--active g-color-main g-color-white--active g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-px-20 g-py-10" href="../personajes2">
                  Personajes
                </a>
              </li>
              <li class="list-inline-item mr-0">
                <a class="btn_estudiante d-block g-bg-white g-bg-primary--active g-color-main g-color-white--active g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-px-20 g-py-10" href="../estudiantes">
                  Estudiantes
                </a>
              </li>
			  <li class="list-inline-item mr-0">
                <a class="btn_profesor d-block g-bg-white g-bg-primary--active g-color-main g-color-white--active g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-px-20 g-py-10" href="../profesores">
                  Profesores
                </a>
              </li>
            </ul>
          </div>
          <!-- End Filters - List -->

          <!-- Input Group -->
          <form id="filtersForm">
            <div class="row justify-content-center">
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