<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';           // Nama tabel
    protected $primaryKey = 'id';         // Primary key
    protected $allowedFields = ['username', 'password']; // Kolom yang bisa diisi
}
