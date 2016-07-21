@include('meta')
</head>
<body>
<h1>Add Task Information</h1>
<div class='col-md-12'>
    
<div class='col-md-8'>
<form class="form-horizontal" method='post'>
<fieldset>

<!-- Form Name -->
<legend>Add Task</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Task</label>  
  <div class="col-md-4">
  <input id="textinput" name="task" type="text" placeholder="Task" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="description">Type Description</textarea>
  </div>
</div>
<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type='submit' name="add_task" class="btn btn-success">Add</button>
  </div>
</div>
<a href="<?php echo URL::to('infopage');?>">Task List <i class="fa fa-tasks" aria-hidden="true"></i> </a>

</fieldset>
</form>

        
        
    </div>
</div>
</body>
</html>