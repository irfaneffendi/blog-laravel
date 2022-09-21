<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
            'name' => 'Irfan Effendi',
            'username' => 'irfan',
            'email' => 'irfan@gmail.com',
            'password' => bcrypt('irfan')
        ]);

        // User::create([
        //     'name' => 'Akun2',
        //     'email' => 'akun2@gmail.com',
        //     'password' => bcrypt('akun2')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'uiux'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Judul Kesatu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kesatu',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam porro repudiandae reprehenderit maiores quaerat,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam porro repudiandae reprehenderit maiores quaerat, nobis eveniet, rem ipsum et quos id animi praesentium quod numquam nisi earum officia temporibus.</p><p>Voluptate iusto, fugit, dolor aperiam dolores velit quae enim delectus unde nostrum fuga nihil veniam harum aspernatur deleniti esse quia, consequuntur facere? Delectus officiis cum, debitis saepe nisi iste perspiciatis eum vero aliquam, placeat cumque accusamus quae, aliquid adipisci recusandae voluptates nam perferendis quos tenetur aut possimus nesciunt ad impedit. Natus dolorum facere quos mollitia ipsum eveniet fugiat necessitatibus repudiandae, fugit, tempora optio neque eum. Sapiente eius provident adipisci placeat!</p>'
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam porro repudiandae reprehenderit maiores quaerat,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam porro repudiandae reprehenderit maiores quaerat, nobis eveniet, rem ipsum et quos id animi praesentium quod numquam nisi earum officia temporibus.</p><p>Voluptate iusto, fugit, dolor aperiam dolores velit quae enim delectus unde nostrum fuga nihil veniam harum aspernatur deleniti esse quia, consequuntur facere? Delectus officiis cum, debitis saepe nisi iste perspiciatis eum vero aliquam, placeat cumque accusamus quae, aliquid adipisci recusandae voluptates nam perferendis quos tenetur aut possimus nesciunt ad impedit. Natus dolorum facere quos mollitia ipsum eveniet fugiat necessitatibus repudiandae, fugit, tempora optio neque eum. Sapiente eius provident adipisci placeat!</p>'
        // ]);
    }
}
