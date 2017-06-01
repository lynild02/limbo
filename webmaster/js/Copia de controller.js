var app = angular.module('mainApp',['ngRoute','ngMaterial']);

app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl: 'tmp/login.php'
  })
  .when('/dashboard', {
    templateUrl: 'tmp/dashboard.php'
  })
  .when('/add', {
    templateUrl: 'tmp/add.php'
  })
  .when('/addf', {
    templateUrl: 'tmp/addf.php'
  })
  .when('/usr', {
    templateUrl: 'tmp/usr.php'
  })
  .when('/sett', {
    templateUrl: 'tmp/sett.php'
  })
  .otherwise({
    redirectTo: '/'
  });

});

app.config(['$qProvider', function ($qProvider) {
    $qProvider.errorOnUnhandledRejections(false);
}]);

app.controller('loginCtrl', ['$scope', '$http', '$location', function($scope,$http,$location){
  $scope.submit = function(){
    $http.post('end/auth.php', {username: $scope.username, password: $scope.password}).then(function(){
        $location.path('/dashboard');
    }, function errorCallback(response){
      console.log(error);
    });
  };
}]);
