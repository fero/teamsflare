<?php
namespace App\Teamsflare\Transformers;

use Carbon\Carbon;

class CompanyTransformer extends Transformer
{
    /**
     * Transform a company
     *
     * @param $company
     * @return array
     */
    public function transform($company)
    {
        return [
            'id' => (int) $company['id']
            , 'name' => $company['name']
            , 'created' => Carbon::parse($company['created_at'])
            , 'modified' => Carbon::parse($company['updated_at'])
        ];
    }
}