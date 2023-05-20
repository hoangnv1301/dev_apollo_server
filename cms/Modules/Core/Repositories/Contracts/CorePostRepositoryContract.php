<?php

namespace Cms\Modules\Core\Repositories\Contracts;

interface CorePostRepositoryContract
{
    public function getAll();

    public function store($data);

    public function find($id);

    public function update($id, $data);

    public function delete($id);
}

