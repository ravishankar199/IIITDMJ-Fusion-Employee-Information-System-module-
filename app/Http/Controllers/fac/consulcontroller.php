<?php

namespace App\Http\Controllers\fac;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use Request as Request1;
use DB;
use App\consult;

use Auth;
class consulcontroller extends Controller
{
 
	public function c_store(Request $request)
    {
    	$c = new consult;
		$c->faculty_id= Auth::user()->username;
        $c->consultant= $request->consultant;
        $c->c_title=$request->c_title;
        $c->client= $request->client;
		$c->financial_outlay= $request->financial_outlay;
		$c->duration= $request->duration;
        $c->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$consultant = $request::input('consultant');
		$c_title = $request::input('c_title');
		$client = $request::input('client');
		$financial_outlay = $request::input('financial_outlay');
		$duration = $request::input('duration');
		
		
		DB::table('cons_proj')->where('id', $qid)->update(["consultant"=>$consultant, "client"=>$client, "c_title"=>$c_title, "financial_outlay"=>$financial_outlay, "duration"=>$duration]);
	
		return redirect('/fac');
	}
	
	public function destroy($id)
    {
    	$x = consult::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
