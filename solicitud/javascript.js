var ListaOrden = angular.module('ListaOrden', []);
//localStorage.clear();
// Define the `RegistroCtrl` controller on the `ListaOrden` module
 ListaOrden.controller('ListaCtrl', function ListaCtrl($scope,$http) {
	$scope.data = [ ];
	$scope.filters=[];
	$scope.options=[];
	$( ".btn_solicitudes" ).addClass( "active" );
	$( ".btn_profesor" ).removeClass( "active" );
	$( ".btn_personaje" ).removeClass( "active" );
	$( ".btn_estudiante" ).removeClass( "active" );
	$scope.options.casa = ["slytherin", "gryffindor", "ravenclaw" , "hufflepuff"];

	
	$scope.addSolicitud = function() {
		const arr = JSON.parse(localStorage.getItem('newDatos'));
		console.log('viene esto', arr);
		//var newDatos = [ $scope.data.name + ' ' +$scope.data.apellido,  $scope.data.sexo,  $scope.data.nacimiento, $scope.data.CASA];
		
		if(arr==null){
			var newDatos = [[ $scope.data.name + ' ' +$scope.data.apellido,  $scope.data.sexo,  $scope.data.nacimiento, $scope.data.CASA]];
			localStorage.setItem('newDatos', JSON.stringify(newDatos));
		} else {
			var newDatos = [ $scope.data.name + ' ' +$scope.data.apellido,  $scope.data.sexo,  $scope.data.nacimiento, $scope.data.CASA];
			arr.push(newDatos);
			localStorage.setItem('newDatos', JSON.stringify(arr));
		}
	
		console.log(localStorage.getItem('newDatos'));
	};
	
	$scope.addSolicitudddd = function() {
		var lista = JSON.parse(localStorage.newDatos);
		
		
		var newDatos = {name: $scope.data.name + ' ' +$scope.data.apellido, sexo: $scope.data.sexo, nacimiento: $scope.data.nacimiento};
		//console.log('voy a guardar', number);
		//localStorage.setItem(1, newDatos);
		localStorage.newDatos = JSON.stringify(newDatos);
		//localStorage.numero = JSON.stringify(numero);
		
		console.log(JSON.parse(localStorage.newDatos)); 
	};
	
	
});
