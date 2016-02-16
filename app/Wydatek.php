<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wydatek extends Model
{
    //
    protected $table = 'wydatki';

    protected $fillable = [ 'zaco', 'kwota', 'confirmed', 'tag', 'dokiedy', 'styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien' ];
}
