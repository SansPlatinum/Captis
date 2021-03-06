<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrganisationType;


class Organisation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function organisationType(){
        return $this->belongsTo(OrganisationType::class);
    }

}
