var app = angular.module("MainApp", []);

app.filter('ucfirst', function() {
	return function(input) {
  		var firstChar = input.charAt(0).toUpperCase();
  		var fullStr = firstChar + input.substr(1);

		return fullStr;
	}
});
 
//var url='http://'+window.location.hostname+'/demo/home/';
var url='http://'+window.location.hostname+'/frontendAjax/';

/**
 * controller name: RoutineViewCtrl
 *
 */
app.controller('RoutineViewCtrl', ['$scope', '$http', function($scope, $http){
	var defaultPeriods = [
		"10:00 AM - 10:40 AM",
		"10:40 AM - 12:20 PM",
		"12:20 PM - 01:00 PM",
		"01:00 PM - 01:40 PM",
		"01:40 PM - 02:20 PM",
		"02:20 PM - 03:00 PM",
		"03:00 PM - 03:40 PM",
		"03:40 PM - 04:20 PM"
	];

	$scope.periods = [
		"10:00 AM - 10:40 AM",
		"10:40 AM - 12:20 PM",
		"12:20 PM - 01:00 PM",
		"01:00 PM - 01:40 PM",
		"01:40 PM - 02:20 PM",
		"02:20 PM - 03:00 PM",
		"03:00 PM - 03:40 PM",
		"03:40 PM - 04:20 PM"
	];

	var defaultClassset = [
		{class: "six", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "seven", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "eight", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "nine", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "ten", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]}
	];

	$scope.classset = [
		{class: "six", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "seven", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "eight", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "nine", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]},
		{class: "ten", periodset: ["p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8"]}
	];

	var loadRoutine = function() {
		$scope.$watch('day', function(value){
			var where = {
				table: 'routine',
				cond: {day : $scope.day}  
			};

			$http({
				method: 'POST',
				url: url + 'read',
				data: where
			}).success(function(response){
				console.log(response, response.length);

				if(response.length > 0){
					angular.forEach($scope.classset, function(item, key) {
						$scope.classset[key].periodset = [];						
					});

					angular.forEach(response, function(row, index) {
						angular.forEach($scope.classset, function(item, key) {
							if(row.classes == item.class){
								$scope.classset[key].periodset.push(row.details);
							}
						});
					});

					console.log("YES");
				} else {
					$scope.periods = [];
					$scope.periods = defaultPeriods;

					$scope.classset = [];
					$scope.classset = defaultClassset;

					console.log("NO");
				}
			});
		});
	}

	$scope.loadRoutineInformationFn = function() {
		loadRoutine();
	}

	loadRoutine();

}]);