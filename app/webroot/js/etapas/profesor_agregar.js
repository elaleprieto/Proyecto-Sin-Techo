(function() {
  var App;

  App = angular.module('App', []);

  App.controller('EtapaController', function($scope, $http) {
    var area1;
    area1 = new nicEditor({
      fullPanel: true,
      iconsPath: '/img/vendor/nicEditorIcons.gif'
    }).panelInstance('texto', {
      hasPanel: true
    });
    $scope.categorias = [
      {
        id: '1',
        nombre: 'Texto'
      }, {
        id: '2',
        nombre: 'Video'
      }, {
        id: '3',
        nombre: 'Ejercicio'
      }
    ];
    return $scope.submit = function() {
      var contenido;
      $scope.etapa.Etapa.clase_id = $scope.clase.Clase.id;
      switch ($scope.etapa.Etapa.categoriaetapa_id) {
        case "1":
          contenido = nicEditors.findEditor('texto').getContent();
      }
      $scope.etapa.Etapa.contenido = contenido;
      $scope.etapa.Etapa.orden = 0;
      console.log($scope.etapa);
      return $http.post('/profesor/etapas/agregar', $scope.etapa).success(function() {
        $scope.etapa.Etapa.name = '';
        $scope.etapa.Etapa.description = '';
        $scope.etapa.Etapa.categoriaetapa_id = 0;
        $('#mensaje').text('Etapa creada');
        return $('.mensaje').fadeIn().delay(500).fadeOut();
      }).error(function(errorMessage) {
        $('#mensaje').text(errorMessage);
        return $('.mensaje').fadeIn().delay(500).fadeOut();
      });
    };
  });

}).call(this);
