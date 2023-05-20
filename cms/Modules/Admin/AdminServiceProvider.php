<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Repositories\Contracts\AdminPostRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminContactRepositoryContract;
use Cms\Modules\Admin\Repositories\AdminPostRepository;
use Cms\Modules\Admin\Repositories\AdminContactRepository;
use Cms\Modules\Admin\Services\Contracts\AdminPostServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminContactServiceContract;
use Cms\Modules\Admin\Services\AdminPostService;
use Cms\Modules\Admin\Services\AdminContactService;
use Illuminate\Routing\Router;

class AdminServiceProvider extends CmsServiceProvider
{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
        $this->app->bind(AdminPostRepositoryContract::class, AdminPostRepository::class);
        $this->app->bind(AdminContactRepositoryContract::class, AdminContactRepository::class);
        $this->app->bind(AdminPostServiceContract::class, AdminPostService::class);
        $this->app->bind(AdminContactServiceContract::class, AdminContactService::class);
	}
}

