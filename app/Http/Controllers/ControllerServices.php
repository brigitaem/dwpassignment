<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Redirect;
use App\Kurs;
use App\KursErate;
use App\UsdJual;

class ControllerServices extends Controller
{
    //
    public function selectData()
    {
       $data = Kurs::orderby('id_kurs','ASC')
       		->get();
       //return $data;
       return view('selectkurs', compact('data'));
    }

    public function kursFill(Request $request){
    	$id=$request->id;
    	$bank = $request->bank;
        $jual = $request->jual;
        $beli = $request->beli;

        $data = Kurs::orderby('id_kurs','ASC')
       		->get();

       	$data->idupd = $id;

        return view('selectkurs', compact('data'));
    }

    public function kursDelete(Request $request){
    	$id = $request->idel;

        $kurs = Kurs::where('id_kurs',$id)->first();
        $kurs->delete();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function kursUpdate(Request $request){
    	$id = $request->id;
    	$bank = $request->bankupd;
        $jual = $request->jualupd;
        $beli = $request->beliupd;

        $kurs = Kurs::where('id_kurs',$id)->first();
        $kurs->bank = $bank;
        $kurs->kurs_jual = $jual;
        $kurs->kurs_beli = $beli;
        $kurs->date_created = date('Y-m-d H:i:s');
        $kurs->timestamps = false;
        $kurs->save();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function kursInsert(Request $request)
    {
        // echo "ha";
        $bank = $request->bank;
        $jual = $request->jual;
        $beli = $request->beli;

        $kurs = new Kurs;
        $kurs->bank = $bank;
        $kurs->kurs_jual = $jual;
        $kurs->kurs_beli = $beli;
        $kurs->date_created = date('Y-m-d H:i:s');
        $kurs->timestamps = false;
        $kurs->save();

        return Redirect::back()->with('message','Operation Successful !');
/*
        $request->request->add([
            'bank' => $bank,
            'kurs_jual' => $jual,
            'kurs_beli' => $beli
        ]);
        $newRequest = Request::create('/api/insert_kurs', 'POST');
        $response = Route::dispatch($newRequest);
        //  print_r($response);
        // echo "<br><br>";
        $res = json_decode($response->getContent());
        // print_r($res);
        if ($response->getStatusCode() == 200) {
            //CommonHelper::showAlert("Sukses", "Data Bank telah ditambahkan", "success", "/selectkurs");
            return "success";
        }*/
    }

    //
    public function selectKursErate()
    {
       $data = KursErate::orderby('id_kurs','ASC')
       		->get();
       //return $data;
       return view('kurserate', compact('data'));
    }

    public function kursErateDelete(Request $request){
    	$id = $request->idel;

        $kurs = KursErate::where('id_kurs',$id)->first();
        $kurs->delete();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function kursErateUpdate(Request $request){
    	$id = $request->id;
    	$beli = $request->beli;
        $jual = $request->jual;
        $ttbeli = $request->ttbeli;
        $ttjual = $request->ttjual;

        $kurs = KursErate::where('id_kurs',$id)->first();
        $kurs->erate_beli = $beli;
        $kurs->erate_jual = $jual;
        $kurs->ttcounter_beli = $ttbeli;
        $kurs->ttcounter_jual = $ttjual;
        $kurs->date_created = date('Y-m-d H:i:s');
        $kurs->timestamps = false;
        $kurs->save();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function kursErateInsert(Request $request)
    {
        // echo "ha";
        $beli = $request->beli;
        $jual = $request->jual;
        $ttbeli = $request->ttbeli;
        $ttjual = $request->ttjual;

        $kurs = new KursErate;
        $kurs->erate_beli = $beli;
        $kurs->erate_jual = $jual;
        $kurs->ttcounter_beli = $ttbeli;
        $kurs->ttcounter_jual = $ttjual;
        $kurs->date_created = date('Y-m-d H:i:s');
        $kurs->timestamps = false;
        $kurs->save();

        return Redirect::back()->with('message','Operation Successful !');
    }

    //
    public function selectUsdJual()
    {
       $data = UsdJual::selectData();
       //return $data;
       return view('usdjual', compact('data'));
    }

    public function usdJualDelete(Request $request){
    	$id = $request->idel;

        $kurs = UsdJual::where('id_usd',$id)->first();
        $kurs->delete();

		return Redirect::back()->with('message','Operation Successful !');
        
    }

    public function usdJualUpdate(Request $request){
    	$id = $request->id;
    	$matauang = $request->matauang;
        $jualweek = $request->week;
        $jualmonth = $request->month;
        $jualthreemonth = $request->threemonth;
        $jualsixmonth = $request->sixmonth;

        $kurs = UsdJual::where('id_usd',$id)->first();
        $kurs->mata_uang = $matauang;
        $kurs->jual_week = $jualweek;
        $kurs->jual_month = $jualmonth;
        $kurs->jual_threemonth = $jualthreemonth;
        $kurs->jual_sixmonth = $jualsixmonth;
        $kurs->date_label = date('Y-m-d H:i:s');
        $kurs->date_created = date('Y-m-d H:i:s');
        $kurs->timestamps = false;
        $kurs->save();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function usdJualInsert(Request $request)
    {
        // echo "ha";
        $matauang = $request->matauang;
        $jualweek = $request->week;
        $jualmonth = $request->month;
        $jualthreemonth = $request->threemonth;
        $jualsixmonth = $request->sixmonth;

        $kurs = new UsdJual;
        $kurs->mata_uang = $matauang;
        $kurs->jual_week = $jualweek;
        $kurs->jual_month = $jualmonth;
        $kurs->jual_threemonth = $jualthreemonth;
        $kurs->jual_sixmonth = $jualsixmonth;
        $kurs->date_label = date('Y-m-d H:i:s');
        $kurs->date_created = date('Y-m-d H:i:s');
        $kurs->timestamps = false;
        $kurs->save();

        return Redirect::back()->with('message','Operation Successful !');
    }
}
