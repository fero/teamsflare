<?php
namespace App\Teamsflare\Transformers;

use Carbon\Carbon;

class UserTransformer extends Transformer
{
    public function transform($user)
    {
        return [
            'id' => (int) $user['id']
            , 'name' => $user['name']
            , 'email' => $user['email']
            , 'created' => Carbon::parse($user['created_at'])
            , 'modified' => Carbon::parse($user['updated_at'])
        ];
    }
}