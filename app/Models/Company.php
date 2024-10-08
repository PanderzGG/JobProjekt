<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['Firma','Adresse','Webseite','Telefon','email'];

    public function jobs()
    {
        return $this->hasMany(Job::class); //Unternehmen kann viele jobs haben.
    }
}
