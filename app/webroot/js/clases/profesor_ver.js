(function() {
  var App;

  App = angular.module('App', []);

  App.controller('ClaseController', function($scope, $http) {
    $scope.orderDown = function(event, etapa) {
      event.preventDefault();
      return $scope.setOrder(etapa, +etapa.order - 1);
    };
    $scope.orderUp = function(event, etapa) {
      event.preventDefault();
      return $scope.setOrder(etapa, +etapa.order + 1);
    };
    return $scope.setOrder = function(etapa, nuevoOrden) {
      var viejoOrden;
      viejoOrden = etapa.order;
      etapa.order = nuevoOrden;
      return $http.post('/etapas/set_order', {
        id: etapa.id,
        order: nuevoOrden
      }).error(function() {
        return etapa.order = viejoOrden;
      }).success(function(data) {
        if ((String(data)) !== (String(etapa.order))) {
          return etapa.order = viejoOrden;
        }
      });
    };
  });

}).call(this);
