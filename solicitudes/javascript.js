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
	$scope.tipo='SOLICITUDES';
	$scope.view='TABLA';
	$( ".listView" ).addClass( "active" );
	$( ".btn_solicitudes" ).addClass( "active" );
	$( ".btn_profesor" ).removeClass( "active" );
	$( ".btn_personaje" ).removeClass( "active" );
	$( ".btn_estudiante" ).removeClass( "active" );
	$scope.options.casa = ["slytherin", "gryffindor", "ravenclaw" , "hufflepuff"];
		
	$scope.buscarSolicitudes = function () {
		
		var array = JSON.parse(localStorage.newDatos);
		array.forEach(function(dataP) {
			console.log(dataP);
			nacimiento = dataP[2];
			edad ='';
			if(nacimiento!="" || nacimiento!=='undefined'){
				//calculo la edad
				console.log('NACIMIENTO', nacimiento);
				edad = yearsDiff(nacimiento);
			} 
			arrayData = {};
			arrayData.name =dataP[0];
			arrayData.age=edad; 
			arrayData.house=dataP[3];
			arrayData.gender=dataP[1];
			$scope.listaData.push(arrayData);
		});
		 
		
		jQSolicitudesTable.api().clear().rows.add($scope.listaData).draw();
	
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
				
				columns: [
					{
						data: 'name'
						
					},
					{
						data: 'age'
					},
					{
						data: 'gender'
					},
					{
						data: 'house'
					},
				],
				
			});
	
   $scope.buscarSolicitudes();
});

function yearsDiff(nacimiento) {
    arrayNac = nacimiento.split("T");
	nacimiento = arrayNac[0];
	NacArr = nacimiento.split("-");
	let d1 = Date.now();
	let d2 = new Date(NacArr[0],NacArr[1],NacArr[2]).getTime();
	let date1 = new Date(d1);
	let date2 = new Date(d2);
	let yearsDiff =  date1.getFullYear() - date2.getFullYear();
	return yearsDiff;
	return yearsDiff;
}