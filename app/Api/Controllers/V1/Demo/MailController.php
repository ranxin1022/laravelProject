<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/7
     * Time: 14:21
     */
    
    namespace App\Api\Controllers\V1\Demo;


    use App\Mail\AlarmMail;
    use Dingo\Api\Routing\Helpers;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\Mail;

    class MailController extends Controller
    {
        use Helpers;
        
        public function info()
        {
            //return "heeh: " . route('memberinfo');
            
        }
    
        /**
         * @SWG\Get(
         *     path="/demo/mail",
         *     summary="单用户详细信息",
         *     tags={"mail"},
         *     description="返回单个用户的详细信息",
         *     operationId="demo.mail",
         *     produces={"application/json"},
         *
         *     @SWG\Response(
         *         response=200,description="返回回成功相关说明"
         *     ),
         *     @SWG\Response(
         *         response=401,description="返回失败相关说明",
         *     )
         * )
         */
        public function sendEmail(Request $request)
        {
            //return $this->response->error ("this is an error", 404);
            //return $this->response->errorBadRequest();
            if($request->isMethod('get'))
            {
                $to = 'rachel.ran@jfz.com';
                Mail::to($to)->send(new AlarmMail());
            }
        }
    }