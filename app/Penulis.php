<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'github', 'twitter', 'lokasi', 'artikel_terbaru'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}

?>