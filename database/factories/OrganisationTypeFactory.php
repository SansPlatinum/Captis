<?php

namespace Database\Factories;

use App\Models\OrganisationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrganisationType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organisation_type' => $this->faker->word(),
        ];
    }
}
