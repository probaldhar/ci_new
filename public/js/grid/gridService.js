angular.module('gridApp', ['ui.grid']).service('GridService', gridService)

gridService.$inject = ['$http', 'uiGridConstants'];
function gridService($http, uiGridConstants) {
	
	this.getUsers = function () {
		return $http.get('/ci_new/index.php/api/users');
	};


	this.addStudent = function (info) {
    	return $http.post('/ci_new/index.php/api/users', info);
    };

    this.getRemoteUsers = function () {
		return $http.get('https://cdn.rawgit.com/angular-ui/ui-grid.info/gh-pages/data/500.json');
		// return $http.get('/ci_new/index.php/api/getFives');
	};
	
	return this;

}