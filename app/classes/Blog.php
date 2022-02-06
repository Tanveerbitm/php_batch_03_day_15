<?php


namespace App\classes;


class Blog
{
    protected $blogs;
    public function getAllBlog(){
        return [
            0=>[
                'title'=>'A new Blog',
                'description' =>'Blog Description',
                'author' => 'Sahabuddin',
                'image'=> 'a1.jpg'
            ],
            1=>[
            'title'=>'Another Blog',
            'description' =>'Blog Description',
            'author' => 'Rubel Khan',
            'image'=> 'a2.jpg'
           ],
            2=>[
                'title'=>'About Bangladesh',
                'description' =>'Blog Description',
                'author' => 'Jahed',
                'image'=> 'a3.jpg'
            ],
        ];
    }
}