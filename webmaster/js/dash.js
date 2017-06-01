app.controller('dashCtrl', ['$scope', '$location', function($scope,$location){
  $scope.myaddSubmit = function(){
    $location.path('/add');
  };
  $scope.myaddfSubmit = function(){
    $location.path('/addf');
  };
  $scope.usrSubmit = function(){
    $location.path('/usr');
  };
  $scope.settSubmit = function(){
    $location.path('/sett');
  };
}]);

app.controller('currentDate', function ($scope){
     $scope.currD = new Date();
});
