	
	.factory('api', ['$http', '$q', function($http, $q) {

	    return {

	    	// API call to retreive all latest posts
	    	getPosts	: function(url) {

	    		var defer = $q.defer(),
	    			prefix = this.prefix(url);

				$http.get(url)

				.success(function(data){

					defer.resolve(data);

		        })

		        .error(function() {
		        	console.log("error with request")
		        })

		        return defer.promise 

	    	},

	    	// API call to retreive full list of categories
	    	getCats : function(url) {

	    		var defer = $q.defer();

		    	$http.get(url + 'api/get_category_index/')

		    	.success(function(data){

		    		defer.resolve(data);

		    	})

		    	.error(function() {
		        	console.log("error with request")
		        })

		        return defer.promise 
	    		
	    	},

	    	prefix : function(path){

	    		var prefix = (path.indexOf('?') > -1) ? "&" : "?";
	    		return prefix

	    	}

	    }
	    
	}])