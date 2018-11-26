<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 17:20
     */
    
    namespace App\Repositories;
    
    
    use App\Models\InsCompanyInfo;

    class CompanyRepository extends AppRepository
    {
        public function getCooperativeCompanies($offset, $limit)
        {
            $query = InsCompanyInfo::where('isvalid', 1)->orderBy('weight', 'desc');
            $query = ($limit > 0) ? $query->offset($offset)->limit($limit) : $query;
    
            /**@var InsCompanyInfo[] $companies*/
            $companies = $query->get();
    
            return $companies;
        }
    }