@include('meta')
</head>
<body>
<h1>Edit Task Information</h1>
<div class='col-md-12'>
    
        <div class='col-md-8'>
            <form class="form-horizontal" method='post'>
<fieldset>

<!-- Form Name -->
<legend>Edit Task</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Task</label>  
  <div class="col-md-4">
  <input id="textinput" name="task" type="text" placeholder="Task" class="form-control input-md" value="{{$get_information[0]->TASK}}"required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="description">{{$get_information[0]->DESCRIBTION}}</textarea>
  </div>
</div>
<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type='submit' name="update_task" class="btn btn-success">Update</button>
  </div>
</div>
<a href="<?php echo URL::to('/');?>">Add New Task <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>&nbsp;
<a href="<?php echo URL::to('infopage');?>">Task List <i class="fa fa-tasks" aria-hidden="true"></i> </a>

</fieldset>
</form>

        
        
    </div>
</div>
</body>
</html>