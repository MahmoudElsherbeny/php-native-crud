<?php 

namespace App\Classes;

use App\Core\View;
use App\Services\ProductService;

class ProductsClass extends ProductService
{
	public function list()
	{
        $products = $this->retrieve();
        return View::display('products/list.php', 'Products List', ['products' => $products]);
	}

	public function create()
	{
        return View::display('products/create.php', 'Create Product');
	}

    public function store()
	{
        try {
            $validateData = $this->validate();
            if($validateData != null) {
                return header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else{
                $product = $this->storeProduct($_POST);
                return header('Location: /');
            }
        } catch (\Exception $e) {
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
	}

    public function delete_multiple()
	{
        try {
            $this->deleteProducts($_POST['delete_products']);
        } catch (\Exception $e) {}

        return header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}