<?php

namespace Database\Factories;

use App\Models\Account; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, 
     */
    public function definition(): array
    {
        return [
            'plataforma'  => $this->faker->randomElement(['Gmail', 'Netflix', 'Spotify', 'Amazon', 'Banco Central']),
            'categoria'   => $this->faker->randomElement(['Finanzas', 'Streaming', 'Trabajo', 'Redes Sociales']),
            'usuario'     => $this->faker->userName(),
            'email'       => $this->faker->unique()->safeEmail(),
            'password'    => 'PasswordFalso123!', 
            'url_acceso'  => $this->faker->url(),
            'descripcion' => $this->faker->sentence(),
            'es_activa'   => $this->faker->boolean(80), 
        ];
    }
}
