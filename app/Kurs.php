<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    //
    protected $table = 'kurs';
    protected $primaryKey = 'id_kurs';

    public static function selectData(){
    	$data = Kurs::orderby('id_kurs', 'DESC')
                ->get();
    	return $data;
    }
}
