<?php

namespace App\Http\Controllers\fac;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Experience;
use Request as Request1;
use Auth;
class expcontroller extends Controller
{
   
    public function addexperience(Request $request)
    {
		
    	$exp = new Experience;
		$exp->faculty_id= Auth::user()->username;
        $exp->details= $request->details;
        $exp->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$details = $request::input('details');
		
		
		DB::table('experience')->where('id', $qid)->update(["details"=>$details]);
	
		return redirect('/fac');
	}
	
	
	public function destroy($id)
    {
    	$x = Experience::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
