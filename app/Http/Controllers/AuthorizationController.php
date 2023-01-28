<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewProduct()
    {
        $this->authorize('view product');

        return 'view product';
    }

    public function createProduct()
    {
        $this->authorize('create product');

        return 'create product';
    }

    public function editProduct()
    {
        $this->authorize('edit product');

        return 'edit product';
    }

    public function deleteProduct()
    {
        $this->authorize('delete product');

        return 'delete product';
    }

    public function checkoutProduct()
    {
        $this->authorize('checkout product');

        return 'checkout product';
    }
}
