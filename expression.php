<!doctype html>
<html>

<head>
	<title>AngularJS Directives</title>
	<script src ="/js/1.3.3/angular.js"></script>
</head>

<body> 
	<h1>Sample Application</h1> 
	<div ng-app="myapp" ng-controller="HelloController"> 
	<p>Hello {{student.firstname + " " + student.lastname}}!</p>    
   <p>Expense on Books : {{cost * quantity}} Rs</p> 
   <p>Roll No: {{student.rollno}}</p> 
   <p>Marks(Math): {{marks[3]}}</p> 
</div> 
<script src ="/js/app/HelloController.js"></script>
</body>
</html>