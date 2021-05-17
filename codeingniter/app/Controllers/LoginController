<?php 
namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    private $login = '' ;
    public function __construct(){
      
        $this->login = new LoginModel();       
    }
    
    // show login form
    public function index()    {  

        $session = session();  
        $session->setFlashdata('msg', '');
    return view('login');
    }      

    //check user is exist or not
    public function login(){
          
        $data = array('user_name'=>$this->request->getVar('user_id'),'password'=>md5($this->request->getVar('password')));       
        $user =  $this->login->where($data); 
        $rows = $this->login->countAllResults();
        $session = session();          
        if($rows==1){
            return view('success');
        }else{
            $session->setFlashdata('msg', 'Invalid User');
            return view('login');
        } 
     }
}
