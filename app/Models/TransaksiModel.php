<?php

namespace App\Models;
use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'Transaksi';
    protected $primaryKey = 'ID_Transaksi'; // Adjust the primary key if needed
    protected $allowedFields = ['Waktu_Transaksi','CheckIn_Transaksi','CheckOut_Transaksi', 'Pelanggan_NIK_Pelanggan', 'Kamar_ID_Kamar'];

    public function getAllTransaksi()
    {
        $builder = $this->db->table('Transaksi');
        $builder->select('transaksi.*, Nama_Pelanggan as pelanggan_name');
        $builder->select('transaksi.*, Nama_Kamar as kamar_name');
        $builder->join('Kamar', 'ID_Kamar = Kamar_ID_Kamar');
        $builder->join('Pelanggan', 'NIK_Pelanggan = Pelanggan_NIK_Pelanggan');

        $query = $builder->get();
        return $query->getResult();
    }

}
