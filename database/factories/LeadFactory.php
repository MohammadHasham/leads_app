<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lead;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $industries = ['Textile', 'Finance', 'Hospitality', 'Education management', 'Military', 'Design'];

        return [
            'name' => $this->faker->name,
            'company_name' => $this->faker->company,
            'title' => $this->faker->jobTitle,
            'industry_domain' => $this->faker->randomElement($industries),
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'email' => $this->faker->email,
            'mobile_no' => $this->faker->phoneNumber,
            'person_linkedIn' => $this->faker->url,
            'domain_linkedIn' => $this->faker->domainName,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
