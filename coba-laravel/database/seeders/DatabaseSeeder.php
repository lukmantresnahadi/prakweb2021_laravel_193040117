<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


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
            'name' => 'Lukman Tresnahadi',
            'username'=>'Lukman ',
            'email' => 'tresnahadi3@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'tresnahadi',
        //     'email' => 'tresnahadi3@gmail.com',
        //     'pasword' => bcrypt('12345')
        // ]);

       User::factory(3)->create();
       
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

    Post::factory(20)->create();

    
        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'Judul Pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor',
        //     'body' => 'Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        //      Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        //       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
        //       imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
        //       Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
        //       porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
        //        feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'Judul kedua ',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor',
        //     'body' => 'Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        //      Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        //       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
        //       imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
        //       Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
        //       porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
        //        feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'Judul ketiga ',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor',
        //     'body' => 'Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        //      Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        //       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
        //       imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
        //       Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
        //       porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
        //        feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'Judul keempat ',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor',
        //     'body' => 'Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        //      Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        //       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
        //       imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
        //       Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
        //       porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
        //        feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);



    }
}
