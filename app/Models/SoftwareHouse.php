<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoftwareHouse extends Model
{
    const ACTIVE = "ACTIVE";

    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    protected $table = "software_house";

    protected $fillable = [
        "nome",
        "email",
        "documento",
        "celular",
        "status",
    ];

    public function getDocumento(bool $masked = false):string
    {
        if($masked){
            if (strlen($this->documento) == 11) {
                return substr($this->documento, 0, 3) . '.' . substr($this->documento, 3, 3) . '.' . substr($this->documento, 6, 3) . '-' . substr($this->documento, 9, 2);
            } else if (strlen($this->documento) == 14) {
                return substr($this->documento, 0, 2) . '.' . substr($this->documento, 2, 3) . '.' . substr($this->documento, 5, 3) . '/' . substr($this->documento, 8, 4) . '-' . substr($this->documento, 12, 2);
            }
        }
        return $this->documento;
    }

    public function getCelular(bool $masked = false):string
    {
        if($masked){
            return "(" . substr($this->celular, 0,2) . ") " . substr($this->celular, 2, 4) . "-" . substr($this->celular, 5, 4);
        }
        return $this->celular;
    }
}
