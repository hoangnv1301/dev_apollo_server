<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CorePostRepositoryContract;

interface PostPostRepositoryContract extends CorePostRepositoryContract
{
    public function getPost();
}
