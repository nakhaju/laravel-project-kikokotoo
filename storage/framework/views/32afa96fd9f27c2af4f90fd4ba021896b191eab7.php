<?php $__env->startSection('contents'); ?>

<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i><a href="#">Home</a>
			</li>

			<li>
				<a href="#">View staff</a>
			</li>
			
			<li class="active">Staff</li>
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
						
									<div class="col-xs-12">
										

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Results for "Latest Registered Domains"
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Sno.</th>
														<th>Full Name</th>
														<th>Position</th>
														<th class="hidden-480">Month Work</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Update
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													
												<?php 
               $row = DB::table("kikokotoo__staff__details")->get();
               $i = 0;
            ?>
         <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
			<tr>
		    	<td class="center"><?php echo e(++$i); ?></td>
				<td> <?php echo e($staff-> first_name. ' ('.$staff-> zan_id. ' )'); ?></td>
				<td><?php echo e($staff-> position); ?></td>
				<td><?php echo e($staff-> dob); ?></td>
				<td><?php echo e($staff-> doc); ?></td>
     			
				<td class="hidden-480"><span class="label label-sm label-warning"><?php echo e($staff-> first_name); ?></span></td>
				<td>
					<div class="hidden-sm hidden-xs action-buttons">
						<a class="blue" href="<?php echo e(url('profile-print/'.$staff->staff_id)); ?>">
						  <i class="ace-icon fa fa-search-plus bigger-130"></i>
						</a>
						<a class="green" href="<?php echo e(url('edit-data/'.$staff->staff_id)); ?> ">
							<i class="ace-icon fa fa-pencil bigger-130"></i>
						</a>
						<a class="red" href="#">
							<i class="ace-icon fa fa-trash-o bigger-130"></i>
						</a>
				   </div>
        
				   <div class="hidden-md hidden-lg">
					    <div class="inline pos-rel">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
								<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
							</button>
							<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
								<li>
     								<a href="" class="tooltip-info" data-rel="tooltip" title="View">
										<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span>
									</a>
								</li>

								<li>
									<a href="" class="tooltip-success" data-rel="tooltip" title="Edit">
									   <span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span>
									</a>
								</li>
                                
								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
										<span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span>
									</a>
								</li>
					       	</ul>
						</div>
					</div>
				</td>
			</tr>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

												</tbody>
											</table>
										</div>
									</div>
								

						</div><!-- /.row -->
					</div><!-- /.page-content -->
			</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nakha\Desktop\kikokotoo\resources\views/pages/view-staff.blade.php ENDPATH**/ ?>