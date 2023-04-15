<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Illuminate\Routing\Router;

class AdminServiceProvider extends CmsServiceProvider
{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
	    // Register services and repositories here...
	}
}

