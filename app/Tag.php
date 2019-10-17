<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = 'tbl_tag';

  public $timestamps = false;

  protected $primaryKey = 'id_tag';

    protected $fillable = [
        'nom_tag'
      ];
}
