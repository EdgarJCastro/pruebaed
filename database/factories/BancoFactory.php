<?php

namespace Database\Factories;

use App\Models\Banco;
use Illuminate\Database\Eloquent\Factories\Factory;

class BancoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Banco Citibank', 'Banco AV Villas', 'Banco BBVA', 'Banco BCSC', 'Banco Davivienda', 'Banco de Bogotá', 'Banco de la República','Banco de Occidente', 'Banco Falabella', 'Banco GNB Sudameris']),
            'direccion' => $this->faker->randomElement(['cll 55 cra 22-15', 'trv 76 # 10-20', 'Centro av quito']),
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
