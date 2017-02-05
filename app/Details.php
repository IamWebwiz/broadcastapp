<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
public static $rules = array(
        'name'             => 'required',
        'category'           => 'required',
                  // just a normal required validation
        'email'            => 'required|email',
      );

      //$messages = [
    //'email.required' => 'We need to know your e-mail address!',

}
