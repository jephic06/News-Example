<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
  public $timestamps = false;
  protected $table = 'news';
  protected $primaryKey = 'newsID';

  public function newsCategory()
  {
    return $this->belongsTo('App\Models\newsCategory', 'newsCategoryID', 'newsCategoryID');
  }
}

?>
