<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Image;

class MovieController extends Controller
{
    public function show(){
    	$movies = Movie::all();
    	return view('admin.movie')->with('movies',$movies);
    }
    public function display(){
        // $data = Record::where('records.id',$req->id)->first();
        $status = "Now";
        $now = Movie::where('movies.status','=',$status)->get();
        $upcoming = Movie::where('movies.status', '=', 'Upcoming');
        // return $movies;
        return view('welcome',compact('now','upcoming'));
    }
    public function addMovie(){



    	return view('admin.addmovie');
    }
    public function insert(Request $req){
    	$movie  = new Movie;
    	$movie->title = $req->title;
    	$movie->cast = $req->cast;
    	$movie->dir = $req->dir;
    	$movie->release = $req->release;
    	$movie->hour = $req->hour;
    	$movie->minut = $req->minut;
    	$movie->language = $req->language;
    	$movie->tailer_link = $req->tailer_link;
    	if($req->hasFile('poster')){
    		$poster = $req->file('poster');
    		$filename = time() . '.' . $poster->getClientOriginalExtension();
    		$location = public_path('/poster/'.$filename);
    		Image::make($poster)->save($location);
    		$movie->poster = $filename;
    	}
    	$movie->status = $req->satus;

    	$movie->save();
    	return redirect(url('/admin/movie'));
    }
}
