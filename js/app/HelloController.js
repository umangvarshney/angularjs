'use strict';
 var myapp = angular.module("myapp", []);
         myapp.controller("HelloController", ['$scope',function($scope) { 
            $scope.helloTo = {}; 
            $scope.helloTo.title = "AngularJS"; 
         }]);

