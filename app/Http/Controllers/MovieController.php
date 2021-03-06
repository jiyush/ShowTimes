<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Show;
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
    public function book(Request $req){
        $movie = Movie::where('movies.id','=',$req->id)->first();
        $th = Show::where('shows.movie','=',$movie->title)->get();
        // foreach ($th as $t) {
        //     return $t->theater;
        // }
        
        return view('book',compact('movie','th'));
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
    public function edit(Request $req){
        $movie = Movie::where('movies.id','=',$req->id)->first();
        // return $movie;
        return view('admin.editmovie')->with('movie',$movie);
    }
    public function update(Request $req){
        $movie = Movie::where('movies.id','=',$req->id)->first();

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

        $movie->update();
        return redirect(url('/admin/movie'));
    }
    public function delete(Request $req){
        $movie = Movie::where('movies.id','=',$req->id)->first();
        $movie->delete();
        return redirect('admin/movie');
    }
}
