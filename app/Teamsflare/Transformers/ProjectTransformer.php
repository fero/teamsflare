<?php
namespace App\Teamsflare\Transformers;

use App\Teamsflare\Transformers;
use Carbon\Carbon;

class ProjectTransformer extends Transformer
{
    /**
     * @var CompanyTransformer $companyTransformer
     */
    protected $companyTransformer;

    /**
     * @var UserTransformer $userTransformer
     */
    protected $userTransformer;

    /**
     * ProjectTransformer constructor.
     * @param CompanyTransformer $companyTransformer
     * @param UserTransformer $userTransformer
     */
    public function __construct(CompanyTransformer $companyTransformer, UserTransformer $userTransformer) {
        $this->companyTransformer = $companyTransformer;
        $this->userTransformer = $userTransformer;
    }

    /**
     * @return UserTransformer
     */
    public function getUserTransformer()
    {
        return $this->userTransformer;
    }

    /**
     * @param UserTransformer $userTransformer
     */
    public function setUserTransformer($userTransformer)
    {
        $this->userTransformer = $userTransformer;
    }

    /**
     * @return CompanyTransformer
     */
    public function getCompanyTransformer()
    {
        return $this->companyTransformer;
    }

    /**
     * @param CompanyTransformer $companyTransformer
     */
    public function setCompanyTransformer($companyTransformer)
    {
        $this->companyTransformer = $companyTransformer;
    }

    /**
     * Transform a project
     *
     * @param $project
     * @return array
     */
    public function transform($project) {
        $author = $project['author_id'];

        if (is_object($project)) {
            switch ($project['author']) {
                case 'company':
                    $author = $this->getCompanyTransformer()->transform($project->realAuthor);
                    break;
                case 'user':
                    $author = $this->getUserTransformer()->transform($project->realAuthor);
                    break;
                default:
                    break;
            }
        } else {
            if ($project['realAuthor']) {
                switch ($project['author']) {
                    case 'company':
                        $author = $this->getCompanyTransformer()->transform($project['realAuthor']);
                        break;
                    case 'user':
                        $author = $this->getUserTransformer()->transform($project['realAuthor']);
                        break;
                    default:
                        break;
                }
            }
        }

        return [
            'id' => (int) $project['id']
            , 'name' => $project['name']
            , 'author_type' => $project['author']
            , 'author' => $author
            , 'description' => $project['description']
            , 'active' => (bool) $project['active']
            , 'created' => Carbon::parse($project['created_at'])
            , 'modified' => Carbon::parse($project['updated_at'])
        ];
    }
}