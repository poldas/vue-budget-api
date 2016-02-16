<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wydatki';

    protected $fillable = [ 'zaco', 'kwota', 'confirmed', 'tag', 'dokiedy', 'styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien' ];

}
