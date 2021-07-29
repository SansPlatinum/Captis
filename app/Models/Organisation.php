<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrganisationType;
use Laravel\Cashier\Billable;

class Organisation extends Model
{
    use HasFactory;
    use Billable;

    protected $guarded = ['id','organisation_type_id'];

    public function organisationType(){
        return $this->belongsTo(OrganisationType::class);
    }

}
