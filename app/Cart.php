<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Cart extends Model
{
    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public $listProducts = [];

	public function __construct($oldCart){
		if($oldCart){
			//$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
			$this->listProducts = $oldCart->listProducts;
		}
	}

	public function add($item, $id){
		$giohang = ['qty'=>0, 'price' => $item->unit_price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		$giohang['price'] = $item->unit_price * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty++;
		$this->totalPrice += $item->unit_price;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
	public function addProduct($id){
		$id = intval($id);
		$tempProduct = Product::find($id);
		if($tempProduct==null)
			return;
		if(array_key_exists($id, $this->listProducts)){
			$this->listProducts[$id]++;
		}
		else
			$this->listProducts[$id] = 1;
		$this->totalQty += 1;
		$this->totalPrice += $tempProduct->unit_price;
	}
	public function reduceProduct($id){
		$id = intval($id);
		$tempProduct = Product::find($id);
		if($tempProduct==null)
			return;
		if(array_key_exists($id, $this->listProducts)){
			$this->listProducts[$id]--;
			if($this->listProducts[$id] < 1)
				unset($this->listProducts[$id]);
		}
		$this->totalQty -= 1;
		$this->totalPrice -= $tempProduct->unit_price;
		$this->CheckQtyAndPrice();
	}
	public function removeProduct($id){
		
		$id = intval($id);
		$tempProduct = Product::find($id);
		if($tempProduct==null)
			return;
		if(array_key_exists($id, $this->listProducts)){
			$this->totalQty -= $this->listProducts[$id];
			$this->totalPrice -= $tempProduct->unit_price * $this->listProducts[$id];
			unset($this->listProducts[$id]);
			$this->CheckQtyAndPrice();
		}
	}
	private function CheckQtyAndPrice(){
		if($this->totalQty < 0)
			$this->totalQty = 0;
		if($this->totalPrice < 0)
			$this->totalPrice = 0;
	}
	public function toListProducts(){
		$lstPro = [];
		$this->totalPrice = 0;
		$this->totalQty = 0;
		foreach ($this->listProducts as $key => $value) {
			$temp = Product::find($key);
			if($temp==null)
				continue;
			array_push($lstPro,$temp);
		}
		return $lstPro;
	}
}
