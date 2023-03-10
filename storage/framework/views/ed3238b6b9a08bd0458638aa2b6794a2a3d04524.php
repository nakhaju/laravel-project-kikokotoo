<?php $__env->startSection('contents'); ?>

<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i><a href="#">Home</a>
			</li>

			<li>
				<a href="#">Forms</a>
			</li>
			
			<li class="active">Form Elements</li>
		</ul><!-- /.breadcrumb -->
		
		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="ace-icon fa fa-search nav-search-icon"></i>
				</span>
						</form>
		</div><!-- /.nav-search -->
		
	</div>
	
	<div class="page-content">
		<div class="ace-settings-container" id="ace-settings-container">
			<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
				<i class="ace-icon fa fa-cog bigger-130"></i>
			</div>

			<div class="ace-settings-box clearfix" id="ace-settings-box">
				  <div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
										<option data-skin="no-skin" value="#438EB9">#438EB9</option>
										<option data-skin="skin-1" value="#222A2D">#222A2D</option>
										<option data-skin="skin-2" value="#C6487E">#C6487E</option>
								</select>
							</div><span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

				</div><!-- /.pull-left -->

				<div class="pull-left width-50">
					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
						<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
						<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
					</div>	
				</div><!-- /.pull-left -->
		
			</div><!-- /.ace-settings-box -->
	</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Form Elements
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Common form elements and layouts
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-1"></div>
							
							<div class="col-sm-11">
							
							<form action="<?php echo e(url('/data-Submit')); ?>" method="POST"> 
    								<?php echo csrf_field(); ?>

									<?php 
       									 $row = DB::table("kikokotoo__staff__details")->where(["staff_id" => $slug])->first();
     								?>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 1.Full Name </label>
										<div class="col-sm-9">
										<input type="text" name="fname" value="<?php echo e($row-> first_name); ?>" id="form-field-1" placeholder="Full Name" class="col-xs-10 col-sm-5" autocomplete="off" />
										</div>       
									</div><br/><br/>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 2. Employee No. </label>
										<div class="col-sm-9">
											<input type="text" name="zanid" value="<?php echo e($row-> zan_id); ?>" id="form-field-1" placeholder="Employee no." class="col-xs-10 col-sm-5" autocomplete="off" />
										</div>       
									</div><br/><br/>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 3.Possition  </label>
				
											<div class="col-sm-4">
											<div class="input-group">
												<select class="form-control" name="position" value="<?php echo e($row-> position); ?>" id="form-field-select-1">
													<option value=""></option>
													<option value="driver">Driver</option>
                    								<option value="teacher">Teacher</option>
                    								<option value="muhudumu">Muhudumu</option>
													<option value="others">others</option>
												</select>
					    					</div>
										</div><br/><br/>
		
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 4.Date of Birth  </label>
				
										<div class="col-sm-4">
											<div class="input-group">
												<input class="form-control date-picker" name="dob" value="<?php echo e($row-> dob); ?>" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
												<span class="input-group-addon"><i class="fa fa-calendar bigger-110"></i></span>
					    					</div>
										</div>
									</div><br/><br/>

									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 5.Date of Commencement  </label>
				
										<div class="col-sm-4">
											<div class="input-group">
												<input class="form-control date-picker" name="doc" value="<?php echo e($row-> doc); ?>" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
												<span class="input-group-addon"><i class="fa fa-calendar bigger-110"></i></span>
					    					</div>
										</div>
									</div><br/><br/>
					
			
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 7.Date of Retire  </label>
				
										<div class="col-sm-4">
											<div class="input-group">
												<input class="form-control date-picker" name="dor" value="<?php echo e($row-> dor); ?>" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
												<span class="input-group-addon"><i class="fa fa-calendar bigger-110"></i></span>
					    					</div>
										</div>
									</div><br/><br/>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 8.Cause of Retire  </label>
				
											<div class="col-sm-4">
											<div class="input-group">
												<select class="form-control" name="cause_of_retire"  id="form-field-select-1">
													<option value="<?php echo e($row-> cause_of_retire); ?>" selected disabled></option>
													<option value="reached_age">Reached Age</option>
                    								<option value="death">Death</option>
                    								<option value="Illness">Illness</option>
													<option value="others">others </option>
												</select>
					    					</div>
										</div><br/><br/>

										<div class="clearfix form-actions">
											<div class="col-md-offset-3 col-md-9">
												<button class="btn btn-info" type="submit">	<i class="ace-icon fa fa-check bigger-110"></i>
													Submit
												</button>&nbsp; &nbsp; &nbsp;
				
                								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>
													Reset
												</button>
											</div>
										</div>
	
								</form>
							</div>
								
						</div><!-- /.row -->
					</div><!-- /.page-content -->
			</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nakha\Desktop\kikokotoo\resources\views/pages/edit-form.blade.php ENDPATH**/ ?>