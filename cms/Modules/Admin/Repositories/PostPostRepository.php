<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Core\Models\Post;
use Cms\Modules\Admin\Repositories\Contracts\PostPostRepositoryContract;
use Cms\Modules\Core\Repositories\CorePostRepository;

class PostPostRepository extends CorePostRepository implements PostPostRepositoryContract
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

