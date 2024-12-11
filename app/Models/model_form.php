<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_form extends Model
{
    use HasFactory;
    use HasFactory;
    public $primaryKey="id_form";
    protected $table="form";
    protected $fillable=[
        'nama','berkas','email'
    ];
}
