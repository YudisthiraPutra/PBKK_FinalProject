<?php 
namespace App\Models;
use CodeIgniter\Model;

class ListFilmModel extends Model
{
    protected $table = 'ListFilm';

    protected $primaryKey = 'idfilm';
    
    protected $allowedFields = ['idfilm', 'namafilm', 'poster','deskripsi','genre','durasi'];
}