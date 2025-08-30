<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Héctor González',
            'email' => 'hector@uwu.cl',
            'password' => Hash::make('123456789')
        ]);

        Task::factory(10)->create([
            'user_id' => $user->id,
        ]);

        Category::factory(10)->create();
        Post::factory(50)->create();
        Tag::factory(10)->create();

        // Asignar roles y permisos creando un usuario administrador
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);

        // Asignar el rol de administrador al usuario creado
        $user->roles()->attach(1); // el ID del rol admin es 1
    }
}
