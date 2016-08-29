<?php namespace App\Http\Controllers\stbenilde;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Models\Stbenilde\Tblattendance as Tblattendance;
use Auth;
use DB;


class quizController extends Controller
{

	public function index(){ 

	 	$auth = Auth::user();

	 	$quiz = DB::table('tblqne')
	 		->whereIn('studID', [$auth->active_stud_num])
	 		->whereIn('type', ['Quiz'])->get(); 

	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->studnum])->get();

	 	$subject_polish = array();

	 	foreach($attendance_array as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$studenrolled = DB::table('tblstudenrolled')->get();

	 	$studname = DB::table('tblstudname')->whereIn('studID', [$auth->active_stud_num])->get();

	 	if(empty($studname)){

		 	$msg = "Student Number you entered doesnt match our records.";
		 	flash()->error($msg);

		 	$studfullname = 'Unknown Student';
		 	$studid = '00-0000-00';

		}else{

			$msg = "Welcome!";
		 	flash()->success($msg);

		 	$studfullname = ucfirst($studname[0]->FirstName) . " " . ucfirst($studname[0]->MiddleName) . " " . ucfirst($studname[0]->LastName);
		 	
		 	$studid = $studname[0]->studID;

		}

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.quiz.index',compact('quiz','auth','studfullname','studid','subject'));		

	}  

	public function test(){ 

	    $studinfo = DB::table('tblaccounts')->get();

        foreach ($studinfo as $info_list):
        	// print_r(); exit;
            DB::table('users')->insert([
                'name' =>  $info_list->username,
                'email' => $info_list->username .'@gmail.com',
                'studnum' => $info_list->IDnum,
                'active_stud_num' => $info_list->IDnum,
                'password' => bcrypt($info_list->password),
        	]);

        endforeach;

	}  
}
    