<?php $this->load->load->view('templates/header.php');?>

<style>
.grid {
  width: 800px;
  height: 250px;
}
.ui-grid-top-panel{
	height: 30px;
}

</style>

<div ng-app="gridApp">
	<div class="" ng-controller="GridController as ctrl">
		<h3>Grid </h3>
		
		<div id="grid1" ui-grid='{ data: ctrl.myData }' class="grid"></div>


		<form method="post" name="userForm" id="create_student_info_frm" ng-submit="ctrl.addStudent(userForm.$valid)" novalidate>

			<div class="form-group" ng-class="{ 'has-error' : userForm.title.$invalid && !userForm.title.$pristine }">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" name="title" ng-model="ctrl.studentObj.title" required/><br />
			    <p ng-show="userForm.title.$invalid && !userForm.title.$pristine" class="text-danger">Title is required.</p>
			</div>

			<div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
			    <label for="text">Text</label>
			    <textarea name="text" class="form-control" ng-model="ctrl.studentObj.name" required></textarea><br />
			    <p ng-show="userForm.text.$invalid && !userForm.text.$pristine" class="text-danger">Text is required.</p>
			</div>

		    <!-- <input type="submit" name="submit" value="Create news item" /> -->
		    <button type="submit" class="btn btn-primary">Create news item</button>

		</form>

		<br><br>

		<div id="grid2" ui-grid='{ data: ctrl.myRemoteData }' class="grid"></div>

	</div>
</div>

<?php $this->load->load->view('templates/footer.php');?>
