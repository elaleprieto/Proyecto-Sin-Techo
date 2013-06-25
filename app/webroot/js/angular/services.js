(function() {
  var services;

  services = angular.module('App.services', ['ngResource']);

  services.factory('Profesor', [
    '$resource', function($resource) {
      return $resource('/profesores/:id', {
        id: '@id'
      });
    }
  ]);

  services.factory('ProfesorLoader', [
    'Profesor', '$route', '$q', function(Profesor, $route, $q) {
      return function() {
        var delay;
        delay = $q.defer();
        Profesor.query(function() {
          return delay.resolve(profesor);
        }, function() {
          return delay.reject('Unable to fetch recipe ' + $route.current.params.profesorId);
        });
        return delay.promise;
      };
    }
  ]);

}).call(this);
