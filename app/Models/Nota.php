<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;

    protected $fillable = ['aluno','nota'];

    public $timestamps = false;

    public function aluno()
    {
        return $this->belongsTo(aluno::class);
    }
}
