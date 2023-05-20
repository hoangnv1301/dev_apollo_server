<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Core\Models\Post;
use Cms\Modules\Admin\Repositories\Contracts\AdminPostRepositoryContract;
use Cms\Modules\Core\Repositories\CorePostRepository;

class AdminPostRepository extends CorePostRepository implements AdminPostRepositoryContract
{
    public function getAll()
    {
        return $this->model->get();
    }

    public function getPost()
    {
        return $this->model->get();
    }
}

