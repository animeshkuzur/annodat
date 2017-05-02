<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function search(Request $request){
    	$data = $request->only('srch-term');
    	try{
    		$command = "C:/Python27/python.exe C:/xampp/htdocs/annodat/scrapper.py ".$data['srch-term']." 2>&1";
    		exec($command,$output);
    		$str_output = implode(';', $output);
    		$dat = explode(';',$str_output);
    		$pos = intval(str_replace(',','',$dat[1]));
    		$neg = intval(str_replace(',','',$dat[2]));
    		$total = $pos+$neg;
    		$p_pos = ($pos/$total)*100;
    		$p_neg = ($neg/$total)*100;
    	}
    	catch(Exception $e){

    	}
    	return view('pages.display',['proname'=> $dat[0],'c_pos'=>$pos,'c_neg'=>$neg,'p_pos'=>$p_pos,'p_neg'=>$p_neg]);
    }
}
