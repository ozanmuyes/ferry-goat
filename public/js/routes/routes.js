"use strict";

angular.module("ferry-goat.routes", [])

.controller("RoutesCtrl", function($scope, $http, $location, Restangular) {
    var allRoutes = Restangular.all("routes"),
        allPorts = Restangular.all("ports");

    allRoutes.getList().then(function (routes) {
        $scope.allRoutes = routes;
    });

    allPorts.getList().then(function (ports) {
        $scope.allPorts = ports;

        $("select").material_select();
    });
})
