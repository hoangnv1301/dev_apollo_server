<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminPostServiceContract;
use Cms\Modules\Core\Services\CorePostService;
use Cms\Modules\Admin\Repositories\Contracts\AdminPostRepositoryContract;

class AdminPostService extends CorePostService implements AdminPostServiceContract
{
    protected $repository;

    function __construct(AdminPostRepositoryContract $repository)
    {
        parent::__construct($repository);

        $this->repository = $repository;
    }

    public function getPost()
    {
        return $this->repository->getPost();
    }
}

