<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'sigla',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
     * Get all of the cities for the state.
     */
    public function cidade()
    {

        return $this->hasMany(Cidade::class);

    }

}
