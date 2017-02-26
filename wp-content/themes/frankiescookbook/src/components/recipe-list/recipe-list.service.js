(function() {
    'use strict';

    var RecipeListService = function($http, $q, endpoints) {

        /**
         * Gets all posts
         */
        var getAllPosts = function() {

            var deferred = $q.defer();

            var onSuccess = function(res) {
                deferred.resolve(res);
            };

            var onRejected = function(err) {
                deferred.reject(err);
            };

            var url = endpoints.get.posts;
            $http.get(url).then(onSuccess).catch(onRejected);

            return deferred.promise;
        };


        return {
            getAllPosts: getAllPosts
        }
    };

    var vm = this;

    RecipeListService.$inject = ['$http', '$q', 'endpoints'];
    app.factory('RecipeListService', RecipeListService);
})();
