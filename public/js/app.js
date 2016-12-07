(function () {
    'use strict'


    var EventTaskApp = angular.module("EventTask", ['ngRoute']);

    EventTaskApp.config(['$routeProvider', function ($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: './../html/events.html',
            controller: 'eventCtrl'
        }).
        when('/error', {
            templateUrl: './../html/error.html',
        });
    }]);
})();