<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public function get_home(){
        $data_msg=array();
        $data_msg['page_title']='Add Task';
    	return \View::make('welcome',$data_msg);
    }
    public function add_form(){
    	if(isset($_POST['add_task'])){
    	$task=Input::get('task');
        $description=Input::get('description');
        $insert_into_user_info=\DB::table('user_info')->insert(array('TASK'=>$task,'DESCRIBTION'=>$description));
        return \Redirect::to('infopage')->with('success','Task Created');
    	}
    	
    }
}
