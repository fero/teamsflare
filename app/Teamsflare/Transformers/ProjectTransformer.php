<?php
namespace App\Teamsflare\Transformers;

class ProjectTransformer extends Transformer
{
    /**
     * Transform a project
     *
     * @param $project
     * @return array
     */
    public function transform($project) {
        return [
            'id' => (int) $project['id']
            , 'name' => $project['name']
            , 'description' => $project['description']
            , 'active' => (bool) $project['active']
            , 'created' => $project['created_at']
            , 'modified' => $project['updated_at']
        ];
    }
}