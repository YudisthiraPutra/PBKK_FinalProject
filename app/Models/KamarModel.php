<?php 
namespace App\Models;
use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table = 'Kamar';

    protected $primaryKey = 'ID_Kamar';
    
    protected $allowedFields = ['ID_Kamar','Nama_Kamar', 'Harga_Kamar', 'Tagline_Kamar', 'Gambar_kamar'];

    public function getRoomPriceByType($roomType)
    {
        // Assuming your table has columns like 'Kamar_Type' and 'Kamar_Price'
        $query = $this->select('Harga_Kamar')
                      ->where('ID_Kamar', $roomType)
                      ->first();
        return $query ? $query['Harga_Kamar'] : false;
    }
}