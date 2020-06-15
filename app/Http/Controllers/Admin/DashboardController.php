<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;

class DashboardController extends Controller
{
    function index(){
        $rooms=Room::all();
        return view("admin.index",["rooms"=>$rooms]);
    }
    function create(){
        return view("admin.create");
    }
    function store(Request $request ){
        $name=$request->name;
        $image=$request->file("image")->store("public");
        //save full adress of image
        $typeroom=$request->typeroom;
        $number=$request->number;
        $area=$request->area;
        $price=$request->price;
        //create new room with input value form
        $room = new Room;
        $room->name=$name;
        $room->image=$image;
        $room->typeroom=$typeroom;
        $room->number=$number;
        $room->area=$area;
        $room->price=$price;
        // store into database
        $room->save();
        return redirect("/admin/index");
    }
}
