<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KursErate extends Model
{
    //
    protected $table = 'kurs_erate';
    protected $primaryKey = 'id_kurs';

    public static function selectData(){
    	$data = KursErate::orderby('id_kurs', 'DESC')
                ->get();
    	return $data;
    }
}
