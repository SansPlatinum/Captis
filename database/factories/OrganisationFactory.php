<?php

namespace Database\Factories;

use App\Models\Organisation;
use App\Models\OrganisationType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrganisationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organisation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organisation_name' => $this->faker->word(),
            'address' => $this->faker->unique()->safeEmail(),
            'remember_token' => Str::random(10),
            'organisation_type_id' => OrganisationType::factory() 
        ];
    }
}
