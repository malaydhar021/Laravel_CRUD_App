<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;

class NewController  extends BaseController
{
//  use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public function show_information(){
        $data_msg=array();
        $data_msg['page_title']='Task List';
        $data_msg['get_information']=\DB::select("SELECT * FROM `user_info`");
    	return \View::make('infopage',$data_msg);
    }
    public function create_edit_task($id){
        $data_msg=array();
        $data_msg['page_title']='Edit Task';
        $data_msg['get_information']=\DB::select("SELECT * FROM `user_info` WHERE ID=$id ");
        return \View::make('edit-task',$data_msg);
    }
    public function edit_task_post($id){
        if(isset($_POST['update_task'])){
        $task=Input::get('task');
        $description=Input::get('description');
        $update_user_info=\DB::table('user_info')->where('ID','=',$id)->update(array('TASK'=>$task,'DESCRIBTION'=>$description));
        return \Redirect::to('infopage')->with('success','Task Updated');
        }
    }
    public function delete_task($id){
        $delete_task=\DB::table('user_info')->where('ID','=',$id)->delete();
        return \Redirect::to('infopage')->with('success','Task Deleted');
    }

    
}
