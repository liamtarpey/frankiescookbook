	
	.controller('fc-article', ['$scope', '$http', '$sce', '$timeout', 'api', function ($scope, $http, $sce, $timeout, api) {

		$scope.Url = document.location.href + "?json=1"
		$scope.loading = true

		api.getPosts($scope.Url).then(function (data) {

			$scope.loading      =  false
			$scope.recipe       =  data.post
			$scope.prepTime     =  $scope.recipe.custom_fields.prep_time + " mins"
			$scope.cookTime     =  $scope.recipe.custom_fields.cooking_time + " mins"
			$scope.servesPeople =  $scope.recipe.custom_fields.serves + " people"

		});




	}])