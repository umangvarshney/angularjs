<!doctype html>
<html ng-app>
   
   <head>
   <title>Angular JS</title>
      <script src = "/js/1.3.3/angular.min.js"></script>
   </head>
   
   <body>
      <div>
         <label>Name:</label>
         <input type = "text" ng-model = "yourName" placeholder = "Enter a name here">
         <hr />
         
         <h1>Hello {{yourName}}!</h1>
      </div>
      
   </body>
</html>