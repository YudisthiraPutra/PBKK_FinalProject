<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'uid';
    protected $allowedFields = ['name_user', 'email_user', 'password'];
    
    public function authenticateUser($email, $password)
    {
        $db = \Config\Database::connect();
        // Replace this with your actual database authentication logic
        // Example: Using CodeIgniter's Query Builder to check user credentials
        $query = $this->db->table('user')
                          ->where('email_user', $email)
                          ->where('password', $password) 
                          ->get();

        // Check if a user with the given credentials exists
        return ($query->getNumRows() > 0);
    }

    public function registerUser($data)
    {
        // Insert the user data into the database
        $this->insert($data);
    }
}