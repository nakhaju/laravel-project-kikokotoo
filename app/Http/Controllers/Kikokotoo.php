<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kikokotoo_Staff_Details;
use  Illuminate\Support\Facades\DB;

class Kikokotoo extends Controller
{
    //
    public function index() {
        return view('pages.index');
    }
    
    public function form() {
        return view('pages.form');
    }
    
    public function formElements() {
        return view('pages.form-elements');
    }

    public function tableElements() {
        return view('pages.table-elements');
    }

    public function view_staff() {
        return view('pages.view-staff');
    }

    public function insertData(Request $req) {
        $obj = new Kikokotoo_Staff_Details();
        
        $obj->first_name = $req->fname;
        $obj->zan_id = $req->zanid;
        $obj->position = $req->position;
        $obj->dob = $req->dob;
        $obj->doc = $req->doc;
        $obj->dor = $req->dor;
        $obj->dot = "30/6/1998";
        $obj->cause_of_retire = $req->cause_of_retire;
    
        $obj->save();
        return view('pages.view-staff');
    }

    public function edit($id) {
        
        return view('pages.edit-form')->with(["slug"=>$id]);
    }

    public function update(Request $req, $id) {
       $obj = new Kikokotoo_Staff_Details();
       $obj->updateData($req, $id);
        return view('pages.view-staff');
    }

    public function profile($id) {
        
        return view('pages.profile')->with(["slug" => $id]);
    }
}
