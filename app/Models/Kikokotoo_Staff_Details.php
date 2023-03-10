<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 

class Kikokotoo_Staff_Details extends Model
{
    use HasFactory;

    public function updateData($req, $id){
        $data = [];
        
        $data['first_name'] = $req->fname;
        $data['zan_id'] = $req->zanid;
        $data['position']  = $req->position;
        $data['dob'] = $req->dob;
        $data['doc']  = $req->doc;
        $data['dor']  = $req->dor;
        $data['cause_of_retire'] = $req->cause_of_retire;
         
        //dd($obj);
         DB::table("Kikokotoo_Staff_Details")->where("staff_id", $id)->update($data);
     }

}
