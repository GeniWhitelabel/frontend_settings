<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiWarna extends Model
{
    use HasFactory;
    protected $table = 'icon';
    protected $guarded = ['id'];
    public $timestamps= false;
    public $primaryKey='id';
}
