<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;

class BidController  extends BaseController
{
public function getIndex(){
	echo 'current Time :'.$dt= date('H:i:s');
	echo '<br>';	
	$product_price=5000;

	$max_bid_price=4000;
	$min_bid_price=2000;

	$my_bid_price=2100;

	$bid_incrise=10;

	$bid_time=strtotime('13:27:32')+ 1 * 60;
	echo 'Bid Time :'.$bd_time=date('H:i:s',$bid_time);
	echo '<br>';
	echo 'Timestamp :'.$tt=strtotime($dt) + 2 * 3600;
	echo '<br>';
	echo 'Converted Timestamp to Time :'.$convt_time=date('H:i:s',$tt);
	$current_bid_amount=$my_bid_price+$my_bid_price*($bid_incrise/100);
	echo '<br>';	
	echo 'current Bid Amount :'.$current_bid_amount;
	echo '<br>';	
	
	$data=array('bid_incrise'=>$bid_incrise,
		'current_bid_amount'=>$current_bid_amount,
		);
	$this->dispatch('App\Commands\Inspire', $data);

	if($bd_time==$dt){
		//echo 'working';
		$bid_incrise=10;
		$new_bid_amount=$current_bid_amount-$current_bid_amount*($bid_incrise/100);
		echo 'New Bid Amount :'.$new_bid_amount;
	}
	
	return \View::make('bid');
	}
}