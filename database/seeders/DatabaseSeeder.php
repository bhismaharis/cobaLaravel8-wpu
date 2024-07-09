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

        User::create([
            'name' => 'Bhisma Haris Alfitrah',
            'email' => 'bhismaharis11@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Aqilah Zulfa Syawqiyyatush Sholih',
            'email' => 'aqilahzulfa30@gmail.com',
            'password' => bcrypt('password'),
        ]);

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

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid, omnis corrupti, dolor dicta eos officia porro, numquam placeat nam fugiat laudantium est non. Placeat autem harum sunt magnam error soluta necessitatibus cupiditate, unde, veritatis sed reiciendis itaque fugiat? Itaque numquam, quo harum veritatis eum nostrum, ratione soluta consequuntur necessitatibus praesentium tempora. Nam nihil quae nobis adipisci, sit laudantium totam inventore saepe perferendis voluptatem accusantium quos natus placeat non velit distinctio fugit, iusto perspiciatis, voluptatum similique in earum omnis. Nam repellendus laboriosam, aliquid obcaecati ut dolores itaque. Ipsa aliquam unde corrupti amet voluptates iusto debitis atque facilis aspernatur, eaque nam, praesentium perferendis? Excepturi iure non repellat amet corrupti! Nulla ea officiis qui laborum et harum vero dicta aperiam repudiandae voluptates.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, debitis quis aut earum distinctio quas doloremque veniam mollitia ad eum dicta ipsam qui pariatur aspernatur fugit maiores placeat. Iste temporibus aperiam quo accusamus corporis esse iusto pariatur est laborum vitae, optio, molestias perferendis aliquam nihil a culpa veniam quis necessitatibus fugiat tenetur! Non quia maiores corporis temporibus possimus quas, aliquid id aliquam? Molestiae dolor doloremque, ipsa incidunt reprehenderit eaque ratione velit repellat vero ipsum cum molestias ea accusamus vitae? Fugiat facilis ad repellat sit corrupti veniam consequatur et explicabo adipisci culpa, vitae nulla, minima quisquam dicta vel quis optio, ratione excepturi. Quas laborum praesentium officiis atque dolore fugit ad? Aperiam tempora laboriosam deleniti necessitatibus obcaecati tenetur laudantium consequatur odio illum!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit facere assumenda voluptates, officiis mollitia deleniti quam laboriosam! Sunt dolore praesentium odit aliquid perspiciatis iste, minus id optio quidem ut, dicta sint ab laboriosam ad sit ea quae! Aliquid voluptas vitae, architecto neque soluta cupiditate debitis dignissimos, ad sunt voluptates eos expedita rerum dolore repudiandae, numquam aspernatur consequuntur fugit animi. Eaque totam repudiandae quae repellendus mollitia explicabo minus rem, alias corrupti eveniet aliquam ex distinctio voluptatem nulla odit quisquam sint nihil fuga. Asperiores quis, nisi, eligendi quibusdam itaque praesentium ut ipsa temporibus pariatur id tempora aspernatur rerum distinctio fuga neque odit. Earum recusandae possimus modi culpa, amet ullam, eveniet ex excepturi quasi placeat odit dignissimos, eum voluptatem quos fugiat saepe quam?</p>',
        ]);

        Post::create([
            'category_id' => 3,
            'user_id' => 2,
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid, omnis corrupti, dolor dicta eos officia porro, numquam placeat nam fugiat laudantium est non. Placeat autem harum sunt magnam error soluta necessitatibus cupiditate, unde, veritatis sed reiciendis itaque fugiat? Itaque numquam, quo harum veritatis eum nostrum, ratione soluta consequuntur necessitatibus praesentium tempora. Nam nihil quae nobis adipisci, sit laudantium totam inventore saepe perferendis voluptatem accusantium quos natus placeat non velit distinctio fugit, iusto perspiciatis, voluptatum similique in earum omnis. Nam repellendus laboriosam, aliquid obcaecati ut dolores itaque. Ipsa aliquam unde corrupti amet voluptates iusto debitis atque facilis aspernatur, eaque nam, praesentium perferendis? Excepturi iure non repellat amet corrupti! Nulla ea officiis qui laborum et harum vero dicta aperiam repudiandae voluptates.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, debitis quis aut earum distinctio quas doloremque veniam mollitia ad eum dicta ipsam qui pariatur aspernatur fugit maiores placeat. Iste temporibus aperiam quo accusamus corporis esse iusto pariatur est laborum vitae, optio, molestias perferendis aliquam nihil a culpa veniam quis necessitatibus fugiat tenetur! Non quia maiores corporis temporibus possimus quas, aliquid id aliquam? Molestiae dolor doloremque, ipsa incidunt reprehenderit eaque ratione velit repellat vero ipsum cum molestias ea accusamus vitae? Fugiat facilis ad repellat sit corrupti veniam consequatur et explicabo adipisci culpa, vitae nulla, minima quisquam dicta vel quis optio, ratione excepturi. Quas laborum praesentium officiis atque dolore fugit ad? Aperiam tempora laboriosam deleniti necessitatibus obcaecati tenetur laudantium consequatur odio illum!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit facere assumenda voluptates, officiis mollitia deleniti quam laboriosam! Sunt dolore praesentium odit aliquid perspiciatis iste, minus id optio quidem ut, dicta sint ab laboriosam ad sit ea quae! Aliquid voluptas vitae, architecto neque soluta cupiditate debitis dignissimos, ad sunt voluptates eos expedita rerum dolore repudiandae, numquam aspernatur consequuntur fugit animi. Eaque totam repudiandae quae repellendus mollitia explicabo minus rem, alias corrupti eveniet aliquam ex distinctio voluptatem nulla odit quisquam sint nihil fuga. Asperiores quis, nisi, eligendi quibusdam itaque praesentium ut ipsa temporibus pariatur id tempora aspernatur rerum distinctio fuga neque odit. Earum recusandae possimus modi culpa, amet ullam, eveniet ex excepturi quasi placeat odit dignissimos, eum voluptatem quos fugiat saepe quam?</p>',
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid, omnis corrupti, dolor dicta eos officia porro, numquam placeat nam fugiat laudantium est non. Placeat autem harum sunt magnam error soluta necessitatibus cupiditate, unde, veritatis sed reiciendis itaque fugiat? Itaque numquam, quo harum veritatis eum nostrum, ratione soluta consequuntur necessitatibus praesentium tempora. Nam nihil quae nobis adipisci, sit laudantium totam inventore saepe perferendis voluptatem accusantium quos natus placeat non velit distinctio fugit, iusto perspiciatis, voluptatum similique in earum omnis. Nam repellendus laboriosam, aliquid obcaecati ut dolores itaque. Ipsa aliquam unde corrupti amet voluptates iusto debitis atque facilis aspernatur, eaque nam, praesentium perferendis? Excepturi iure non repellat amet corrupti! Nulla ea officiis qui laborum et harum vero dicta aperiam repudiandae voluptates.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, debitis quis aut earum distinctio quas doloremque veniam mollitia ad eum dicta ipsam qui pariatur aspernatur fugit maiores placeat. Iste temporibus aperiam quo accusamus corporis esse iusto pariatur est laborum vitae, optio, molestias perferendis aliquam nihil a culpa veniam quis necessitatibus fugiat tenetur! Non quia maiores corporis temporibus possimus quas, aliquid id aliquam? Molestiae dolor doloremque, ipsa incidunt reprehenderit eaque ratione velit repellat vero ipsum cum molestias ea accusamus vitae? Fugiat facilis ad repellat sit corrupti veniam consequatur et explicabo adipisci culpa, vitae nulla, minima quisquam dicta vel quis optio, ratione excepturi. Quas laborum praesentium officiis atque dolore fugit ad? Aperiam tempora laboriosam deleniti necessitatibus obcaecati tenetur laudantium consequatur odio illum!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit facere assumenda voluptates, officiis mollitia deleniti quam laboriosam! Sunt dolore praesentium odit aliquid perspiciatis iste, minus id optio quidem ut, dicta sint ab laboriosam ad sit ea quae! Aliquid voluptas vitae, architecto neque soluta cupiditate debitis dignissimos, ad sunt voluptates eos expedita rerum dolore repudiandae, numquam aspernatur consequuntur fugit animi. Eaque totam repudiandae quae repellendus mollitia explicabo minus rem, alias corrupti eveniet aliquam ex distinctio voluptatem nulla odit quisquam sint nihil fuga. Asperiores quis, nisi, eligendi quibusdam itaque praesentium ut ipsa temporibus pariatur id tempora aspernatur rerum distinctio fuga neque odit. Earum recusandae possimus modi culpa, amet ullam, eveniet ex excepturi quasi placeat odit dignissimos, eum voluptatem quos fugiat saepe quam?</p>',
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Post Keempat',
            'slug' => 'judul-post-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid, omnis corrupti, dolor dicta eos officia porro, numquam placeat nam fugiat laudantium est non. Placeat autem harum sunt magnam error soluta necessitatibus cupiditate, unde, veritatis sed reiciendis itaque fugiat? Itaque numquam, quo harum veritatis eum nostrum, ratione soluta consequuntur necessitatibus praesentium tempora. Nam nihil quae nobis adipisci, sit laudantium totam inventore saepe perferendis voluptatem accusantium quos natus placeat non velit distinctio fugit, iusto perspiciatis, voluptatum similique in earum omnis. Nam repellendus laboriosam, aliquid obcaecati ut dolores itaque. Ipsa aliquam unde corrupti amet voluptates iusto debitis atque facilis aspernatur, eaque nam, praesentium perferendis? Excepturi iure non repellat amet corrupti! Nulla ea officiis qui laborum et harum vero dicta aperiam repudiandae voluptates.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, debitis quis aut earum distinctio quas doloremque veniam mollitia ad eum dicta ipsam qui pariatur aspernatur fugit maiores placeat. Iste temporibus aperiam quo accusamus corporis esse iusto pariatur est laborum vitae, optio, molestias perferendis aliquam nihil a culpa veniam quis necessitatibus fugiat tenetur! Non quia maiores corporis temporibus possimus quas, aliquid id aliquam? Molestiae dolor doloremque, ipsa incidunt reprehenderit eaque ratione velit repellat vero ipsum cum molestias ea accusamus vitae? Fugiat facilis ad repellat sit corrupti veniam consequatur et explicabo adipisci culpa, vitae nulla, minima quisquam dicta vel quis optio, ratione excepturi. Quas laborum praesentium officiis atque dolore fugit ad? Aperiam tempora laboriosam deleniti necessitatibus obcaecati tenetur laudantium consequatur odio illum!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit facere assumenda voluptates, officiis mollitia deleniti quam laboriosam! Sunt dolore praesentium odit aliquid perspiciatis iste, minus id optio quidem ut, dicta sint ab laboriosam ad sit ea quae! Aliquid voluptas vitae, architecto neque soluta cupiditate debitis dignissimos, ad sunt voluptates eos expedita rerum dolore repudiandae, numquam aspernatur consequuntur fugit animi. Eaque totam repudiandae quae repellendus mollitia explicabo minus rem, alias corrupti eveniet aliquam ex distinctio voluptatem nulla odit quisquam sint nihil fuga. Asperiores quis, nisi, eligendi quibusdam itaque praesentium ut ipsa temporibus pariatur id tempora aspernatur rerum distinctio fuga neque odit. Earum recusandae possimus modi culpa, amet ullam, eveniet ex excepturi quasi placeat odit dignissimos, eum voluptatem quos fugiat saepe quam?</p>',
        ]);
    }
}
