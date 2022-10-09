<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [
           
        ];

        return $this->render($viewName, $data);
    }
    public function getListProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.list';
        // data view cần biến $name và $price
        $data = [
           
        ];

        return $this->render($viewName, $data);
    }
    public function getCreateProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.create';
        // data view cần biến $name và $price
        $data = [
           
        ];

        return $this->render($viewName, $data);
    }
    public function getDetailProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.detail';
        // data view cần biến $name và $price
        $data = [
           
        ];

        return $this->render($viewName, $data);
    }
}
