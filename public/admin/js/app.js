"use strict";

String.prototype.endsWith = function(suffix) {
    return this.indexOf(suffix, this.length - suffix.length) !== -1;
};

var hasOwnProperty = Object.prototype.hasOwnProperty;
function isEmpty(obj) {
    // null and undefined are "empty"
    if (obj == null) {
        return true
    };

    // Assume if it has a length property with a non-zero value
    // that that property is correct.
    if (obj.length > 0) {
        return false;
    }

    if (obj.length === 0) {
        return true;
    }

    // Otherwise, does it have any properties of its own?
    // Note that this doesn't handle
    // toString and valueOf enumeration bugs in IE < 9
    for (var key in obj) {
        if (hasOwnProperty.call(obj, key)) {
            return false
        };
    }

    return true;
}


// Declare app level module which depends on views, and components
angular.module("ferry-goat-admin", [
    "ngRoute",
    "ngAnimate",
    "restangular",
    // "ferry-goat-admin.index",
    // "ferry-goat-admin.ferries",
    // "ferry-goat-admin.routes"
])

.run(["$rootScope", function($rootScope) {
    $rootScope.$on("$routeChangeSuccess", function (event, current, previous) {
        $rootScope.title = current.$$route.title;
    });
}])

.config(["$routeProvider", function($routeProvider) {
    $routeProvider
        .when("/", {
            title: "Anasayfa",
            templateUrl: "js/index/index.html",
            controller: "IndexCtrl"
        })

        // .when("/ferries", {
        //     title: "Feribotlar",
        //     templateUrl: "js/ferries/index.html",
        //     controller: "FerriesCtrl"
        // })
        // .when("/ferries/create", {
        //     title: "Feribot Ekle",
        //     templateUrl: "js/ferries/create.html",
        //     controller: "FerriesCtrl"
        // })
        // .when("/ferries/update", {
        //     title: "Feribot Düzenle",
        //     templateUrl: "js/ferries/update.html",
        //     controller: "FerriesCtrl"
        // })

        // .when("/routes", {
        //     title: "Seferler",
        //     templateUrl: "js/routes/index.html",
        //     controller: "RoutesCtrl"
        // })
        // .when("/routes/create", {
        //     title: "Sefer Ekle",
        //     templateUrl: "js/routes/create.html",
        //     controller: "RoutesCtrl"
        // })

        .otherwise({
            title: "Hata",
            templateUrl: "js/errors/404.html"
        })
}])

.config(function(RestangularProvider) {
    RestangularProvider
        .setBaseUrl(window.location.href.substring(0, window.location.href) + "/api")
        // .setDefaultHeaders({
        //     "X-User-Agent": "Ferry-Goat-Angular"
        // })
        .setRestangularFields({
            selfLink: "self.link"
        })
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
.directive("renderSelect", ["$window", function($window) {
    return {
        restrict: "A",
        link: function (scope, elem, attrs) {
            $(elem).material_select();
        }
    };
}])
