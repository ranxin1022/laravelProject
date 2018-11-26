<?php

namespace App\Http\Controllers\component;

use App\Api\Controllers\V1\Demo\SwaggerController;
use App\Models\ComponentModel;
use Illuminate\Http\Request;

class ComponentController extends SwaggerController
{
    protected $componentModel;
    
    public function __construct(ComponentModel $componentModel)
    {
        $this->componentModel = $componentModel;
    }
    
    public function get()
    {
        $components = $this->componentModel::all();
        foreach ($components as $component)
        {
            echo $component->type . "\n";
            echo "value: " . $component->value . "<br>";
        }
    
        echo 'hehe: ' . $this->componentModel::findOrFail(2);
    }
    
    public function find()
    {
        $query = ComponentModel::query();
        $query->when(request('name', false), function($q, $name){
            return $q->where('name', $name);
        });
        echo $query->get();
        /*$components = $this->componentModel::whereName('fundDcId')->get();
        foreach ($components as $component)
        {
            echo $component->id . "\n";
            echo "value: " . $component->value . "<br>";
        }*/
    }
    //
    public function index()
    {
        $components = ComponentModel::all();
        foreach ($components as $component)
        {
            echo $component->type . "\n";
            echo "value: " . $component->value . "<br>";
        }
    
        echo "url value: " . url()->current();
        echo 'hehe: ' . ComponentModel::findOrFail(20);
    }
    
    /**
     * @SWG\Get(
     *     path="/component/detail",
     *     tags={"component/detail"},
     *     description="获取component的详细信息",
     *     operationId="component.detail",
     *     produces={"application/json"},
     *     @SWG\Parameter(name="fundDcId",in="path",description="金融数据中心唯一id",type="string",),
     *     @SWG\Response(
     *         response=200,
     *         description="成功响应",
     *         @SWG\Schema(
     *            type="json",
     *            @SWG\Property(property="code",type="integer",description="业务逻辑状态码",),
     *            @SWG\Property(property="msg",type="string",description="业务逻辑处理结果信息",),
     *            @SWG\Property(
     *               property="content",
     *              @SWG\Property(
     *                  property="data",description="响应数据",
     *                  @SWG\Property(property="id",type="integer",description="id",),
     *                  @SWG\Property(property="fundDcId",type="string",description="金融数据中心唯一id",),
     *                  @SWG\Property(property="name",type="string",description="保险产品简称",),
     *                  @SWG\Property(property="fname",type="string",description="保险产品全称",),
     *              ),
     *            ),
     *         ),
     *     ),
     * )
     *
     */
    public function detail($fundDcId){
        $product = $this->productRepository->getProductByFundDcId($fundDcId);
        
        return $this->response->item($product, new ProductTransformer());
    }
}
