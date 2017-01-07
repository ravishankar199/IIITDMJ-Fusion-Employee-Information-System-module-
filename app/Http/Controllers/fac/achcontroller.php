<?php

namespace App\Http\Controllers\fac;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Request as Request1;
use DB;
use App\achievements;

use Auth;
class achcontroller extends Controller
{
 
	public function ach_store(Request $request)
    {
    	$a = new achievements;
		$a->faculty_id= Auth::user()->username;
        $a->achievement= $request->achievement;
        $a->a_details=$request->a_details;
        $a->dated= $request->dated;
        $a->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$achievement = $request::input('achievement');
		$a_details = $request::input('a_details');
		$dated = $request::input('dated');
		
		
		DB::table('achievements')->where('id', $qid)->update(["a_details"=>$a_details, "achievement"=>$achievement, "dated"=>$dated]);
	
		return redirect('/fac');
	}
	
	public function destroy($id)
    {
    	$x = achievements::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
