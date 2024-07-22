<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'mahasiswa';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // Specify which fields can be mass assignable
    protected $fillable = [
        'id',
        'nim',
        'nama_mahasiswa',
        'jurusan',
        // Add more fields as needed
    ];

    // Specify any fields that should be hidden from JSON output
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Relationships can be defined here if needed
}
