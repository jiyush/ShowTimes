<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theater;

class TheaterController extends Controller
{
    public function show(){
    	$theater = Theater::all();
    	return view('admin.theater')->with('theater',$theater);
    }
    public function add(){

    	return view('admin.addtheater');
    }
    public function insert(Request $req){

    	$t = new Theater;
    	$t->name = $req->name;

    	$t->location = $req->location;
    	$t->owner =  $req->owner;
    	$t->contact = $req->contact;
    	$t->save();
    	return redirect('admin/theater');
    }

    public function edit(Request $req){
    	$theater = Theater::where('theaters.id','=',$req->id)->first();
    	
    	return view('admin.edittheater')->with('theater',$theater);
    }
    public function update(Request $req){
    	$theater = Theater::where('theaters.id','=',$req->id)->first();

    	$theater->name = $req->name;
    	$theater->location = $req->location;
    	$theater->owner = $req->owner;
    	$theater->contact = $req->contact;

    	$theater->update();
    	return redirect('admin/theater');

    }
    public function delete(Request $req){
    	$theater = Theater::where('theaters.id','=',$req->id)->first();
    	$theater->delete();
    	return redirect('admin/theater');
    }

    public function showmovies(){

        return view('admin.show');
    }
}
