<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php" >
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="stud_id" required="required">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="stud_fname" required="required">
						</div>
					</div>

										
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="stud_lname" required="required">
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Age:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="stud_age" required="required">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">UserName:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="username" required="required">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="date">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Department:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="stud_dep" required="required">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Sex:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="sex" required="required">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="stud_pass" required="required">
						</div>
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
