App = angular.module('App', [])

App.controller 'ClaseController', ($scope, $http) ->
	$scope.orderDown = (event, etapa) ->
		event.preventDefault()
		$scope.setOrder(etapa, +etapa.order - 1)
	
	$scope.orderUp = (event, etapa) ->
		event.preventDefault()
		$scope.setOrder(etapa, +etapa.order + 1)
		
	# Setea el order pasado como parámetro a la etapa pasada como parámetro.
	$scope.setOrder = (etapa, nuevoOrden) ->
		viejoOrden = etapa.order
		etapa.order = nuevoOrden
	
		# Se realiza la persistencia.
		# Si hay algún error, se vuelve el valor para atrás.
		$http.post('/etapas/set_order', {id: etapa.id, order: nuevoOrden})
			.error () ->
				etapa.order = viejoOrden
			.success (data) ->
				if ((String) data) isnt ((String) etapa.order)
					etapa.order = viejoOrden
