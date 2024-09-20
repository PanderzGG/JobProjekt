<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['Titel','Beschreibung','Gehalt','Standort','category_id','company_id','user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class); //One-To-Many
    }

    public function company()
    {
        return $this->belongsTo(Company::class); //One-To-Many
    }

    public function user()
    {
        return $this->belongsTo(User::class); //One-To-Many
    }
}
