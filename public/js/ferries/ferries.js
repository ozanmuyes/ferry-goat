"use strict";

angular.module("ferry-goat.ferries", [])

.controller("FerriesCtrl", function($scope, $http, $location, Restangular) {
    var allFerries = Restangular.all("ferries");

    allFerries.getList().then(function (ferries) {
        $scope.allFerries = ferries;
    });
})
