<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu magna feugiat, condimentum libero quis, ultricies tortor. Sed vel sem eget sem tincidunt ultrices. Praesent accumsan odio nec nibh ullamcorper ornare. Nunc congue dolor ex, et sollicitudin nunc suscipit at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras nec lectus ornare, hendrerit tortor a, feugiat ligula. Donec molestie leo a lorem lacinia pharetra. Morbi quis pretium odio.

            Donec vehicula venenatis ultrices. Suspendisse luctus pellentesque urna eget varius. Sed in sollicitudin dolor. Ut tempus nec nisl non vulputate. Aliquam pretium mollis orci nec condimentum. Etiam nibh arcu, egestas sed massa tincidunt, condimentum pulvinar velit. Aenean congue ultrices orci, finibus vehicula eros dapibus eget. Quisque eget urna vitae neque luctus venenatis. Vivamus scelerisque eu urna non efficitur.

            Donec sed nulla id quam ornare venenatis. Etiam sit amet nulla nisi. Sed ornare nisl non lorem tincidunt, commodo tincidunt diam iaculis. Mauris quis justo nisi. Nam sit amet viverra dui, nec aliquam sapien. Donec pharetra faucibus justo vitae tempor. Phasellus neque sapien, ornare id faucibus in, cursus quis turpis. In porttitor, sem ut tincidunt blandit, orci purus aliquam nibh, vel tincidunt nulla libero ut felis. Morbi est lacus, bibendum non ipsum at, euismod volutpat tellus. Integer quis ex arcu. Pellentesque blandit ullamcorper aliquet. Integer cursus diam nec mauris molestie ornare. Mauris mollis sapien interdum lectus pulvinar, ut consectetur augue porta. Integer facilisis mattis orci, id vulputate tellus consectetur quis. Proin facilisis sit amet augue at consequat.

            Nulla tincidunt orci libero, vitae vulputate orci varius molestie. Sed cursus mi et leo malesuada ultrices. Integer non enim nulla. Quisque commodo sed nibh sed laoreet. Cras dignissim at velit nec hendrerit. Nullam tincidunt eu elit a rutrum. Etiam eget ex a magna pharetra dignissim. Phasellus laoreet elit vitae finibus sagittis. Curabitur dolor erat, faucibus et pulvinar id, egestas nec nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum sit amet arcu a arcu faucibus rhoncus vitae vel purus. Cras sit amet leo in leo commodo eleifend a eu metus. Nulla ligula lorem, faucibus at elit sit amet, malesuada blandit velit. Duis scelerisque arcu lectus, in congue leo hendrerit non.

            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris vitae orci mauris. Proin nibh ipsum, ultricies in gravida et, gravida ac erat. Donec posuere felis ex, ac semper lectus tempus id. In a justo nec dolor maximus ultrices. Cras et mauris varius, efficitur eros at, feugiat lacus. Sed blandit sem sit amet nibh efficitur accumsan. Quisque nec laoreet sapien. Nunc felis odio, placerat sit amet venenatis eu, ultrices id magna. Donec in tempor ligula, vel ullamcorper lorem. Etiam aliquet velit arcu, vitae ultrices lorem gravida eu.

            ',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
