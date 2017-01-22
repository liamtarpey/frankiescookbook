(function() {
    'use strict';

    var RecipeListController = function($http, RecipeListService) {

        var init = function() {

            RecipeListService.getAllPosts().then(function(res) {
                vm.recipes = res.data;
                console.log(vm.recipes);
                for(var i=0; i<vm.recipes.length; i++) {
                    console.log(_.unescape(vm.recipes[i].title.rendered));
                    vm.recipes[i].title.rendered = _.unescape(vm.recipes[i].title.rendered);
                }
            });
        };

        init();

        /**
         * Public vars
         */
        var vm = this;
        vm.recipes = [];
    };

    RecipeListController.$inject = ['$http', 'RecipeListService'];
    app.controller('RecipeListController', RecipeListController);
})();
