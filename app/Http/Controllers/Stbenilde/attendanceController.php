<?php namespace stbenilde\Http\Controllers\stbenilde;

use Illuminate\Http\Request;
use stbenilde\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use stbenilde\Http\Controllers\Controller;
use Carbon\Carbon;
use stbenilde\Http\Models\Stbenilde\Tblattendance as Tblattendance;
use Auth;
use DB;


class attendanceController extends Controller
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
		$date_polish = array();
		$presentctr = 0;
		$absentctr = 0;

		foreach($attendance as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		
	 		if($attendance_list->Status == 'Present'){

	 			$presentctr ++;
	 		}else{

	 			$absentctr ++; 
	 		}
	 		 
	 	}

	 	$subject = array_unique($subject_polish); 

	 	$date = array_unique($date_polish); 
	 	$date = array_slice($date, -7);

	 	$arr = [];
		$arr2 = [];

		foreach ($attendance as $ctr => $v) {
		
			if($v->Status =='Absent'){

				$color = '#FFABAB';

			}else{

				$color = '#6EB5FF';

			}

			

			$newDate = date("Y-m-d", strtotime($v->Date));

			$date = strtr( $newDate, '/', '-');

			$link = '/attendance/show/' . $v->ID ;

			$arr2[$ctr] = [

			'title' => $v->Subject,
			'start' => $date,
			'end' => $date,
			'color'  => $color,
			'url' => $link
			];				

		} 

		$arr = json_encode($arr2);
		

		return view('stbenilde.attendance.index',compact('attendance','auth','studfullname','studid','subject','date','arr','presentctr','absentctr'));	
	}  

	public function show($id){ 

		$auth = Auth::user();

	 	$attendance = DB::table('tblattendance')->whereIn('ID', [$id])->get(); 

	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])->get();


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

	 	$subject_polish = array();

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.attendance.show',compact('attendance','auth','studfullname','studid','subject'));

	}
}
    