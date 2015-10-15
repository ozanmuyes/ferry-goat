"use strict";

angular.module("ferry-goat-admin.index", [])

.controller("IndexCtrl", function($scope, $http, $location, Restangular, auth) {
    $scope.newPort = {};

    auth.Login("ozanmuyes", "123");
})
