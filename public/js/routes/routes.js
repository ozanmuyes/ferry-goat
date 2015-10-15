"use strict";

angular.module("ferry-goat-site.routes", [])

.controller("RoutesCtrl", function($scope, $http, $location, Restangular) {
    var allRoutes = Restangular.all("routes"),
        allPorts = Restangular.all("ports"),
        allFerries = Restangular.all("ferries");

    $scope.newRoute = {};

    allRoutes.getList().then(function (routes) {
        $scope.allRoutes = routes;
    });

    allPorts.getList().then(function (ports) {
        $scope.allPorts = ports;
    });

    allFerries.getList().then(function (ferries) {
        $scope.allFerries = ferries;
    });

    $scope.addRoute = function () {
        if (isEmpty($scope.newRoute)) {
            return;
        }

        Restangular.all("routes").post($scope.newRoute).then(function (createdRoute) {
            // $location.path("/routes");
        });
    };
})
