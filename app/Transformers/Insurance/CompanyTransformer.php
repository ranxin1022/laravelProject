<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/7
     * Time: 10:19
     */
    
    namespace App\Transformers\Insurance;
    
    
    use App\Models\InsCompanyInfo;
    use League\Fractal\TransformerAbstract;

    class CompanyTransformer extends TransformerAbstract
    {
        public function transform(InsCompanyInfo $companyInfo, string $extra = '')
        {
            return [
                'id' => $companyInfo->id,
                'fundDcId' => $companyInfo->fund_dc_id,
                'name' => $companyInfo->company_name,
                'fullName' => $companyInfo->company_full_name,
                'extra' => $extra,
            ];
        }
    }