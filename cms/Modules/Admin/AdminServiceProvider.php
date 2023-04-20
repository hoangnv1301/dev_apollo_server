<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Repositories\Contracts\PostPostRepositoryContract;
use Cms\Modules\Admin\Repositories\PostPostRepository;
use Cms\Modules\Admin\Services\Contracts\PostPostServiceContract;
use Cms\Modules\Admin\Services\PostPostService;
use Illuminate\Routing\Router;

class AdminServiceProvider extends CmsServiceProvider
{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
        $this->app->bind(PostPostRepositoryContract::class, PostPostRepository::class);
        $this->app->bind(PostPostServiceContract::class, PostPostService::class);
	}
}

