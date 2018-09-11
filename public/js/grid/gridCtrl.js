
angular.module('gridApp').controller('GridController', gridController);

gridController.$inject = ['GridService', 'uiGridConstants'];

function gridController( GridService, uiGridConstants )
{
	var vm = this;

	vm.myRemoteData = [];
	vm.rawData = [];

	vm.myData = [];
	vm.studentObj = {
		'title': '', 'name': ''
	};

	vm.addStudent = addStudent;
	vm.getUserList = getUserList;

	init();

	function init() {
		console.log('Grid API Inititalized');
		getUserList();
		getRemoteUsersList();
	}

	function getUserList() {
		GridService.getUsers().then(function (response) {
			// console.log('response', response);
			vm.myData = response.data
		});

	}


	function addStudent(isValid) {

		if (isValid) { 
			console.log('>>>', vm.studentObj);
			GridService.addStudent(vm.studentObj).then(function(response){
				console.log('response', response);
				if (response.status == 201) {
					var result = response.data;
					vm.myData.push(result.result);
				}
			});  
		}        
	}


	function getRemoteUsersList() {
		GridService.getRemoteUsers().then(function (response) {

			vm.myRemoteData = {
				paginationPageSizes: [25, 50, 75],
		    	paginationPageSize: 25,
				showGridFooter: true,
		    	showColumnFooter: true,
		    	enableFiltering: true,

		    	columnDefs: [
			        { field: 'firstName', width: '25%' },
			        { field: 'lastName', width: '25%' },
			        { field: 'company', width: '25%' },
			        { field: 'employed', width: '25%' },
			    ],

		    	// rawData: data,
			    onRegisterApi: function(gridApi) {
			        vm.gridApi = gridApi;
			    }
			}

			console.log('response', response);
			var data = response.data;

			// data.forEach( function(row) {
		 //      row.registered = Date.parse(row.registered);
		 //    });

			vm.myRemoteData.data = data;

			console.log(vm.myRemoteData);
		});

	}

}


