<?php
include 'header.php';
	if (isset($_POST['submit'])) {
		extract($_POST);		
		
		$rr=mysqli_query($bd,"SELECT * FROM admin WHERE id=1");
    $row=mysqli_fetch_assoc($rr);
		if ($row['password']==$cpass) {
      if ($npass==$cnpass) {        
      
		if (mysqli_query($bd,"UPDATE admin SET password='$npass' WHERE id=1")) {
			echo "<script>alert('Admin password has been updated successfully.')</script>";
		}else
    {
      //echo mysqli_error($bd);
			echo "<script>alert('Sorry something went wrong.')</script>";
    }
  }else
  {
      echo "<script>alert('New Password and confirm password did not match.')</script>";
  }

  }else
  {
      echo "<script>alert('Current password is wrong.')</script>";

  }

	
}
	
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Login Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="" method="post">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
              

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title text-center">Change Login Password</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>Current Password</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" class="form-control" name="cpass" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->         

                <!-- phone mask -->
                <div class="form-group">
                  <label>New Password</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" class="form-control" name="npass" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label>Confirm Password</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" class="form-control" name="cnpass">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->


              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Save</button>
                </div>
              <!-- /.card-body -->
            </div>

          
            </div>
        </div>
    </form>
    </div>
    
</div>



<?php
include 'footer.php';
?>