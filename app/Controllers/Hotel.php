<?php 
namespace App\Controllers;
use App\Models\KamarModel;
use App\Models\StaffModel;
use App\Models\ReviewModel;
use App\Models\TransaksiModel;
use CodeIgniter\Controller;

class Hotel extends Controller
{
    public function index(){
        $ListKamarModel = new KamarModel();
        $data['Kamar'] = $ListKamarModel->orderBy('ID_Kamar', 'DESC')->findAll();


        // Fetch review data (assuming you have a specific ulasan ID)
         $reviewModel = new ReviewModel();
         $data['UlasanData'] = $reviewModel->getAllUlasanWithPelangganName();

        return view('homepage', $data);
    }
    public function singleRoom(string $id = null){
        $ListHotelRoom = new KamarModel();
        $data['selectedroom'] = $ListHotelRoom->where('ID_Kamar', $id)->first();
        return view('roompage', $data);
    }
    public function dashboard(){
        return view('admindbpage');
    }

    public function order(){
        return view('orderpage');
    }

    public function staffdata(){
        $ListStaffModel = new StaffModel();
        $data['Pegawai'] = $ListStaffModel->orderBy('NIK_Pegawai', 'DESC')->findAll();
        return view('dbstaffpage',$data);
    }

    public function customerdata(){
        $ListCustomer = new TransaksiModel();
        $data['Transaksi'] = $ListCustomer->getAllTransaksi();
        return view('dborderpage',$data);
    }

}