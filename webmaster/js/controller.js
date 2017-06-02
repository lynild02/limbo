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
    templateUrl: 'tmp/addf.php'
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

app.controller('addCtrl', ['$scope', '$http', '$location', function($scope,$http,$location){
  $scope.addSubmit = function(){
    $http.post('end/adding.php', {table: $scope.table, title: $scope.title, description: $scope.description, image: $scope.img, date: $scope.date, nau: $scope.nau, iau: $scope.iau}).then(function(){
    }, function errorCallback(response){
      console.log(error);
    });
  };
}]);

//- --- FILE UPLOAD --- -//
app.controller('MyCtrl', ['$scope', 'Upload', function ($scope, Upload) {
  // upload on file select or drop
  $scope.upload = function (file) {
      Upload.upload({
          url: 'end/upload',
          data: {file: file, 'username': $scope.username}
      }).then(function (resp) {
        $location.path('/addone');
          console.log('Success ' + resp.config.data.file.name + 'uploaded. Response: ' + resp.data);
      }, function (resp) {
          console.log('Error status: ' + resp.status);
      }, function (evt) {
          var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
          console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
      });
  };
  }]);
