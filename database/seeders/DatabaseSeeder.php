<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ahmad Afif',
            'username'=> 'ahmadafif',
            'email' => 'ahmadafif69516@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Wildan Kangmpip',
        //     'email' => 'kangmpip@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptates quasi nulla repudiandae autem sit excepturi delectus.",
        //     'body' => "In voluptates quisquam totam error, distinctio officiis incidunt modi ipsum dolor?. Dolorem reprehenderit, quod sapiente ducimus ratione ipsa explicabo esse quis, dolores perspiciatis eveniet! Qui deleniti omnis illum nam harum distinctio maiores perspiciatis ullam porro pariatur vero ad modi in, dignissimos culpa asperiores molestias libero animi commodi sunt aliquam! Tenetur laudantium labore sequi.
        //     <>Dolores at cum sequi aliquam ut quam consequuntur accusamus iure doloribus. Corporis optio tempora culpa impedit repudiandae, accusantium ea sapiente provident quae consectetur exercitationem a, voluptate animi architecto minima at. Harum impedit sed iure fugit eos illum consequuntur, qui velit perspiciatis repudiandae consectetur iusto. 
        //     Cum doloribus dolor dolorum atque ullam voluptate dignissimos corrupti error, corporis vel. Reiciendis nemo laudantium iusto culpa, enim porro labore veniam voluptas quaerat ad ullam quidem odit nihil obcaecati! Adipisci ut ab repudiandae eaque perferendis accusantium!.",
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptates quasi nulla repudiandae autem sit excepturi delectus.",
        //     'body' => "In voluptates quisquam totam error, distinctio officiis incidunt modi ipsum dolor?. Dolorem reprehenderit, quod sapiente ducimus ratione ipsa explicabo esse quis, dolores perspiciatis eveniet! Qui deleniti omnis illum nam harum distinctio maiores perspiciatis ullam porro pariatur vero ad modi in, dignissimos culpa asperiores molestias libero animi commodi sunt aliquam! Tenetur laudantium labore sequi.
        //     <>Dolores at cum sequi aliquam ut quam consequuntur accusamus iure doloribus. Corporis optio tempora culpa impedit repudiandae, accusantium ea sapiente provident quae consectetur exercitationem a, voluptate animi architecto minima at. Harum impedit sed iure fugit eos illum consequuntur, qui velit perspiciatis repudiandae consectetur iusto. 
        //     Cum doloribus dolor dolorum atque ullam voluptate dignissimos corrupti error, corporis vel. Reiciendis nemo laudantium iusto culpa, enim porro labore veniam voluptas quaerat ad ullam quidem odit nihil obcaecati! Adipisci ut ab repudiandae eaque perferendis accusantium!.",
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptates quasi nulla repudiandae autem sit excepturi delectus.",
        //     'body' => "In voluptates quisquam totam error, distinctio officiis incidunt modi ipsum dolor?. Dolorem reprehenderit, quod sapiente ducimus ratione ipsa explicabo esse quis, dolores perspiciatis eveniet! Qui deleniti omnis illum nam harum distinctio maiores perspiciatis ullam porro pariatur vero ad modi in, dignissimos culpa asperiores molestias libero animi commodi sunt aliquam! Tenetur laudantium labore sequi.
        //     <>Dolores at cum sequi aliquam ut quam consequuntur accusamus iure doloribus. Corporis optio tempora culpa impedit repudiandae, accusantium ea sapiente provident quae consectetur exercitationem a, voluptate animi architecto minima at. Harum impedit sed iure fugit eos illum consequuntur, qui velit perspiciatis repudiandae consectetur iusto. 
        //     Cum doloribus dolor dolorum atque ullam voluptate dignissimos corrupti error, corporis vel. Reiciendis nemo laudantium iusto culpa, enim porro labore veniam voluptas quaerat ad ullam quidem odit nihil obcaecati! Adipisci ut ab repudiandae eaque perferendis accusantium!.",
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptates quasi nulla repudiandae autem sit excepturi delectus.",
        //     'body' => "In voluptates quisquam totam error, distinctio officiis incidunt modi ipsum dolor?. Dolorem reprehenderit, quod sapiente ducimus ratione ipsa explicabo esse quis, dolores perspiciatis eveniet! Qui deleniti omnis illum nam harum distinctio maiores perspiciatis ullam porro pariatur vero ad modi in, dignissimos culpa asperiores molestias libero animi commodi sunt aliquam! Tenetur laudantium labore sequi.
        //     <>Dolores at cum sequi aliquam ut quam consequuntur accusamus iure doloribus. Corporis optio tempora culpa impedit repudiandae, accusantium ea sapiente provident quae consectetur exercitationem a, voluptate animi architecto minima at. Harum impedit sed iure fugit eos illum consequuntur, qui velit perspiciatis repudiandae consectetur iusto. 
        //     Cum doloribus dolor dolorum atque ullam voluptate dignissimos corrupti error, corporis vel. Reiciendis nemo laudantium iusto culpa, enim porro labore veniam voluptas quaerat ad ullam quidem odit nihil obcaecati! Adipisci ut ab repudiandae eaque perferendis accusantium!.",
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
