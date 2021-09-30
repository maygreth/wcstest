/* $(document).on('click', '#btnDetalle' , function(){
	var href = this.href;
    // Don't follow the link
	
	tosearch = $(this).data("id");
	
	console.log('tosearch ' + tosearch);
    event.preventDefault();
	// llamo el webservice para actualizar
	location.href='../orden/?id='+tosearch;
	
}); */
var ListaOrden = angular.module('ListaOrden', []);

// Define the `RegistroCtrl` controller on the `ListaOrden` module
 ListaOrden.controller('ListaCtrl', function ListaCtrl($scope,$http) {
	$scope.data = [ ];
	$scope.listaData=[];
	console.log('hello');
	$scope.filters=[];
	$scope.options=[];
	$scope.tipo='PROFESOR';
	$scope.view='TABLA';
	$( ".listView" ).addClass( "active" );
	$( ".btn_profesor" ).addClass( "active" );
	$( ".btn_personaje" ).removeClass( "active" );
	$( ".btn_estudiante" ).removeClass( "active" );
	$scope.options.casa = ["slytherin", "gryffindor", "ravenclaw" , "hufflepuff"];
	console.log('voy a buscar los filtros', $scope.options); 
	
	$scope.cambiarView = function (valor) {
		console.log('cambiando a' , valor);
		if(valor=='TABLA'){
			$scope.view='TABLA';
			jQSolicitudesTable.api().clear().rows.add($scope.listaData).draw();
			$( ".listView" ).addClass( "active" );
			$( ".gridView" ).removeClass( "active" );
		}  else if (valor=='GRID'){
			$scope.view='GRID';
			$( ".gridView" ).addClass( "active" );
			$( ".listView" ).removeClass( "active" );
		}
		$scope.$applyAsync();
	}
	
	$scope.buscarProfesores = function () {
		console.log('voy a buscar una orden',$scope.filters.CASA); 
		var url = 'https://hp-api.herokuapp.com/api/characters/staff';
		$http({
            method: 'GET',
			url: url,
			dataType: 'json',
				
              
        }).then(function (response) {
            var log = []; 
			var edad ='';			
			// on success
			$scope.Data = response.data;
			$scope.listaData = [];
			//$scope.Data.forEach(element => dataP){
			
			$scope.Data.forEach(function(dataP) {
				console.log(dataP);
				nacimiento = dataP['dateOfBirth'];
				edad ='';
				if(nacimiento!=""){
					//calculo la edad
					edad = yearsDiff(nacimiento);
				} 
				arrayData = {};
				arrayData.name =dataP['name'];
				arrayData.age=edad; 
				arrayData.patronus=dataP['patronus'];
				arrayData.image=dataP['image'];
				console.log('vengo arreglo', arrayData);	
				$scope.listaData.push(arrayData);
			});
				
			console.log('vengo 2',$scope.listaData); 
			$scope.$applyAsync();
			if($scope.view=='TABLA'){
				jQSolicitudesTable.api().clear().rows.add($scope.listaData).draw();
			}
			
				
			
              
        }, function (response) {
              
              // on error
              console.log(response.data,response.status);
              
          });
	
	} 
	
	
	
let jQSolicitudesTable = $('#ListaOrdenes').dataTable({
				data: $scope.listaData,
				//serverSide: false,
				ordering: true,
				paging: true,
				searching: false,
				"language": {
					"lengthMenu": "Mostrar _MENU_ registros por página",
					"zeroRecords": "No se encontraron registros",
					"info": "Mostrando la página _PAGE_ de _PAGES_",
					"infoEmpty": "No hay registros disponibles",
					"infoFiltered": "(filtered from _MAX_ total records)"
				},
				/* buttons: [ {
					extend: 'excelHtml5',
					text: '<i class="fa fa-file-excel-o margin-right-5"></i> Exportar',
					title: 'Export - Orodenes',
					className: 'btn-light',
					init: function(api, node, config) {
						$(node).removeClass('btn-secondary')
					}
				} ], */
				//info: true,
				columns: [
					{
						data: 'name'
						/* render: function(d, type, row) {
							lalupa = '<a href="../orden/?id='+ row.OrdenId +'"  id="btnDetalle"  data-toggle="tooltip" title="Ver detalle de la orden">'+ row.OrdenId +'</a>';
							firma='';
							
							return '<div class="tableControls text-center">'+ lalupa + firma +'</div>';
						} */
					},
					
					{
						data: 'patronus' /*render: $.fn.dataTable.render.moment( 'YYYY-MM-DD HH:mm:ss', 'DD/MM/YYYY', 'es' )*/
						/* render: function (data, type, row) {
							return (moment(data).format("DD/MM/YYYY"));
						} */
					},
					{
						data: 'age'
					},
					{ data: 'image',
						render: function(d, type, row) {
							imagen = '<img class="g-width-40 g-height-40 rounded-circle rounded g-mr-15" src="'+row.image+'">';
							
							
							return '<div class="tableControls text-center">'+ imagen +'</div>';
						}					
					
					}
					

				],
				//order: [/*[ '2', "desc" ],*/ ['1', "desc"]],
				/* rowCallback: function (row, data) {
					$('td:eq(0)', row).addClass('text-center');
					$('td:eq(5)', row).addClass('text-center');
					$('td:eq(6)', row).addClass('text-center');
					
					$('div.d-flex', row).addClass('justify-content-center');
				} */
			});
	$scope.buscarProfesores();
  
});

function yearsDiff(nacimiento) {
    NacArr = nacimiento.split("-");
	let d1 = Date.now();
	let d2 = new Date(NacArr[2],NacArr[1],NacArr[0]).getTime();
	let date1 = new Date(d1);
	let date2 = new Date(d2);
	let yearsDiff =  date1.getFullYear() - date2.getFullYear();
	return yearsDiff;
	return yearsDiff;
}