<?php

namespace App\classes;

require_once 'vendor/autoload.php';
use App\classes\Product;


class Detail extends Product
{
    public function getdetail($key=''){
        return array_filter($this->data,function($element) use($key){
            if($element['id'] === $key){
                return $element;
            }
        });
    }

}