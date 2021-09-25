<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;
    protected $table = 'quotes';
    protected $hidden = ['updated_at'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
