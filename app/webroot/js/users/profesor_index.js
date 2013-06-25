(function() {
  var App;

  App = angular.module('App', []);

  App.controller('ProfesorController', function($scope) {
    return console.log($scope.profesor);
  });

}).call(this);
