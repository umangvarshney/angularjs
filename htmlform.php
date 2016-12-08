<html> 
<head> 
<title>Angular JS Forms</title> 
<style> 
table, th , td { 
  border: 1px solid grey; 
  border-collapse: collapse;
   padding: 5px; 
} 
table tr:nth-child(odd) { 
  background-color: #f2f2f2; 
} 
table tr:nth-child(even) { 
  background-color: #ffffff; 
} 
</style> 
</head> 
<body> 
<h2>AngularJS Sample Application</h2> 
<div ng-app="" ng-controller="studentController"> 
<form name="studentForm" novalidate> 
<table border="0"> 
<tr><td>Enter first name:</td><td><input name="firstname" type="text" ngmodel="firstName" required> 
   <span style="color:red" ng-show="studentForm.firstname.$dirty && studentForm.firstname.$invalid"> 
      <span ng-show="studentForm.firstname.$error.required">First Name is required.</span> 
   </span> 
</td></tr> 
<tr><td>Enter last name: </td><td><input name="lastname"  type="text" ngmodel="lastName" required> 
   <span style="color:red" ng-show="studentForm.lastname.$dirty && studentForm.lastname.$invalid"> 
      <span ng-show="studentForm.lastname.$error.required">Last Name is required.</span> 
   </span> 
   </td></tr> 
<tr><td>Email: </td><td><input name="email" type="email" ng-model="email" length="100" required> 
<span style="color:red" ng-show="studentForm.email.$dirty && studentForm.email.$invalid"> 
      <span ng-show="studentForm.email.$error.required">Email is required.</span> 
   <span ng-show="studentForm.email.$error.email">Invalid email address.</span> 
   </span> 
</td></tr> 
<tr><td><button ng-click="reset()">Reset</button></td><td><button  
 ng-disabled="studentForm.firstname.$dirty && studentForm.firstname.$invalid || 
     studentForm.lastname.$dirty && studentForm.lastname.$invalid || 
     studentForm.email.$dirty && studentForm.email.$invalid" 
 ng-click="submit()">Submit</button></td></tr> 
</table> 
</form> 
</div> 
<script> 
function studentController($scope) {  
   $scope.reset = function(){ 
  $scope.firstName = "Mahesh"; 
  $scope.lastName = "Parashar"; 
  $scope.email = "MaheshParashar@tutorialspoint.com"; 
   }    
   $scope.reset(); 
}
</script> 
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"> </script> 
</body> 
</html> 