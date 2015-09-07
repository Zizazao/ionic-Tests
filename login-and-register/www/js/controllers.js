angular.module('starter.controllers', [])

.controller('createCtrl', function($scope, $http) {

	$scope.signup = function (usercredentials) {
    	console.log(usercredentials);
    	$http.post("http://localhost/ionic_api/api.php",usercredentials)

    }
});
