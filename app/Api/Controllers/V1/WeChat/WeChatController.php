<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 18:02
     */
    
    namespace App\Api\Controllers\V1\WeChat;
    use EasyWeChat\Kernel\Messages\Image;
    use Illuminate\Support\Facades\Log;

    class WeChatController extends BaseController
    {
        /**
         * @SWG\Get(
         *     path="/company/get",
         *     summary="所有用户相关信息",
         *     tags={"users"},
         *     description="返回所有用户的相关基本信息",
         *     operationId="demo.users",
         *     produces={"application/json"},
         *     @SWG\Parameter(
         *         name="tags",in="query",description="接口需要的参相关信息，字段名，传参方式，是否必须，类型等",required=true,type="string",
         *     ),
         *     @SWG\Response(
         *         response=200,description="返回回成功相关说明"
         *     ),
         *     @SWG\Response(
         *         response=401,description="返回失败相关说明",
         *     )
         * )
         */
        public function serve()
        {
            Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志
    
            $app = app('wechat.official_account');
            /*$app->server->push(function($message){
                if($message == 'haha') {
                    return '测试！';
                } else {
                    return "欢迎关注 overtrue！";
                }
            });*/
            //FrZI0ri7pKdT0FriFSk3vwGCwQIInV7KhK6CXNInMok
            //http://mmbiz.qpic.cn/mmbiz_png/M2ciacOibPsqqjROzJJruvUzOzb7MOxHBF97YVqar1uwkqgWFRViawuGARKh5icI9tRibejmSUAwJ8w9tQQqfujdAng/0?wx_fmt=png
            //$result = $app->material->uploadImage(resource_path('img/456.png'));
            
            //return $app->qrcode->temporary('foo', 6*24*3600);
            $app->server->push(function($message){
                //return new Image('FrZI0ri7pKdT0FriFSk3vwGCwQIInV7KhK6CXNInMok');
                /*if($message == 'haha') {
                    return '测试！';
                } else {
                    return "欢迎关注 overtrue！";
                }*/
                /*switch ($message['MsgType']) {
                    case 'event':
                        return '收到事件消息';
                        break;
                    case 'text':
                        return '收到文字消息';
                        
                        break;
                    case 'image':
                        //return '收到图片消息';
                        return new Image('FrZI0ri7pKdT0FriFSk3vwGCwQIInV7KhK6CXNInMok');
                        //$app->material->uploadArticleImage('img');
                        break;
                    case 'voice':
                        return '收到语音消息';
                        break;
                    case 'video':
                        return '收到视频消息';
                        break;
                    case 'location':
                        return '收到坐标消息';
                        break;
                    case 'link':
                        return '收到链接消息';
                        break;
                    case 'file':
                        return '收到文件消息';
                    // ... 其它消息
                    default:
                        return '收到其它消息';
                        break;
                }*/
                return "欢迎关注 包子妹！";
            });
            $this->menu();
            return $app->server->serve();
        }
        
        public function menu(){
            $app = app('wechat.official_account');
            $buttons = [
                [
                    "type" => "click",
                    "name" => "今日歌曲",
                    "key"  => "V1001_TODAY_MUSIC"
                ],
                [
                    "name"       => "菜单",
                    "sub_button" => [
                        [
                            "type" => "view",
                            "name" => "搜索",
                            "url"  => "http://www.soso.com/"
                        ],
                        [
                            "type" => "view",
                            "name" => "视频",
                            "url"  => "http://v.qq.com/"
                        ],
                        [
                            "type" => "click",
                            "name" => "赞一下789",
                            "key" => "V1001_GOOD"
                        ],
                    ],
                ],
            ];
            
            /** @var \EasyWeChat\OfficialAccount\Menu\Client $menu */
            /** @var \EasyWeChat\OfficialAccount\Menu\Client  $menu */
            $menu = $app->menu;
            $menus = $menu->list();
            var_dump($menus);
            $app->menu->create($buttons);
        }
    
        public function upload(){
            $app = app('wechat.official_account');
            $app->material->uploadImage(resource_path('img/456.png'));
            return 'success';
        }
    }