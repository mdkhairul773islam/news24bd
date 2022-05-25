var app = angular.module("MainApp", ['angularUtils.directives.dirPagination','ngSanitize']);

var url = window.location.origin + '/ajax/';
var siteurl = window.location.origin + '/';

app.filter('ucfirst', function() {
	return function(input) {
  		var firstChar = input.charAt(0).toUpperCase();
  		var fullStr = firstChar + input.substr(1);

		return fullStr;
	}
});
 
app.controller("pollPublishCtrl",function($scope,$http,$window){
	
	
    	$scope.polls = [];
    	var where = {
		table:'poll_question',
	};
	
	$http({
		method:'POST',
		url:url+'read',
		data:where
	}).success(function(resultmain){
		if(resultmain.length > 0){
		angular.forEach(resultmain,function(values,index){

			values['sl'] = index + 1;
			$scope.polls.push(values);
			console.log($scope.pubid); 
		});
			
		}
	});
    	
    	
    	
    $scope.publish = function(e,x){
        if($window.confirm("Are you sure want to make this change?")){
        	
        	console.log(e);
        	console.log(x);
            var where = {
    			table:'poll_question',
    			data : {
    			    status : 0
    			},
    			cond : {status : 1}
    		};
		
    		$http({
    			method:'POST',
    			url:url+'save',
    			data:where
    		}).success(function(response){
	                if(response.length > 0){
	                	console.log('1');
	                	var where = {
		    			table:'poll_question',
		    			data : {
		    			    status : e,
		    			    publish : 1
		    			},
		    			cond : {id: x}
		    		};
				
		    		$http({
		    			method:'POST',
		    			url:url+'save',
		    			data:where
		    		}).success(function(result){
		    			if(result.length > 0){
	                			console.log('2');
		    				console.log(result);
		    				
		    				$scope.message = "Successfully Publish.";
		    				
		    				    	var whereid = {
								table:'poll_question',
							};
							
							$http({
								method:'POST',
								url:url+'read',
								data:whereid
							}).success(function(resultid){
								if(resultid.length > 0){
								$scope.polls = [];
	                					console.log('3');
								angular.forEach(resultid,function(values,index){
						
									values['sl'] = index + 1;
									$scope.polls.push(values);
								});
			
									
									
								}
							});
		    				
	               				 
		    			}
		    		});
    		
	                }
	                
	                //console.log(response);
              
            });
            
        }
    }
});


//show all newspaperCtrl
app.controller("allNewsCtrl", function($scope, $http, $log){
	$scope.reverse = false;
	$scope.perPage = "10";
	$scope.newspaper = [];

	var where = {
		table:'post',
	};
	$http({
		method:'POST',
		url:url+'read',
		data:where
	}).success(function(response){
		angular.forEach(response,function(values,index){
			values['sl'] = index + 1;				
			//Collecting Tags Start here
			var where = {
				table:'tags',
				cond:{post_id:values.id}
			};
			$http({
				method:'POST',
				url:url+'read',
				data:where
			}).success(function(tags_data){
				var tags = [];
				angular.forEach(tags_data,function(vl,ind){
					tags.push(vl.tag_name);
				});
				var tag_list = tags.join(", ");
				values['tags']= tag_list;
				$scope.newspaper.push(values);
				console.log($scope.newspaper);
			});
			//Collecting Tags End here
		});
		//Loader
		$("#loading").fadeOut("fast",function(){
			$("#data").fadeIn('slow');
		});
	});
});


