@extends('layout.app')

@section('contents')

<!-- div.dataTables_borderWrap -->
 <div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
		<thead>
		  <tr>
            <th>S/No.</th>
	    	<th>Full Name</th>
			<th>Position</th>
			<th>Month Work</th>
			<th class="hidden-480">Clicks</th>
			<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Update</th>
			<th class="hidden-480">Status</th>
			<th></th>
		 </tr>
    	</thead>
	    <tbody>
           <?php 
               $row = DB::table("kikokotoo__staff__details")->get();
               $i = 0;
            ?>
         @foreach($row as $staff)
     
			<tr>
		    	<td class="center">{{++$i}}</td>
				<td> {{ $staff-> first_name. ' ('.$staff-> zan_id. ' )'}}</td>
				<td>{{ $staff-> position}}</td>
				<td>{{ $staff-> dob}}</td>
				<td>{{ $staff-> doc}}</td>
     			
				<td class="hidden-480"><span class="label label-sm label-warning">{{ $staff-> first_name}}</span></td>
				<td>
					<div class="hidden-sm hidden-xs action-buttons">
						<a class="blue" href="{{url('profile-print/'.$staff->staff_id)}}">
						  <i class="ace-icon fa fa-search-plus bigger-130"></i>
						</a>
						<a class="green" href="{{url('edit-data/'.$staff->staff_id)}} ">
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

         @endforeach
													
		</tbody>
</table>


@endsection