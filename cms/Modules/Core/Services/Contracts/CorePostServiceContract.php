<?php

namespace Cms\Modules\Core\Services\Contracts;

interface CorePostServiceContract
{
    public function getAll();

    public function store($data);

    public function find($id);

    public function update($id, $data);

    public function delete($id);
}

