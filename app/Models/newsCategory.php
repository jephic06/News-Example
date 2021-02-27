<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsCategory extends Model
{
  public $timestamps = false;
  protected $table = 'newsCategory';
  protected $primaryKey = 'newsCategoryID';
}

?>
