<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model {
	function getDisplayPrice() {
		$price = number_format($this->price, 0, ',', ',');
		return $price . " đ";
	}
}
