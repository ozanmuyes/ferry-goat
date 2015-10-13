"use strict";

angular.module("ferry-goat-site.ferries", [])

.controller("FerriesCtrl", function($scope, $http, $location, Restangular) {
    $scope.newFerry = {};

    var allFerries = Restangular.all("ferries");

    allFerries.getList().then(function (ferries) {
        $scope.allFerries = ferries;
    });

    $scope.addFerry = function () {
        if (isEmpty($scope.newFerry)) {
            return;
        }

        Restangular.all("ferries").post($scope.newFerry).then(function (createdFerry) {
            $location.path("/ferries");
        });
        // Restangular.all("ferries").post($scope.newFerry).getList().then(function (ferry) {
        //     ferry.name = "infected";

        //     ferry.put();
        // })
    };
})
