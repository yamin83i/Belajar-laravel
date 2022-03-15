<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // User::create([
        //     'name' => 'Ash',
        //     'email' => 'ash@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // User::create([
        //     'name' => 'yami',
        //     'email' => 'yami@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur har',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur harum hic a voluptatum exercitationem voluptatem laboriosam neque sint excepturi nesciunt voluptate, qui ea vero, dolorem id alias. Cum doloribus consequuntur facilis repudiandae autem. Veritatis nobis quam optio cupiditate necessitatibus unde ex officia reiciendis. Perferendis repudiandae autem dolores adipisci optio sunt ad alias? Qui, eaque quidem quis, accusamus impedit ipsam officia reiciendis temporibus corporis incidunt dolor libero dignissimos nobis veniam laborum quos quaerat eligendi numquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur har',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur harum hic a voluptatum exercitationem voluptatem laboriosam neque sint excepturi nesciunt voluptate, qui ea vero, dolorem id alias. Cum doloribus consequuntur facilis repudiandae autem. Veritatis nobis quam optio cupiditate necessitatibus unde ex officia reiciendis. Perferendis repudiandae autem dolores adipisci optio sunt ad alias? Qui, eaque quidem quis, accusamus impedit ipsam officia reiciendis temporibus corporis incidunt dolor libero dignissimos nobis veniam laborum quos quaerat eligendi numquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur har',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur harum hic a voluptatum exercitationem voluptatem laboriosam neque sint excepturi nesciunt voluptate, qui ea vero, dolorem id alias. Cum doloribus consequuntur facilis repudiandae autem. Veritatis nobis quam optio cupiditate necessitatibus unde ex officia reiciendis. Perferendis repudiandae autem dolores adipisci optio sunt ad alias? Qui, eaque quidem quis, accusamus impedit ipsam officia reiciendis temporibus corporis incidunt dolor libero dignissimos nobis veniam laborum quos quaerat eligendi numquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur har',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod ab saepe asperiores soluta fugit libero quisquam perferendis quasi labore. Porro tempora, eum aspernatur, modi maxime magni voluptatum, aperiam enim quisquam dolores harum delectus? Consectetur harum hic a voluptatum exercitationem voluptatem laboriosam neque sint excepturi nesciunt voluptate, qui ea vero, dolorem id alias. Cum doloribus consequuntur facilis repudiandae autem. Veritatis nobis quam optio cupiditate necessitatibus unde ex officia reiciendis. Perferendis repudiandae autem dolores adipisci optio sunt ad alias? Qui, eaque quidem quis, accusamus impedit ipsam officia reiciendis temporibus corporis incidunt dolor libero dignissimos nobis veniam laborum quos quaerat eligendi numquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
