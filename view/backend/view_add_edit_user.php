<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit user</div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Full name</div>
							<div class="col-md-10">
								<input type="text" name="c_fullname" value="<?php echo isset($arr->c_fullname)? $arr->c_fullname:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Email</div>
							<div class="col-md-10"> 
								<input required type="email" name="c_email" value="<?php echo isset($arr->c_email)? $arr->c_email:""; ?>" class="form-control"
									<?php if (isset($arr->c_email)) { ?>
										disabled
									<?php } ?>
									required
								>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Password</div>
							<div class="col-md-10">
									<input type="text" name="c_password"  class="form-control" 
										<?php if(isset($arr->c_password)) { ?>
											placeholder="Nhập vào password mới nếu muốn thay đổi"
										<?php }else {?> 
											required 
									<?php } ?>
									
									value="<?php echo isset($arr->c_password)? $arr->c_password:""; ?>">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>