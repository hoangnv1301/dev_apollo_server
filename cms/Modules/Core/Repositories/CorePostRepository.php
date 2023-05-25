<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CorePostRepositoryContract;
use Cms\Modules\Core\Models\Post;

class CorePostRepository implements CorePostRepositoryContract
{
    protected $model;

    public function __construct(Post $model) {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function timhocdot(){
        
    }
}

