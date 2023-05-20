<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CorePostServiceContract;

interface AdminPostServiceContract extends CorePostServiceContract
{
    public function getPost();
}
