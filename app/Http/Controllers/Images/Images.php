<?php

namespace App\Http\Controllers\Images;

use App\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class Images extends ApiController
{
  public function store(Request $request)
  {
      $fields = $request->all();
      var_dump($fields); die();
      $image = Images::create($fields);
  }
}
