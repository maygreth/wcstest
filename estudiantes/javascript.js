
var ListaEstudiante = angular.module('ListaEstudiante', []);

// Define the `RegistroCtrl` controller on the `ListaEstudiante` module
 ListaEstudiante.controller('ListaCtrl', function ListaCtrl($scope,$http) {
	$scope.data = [ ];
	$scope.listaData=[];
	console.log('hello');
	$scope.filters=[];
	$scope.options=[];
	$scope.tipo='ESTUDIANTE';
	$scope.view='TABLA';
	$( ".listView" ).addClass( "active" );
	$( ".btn_estudiante" ).addClass( "active" );
	$( ".btn_personaje" ).removeClass( "active" );
	$( ".btn_profesor" ).removeClass( "active" );
	$( ".btn_solicitudes" ).removeClass( "active" );
	$scope.options.casa = ["slytherin", "gryffindor", "ravenclaw" , "hufflepuff"];
	
	
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
	
	$scope.buscarEstudiantes = function () {
		
		var url = 'https://hp-api.herokuapp.com/api/characters/students';
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
				

			$scope.$applyAsync();
			if($scope.view=='TABLA'){
				jQEstudianteTable.api().clear().rows.add($scope.listaData).draw();
			}
			
				
			
              
        }, function (response) {
              
              // on error
              console.log(response.data,response.status);
              
          });
	
	} 
	
	
	
let jQEstudianteTable = $('#ListaEstudiantes').dataTable({
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
						data: 'patronus'
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
				
			});
	
  $scope.buscarEstudiantes();
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