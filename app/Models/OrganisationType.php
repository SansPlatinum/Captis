<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organisation;

class OrganisationType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function organisation(){
        return $this->hasMany(Organisation::class);
    }

}
