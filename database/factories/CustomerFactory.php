<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [

           'cvc' => $this->faker->creditCardType(),
           'firstname'=> $this->faker->firstName(),
           'lastname' => $this->faker->lastName(),
           'sex' => $this->faker->firstName(('male'|'female')),
            'date_naissance' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cartNumber' =>$this->faker->creditCardNumber(),
            'month'=> $this->faker->month($max = 'now'),
            'year'=> $this->faker->year($max = 'now'),
            'default' => $this->faker->title(),

        ];
    }
}
