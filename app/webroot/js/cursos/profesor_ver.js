(function() {
  var App;

  App = angular.module('App', []);

  App.controller('CursoController', function($scope) {
    return console.log($scope.curso);
  });

}).call(this);
