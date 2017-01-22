(function() {
    'use strict';

    var RecipeListService = function($http, $q) {

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

            var url = '/wp-json/wp/v2/posts';
            $http.get(url).then(onSuccess).catch(onRejected);

            return deferred.promise;
        };


        return {
            getAllPosts: getAllPosts
        }
    };

    var vm = this;

    RecipeListService.$inject = ['$http', '$q'];
    app.factory('RecipeListService', RecipeListService);
})();
