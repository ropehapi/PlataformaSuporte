<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = "address";

    protected $fillable = [
        "zip_code",
        "street",
        "number",
        "complement",
        "district",
        "city_id"
    ];

    public function getZipCode()
    {
        return substr($this->zip_code,0,2) . "." .substr($this->zip_code,2,3) . "-" . substr($this->zip_code, 4,3);
    }
}
