<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Carteblue;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Cartegrise;
use App\Models\Demande;

class Dashboard extends BaseController
{
    public function __construct(){
        helper(['url', 'form', 'Function', 'Form',]);
    }
    public function index()
    {
        return view("dashboard");
    }


    public function cartegrise(){
  
        return view('pages/cartegrise');

        $session = session();
        if ($session->has('user')) {
            $user_info = $session->get('user');
            return view('profile', ['user' =>  $user_info]);
        } else {
            return redirect()->to('login')->with('fail', 'Please log in first.');
        }
    }

    public function carteblue(){
  
        return view('pages/carteblue');

        $session = session();
        if ($session->has('user')) {
            $user_info = $session->get('user');
            return view('profile', ['user' =>  $user_info]);
        } else {
            return redirect()->to('login')->with('fail', 'Please log in first.');
        }
    }

    public function CartegriseForm(){
        return view("pages/modal/new_cartegrise");
    }

    public function CarteblueForm(){
        return view("pages/modal/new_carteblue");
    }

    public function save_cartegrise(){
        $validated = $this->validate ([
            'nom'=>[
                'rules' => 'required',
                'errors'=>[
                    'required'=>'nom is required',
                ]
            ],
        
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sexe is required',
                ],
            ],

            'phone' => [
                'rules' => 'required|is_unique[cartegrise.phone]',
                'errors' => [
                    'required' => 'phone is required',
                ],
            ],

            'NIU' => [
                'rules' => 'required|is_unique[cartegrise.NIU]',
                'errors' => [
                    'required' => 'NIU is required',
                ],
            ],

            'file' => [
                'rules' => 'uploaded[file]|max_size[file, 1024]|mime_in[file, image/jpeg,image/png,image/gif,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document]',
                'errors' => [
                    'uploaded' => 'Please select a file to upload.',
                    'max_size' => 'File size must be under 1MB.',
                    'mime_in' => 'Invalid file type. Allowed types: images, Word, PDF.',
                ],
            ],

            
        ]);

        if(!$validated){
            return view('pages/modal/new_cartegrise', ['validation'=>$this->validator]);
        }else{

            $nom = $this->request->getPost('nom');
            $prenom = $this->request->getPost('prenom');
            $sex = $this->request->getPost('sex');
            $phone = $this->request->getPOst('phone');
            $email = $this->request->getPOst('email');
            $NIU = $this->request->getPOst('NIU');
            $IMCHASSIS = $this->request->getPOst('IMCHASSIS');
            $IMMODEL = $this->request->getPOst('IMMODEL');
            $IMCYL = $this->request->getPOst('IMCYL');
            $IMENERGIE = $this->request->getPOst('IMENERGIE');
            $genre = $this->request->getPOst('genre');
            $marque = $this->request->getPOst('marque');

            $file = $this->request->getFile('file');
            
            if ($file->isValid() && ! $file->hasMoved()) {

                $fileName = $file->getRandomName();
                $file->move('uploads/', $fileName);
                
            }

            // Set default specific power factor based on energy type
            $specific_power_factor = 0;
            if ($IMENERGIE == 'essence' || $IMENERGIE == 'gasoil') {
                // Set default specific power factor for essence or gasoil
                $specific_power_factor = ($IMENERGIE == 'essence') ? 80 : 60; // Adjust as needed
            } else {
                // Retrieve specific power factor from form data
                $specific_power_factor = $this->request->getPost('specific_power_factor');
            }

            // Calculate estimated power
            $IMPUISSANCE = $IMCYL * $specific_power_factor;

            // Price estimation based on estimated power
            $price = $this->calculatePrice($IMPUISSANCE); // Implement this function
    
            $values = [
                'nom'=>$nom,
                'prenom'=>$prenom,
                'sex' => $sex,
                'phone'=>$phone,
                'email'=>$email,
                'NIU'=>$NIU,
                'IMCHASSIS'=> $IMCHASSIS,
                'IMMODEL'=>$IMMODEL,
                'IMCYL'=>$IMCYL,
                'IMENERGIE'=>$IMENERGIE,
                'IMPUISSANCE' => $IMPUISSANCE,
                'genre'=> $genre,
                'marque'=> $marque,
                'price' => $price,
                'file' => $fileName,
         
            ];
    
            $cartegrisemodel = new Cartegrise();
            $query = $cartegrisemodel->insert($values);
    
            if(!$query){
                return redirect()->back()->with('fail','saving cartegrise data failed..');
            }
            // **Prepare data for verification view:**
            $insertedData = [
                'nom' => $values['nom'],
                'prenom' => $values['prenom'],
                'sex' => $values['sex'],
                'phone' => $values['phone'],
                'email' => $values['email'],
                'NIU' => $values['NIU'],
                'IMCHASSIS' => $values['IMCHASSIS'],
                'IMMODEL' => $values['IMMODEL'],
                'IMCYL' => $values['IMCYL'],
                'IMENERGIE' => $values['IMENERGIE'],
                'genre' => $values['genre'],
                'marque' => $values['marque'],
                'price' => $values['price'], // Assuming price is calculated earlier
                'file' => $values['file'],
            ];
            $data['records'] = $values;
            echo view('pages/verification_cartegrisedata', $data);
            //return view('verification_cartegrisedata', $insertedData);
        }
        

    }

    private function calculatePrice($IMPUISSANCE) {
        // Example logic for price estimation
        if ($IMPUISSANCE < 100) {
            return '10,000 FCFA';
        } elseif ($IMPUISSANCE < 200) {
            return '20,000 FCFA';
        } else {
            return '30,000 FCFA';
        }
    }

    public function save_carteblue(){
        $validated = $this->validate ([
            'nom'=>[
                'rules' => 'required',
                'errors'=>[
                    'required'=>'nom is required',
                ]
            ],
        
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sex is required',
                ],
            ],

            'phone' => [
                'rules' => 'required|is_unique[carteblue.phone]',
                'errors' => [
                    'required' => 'phone is required',
                ],
            ],

            'NIU' => [
                'rules' => 'required|is_unique[carteblue.NIU]',
                'errors' => [
                    'required' => 'NIU is required',
                ],
            ],

            'immatriculation' => [
                'rules' => 'required|is_unique[carteblue.immatriculation]',
                'errors' => [
                    'required' => 'immatriculation is required',
                ],
            ],
            
        ]);

        if(!$validated){
            return view('pages/modal/new_carteblue', ['validation'=>$this->validator]);
        }else{

            $nom = $this->request->getPost('nom');
            $prenom = $this->request->getPost('prenom');
            $sex = $this->request->getPost('sex');
            $phone = $this->request->getPOst('phone');
            $email = $this->request->getPOst('email');
            $categorie = $this->request->getPOst('categorie');
            $NIU = $this->request->getPOst('NIU');
            $immatriculation = $this->request->getPOst('immatriculation');
           
    
            $values = [
                'nom'=>$nom,
                'prenom'=>$prenom,
                'sex' => $sex,
                'phone'=>$phone,
                'email'=>$email,
                'categorie'=>$categorie,
                'NIU'=>$NIU,
                'immatriculation'=>$immatriculation,
            ];
    
            $cartebluemodel = new \App\Models\Carteblue();
            $query = $cartebluemodel->insert($values);
    
            if(!$query){
                return redirect()->back()->with('fail','saving carteblue data failed..');
            }else{
                // session()->setFlashdata('cartegrise_submitted', true); 
                //$data['records'] = $values; // Pass the submitted data as 'cartegrise_info'
                //return view('pages/verification_cartegrisedata', $data); // Redirect to a success view with data
                //return redirect()->to('verification_cartegrisedata')->with('success','successfully created cartegrise');
                
              
            }
            return view('pages/verification_cartebluedata', $values);
            
        }
        

    }

    public function verification_cartegrisedata()
    {
        return view('pages/verification_cartegrisedata');
    }

    public function verification_cartebluedata()
    {
        return view('pages/verification_cartebluedata');
    }


    public function demande(){

        return view('demande');
    }

    public function payment(){
        return view('payment');
    }

    
    public function account(){
        return view('account');
    }

  
   

    // public function AddDemande(){
    //     $demande = new Demande();
    //     $data = [
    //         'nom'=>$this->request->getPost('nom'),
    //         'prenom'=>$this->request->getPost('prenom'),
    //         'types'=>$this->request->getPost('types'),
    //         'NIU'=>$this->request->getPost('NIU'),
    //         'Reference'=>$this->request->getPost('Reference'),
    //         'Montant_timbre'=>$this->request->getPost('Montant_timbre'),
    //         'Montant_fisc'=>$this->request->getPost('Montant_fisc'),
    //         'Dte_naissance'=>$this->request->getPost('Dte_naissance'),
    //         'Lieu_naissance'=>$this->request->getPost('Lieu_naissance'),
    //         'Phone'=>$this->request->getPost('Phone'),
    //     ];
    //     $demande->save($data);
    //     return redirect('demande')->with('status','la demande a ete Ajoute successfully');
    // }
}
