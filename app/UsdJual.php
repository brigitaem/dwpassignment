<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsdJual extends Model
{
    //
    protected $table = 'usd_jual';
    protected $primaryKey = 'id_usd';

    public static function selectData(){
    	$data = UsdJual::orderby('id_usd', 'DESC')
                ->get();
    	return $data;
    }
}
