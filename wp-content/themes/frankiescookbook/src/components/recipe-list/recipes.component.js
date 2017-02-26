(function() {
    'use strict';

    var RecipesComponent = function(RecipeListService) {

        var init = function() {
            RecipeListService.getAllPosts().then(function(res) {
                vm.recipes = res.data;
                console.log(vm.recipes);
                for(var i=0; i<vm.recipes.length; i++) {
                    vm.recipes[i].title.rendered = _.unescape(vm.recipes[i].title.rendered);
                }
            });
        }();

        /**
         * Public vars
         */
        var vm = this;
        vm.recipes = [];
    };

    RecipesComponent.$inject = ['RecipeListService'];
    app.component('recipes', {
        templateUrl: 'wp-content/themes/frankiescookbook/statics/components/recipes.template.html',
        controller: RecipesComponent,
        controllerAs: 'vm'
    });
})();
