<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function abstractImage()
    {
      return $this->morphTo();
    }
}
