<?php 
namespace App\Models;
use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'Pegawai';

    protected $primaryKey = 'NIK_Pegawai';
    
    protected $allowedFields = ['NIK_Pegawai','Nama_Pegawai', 'Email_Pegawai', 'Telp_Pegawai', 'Posisi'];
}