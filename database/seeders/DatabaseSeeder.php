<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Febbyari',
            'username' => 'febbyari',
            'email' => 'feb@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();
        Contact::factory(10)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, vitae accusantium nisi earum assumenda incidunt, rem vel fugit at eveniet non? Sapiente possimus, similique ipsum maxime hic unde ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat totam ullam nam corrupti libero aperiam blanditiis necessitatibus dolores labore, ab sed mollitia doloremque deserunt quod consequatur explicabo qui neque illum. Optio maiores veniam architecto rem distinctio. Corrupti voluptatem cupiditate aperiam quidem quos adipisci, aliquam non necessitatibus vitae, nemo blanditiis pariatur. Adipisci vero voluptatem magnam tempora qui laboriosam quaerat nesciunt quae libero quo veniam, quod voluptatibus nostrum quasi dolores aliquid rem voluptates illo rerum perferendis debitis eligendi. Magni aliquam dolor ab blanditiis, facere provident consequuntur incidunt laboriosam nisi ratione? Repellendus unde adipisci tempore molestias at consequuntur culpa doloribus accusamus. Ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, vitae accusantium nisi earum assumenda incidunt, rem vel fugit at eveniet non? Sapiente possimus, similique ipsum maxime hic unde ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat totam ullam nam corrupti libero aperiam blanditiis necessitatibus dolores labore, ab sed mollitia doloremque deserunt quod consequatur explicabo qui neque illum. Optio maiores veniam architecto rem distinctio. Corrupti voluptatem cupiditate aperiam quidem quos adipisci, aliquam non necessitatibus vitae, nemo blanditiis pariatur. Adipisci vero voluptatem magnam tempora qui laboriosam quaerat nesciunt quae libero quo veniam, quod voluptatibus nostrum quasi dolores aliquid rem voluptates illo rerum perferendis debitis eligendi. Magni aliquam dolor ab blanditiis, facere provident consequuntur incidunt laboriosam nisi ratione? Repellendus unde adipisci tempore molestias at consequuntur culpa doloribus accusamus. Ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, vitae accusantium nisi earum assumenda incidunt, rem vel fugit at eveniet non? Sapiente possimus, similique ipsum maxime hic unde ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat totam ullam nam corrupti libero aperiam blanditiis necessitatibus dolores labore, ab sed mollitia doloremque deserunt quod consequatur explicabo qui neque illum. Optio maiores veniam architecto rem distinctio. Corrupti voluptatem cupiditate aperiam quidem quos adipisci, aliquam non necessitatibus vitae, nemo blanditiis pariatur. Adipisci vero voluptatem magnam tempora qui laboriosam quaerat nesciunt quae libero quo veniam, quod voluptatibus nostrum quasi dolores aliquid rem voluptates illo rerum perferendis debitis eligendi. Magni aliquam dolor ab blanditiis, facere provident consequuntur incidunt laboriosam nisi ratione? Repellendus unde adipisci tempore molestias at consequuntur culpa doloribus accusamus. Ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
