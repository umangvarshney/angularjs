<!doctype html>
<html>

<head>
	<title>AngularJS Directives</title>
	<script src ="/js/1.3.3/angular.js"></script>
</head>

<body> 
	<h1>Sample Application</h1> 
	<div ng-app="myapp" ng-controller="HelloController"> 
	<p>List of Countries with locale:</p> 
	<ol> 
		<li ng-repeat="country in countries"> 
			{{ 'Country: ' + country.name + ', Locale: ' + country.locale }} 
		</li> 
	</ol> 
</div> 
<script src ="/js/app/HelloController.js"></script>
</body>
</html>