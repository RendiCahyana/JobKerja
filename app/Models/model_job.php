<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_job extends Model
{
    use HasFactory;
    public $primaryKey="id";
    protected $table="job_kerja";
    protected $fillable=[
        'nama_pekerjaan','deskripsi','gaji','lokasi','image','path'
    ];
}
