angular.module('PhasedApp', ['firebase'])
.value('fbURL', 'https://phasedbetasignup.firebaseio.com/')
.service('fbRef', function(fbURL) {
  return new Firebase(fbURL)
})
  .controller('HomeController', function($scope, $firebase, $firebaseAuth, fbRef) {
    $scope.formGone = false;
    $scope.addEmail = function(data){
      console.log(data);
      var ref = fbRef.child('email');
      var emails = $firebase(ref);
      emails.$push(data.email)
      $scope.user.email = '';
      $scope.formGone = true;
    };

    $scope.showVideo = function(){
      $scope.pumpUpVideo = true;
    }
  });
