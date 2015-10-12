"use strict";

angular.module("ferry-goat.index", [])

.controller("IndexCtrl", function($scope, $http, $location, Restangular) {
    $scope.newPort = {};

    $scope.addPort = function () {
        Restangular.all("ports/add").post($scope.newPort);
    }
})
