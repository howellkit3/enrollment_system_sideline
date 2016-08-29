<?php 

$this->group(['middleware' => ['web','auth'],'namespace' => 'stbenilde','middleware' => ['web']],function(){
	
	$this->group(['prefix' => 'dashboard'],function(){
		$this->get('/',['as' => 'stbenilde.dashboard.index','uses' => 'dashboardController@index']);
		$this->get('/changestudnum',['as' => 'stbenilde.dashboard.changestudnum','uses' => 'dashboardController@changestudnum']);
		$this->post('/changestudnum',['as' => 'stbenilde.dashboard.updatestudnum','uses' => 'dashboardController@updatestudnum']);
		$this->get('/attn_subj/{id}',['as' => 'stbenilde.dashboard.attn_subj','uses' => 'dashboardController@attn_subj']);
		$this->get('/attn_date/{id}',['as' => 'stbenilde.dashboard.attn_date','uses' => 'dashboardController@attn_date']);
	});

	$this->group(['prefix' => 'attendance'],function(){
		$this->get('/',['as' => 'stbenilde.attendance.index','uses' => 'attendanceController@index']);
	});

	$this->group(['prefix' => 'grade'],function(){
		$this->get('/',['as' => 'stbenilde.grade.index','uses' => 'gradeController@index']);
	});

	$this->group(['prefix' => 'quiz'],function(){
		$this->get('/',['as' => 'stbenilde.quiz.index','uses' => 'quizController@index']);
		$this->get('/test',['as' => 'stbenilde.quiz.test','uses' => 'quizController@test']);
	});

	$this->group(['prefix' => 'exam'],function(){
		$this->get('/',['as' => 'stbenilde.exam.index','uses' => 'examController@index']);
	});

}); 
