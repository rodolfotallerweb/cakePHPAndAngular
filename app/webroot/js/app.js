(function(angular) {
  'use strict';
angular.module('ngViewExample', ['ngRoute', 'ngAnimate'])
  .config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
      $routeProvider
        .when('/radioshow/view/:id', {
          templateUrl: 'http://localhost/cakePHPAndAngular/radioshow/view/:id',
          controller: 'RadioshowCtrl',
          controllerAs: 'radioshow'
        })
        .when('/', {
          templateUrl: '/',
          controller: 'HomeCtrl',
          controllerAs: 'home'
        });

      $locationProvider.html5Mode(true);
  }])
  .controller('MainCtrl', ['$route', '$routeParams', '$location',
    function MainCtrl($route, $routeParams, $location) {
      this.$route = $route;
      this.$location = $location;
      this.$routeParams = $routeParams;
  }])
  .controller('RadioshowCtrl', ['$routeParams', function RadioshowCtrl($routeParams) {
    this.name = "RadioshowCtrl";
    this.params = $routeParams;
  }])
  .controller('HomeCtrl', ['$routeParams', function HomeCtrl($routeParams) {
    this.name = "HomeCtrl";
    this.params = $routeParams;
  }]);
})(window.angular);

/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/