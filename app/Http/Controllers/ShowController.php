<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Theater;
use App\Show;

class ShowController extends Controller
{
    public function showmovies(){
    	$show = Show::all();
    	return view('admin.show')->with('show',$show);
    }

    public function add(){
    	$movie = Movie::all();
    	$theater = Theater::all();
    	return view('admin.addshow',compact('movie','theater'));
    }

    public function insert(Request $req){

    	$show = new Show;
    	$show->movie = $req->movie;
    	$show->showtime = $req->showtime;
    	$show->theater = $req->theater;

    	$show->save();
    	return redirect('admin/show');
    }
    public function edit(Request $req){
    	$movie = Movie::all();
    	$theater = Theater::all();
    	$data = Show::where('shows.id','=',$req->id)->first();
    	return view('admin.editshow',compact('movie','theater','data'));
    }

    public function update(Request $req){
    	$show = Show::where('shows.id','=',$req->id)->first();

    	$show->movie = $req->movie;
    	$show->showtime = $req->showtime;
    	$show->theater = $req->theater;
    	$show->update();

    	return redirect('admin/show');
    }

    public function delete(Request $req){

    	$show = Show::where('shows.id','=',$req->id)->first();
    	$show->delete();
    	return redirect('admin/show');


    }
}
