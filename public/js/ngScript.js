var app = angular.module("myApp", []);


//var url= window.location.origin + '/demo/newspaper/frontendAjax/';
var url = window.location.origin + '/frontendAjax/';
var siteurl = window.location.origin + '/';

app.controller("pollCtrl",function($scope,$http){

		$scope.message = '';

		var where = {
			table : "poll_question",
			cond  :  {status : "1"}
		}
		
		
		
		$http({
			method :"POST",
			url : url + "read",
			data : where
		}).success(function(pollTotal){
		
			if(pollTotal.length > 0){
				$scope.totalPoll = ( +pollTotal[0].yes + +pollTotal[0].no + +pollTotal[0].no_comment);
				$scope.yesPoll = pollTotal[0].yes;
				$scope.noPoll = pollTotal[0].no;
				$scope.noComment = pollTotal[0].no_comment;
			}

		});


	$scope.pollCount = function(pid,yes,no,nocm){
		$scope.allPoll = [];

		var where = {
			table : "poll_question",
			cond  :  {id : pid},
		}
		
		
		
		$http({
			method :"POST",
			url : url + "read",
			data : where
		}).success(function(response){
		
			if(response.length > 0){
			
				var condition = {
						table : "poll_question",
						cond  : {id : pid}
					};
					
				$http({
					method : "POST",
					url : url + "read",
					data : condition
				}).success(function(c_result){
					if(c_result.length > 0){
							if(c_result[0].track != ''){
								$scope.track_all_num = JSON.parse(c_result[0].track);

								if (typeof(Storage) != "undefined") {
								    localStorage.getItem("poll_track_num");
								    
								    if(localStorage.getItem("poll_track_num") != 'null'){
								    	$scope.track_num = localStorage.getItem("poll_track_num");
								    	//console.log($scope.track_num);
								    	//console.log($scope.track_all_num['track_number']);

											if($scope.track_all_num['track_number'] == $scope.track_num){
								    			$scope.message = "আপনি এর আগেও একবার ভোট দিয়েছেন, তাই এই ভোটটি গৃহীত হলো না।";
								    		}else{

								    				localStorage.setItem("poll_track_num",$scope.track_number);
								    				$scope.totaldata = []; 
													//if track is no null
													if($scope.options === "yes"){
														$scope.yes = +yes + 1;
													}
													if($scope.options === "no"){
														$scope.no = +no + 1;
													}
													if($scope.options === "no_comments"){
														$scope.no_comment = +nocm + 1;
													}
													$scope.trackData = $scope.track_number;
													
													
													
													localStorage.setItem("poll_track_num",$scope.track_number);
													
													var track_cond1 = {
														table : "poll_question",
														value : {
															yes : $scope.yes,
															no  : $scope.no,
															no_comment: $scope.no_comment,
															track : $scope.trackData
														},
														cond  : {id : pid}
													};
														console.log(track_cond1);

													$http({
														method : "POST",
														url : url + "updateData",
														data : track_cond1
													}).success(function(result){
														 $scope.message = "আপনার ভোটটি সম্পন্ন হয়েছে।";
														
															var where = {
																table : "poll_question",
																cond  :  {status : "1"}
															}
															
															
															
															$http({
																method :"POST",
																url : url + "read",
																data : where
															}).success(function(pollTotal){
															
																if(pollTotal.length > 0){
																	$scope.totalPoll = ( +pollTotal[0].yes + +pollTotal[0].no + +pollTotal[0].no_comment);
																	$scope.yesPoll = pollTotal[0].yes;
																	$scope.noPoll = pollTotal[0].no;
																	$scope.noComment = pollTotal[0].no_comment;
																}

															});

													});
													
								    		}
								    }
								    
								}	
								
							}else{
							
								$scope.totaldata = []; 
								//if track is no null
								if($scope.options === "yes"){
									$scope.yes = +yes + 1;
								}
								if($scope.options === "no"){
									$scope.no = +no + 1;
								}
								if($scope.options === "no_comments"){
									$scope.no_comment = +nocm + 1;
								}
								$scope.trackData = $scope.track_number;
								
								
								
								localStorage.setItem("poll_track_num",$scope.track_number);
								
								var track_cond = {
									table : "poll_question",
									value : {
										yes : $scope.yes,
										no  : $scope.no,
										no_comment: $scope.no_comment,
										track : $scope.trackData
									},
									cond  : {id : pid}
								};
								
								$http({
									method : "POST",
									url : url + "updateData",
									data : track_cond
								}).success(function(result){
									 $scope.message = "আপনার ভোটটি সম্পন্ন হয়েছে।";
									
											var where = {
												table : "poll_question",
												cond  :  {status : "1"}
											}
											
											
											
											$http({
												method :"POST",
												url : url + "read",
												data : where
											}).success(function(pollTotal){
											
												if(pollTotal.length > 0){
													$scope.totalPoll = ( +pollTotal[0].yes + +pollTotal[0].no + +pollTotal[0].no_comment);
													$scope.yesPoll = pollTotal[0].yes;
													$scope.noPoll = pollTotal[0].no;
													$scope.noComment = pollTotal[0].no_comment;
												}

											});

								});
								
								
								
								
								
							}
					}
					
				});
			}
		});
	
	}
	
});










app.controller("allNewsCtrl",function($http,$scope){
	$scope.allNews = [];
    	$scope.limit= 40;
	$scope.active  = true;
	$scope.active1 = false;

			
	$scope.$watch("topic",function(){
		 var where = {
			 table : "post",
			 cond  : { topic : $scope.topic,publish:1},
			 orderBy : 'id',
             sort    : 'desc',
			 
		 };

		//console.log(where);
		 $http({
			 method : "POST",
			 url    : url + "readOrderBy",
			 data   : where
		 }).success(function(response){
			console.log(response);
			 if(response.length > 0){
				 $scope.active = false;
				 $scope.active1 = false;
				 angular.forEach(response,function(value,index){
				 	value['tag_name'] = '';
					 if(index !=0 ){
						 $scope.totalNews = index+1; 
					 
					 }
					 var whereId = {
					 	table : "tags",
					 	cond : {post_id : value.id}
					 }
					 
					 
					 $http({
						 method : "POST",
						 url    : url + "read",
						 data   : whereId
					 }).success(function(result){
					 	if(result.length > 0){
					 		value['tag_name'] = result[0].tag_name;
					 		
					 		console.log(value['tag_name']);
					 	}
					 	
					 });
					 
					 $scope.allNews.push(value);
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
				 });
				//console.log($scope.allNews);
			 }else{
			    $scope.active1 = true;
				$scope.active = true;
				$scope.allNews = [];
			 }
			 //Loader
 			$("#loading").fadeOut("fast",function(){
 				$("#data").fadeIn('slow');
 			});

		 });

	});

  $scope.loadMore = function() {
  	 $scope.limit = $scope.allNews.length
    }
});
