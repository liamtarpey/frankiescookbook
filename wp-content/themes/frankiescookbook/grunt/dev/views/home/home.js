	
	.controller('fc-home', ['$scope', '$http', '$sce', '$timeout', 'api', function ($scope, $http, $sce, $timeout, api) {

		$scope.loading = true
		$scope.filterArray = []
		$scope.UrlFilters = document.location.href 
		$scope.UrlCards = document.location.href + '?json=1&cat=' + $scope.filterArray
		$scope.limit = 3
		$scope.isLoading = false

		// ========
		// Filters
		// ========
		$scope.filterPush = function(id) {

			$scope.loading = true

			var removeId = $scope.filterArray.indexOf(id);
        	(removeId != -1) ? $scope.filterArray.splice(removeId, 1) : $scope.filterArray.push(id)

        	$scope.UrlCards = document.location.href + '?json=1&cat=' + $scope.filterArray

        	$scope.returnCards();

		}

		$scope.clearFilters = function() {

			$scope.filterArray = []
			$scope.UrlCards = document.location.href + '?json=1&cat=' + $scope.filterArray
        	$scope.returnCards();

		}

		api.getCats($scope.UrlFilters).then(function (data) {

			$scope.filters = data.categories

		})

		// ======
		// Cards
		// ======
		$scope.returnCards = function() {

			api.getPosts($scope.UrlCards).then(function (data) {

				$scope.loading = false
				$scope.recipes = data.posts

			})

		}

		$scope.returnCards();

		// ================
		// Infinite scroll
		// ================
		$scope.infiniteScroll = function(num) {

			$scope.isLoading = true
			$scope.limit = $scope.limit + num
			$scope.isLoading = false

		}

	}])


