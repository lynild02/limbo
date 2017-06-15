var app = angular.module('dataView',['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl: 'tmp/data.php'
  })
  .when('/dashboard', {
    templateUrl: 'tmp/dashboard.php'
  })
  .otherwise({
    redirectTo: '/'
  });

});

app.controller('appCtrl', ['$scope', '$location', function($scope,  $location){

}]);
