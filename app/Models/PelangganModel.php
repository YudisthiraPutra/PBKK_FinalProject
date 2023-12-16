<?php

namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'Pelanggan';
    protected $primaryKey = 'NIK_Pelanggan'; // Adjust the primary key if needed
        
    protected $allowedFields = ['NIK_Pelanggan','Nama_Pelanggan', 'Telp_Pelanggan'];
}
