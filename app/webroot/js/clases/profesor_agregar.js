(function() {
  var App;

  App = angular.module('App', []);

  App.controller('ClaseController', function($scope, $http) {
    return $scope.submit = function() {
      $scope.clase.Clase.curso_id = $scope.curso.Curso.id;
      return $http.post('/profesor/clases/agregar', $scope.clase).success(function() {
        $scope.clase.Clase.name = '';
        $scope.clase.Clase.description = '';
        $('#mensaje').text('Clase creada');
        return $('.mensaje').fadeIn().delay(500).fadeOut();
      }).error(function(errorMessage) {
        $('#mensaje').text(errorMessage);
        return $('.mensaje').fadeIn().delay(500).fadeOut();
      });
    };
  });

}).call(this);
