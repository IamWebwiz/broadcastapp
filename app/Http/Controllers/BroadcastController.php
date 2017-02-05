<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Validator;
use Input;
use Illuminate\Support\Facades\Redirect;
use App\Details;

class BroadcastController extends Controller
{
    public function show()
    {
      return view::make("index");
    }


        //$duck->email    = Input::get('email');
      //  $duck->password = Hash::make(Input::get('password'));

        // save our duck


public function generate()
{


$validator = Validator::make(Input::all(), Details::$rules);

   if($validator->passes()){
  $details = new Details;
  $details->name  = Input::get('name');
    $details->category  = Input::get('category');  //category
  //phone
   $details->phone  = Input::get('phone');
  //email
    $details->email = Input::get('email');
  //address
    $details->address  = Input::get('address');


  $details->save();


          echo "Done";
// return redirect()->action('BroadcastController@success');


}


else
  {

        echo "Please fill in all fields with appropriate data";
  }

}



}
