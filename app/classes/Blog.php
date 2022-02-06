<?php


namespace App\classes;
class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0=> [
                'title' => 'A new Blog',
                'description' => 'Blog Description',
                'author' => 'shehon khan',
                'image' => 'a2.jpg',
            ],
            1=> [
                'title' => 'Another Blog',
                'description' => 'Blog Description',
                'author' => 'nahid khan',
                'image' => 'a3.jpg',
            ],
            2=> [
                'title' => 'Bangladesh Blog',
                'description' => 'Blog Description',
                'author' => 'ohid khan',
                'image' => 'a4.jpg',
            ],
        ];
    }

}