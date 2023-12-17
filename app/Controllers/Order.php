<?php

namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\PelangganModel;
use App\Models\KamarModel;
use CodeIgniter\Controller;

class Order extends Controller
{
    public function index()
    {
        return view('orderpage');
    }
    public function payment()
    {
        $checkin = session()->get('checkin');
        $checkout = session()->get('checkout');
        $roomtype = session()->get('roomtype');
        $roomPriceFormatted = number_format($roomtype, 0, ',', '.');


        // Load the /payment view and pass data to it
        return view('paymentpage', [
            'checkin' => $checkin,
            'checkout' => $checkout,
            'roomtype' => $roomPriceFormatted,]);
    }
    public function submitOrder()
    {
    // Assuming you have models for PelangganModel and TransaksiModel
    $pelangganModel = new PelangganModel();
    $transaksiModel = new TransaksiModel();
    $kamarModel = new KamarModel();

    // Get data from the form
    $contactInfo = [
        'Nama_Pelanggan' => $this->request->getPost('name'),
        'Telp_Pelanggan' => $this->request->getPost('mobilenumber'),
        'NIK_Pelanggan' => $this->request->getPost('NIK'),
    ];

    $reservationDates = [
        'CheckIn_Transaksi' => date('Y-m-d', strtotime($this->request->getPost('checkin'))),
        'CheckOut_Transaksi' => date('Y-m-d', strtotime($this->request->getPost('checkout'))),
        'Kamar_ID_Kamar' => $this->request->getPost('roomtype'),
    ];

    // Insert data into Pelanggan table
    $pelangganModel->insert($contactInfo); 
        // Get the current timestamp
        $currentTimestamp = date('Y-m-d H:i:s');

        $transaksiData = array_merge(
            $reservationDates,
            ['Pelanggan_NIK_Pelanggan' => $contactInfo['NIK_Pelanggan'], 'Waktu_Transaksi' => $currentTimestamp]
        );
        $transaksiModel->insert($transaksiData);
        $roomPrice = $kamarModel->getRoomPriceByType($reservationDates['Kamar_ID_Kamar']);
        // Insert data into Transaksi table with the associated pelanggan_id
        session()->setFlashdata('checkin', $reservationDates['CheckIn_Transaksi']);
        session()->setFlashdata('checkout', $reservationDates['CheckOut_Transaksi']);
        session()->setFlashdata('roomtype', $roomPrice);

        // Redirect to the /payment page
        return redirect()->to('/payment');
    } 
    }



