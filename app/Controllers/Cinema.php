<?php 
namespace App\Controllers;
use App\Models\ListFilmModel;
use CodeIgniter\Controller;

class Cinema extends Controller
{
    public function index(){
        $ListFilmModel = new ListFilmModel();
        $data['ListFilm'] = $ListFilmModel->orderBy('idfilm', 'DESC')->findAll();
        return view('homepage', $data);
    }
    public function order(){
        return view('orderpage');
    }
    public function singleUser($id = null){
        $ListFilmModel = new ListFilmModel();
        $data['selectedfilm'] = $ListFilmModel->where('idfilm', $id)->first();
        return view('moviepage', $data);
    }
}