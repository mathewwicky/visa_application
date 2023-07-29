<?php

// Step5Data.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherData extends Model
{
    protected $fillable = [
        'denied_visa',
        'deported_before',
        'convicted_in_any_country',
        'criminal_proceedings',
        'mental_illness',
        'information_accuracy',
    ];
}
