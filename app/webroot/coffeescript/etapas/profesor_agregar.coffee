App = angular.module('App', [])


App.controller 'EtapaController', ($scope, $http) ->

	area1 = new nicEditor({
				fullPanel: true,
				iconsPath: '/img/vendor/nicEditorIcons.gif'
			})
		.panelInstance('texto', {hasPanel: true})
	
	$scope.categorias = [
		{id: '1', nombre: 'Texto'},
		{id: '2', nombre: 'Video'},
		{id: '3', nombre: 'Ejercicio'}
	]
	
	$scope.submit = () ->
		$scope.etapa.Etapa.clase_id = $scope.clase.Clase.id
		# $scope.etapa.Etapa.contenido = $scope.clase.Clase.id
		
		switch $scope.etapa.Etapa.categoriaetapa_id
			when "1" then contenido = nicEditors.findEditor('texto').getContent()
		
		
		$scope.etapa.Etapa.contenido = contenido
		$scope.etapa.Etapa.orden = 0
		
		console.log $scope.etapa
		
		$http.post('/profesor/etapas/agregar', $scope.etapa)
			.success () ->
				$scope.etapa.Etapa.name = ''
				$scope.etapa.Etapa.description = ''
				$scope.etapa.Etapa.categoriaetapa_id = 0
				$('#mensaje').text('Etapa creada')
				$('.mensaje').fadeIn().delay(500).fadeOut()
			.error (errorMessage) ->
				$('#mensaje').text(errorMessage)
				$('.mensaje').fadeIn().delay(500).fadeOut()
