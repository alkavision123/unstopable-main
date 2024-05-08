<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    use HasFactory;
    public $table ="contacts_details";
    protected $guarded = [];
    public $timestamps = 'false';
}
