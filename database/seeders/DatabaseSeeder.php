<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Christopher Benjamin',
        //     'slug' => 'christopher-benjamin',
        //     'email' => 'cbenjamin.panggabean@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Randy Sapoetra',
        //     'slug' => 'randy-sapoetra',
        //     'email' => 'dreamocel@gmail.com',
        //     'password' => bcrypt('morph')
        // ]);

        User::factory(5)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design', 
            'slug' => 'web-design',
        ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum fuga, enim eos debitis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum fuga, enim eos debitis? Beatae, ut? Nobis, quidem recusandae laborum quo aliquid quod vero voluptates. Sed est dolorem voluptas iste unde perspiciatis aperiam? Odio ducimus sed in aliquam exercitationem nisi quaerat facilis quibusdam, nesciunt modi doloribus maxime id dolores iure veniam quae. Ex, itaque iste, voluptatem, atque sit libero molestias quaerat ad eaque optio exercitationem dolore delectus eos nesciunt sint ducimus? Aut dignissimos odit magnam cupiditate cumque quae ducimus quasi commodi consequatur fuga suscipit omnis modi sed, possimus ea, perspiciatis beatae numquam doloremque, quidem similique dicta ratione consequuntur est.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum fuga, enim eos debitis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum fuga, enim eos debitis? Beatae, ut? Nobis, quidem recusandae laborum quo aliquid quod vero voluptates. Sed est dolorem voluptas iste unde perspiciatis aperiam? Odio ducimus sed in aliquam exercitationem nisi quaerat facilis quibusdam, nesciunt modi doloribus maxime id dolores iure veniam quae. Ex, itaque iste, voluptatem, atque sit libero molestias quaerat ad eaque optio exercitationem dolore delectus eos nesciunt sint ducimus? Aut dignissimos odit magnam cupiditate cumque quae ducimus quasi commodi consequatur fuga suscipit omnis modi sed, possimus ea, perspiciatis beatae numquam doloremque, quidem similique dicta ratione consequuntur est.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum fuga, enim eos debitis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum fuga, enim eos debitis? Beatae, ut? Nobis, quidem recusandae laborum quo aliquid quod vero voluptates. Sed est dolorem voluptas iste unde perspiciatis aperiam? Odio ducimus sed in aliquam exercitationem nisi quaerat facilis quibusdam, nesciunt modi doloribus maxime id dolores iure veniam quae. Ex, itaque iste, voluptatem, atque sit libero molestias quaerat ad eaque optio exercitationem dolore delectus eos nesciunt sint ducimus? Aut dignissimos odit magnam cupiditate cumque quae ducimus quasi commodi consequatur fuga suscipit omnis modi sed, possimus ea, perspiciatis beatae numquam doloremque, quidem similique dicta ratione consequuntur est.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
