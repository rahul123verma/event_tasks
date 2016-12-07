(function (app) {
    'use strict'

    //Controller Creation
    app.controller('eventCtrl', eventCtrl);

    //DI for Controller
    eventCtrl.$inject = ['$scope'];
    var slabs = null;
    //Event Controller
    function eventCtrl($scope) {

    }

})(angular.module("EventTask"));