<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['stud_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from student_account where stud_id='".$row['stud_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Student ID: <strong><?php echo $drow['stud_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?stud_id=<?php echo $row['stud_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['stud_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from student_account where stud_id='".$row['stud_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?stud_id=<?php echo $erow['stud_id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="stud_id" class="form-control" value="<?php echo $erow['stud_id']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="stud_fname" class="form-control" value="<?php echo $erow['stud_fname']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Last Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="stud_lname" class="form-control" value="<?php echo $erow['stud_lname']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Age:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="stud_age" class="form-control" value="<?php echo $erow['stud_age']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">User Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="username" class="form-control" value="<?php echo $erow['username']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="date" class="form-control" value="<?php echo $erow['date']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Department:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="stud_dep" class="form-control" value="<?php echo $erow['stud_dep']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Sex:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="sex" class="form-control" value="<?php echo $erow['sex']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-10">
							<input type="password" name="stud_pass" class="form-control" value="<?php echo $erow['stud_pass']; ?>">
						</div>
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->