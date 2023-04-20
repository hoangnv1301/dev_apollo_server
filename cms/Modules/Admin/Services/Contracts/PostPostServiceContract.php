<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CorePostServiceContract;

interface PostPostServiceContract extends CorePostServiceContract
{
    public function getPost();
}
