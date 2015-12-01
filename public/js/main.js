var teamsflareApp = angular.module("teamsflareApp", ['ngRoute', 'ngAnimate'])

teamsflareApp.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'resources/views/pages/home.html'
            , controller: 'mainController'
        })
        .when('/projects', {
            templateUrl: 'resources/views/pages/projects.html'
            , controller: 'projectsController'
        })
        .when('/companies', {
            templateUrl: 'resources/views/pages/companies.html'
            , controller: 'companiesController'
        })
})

teamsflareApp.controller("mainController", function($scope) {
    $scope.pageTitle= "Main page"
    $scope.message = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat non libero eu faucibus. Nunc a egestas ipsum. Curabitur commodo mauris sapien, sed suscipit quam congue ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec porttitor odio id nunc tincidunt finibus. Nullam tellus nisi, euismod eget mauris sed, egestas faucibus sapien. Pellentesque bibendum, quam in lobortis tempus, quam erat sodales lorem, vitae efficitur libero erat in libero. Donec interdum risus eu nisi semper sagittis. Ut consequat ligula vel pellentesque dignissim. Nam bibendum massa eget neque lacinia, nec congue est accumsan. Ut pretium semper imperdiet."
})

teamsflareApp.controller("projectsController", function($scope) {
    $scope.pageTitle= "Projects page"
    $scope.message = "Ut nec risus id velit lacinia cursus non in orci. Curabitur ac nisl id dui porta venenatis quis eu neque. Cras eget purus lectus. In hendrerit condimentum tortor. Sed id orci mi. Phasellus sagittis venenatis nunc, non facilisis odio luctus et. Sed tempor ut massa sit amet euismod."
})

teamsflareApp.controller("companiesController", function($scope) {
    $scope.pageTitle= "Companies page"
    $scope.message = "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultrices eros et tellus posuere commodo. Sed erat dolor, iaculis at arcu a, pretium posuere tortor. Cras commodo, arcu placerat consectetur mattis, sapien massa placerat felis, vitae tincidunt metus mauris a nisi. Fusce vel ultrices eros. Sed scelerisque finibus condimentum. Donec vel lectus tortor. Maecenas in neque nec sapien ultrices condimentum."
})