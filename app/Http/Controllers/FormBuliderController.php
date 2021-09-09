<?php

namespace App\Http\Controllers;
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
          $form_builder = FormBuilder::orderBy('id','ASC')->get();
          return $form_builder;
      }

}
