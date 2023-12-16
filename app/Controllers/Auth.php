<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index(){
        return view('loginpage');
    }
    public function register(){
        return view('registerpage');
    }
    public function processLogin()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Authenticate the user by checking the database
       if ($userModel->authenticateUser($email, $password)) {
            return redirect()->to('admindashboard');
        } else {
            return redirect()->to('login')->with('error', 'Invalid username or password');
        }
    }
    public function processRegistration()
    {
        $userModel = new UserModel();

        // Assuming you have obtained user registration data from the form submission
        $userData = [
            'name_user' => $this->request->getPost('name'),
            'email_user' => $this->request->getPost('email'),
            'password'   => $this->request->getPost('password'),
        ];

        // Register the user
        $userModel->registerUser($userData);

        // Redirect to the login page or any other page after successful registration
        return redirect()->to('login')->with('success', 'Registration successful. Please log in.');
    }
}