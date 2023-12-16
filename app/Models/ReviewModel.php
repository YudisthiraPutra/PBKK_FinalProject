<?php

namespace App\Models;
use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'Ulasan';
    protected $primaryKey = 'ID_Ulasan'; // Adjust the primary key if needed

    public function getAllUlasanWithPelangganName()
    {
        $builder = $this->db->table('Ulasan');
        $builder->select('ulasan.*, Nama_Pelanggan as pelanggan_name');
        $builder->join('Pelanggan', 'NIK_Pelanggan = Pelanggan_NIK_Pelanggan');

        $query = $builder->get();
        return $query->getResult();
    }

}
