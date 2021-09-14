<?php

namespace App\Http\Controllers;
use App\Http\Requests\InputRequest;
use App\Models\FormName;
use App\Models\InputType;
use DB;

use App\Models\FormBuilder;
use Illuminate\Http\Request;

class FormBuliderController extends Controller
{
  public function index()
  {
      return view('input');
  }
      public function getData()
      {
          $form_name = FormName::orderBy('id','ASC')->get();
          return $form_name;
      }
      public function getInput()
      {
          $input_name = InputType::orderBy('id','ASC')->get();
          return $input_name;
      }
    public function store(InputRequest $request)
    {
        $data = $request->questions;
       $form= FormBuilder::create(['name'=>$request->form_title]);


          foreach ($data as $row){
            $user = new InputType();
            $user->type = $row['input_type'];
            $user->title = $row['title'];
            $user->options = $row['options'];
            $user->form_id = $form->id;
            $user->save();
        }
        return $user;
    }






}
