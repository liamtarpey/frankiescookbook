app.config([
    '$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {

    var path = '/wp-content/themes/frankiescookbook/statics/components/';

    $routeProvider
        .when('/', {
            templateUrl: path + 'recipe-list.template.html',
            controller: 'RecipeListController',
            controllerAs: 'vm'
        })
        .when('/recipes/:any', {
            templateUrl: path + 'single-recipe.template.html',
            controller: 'SingleRecipeController',
            controllerAs: 'vm'
        })
        .otherwise({
            redirectTo: '/'
        });

    $locationProvider.html5Mode({
        enabled: true,
        requireBase: false
    });
}]);
