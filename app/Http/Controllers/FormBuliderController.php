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
        //return $request->all();
        $user = new InputType();
        $user->type = $request->input('type');
        $user->title = $request->input('title');
        $user->options = $request->input('options');
        $user->save();
    }

}
