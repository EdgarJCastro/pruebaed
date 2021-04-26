<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['ADRIANA CAROLINA HERNANDEZ MONTERROZA', 'ANGELA PATRICIA MAHECHA PIÑEROS', 'FABIAN ANDRES FINO ANDRADE', 'LAURA CATALINA VARON BUITRAGO', 'SEBASTIAN BORDA MELGUIZO', 'OLGA VIVIANA OVALLE SOLANO', 'MARIA JOSÉ GARCÍA MORA','LISETH TATIANA SIERRA VILLAMIL', 'LAURA CAMILA PUERTO CASTRO', 'JUAN FERNANDO BARJUCH MORENO']),
            'direccion' => $this->faker->randomElement(['cll 10 cra 16-89', 'trv 96 # 20-20', 'La villa']),
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
