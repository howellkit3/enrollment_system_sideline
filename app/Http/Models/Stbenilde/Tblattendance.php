<?php 

namespace App\Http\Models\Stbenilde;

use Illuminate\Database\Eloquent\Model;

class Tblattendance extends Model
{

   protected $connection = 'stbenilde';
   protected $table = 'tblattendace';
   protected $fillable = ['Status','studID','Name','Date','Subject'];


}