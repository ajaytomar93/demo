 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventagenda extends Model
{
     protected $fillable = [
        'eventId', 'agendaName', 'startTime', 'endTime', 
    ];
}
