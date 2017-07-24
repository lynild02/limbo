var app = angular.module('lcPriv',['ngRoute']);
app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl: 'tmp/first.php'
  })
  .otherwise({
    redirectTo: '/'
  });
});
