var app = angular.module('lcPay',['ngRoute','ngMaterial']);

app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl: 'tmp/login.php'
  })
  .otherwise({
    redirectTo: '/'
  });

});
