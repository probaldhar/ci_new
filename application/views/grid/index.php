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


		<!-- <form method="post" name="userForm" id="create_student_info_frm" ng-submit="ctrl.addStudent(userForm.$valid)" novalidate>

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

		    <button type="submit" class="btn btn-primary">Create news item</button>

		</form> -->

		<br>

		 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_student_info_modal"> Create Student</button>

		<br><br>

		<div id="grid2" ui-grid='myRemoteData' ui-grid-pagination class="grid"></div>


		<div class="modal fade" id="create_student_info_modal" tabindex="-1" role="dialog" aria-labelledby="create_student_info_modal" aria-hidden="true">
	        <div class="modal-dialog modal-dialog-centered" role="document">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Create Info</h4>
                    </div>
                    <div class="modal-body">
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
                            
                            <div class="form-group mb-50">
                            	<button type="submit" class="btn btn-primary">Create news item</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
	        </div>
		</div>






	</div>
</div>

<?php $this->load->load->view('templates/footer.php');?>
