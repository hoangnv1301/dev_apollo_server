<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\PostPostServiceContract;
use Cms\Modules\Core\Services\CorePostService;
use Cms\Modules\Admin\Repositories\Contracts\PostPostRepositoryContract;

class PostPostService extends CorePostService implements PostPostServiceContract
{
    protected $repository;

    function __construct(PostPostRepositoryContract $repository)
    {
        parent::__construct($repository);

        $this->repository = $repository;
    }

    public function getPost()
    {
        return $this->repository->getPost();
    }
}

