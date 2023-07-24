<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'Visa',
        'Category',
        'Given_name',
        'SurName',
        'DateOfBirth',
        'Gender',
        'MartialStatus',
        'PhoneNumber',
        'Email',
        'ConfirmEmail',
        'CountryOfResidence',
        'CurrentResidenceAddress',
    ];
}
