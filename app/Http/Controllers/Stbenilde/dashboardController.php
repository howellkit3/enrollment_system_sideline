<?php namespace App\Http\Controllers\stbenilde;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Models\Stbenilde\Tblattendance as Tblattendance;
use Auth;
use DB;


class dashboardController extends Controller
{

	public function index(){ 

	 	$auth = Auth::user();

	 	$attendance = DB::table('tblattendance')->whereIn('studID', [$auth->active_stud_num])->get(); 
	 
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

	 	$subject_polish = array();

		foreach($attendance as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.dashboard.index',compact('attendance','auth','studfullname','studid','subject'));		

	}  

	public function changestudnum(){ 

	 	$auth = Auth::user();
	 	 
	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])->get();

	 	$subject_polish = array();

		foreach($attendance_array as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$subject = array_unique($subject_polish); 

	 	$studname = DB::table('tblstudname')->whereIn('studID', [$auth->active_stud_num])->get();

	 	return view('stbenilde.dashboard.changestudnum',compact('attendance','auth','subject'));	

	}  


	public function updatestudnum(Request $r){ 

		DB::table('users')
            ->where('id',$r->id)
            ->update(['active_stud_num' => $r->studnum,'notif' => $r->notif]);

           // print_r($r->notif); exit;
		
		$auth = Auth::user();

	 	$attendance = DB::table('tblattendance')->whereIn('studID', [$r->studnum])->get(); 

	 	$studenrolled = DB::table('tblstudenrolled')->get();

	 	$studname = DB::table('tblstudname')->whereIn('studID', [$r->studnum])->get();

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

	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->studnum])->get();
	 		
	 	$subject_polish = array();
		$date_polish = array();

		foreach($attendance_array as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.dashboard.index',compact('attendance','auth','studfullname','studid','subject'));	

	}  

	public function attn_subj($subject){ 

		$auth = Auth::user();

	 	$attendance = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])
	 		->whereIn('Subject', [$subject])->get(); 

	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])->get();

	 	$studenrolled = DB::table('tblstudenrolled')->get();

	 	$studname = DB::table('tblstudname')->whereIn('studID', [$auth->active_stud_num])->get();

	 	$studfullname = ucfirst($studname[0]->FirstName) . " " . ucfirst($studname[0]->MiddleName) . " " . ucfirst($studname[0]->LastName);
	 	
	 	$studid = $studname[0]->studID;

	 	$subject_polish = array();

		foreach($attendance_array as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.dashboard.index',compact('attendance','auth','studfullname','studid','subject'));	

	}  


	public function attn_date($date_data){ 

		$my_date = str_replace("-","/",$date_data);

		$auth = Auth::user();

	 	$attendance = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])
	 		->whereIn('Date', [$my_date])->get(); 

	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])->get();

	 	$studenrolled = DB::table('tblstudenrolled')->get();

	 	$studname = DB::table('tblstudname')->whereIn('studID', [$auth->active_stud_num])->get();

	 	$studfullname = ucfirst($studname[0]->FirstName) . " " . ucfirst($studname[0]->MiddleName) . " " . ucfirst($studname[0]->LastName);
	 	
	 	$studid = $studname[0]->studID;

	 	$subject_polish = array();

		foreach($attendance_array as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.dashboard.index',compact('attendance','auth','studfullname','studid','subject'));	

	}  

	public function test(){ 

		$studinfo = DB::table('tblstudname')->get();

		$account_info = DB::table('users')
			->select('studnum')
			->groupBy('studnum')
			->get();  

//			print_r($account_info); exit; 
		$studnumlist=array();

		foreach ($account_info as $key => $account_list) {

			array_push($studnumlist,$account_list->studnum);

		}

			foreach ($studinfo as $key => $value) {

				$name = $value->FirstName . " " . $value->LastName; 
				$studid = $value->studID;
				$email = $value->LastName . $value->studID . "@gmail.com";
				$password = strtolower($value->LastName);

				if(!in_array($studid , $studnumlist)){
				
					DB::table('users')->insert([
			            'name' =>  $name,
			            'studnum' => $studid,
			            'email' => $email,
			            'active_stud_num' =>  $studid,
			            'password' => bcrypt($password),
			        ]);

			    }

			

		}
    }

}
    