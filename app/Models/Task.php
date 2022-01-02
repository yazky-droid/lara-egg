<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $table = 'nama_table'; //adalah untuk mengenali table yang akan dipakai model, namun pada defaultnya ya nama tablenya bakal ngedetek yang plural dari nama model ini
    use HasFactory;
    //protected $guarded = []; digunakan untuk mengijinkan semua field kita bisa diisi dari request user. Sedangkan
    //protected $fillable = ['nama_field'] digunakan untuk mengijinkan user bisa mengisi field yang sudah ditentukan oleh kita di array $fillable.
    protected $fillable = ['list'];
}
