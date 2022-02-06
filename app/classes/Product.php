<?php


namespace App\classes;


class Product
{
    public $data = [
        0 => [
            'id'=>'0',
            'name' => 't-shirt',
            'price' => '2$',
            'brand' => 'A',
            'category' => 'Mans',
            'description' => 'akjnbkjbiubiboiubijkboiuby',
            'image' => 'a1.jpg'
        ],
        1 => [
            'id'=>'1',
            'name' => 'trouser',
            'price' => '3$',
            'brand' => 'B',
            'category' => 'Mans',
            'description' => 'aaaaaaaaaaaaaaaaaaaaaaaaa',
            'image' => 'a2.jpg'
        ],
        2 => [
            'id'=>'2',
            'name' => 'watch',
            'price' => '4$',
            'brand' => 'B',
            'category' => 'Woman',
            'description' => 'bbbbbbbbbbbbbbbbbbbbbbb',
            'image' => 'a3.jpg'
        ],
        3 => [
            'id'=>'3',
            'name' => 'bag',
            'price' => '5$',
            'brand' => 'C',
            'category' => 'Baby',
            'description' => 'ccccccccccccccccccc',
            'image' => 'a4.jpg'
        ],
        4 => [
            'id'=>'4',
            'name' => 'shoes',
            'price' => '6$',
            'brand' => 'D',
            'category' => 'Man',
            'description' => 'ddddddddddddddddddddd',
            'image' => 'a5.jpg'
        ],
        5 => [
            'id'=>'5',
            'name' => 'wallet',
            'price' => '10$',
            'brand' => 'A',
            'category' => 'mans',
            'description' => 'lorem10 lorem10 lorem10 lorem10 lorem10 lorem10',
            'image' => 'a6.jpg'
        ],
        6 => [
            'id'=>'6',
            'name' => 'lighter',
            'price' => '10$',
            'brand' => 'A',
            'category' => 'mans',
            'description' => 'lorem1asdasdasdasdasdem10 lorem10',
            'image' => 'a7.jpg'
        ],
        7 => [
            'id'=>'7',
            'name' => 'Headphone',
            'price' => '100$',
            'brand' => 'A',
            'category' => 'mans',
            'description' => 'lorem1asdasd lorem10 lsadasdasdlorem10',
            'image' => 'a8.jpg'
        ],
        8 => [
            'id'=>'8',
            'name' => 'mobile',
            'price' => '10$',
            'brand' => 'A',
            'category' => 'electronics',
            'description' => 'lorem111111111111111 lorem10 lorem10 lorem10 lorem10 lorem10',
            'image' => 'a9.jpg'
        ],
        9 => [
            'id'=>'9',
            'name' => 'Laptop',
            'price' => '1100$',
            'brand' => 'A',
            'category' => 'electronics',
            'description' => 'asdasdasdddddddddddddddddddddd0',
            'image' => 'a10.jpg'
        ],


    ];

    public function getAllProduct()
    {
        return $this->data;
    }

}