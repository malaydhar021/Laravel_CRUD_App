@include('meta')
<body>
<h1>Task Information</h1>
<div class='col-md-12'>
	<div class='row'>
		
		<div class='col-md-8'>
			@if(Session::has('success'))
		<div class="alert alert-success" id="success-alert">
    			<button type="button" class="close" data-dismiss="alert">x</button>
    			<strong>Success! </strong>
    		{{ Session::get('success') }}
		</div>
		@endif
		<div class="table-responsive">
			<a href="<?php echo URL::to('/');?>">Add New Task <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
			<table class='table table-hover'>
		<?php 	$class_arr=array(1=>'success',2=>'danger',3=>'info',4=>'blue',5=>'one',6=>'two');
    	shuffle($class_arr);?>
				<tr class=<?php echo $class_arr[0];?> >
				<th>Task</th>
				<th>Describtion</th>
				<th>Action</th>
			</tr>
			
			@foreach($get_information as $data)
			<tr class=<?php echo $class_arr[1];?>>
				<td>{{$data->TASK}}</td>
				<td>{{$data->DESCRIBTION}}</td>
				<td><a class='btn btn-sm btn-info' href="<?php echo URL::to('edit-task')?>/{{$data->ID}}">Edit</a> <a class='btn btn-sm btn-danger del' href="<?php echo URL::to('delete-task')?>/{{$data->ID}}">Delete</a></td>
			</tr>
			@endforeach
		</table>
		</div>
		</div>
		
		
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript">
	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").alert('close');
});
	$(".del").click(function(){
    if (!confirm("Do you want to delete")){
      return false;
    }
  });

</script>
</html>