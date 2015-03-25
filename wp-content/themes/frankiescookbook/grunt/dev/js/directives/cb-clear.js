.directive('cbClear', function () {

    return {

        scope : {

        	id : '=cbClear'

        },

        link : function(scope, element, attrs){       

            
            element.bind("click", function() {
                
               angular.element(document.getElementsByClassName('active')).removeClass('active');

            })
        	
        	
        }
    }
})