<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Core\Models\Contact;
use Cms\Modules\Admin\Repositories\Contracts\AdminContactRepositoryContract;
use Cms\Modules\Core\Repositories\CoreContactRepository;

class AdminContactRepository extends CoreContactRepository implements AdminContactRepositoryContract
{
    public function getAll()
    {
        return $this->model->get();
    }
}

