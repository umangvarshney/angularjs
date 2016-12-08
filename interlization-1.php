<html> 
<head> 
   <title>Angular JS Forms</title> 
</head> 
<body> 
   <h2>AngularJS Sample Application</h2> 
   <div ng-app="mainApp" ng-controller="StudentController"> 
      {{fees | currency }}  <br/><br/> 
      {{admissiondate | date }}   <br/><br/> 
      {{rollno | number }}   
   </div> 
   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"> </script> 
   <script src="https://code.angularjs.org/1.2.5/i18n/angular-locale_da-dk.js"></script>  
   <script> 
      var mainApp = angular.module("mainApp", []); 
       mainApp.controller('StudentController', function($scope) { 
            $scope.fees = 100; 
   $scope.admissiondate  = new Date(); 
            $scope.rollno = 123.45; 
      }); 
       
   </script> 
</body> 
</html> 