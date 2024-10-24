<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => Str::limit(fake()->firstName(), 8),  // Limit first name to 8 characters
            'lname' => Str::limit(fake()->lastName(), 8),   // Limit last name to 8 characters
            'email' => fake()->unique()->safeEmail(),       // Generate a unique email
            'password' => Hash::make('password'),           // Hash the password
        ];        
    }
}
