<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlPetani extends Model
{
    use HasFactory;
    protected $table = 'tabGL Entry';
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
}
