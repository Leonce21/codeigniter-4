<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\Resetpassword;

class Auth extends BaseController
{

    public function __construct(){
        helper(['url', 'form', 'Function', 'Form', ]);
    }

    public function login()
    {
        //return view('login');
        echo view('login');
    }

    public function register(){
      

        return view('register');
    }

    public function forgotpassword(){

        return view('forgotpassword');
    }

    public function save()
    {
        $validated = $this->validate ([
            'name'=>[
                'rules' => 'required',
                'errors'=>[
                    'required'=>'name and surname are required',
                ]
            ],
            'phone' => [
                'rules' => 'required|is_unique[users.phone]',
                'errors'=>[
                    'required'=>'phone is required',
                    'is_unique'=>'the phone number is already taken'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Gender is required',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors'=>[
                    'required'=>'email is required',
                    'valid_email'=>'You must enter a valid email',
                    'is_unique'=>'email is already taken'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[45]',
                'errors'=>[
                    'required'=>'password is required',
                    'min_length'=>'Password must have at least 8 characters in length.',
                    'max_length'=>'Password must not have characters more than 45 in length.'
                ]
            ],
            'password_confirm' => [
                'rules' => 'required|min_length[8]|max_length[45]|matches[password]',
                'errors'=>[
                    'required'=>'confirm password is required',
                    'min_length'=>'Password must have at least 8 characters in length.',
                    'max_length'=>'Password must not have characters more than 45 in length.',
                    'matches'=> 'The password must match'
                ]
            ],
        ]);

        if(!$validated){
            return view('register', ['validation'=>$this->validator]);
        }else{
            //echo 'Form validated successfully';
            //print_r($validated);

            $name = $this->request->getPost('name');
            $phone = $this->request->getPost('phone');
            $gender = $this->request->getPost('gender');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            

            $values = [
                'name'=>$name,
                'phone'=>$phone,
                'gender' => $gender,
                'email'=>$email,
                'password'=>$password,
            ];

            $usermodel = new \App\Models\UserModel();
            $query = $usermodel->insert($values);

            if(!$query){
                return redirect()->back()->with('fail','saving user data failed..');
            }else{
                return redirect()->to('register')->with('success','you are registered successfully');
            }
        }


    }

    public function userlogin(){
        $validated = $this->validate ([
           
            'phone' => [
                'rules' => 'required|is_not_unique[users.phone]',
                'errors'=>[
                    'required'=>'The phone number is required',
                    'is_not_unique'=>'The phone number is not found in our database!'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[45]',
                'errors'=>[
                    'required'=>'password is required',
                    'min_length'=>'Password must have at least 8 characters in length.',
                    'max_length'=>'Password must not have characters more than 45 in length.'
                ]
            ],
            
        ]);

        if(!$validated){
            return view('login', ['validation'=>$this->validator]);
        }else{
            //echo 'Form validated successfully';
            //print_r($validated);

            $phone = $this->request->getPost('phone');
            $password = $this->request->getPost('password');

            $usermodel = new \App\Models\UserModel();
            $user_info = $usermodel->where('phone', $phone)->first();
           
           // var_dump($user_info['password']);
            if (!$user_info) {
                // User not found
                return redirect()->back()->with('fail', 'User not found.');
            } else {

                // Verify the password
           
                if ($this->verifyPassword($password, $user_info['password'])) {
                    // Password is correct
                    $session = session();
                    $session->set('user', $user_info);
                    return redirect()->to('profile');
                } else {
                    // Password is incorrect
                    return redirect()->back()->with('fail', 'Invalid password.');
                } 
            }
            
        }
    }

    protected function verifyPassword(string $inputPassword, string $hashedPassword): bool
	{
		return password_verify($inputPassword, $hashedPassword);
	}

    public function profile(){

        $session = session();
        if ($session->has('user')) {
            $user_info = $session->get('user');
            return view('profile', ['user' => $user_info]);
        } else {
            return redirect()->to('login')->with('fail', 'Please log in first.');
        }
    }

    public function change_password_view(){
    
        return view('change_password_view');
    }

    //update password data
    public function change_password(){
        $validation = $this->validate([
            'current_password' => [
              'rules' => 'required',
              'errors' => [
                'required' => 'Current password is required.'
              ]
            ],
            'new_password' => [
              'rules' => 'required|min_length[8]|max_length[45]',
              'errors' => [
                'required' => 'New password is required.',
                'min_length' => 'Password must have at least 8 characters in length.',
                'max_length' => 'Password must not have characters more than 45 in length.'
              ]
            ],
            'confirm_password' => [
              'rules' => 'required|matches[new_password]',
              'errors' => [
                'required' => 'Confirm password is required.',
                'matches' => 'The confirm password must match the new password.'
              ]
            ]
        ]);

        if (!$validation) {
            return view('change_password_view', ['validation' => $this->validator]);
        } else {
            $session = session();
            $user_info = $session->get('user');
        
            $current_password = $this->request->getPost('current_password');
            $new_password = $this->request->getPost('new_password');
        
            if (!$this->verifyPassword($current_password, $user_info['password'])) {
              return redirect()->back()->with('fail', 'Current password is incorrect.');
            }
        
            $usermodel = new UserModel();
            $usermodel->update($user_info['id'], ['password' => password_hash($new_password, PASSWORD_DEFAULT)]);

            // Destroy session after successful password change
            $session->destroy();
        
            return redirect()->to('login')->with('success', 'Password changed successfully. Please login again.');
        }
        //echo 'Form validated successfully';
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login')->with('success', 'Logged out successfully.');
    }
}
