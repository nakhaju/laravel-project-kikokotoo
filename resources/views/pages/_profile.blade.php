@extends('layout.app')

@section('contents')

<!-- div.dataTables_borderWrap -->
   <div>
				
		<?php 
            $row = DB::table("kikokotoo__staff__details")->where(["staff_id" => $slug])->first();
            //$i = 0;
        ?>
		1. Name of Officer   :  <strong>{{$row->first_name. '  ( '.$row->zan_id.' )'}} </strong><br>
        2. Appointment for  : <strong>{{strtoupper($row->position)}} </strong> <br>
		3. Date of Commencement of Pensionable Service <strong>{{$row->doc}}</strong><br>
		4. Date of Termination of Pensionable Service  <b>1998-06-30</b> <br> 
		5. Number of Completed Months of Pensionable of <strong>

		<?php
		/*
			$origin = date_create('11-10-2009');
			$target = date_create('11-10-2019');
			$interval = date_diff($origin, $target);
			echo $interval->format('%m months'); 

			$origin = date_create($row->dob);
			$target = date_create($row->doc);
			$interval = date_diff($origin, $target);
			echo $interval->format('%m');
*/
			$origin = new DateTime("2011-07-10");
			$target = new DateTime("2023-12-01");
			$interval = $origin->diff($target);
			$years = $interval->format('%y')*12;
			$months = $interval->format('%m')+2;
			$elapsed = $months + $years;
			echo $elapsed;
		?>
		
		</strong> <!-- (mwaka alostaafu - mwaka aloajiriwa (miezi)) Pensionable Service --><br> 
		 	
		6. Age at Date of  Retirentment <strong>
				<?php 
				$origin = explode("-", "1990-06-03");
				$target = explode("-", "2031-09-02");
				
				$years = $target[0] - $origin[0];
				echo $years;
			   ?></strong> <!-- (mwaka uliopo - mwaka wa kuzaliwa) --> <br> 

		7. Cause of Retirentment : <strong>{{strtoupper($row->cause_of_retire)}} </strong><br>
		8. Whether the Officer has excercised his option to accept a Gratuity and Reduced Pension  <strong></strong><br> 
		9. Whether holding any other public appointment, or receiving or claiming to recive any public money by compesation, half-pay or otherwise <strong></strong><br>
		10. Whether the Officer is in receipt of pension in respect of other public service and ammount of such pension <strong></strong><br>
		11. Date in which the Pension will Commence <b>{{$row->dor}}</b>  <br>	   
		12. Date of Commence and Terminatio of several appointments held by the Officer in Zanzibar Gorvement showing his aggreaget emolments while holding each of those appointments <br>
		   
		   

		   
		
	
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
          <th rowspan=2>Title of Appointment</th>
		  <th rowspan=2>Date of Commencement</th>
		  <th rowspan=2>Date of Termination</th>
		  <th colspan=4>Salary Allowance</th>
		  <th>Nature of Allowance</th>
		  <th>Remark</th>
	   </tr>
	   <tr>
		 <th>Rate</th>
		 <th>Ammount for Aggreagtion</th>
		 <th>Rate</th>
		 <th>Ammount for Aggreagtion</th>
		 <th></th>
		 <th></th>
	  </tr>
</thead>
<tbody>
<tr>
	<td style="border:none">
	{{ strtoupper($row->position) }}
	</td>
	<td style="border:none">
	{{ $row->doc }} <!-- tarehe aliyoajira( mshahara wa mwanzo) -->
	</td>
	<td style="border:none">
	{{ $row->dor }} <!-- tarehe iliyokoma mshahara ( mshahara wa mwanzo)<br> -->
	</td>
	<td style="border:none">
		@
	</td>
	<td style="border:none">
		605/- (mshahara wa mwanzo)
	</td>
	<td style="border:none">
	</td>
	<td style="border:none">
	</td>
	<td style="border:none">
	</td>
	<td style="border:none">
	</td>
</tr>
@for($i = 1; $i<5; $i++)
	<tr>
		<td colspan=9 style="color:white;border:none">
			.
		</td>
	</tr>
@endfor
</tbody>
</table>

<td> Aggegate Pensionable Emoulments .............</td>


</div>

@endsection