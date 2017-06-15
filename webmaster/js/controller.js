var app = angular.module('mainApp',['ngRoute','ngMaterial','ngFileUpload']);

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
    templateUrl: 'tmp/addh.php'
  })
  .when('/usr', {
    templateUrl: 'tmp/usr.php'
  })
  .when('/sett', {
    templateUrl: 'tmp/sett.php'
  })
  .when('/addone', {
    templateUrl: 'tmp/addone.php'
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
        console.log(response);
    }, function errorCallback(response){
      console.log(error);
    });
  };
}]);

app.controller('currentDate', function ($scope){
     $scope.currD = new Date();
});
