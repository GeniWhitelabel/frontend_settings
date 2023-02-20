<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikon extends Model
{
    use HasFactory;
    protected $table = 'asset_icon';
    protected $guarded = ['id'];
    public $timestamps= false;
    public $primaryKey='id';
}
