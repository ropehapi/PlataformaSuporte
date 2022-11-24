<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    const ACTIVE = "ACTIVE";

    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    protected $table = "company";

    protected $fillable = [
        "name",
        "email",
        "document",
        "mobile_phone",
        "status",
    ];

    public function getMaskedDocument()
    {
        if (strlen($this->document) == 11) {
            return substr($this->document, 0, 3) . '.' . substr($this->document, 3, 3) . '.' . substr($this->document, 6, 3) . '-' . substr($this->document, 9, 2);
        } else if (strlen($this->document) == 14) {
            return substr($this->document, 0, 2) . '.' . substr($this->document, 2, 3) . '.' . substr($this->document, 5, 3) . '/' . substr($this->document, 8, 4) . '-' . substr($this->document, 12, 2);
        }
    }

    public function getMaskedMobilePhone()
    {
        return "(" . substr($this->mobile_phone, 0,2) . ") " . substr($this->mobile_phone, 2, 4) . "-" . substr($this->mobile_phone, 5, 4);
    }
}
