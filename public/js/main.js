var teamsflareApp = angular.module("teamsflareApp", [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})

teamsflareApp.controller("mainController", function($scope) {
    $scope.message = "First implementation of Angular"
})