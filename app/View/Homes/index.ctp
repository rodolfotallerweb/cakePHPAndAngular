<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Example - example-ngView-directive-production</title>
  <link href="css/animations.css" rel="stylesheet" type="text/css">
  

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js"></script>
  <script src="js/app.js"></script>
  

  <script type="text/javascript">
    angular.element(document.getElementsByTagName('head')).append(angular.element('<base href="' + window.location.pathname + '" />'));
  </script>
</head>
<body ng-app="ngViewExample">
  <div ng-controller="MainCtrl as main">
  Choose:
  <a href="/cakePHPAndAngular/radioshow/view/12">view</a> |
  <a href="/cakePHPAndAngular/homes/greeting">Home</a> |
  <a href="Book/Gatsby">Gatsby</a> |
  <a href="Book/Gatsby/ch/4?key=value">Gatsby: Ch4</a> |
  <a href="Book/Scarlet">Scarlet Letter</a><br/>

  <div class="view-animate-container">
    <div ng-view class="view-animate"></div>
  </div>
  <hr />

  <pre>$location.path() = {{main.$location.path()}}</pre>
  <pre>$route.current.templateUrl = {{main.$route.current.templateUrl}}</pre>
  <pre>$route.current.params = {{main.$route.current.params}}</pre>
  <pre>$routeParams = {{main.$routeParams}}</pre>
</div>
</body>
</html>

<!-- 
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
-->