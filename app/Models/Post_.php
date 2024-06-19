<?php

namespace App\Models;

// use function PHPUnit\Framework\returnSelf;

class Post
{
   private static $blog_posts = [
    [
    "title" => "judul post",
    "slug" => "judul-post",
    "author" => "Lazuardi Mandegar",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae magnam quasi quidem temporibus similique totam laboriosam, dolores dolorum sunt dignissimos aspernatur ducimus, eum iusto neque quia dolore soluta error earum voluptatum laborum quae rerum sit. Suscipit blanditiis ipsa autem ducimus. Alias veniam voluptatibus voluptates facere tempora odit libero reiciendis, beatae vero totam consectetur similique harum quis aperiam mollitia. Distinctio doloribus necessitatibus, optio veniam sunt voluptatum repellat eligendi veritatis facilis neque dolorum libero. Repellat dolor vitae eos ex dolorum, sed inventore, est ipsam recusandae aperiam accusantium dolore laudantium. Aperiam, exercitationem."
],
[
    "title" => "judul post dua",
    "slug" => "judul-post-dua",
    "author" => "Lazuardi Mandegar",
    "body" => "Lorekkm ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae magnam quasi quidem temporibus similique totam laboriosam, dolores dolorum sunt dignissimos aspernatur ducimus, eum iusto neque quia dolore soluta error earum voluptatum laborum quae rerum sit. Suscipit blanditiis ipsa autem ducimus. Alias veniam voluptatibus voluptates facere tempora odit libero reiciendis, beatae vero totam consectetur similique harum quis aperiam mollitia. Distinctio doloribus necessitatibus, optio veniam sunt voluptatum repellat eligendi veritatis facilis neque dolorum libero. Repellat dolor vitae eos ex dolorum, sed inventore, est ipsam recusandae aperiam accusantium dolore laudantium. Aperiam, exercitationem."
]
];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }

}