App = angular.module('App', [])


App.controller 'ClaseController', ($scope, $http) ->
	$scope.submit = () ->
		$scope.clase.Clase.curso_id = $scope.curso.Curso.id
		$http.post('/profesor/clases/agregar', $scope.clase)
			.success () ->
				$scope.clase.Clase.name = ''
				$scope.clase.Clase.description = ''
				$('#mensaje').text('Clase creada')
				$('.mensaje').fadeIn().delay(500).fadeOut()
			.error (errorMessage) ->
				$('#mensaje').text(errorMessage)
				$('.mensaje').fadeIn().delay(500).fadeOut()
				
