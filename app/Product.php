<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    public function presentPrice()
    {
        return "R$ ".number_format($this->price).",00";
    }

    public function scopeMightAlsoLike($query)
    {
    	return $query->inRandomOrder()->take(4);
    }
}