<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(\Auth::check() == false){
            return \Redirect::guest('login');
        }
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
    
    public function index()
    {
        
        return view('form');
    }
    
    public function form(Request $request)
    {
        /*$this->validate($request,[
           'url' => 'url|max:200',
        ]);*/
        /** @var \Illuminate\Validation\Validator $validator*/
        /*$validator = \Validator::make($request->all(), [
            'title' => 'bail|required|string|between:2,32',
            'url' => 'sometimes|url|max:200',
            'email' => 'required_without:phone',
            'phone' => 'required_without:email',
        ],[
            'required_without' => 'email或电话不能都为空',
        ]);*/
        \Validator::make($request->all(), [
            'title' => 'bail|required|string|between:2,32',
            'url' => 'sometimes|url|max:200',
            'picture' => 'nullable|string'
        ], [
            'title.required' => '标题字段不能为空',
            'title.string' => '标题字段仅支持字符串',
            'title.between' => '标题长度必须介于2-32之间',
            'url.url' => 'URL格式不正确，请输入有效的URL',
            'url.max' => 'URL长度不能超过200',
        ])->validate();
        /*if ($validator->fails()) {
            $data = [
                'errCode'   => 0,
                'errMsg'    => '这是一条错误信息',
                'data'  => '这是一条数据信息',
            ];
            
            return response()->json($data)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            //return response()->json()->setJsonOptions(JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)->setData($validator->errors()->getMessages());
            //return response()->json(['error'=>$validator->errors()], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }*/
        //$validator->sometimes();
        $hello = \Hello::hello();
        return response('验证通过' . $hello)->setCharset("UTF-8");
    }
}
