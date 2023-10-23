<?php

namespace App\Models;

class Post
{
        private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Ahmad Afif",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptas libero. Molestiae soluta itaque numquam ipsam, 
                consequuntur odio explicabo recusandae voluptatem ea dolorum praesentium modi doloremque dolore quae atque, 
                hic quaerat nulla delectus repudiandae deleniti cumque? Rerum deleniti magnam soluta sint veniam illum possimus asperiores animi rem architecto, 
                obcaecati cupiditate cum vel sit libero eius. Dolores mollitia officiis neque, eaque doloremque hic cumque odit illum quos, modi sed, 
                reiciendis nesciunt! Voluptas quisquam facere quasi possimus eum maiores dignissimos accusamus quidem."
            ],
        
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Ahmad Wildan",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptas libero. Molestiae soluta itaque numquam ipsam, 
                consequuntur odio explicabo recusandae voluptatem ea dolorum praesentium modi doloremque dolore quae atque, 
                hic quaerat nulla delectus repudiandae deleniti cumque? Rerum deleniti magnam soluta sint veniam illum possimus asperiores animi rem architecto, 
                obcaecati cupiditate cum vel sit libero eius. Dolores mollitia officiis neque, eaque doloremque hic cumque odit illum quos, modi sed, 
                reiciendis nesciunt! Voluptas quisquam facere quasi possimus eum maiores dignissimos accusamus quidem."
            ],
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
    }
}
