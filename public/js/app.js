"use strict";

String.prototype.endsWith = function(suffix) {
    return this.indexOf(suffix, this.length - suffix.length) !== -1;
};

// Declare app level module which depends on views, and components
angular.module("ferry-goat", [
    "ngRoute",
    "ngAnimate",
    "restangular",
    "ferry-goat.index",
    "ferry-goat.ferries",
    "ferry-goat.routes"
])

// .run(['$rootScope', function($rootScope) {
//     $rootScope.navigated = false;

//     $rootScope.$on('$stateChangeSuccess', function (ev, to, toParams, from, fromParams) {
//         if (from.name) {
//             $rootScope.navigated = true;
//         }
//     });
// }])

.config(["$routeProvider", function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "js/index/index.html",
            controller: "IndexCtrl"
        })

        .when("/ferries", {
            templateUrl: "js/ferries/index.html",
            controller: "FerriesCtrl"
        })
        .when("/ferries/create", {
            templateUrl: "js/ferries/create.html",
            controller: "FerriesCtrl"
        })

        .when("/routes", {
            templateUrl: "js/routes/index.html",
            controller: "RoutesCtrl"
        })
        .when("/routes/create", {
            templateUrl: "js/routes/create.html",
            controller: "RoutesCtrl"
        })

        .otherwise({
            templateUrl: "js/errors/404.html"
        })
}])

.config(function(RestangularProvider) {
    RestangularProvider.setBaseUrl(window.location.href.substring(0, window.location.href) + "/api");
})

.directive("backButton", ["$window", function($window) {
    return {
        restrict: "A",
        link: function (scope, elem, attrs) {
            elem.bind("click", function () {
                $window.history.back();
            })
        }
    };
}])
