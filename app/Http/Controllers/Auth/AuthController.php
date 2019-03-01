<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/27
     * Time: 16:03
     */
    
    namespace App\Http\Controllers\Auth;
    
    use App\User;
    use Dotenv\Validator;
    use Illuminate\Foundation\Auth\ThrottlesLogins;
    use Illuminate\Routing\Controller;
    use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
    
    class AuthController extends Controller
    {
        public function getRegister()
        {
        
        }
    
        public function register()
        {
            return view('register');
        }
    
        public function getLogin()
        {
            return view('auth/login');
        }
        
        
    }