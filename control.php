<!doctype html>
<html>

<head>
	<title>AngularJS Directives</title>
	<script src ="/js/1.3.3/angular.js"></script>
</head>

<body> 
	<h1>Sample Application</h1> 
	<div ng-app="myapp" ng-controller="HelloController"> 
	Enter first name: <input type="text" ng-model="student.firstName"><br><br> 
Enter last name: <input type="text" ng-model="student.lastName"><br> 
<br> 
You are entering: {{student.fullName() | uppercase}}
<br>
Fees: {{student.fees | currency}}
<br>
<input type="text" name="Search" ng-model= "subjectName">
<ul>
<li ng-repeat = "sub in student.subjects | filter:subjectName | orderBy: 'marks'">
	{{'Name:' + sub.name + ', Marks:'+ sub.marks}}
</li>
</ul> 
</div>
<script src ="/js/app/HelloController.js"></script>
</body>
</html>