

	.config(function($routeProvider, $locationProvider) {

        var path = '/wp-content/themes/frankiescookbook/ng-views/';

		$routeProvider

        .when('/', {
            templateUrl : path + 'home.html',
            controller  : 'fc-home'
        })

        .when('/recipes/:any', {
            templateUrl : path + 'article.html',
            controller  : 'fc-article'
        })

        .otherwise({
            redirectTo: '/'
        });

        $locationProvider.html5Mode(true);

	})