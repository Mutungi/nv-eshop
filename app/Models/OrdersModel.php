<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $allowedFields = [
        'name', 
        'email', 
        'contact',
        'location',
        'selected_products',
        'comment'
    ];
}