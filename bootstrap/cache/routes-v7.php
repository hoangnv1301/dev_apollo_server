<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/posts-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/post-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/post-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/contacts-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.contact.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/upload-image-ckeditor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.image.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/layouts/blank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.layoutsBlank',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/forms/basic-inputs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms-basic-inputs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/forms/input-groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms-input-groups',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wogHdm42jEw2Nm5q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7HsZQtGFs4STzTTX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.aboutUs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.clients',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'web.contactSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cost-calculation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.costCalculation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cost-calculation-result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.costCalculationResult',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/individual-member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.individualMember',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/our-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.ourTeam',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/our-work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.ourWork',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/cms/(?|post\\-(?|de(?|tail/([^/]++)(*:42)|lete/([^/]++)(*:62))|edit/([^/]++)(*:83)|update/([^/]++)(*:105))|contact\\-(?|de(?|tail/([^/]++)(*:144)|lete/([^/]++)(*:165))|update/([^/]++)(*:189)))|/password/reset/([^/]++)(*:223)|/email/verify/([^/]++)/([^/]++)(*:262)|/blog\\-post/([^/]++)(*:290))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      83 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.post.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.contact.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.contact.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.contact.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blogPost',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'cms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/posts-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsPage',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsPage',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/post-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsCreate',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsCreate',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/post-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsDetail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsDetail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/post-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsStore',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsStore',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/post-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsEdit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsEdit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/post-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsUpdate',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsUpdate',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.post.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/post-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsDelete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@postsDelete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.post.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.contact.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/contacts-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsPage',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsPage',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.contact.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.contact.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/contact-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsDetail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsDetail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.contact.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.contact.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/contact-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsDelete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsDelete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.contact.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.contact.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/contact-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsUpdate',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@contactsUpdate',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.contact.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.image.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/upload-image-ckeditor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@uploadImageCkeditor',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@uploadImageCkeditor',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.image.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.layoutsBlank' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/layouts/blank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@layoutsBlank',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@layoutsBlank',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'cms.layoutsBlank',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms-basic-inputs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/forms/basic-inputs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@formsBasicInputs',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@formsBasicInputs',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'forms-basic-inputs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms-input-groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/forms/input-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'cms.verified',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@formsInputGroups',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AdminController@formsInputGroups',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'cms',
        'where' => 
        array (
        ),
        'as' => 'forms-input-groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@showLoginForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wogHdm42jEw2Nm5q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@login',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@login',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wogHdm42jEw2Nm5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@showRegistrationForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@showRegistrationForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7HsZQtGFs4STzTTX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@register',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@register',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7HsZQtGFs4STzTTX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@showResetForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@reset',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@logout',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@logout',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@show',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@show',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@verify',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@verify',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@resend',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@resend',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.resend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@home',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@home',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.aboutUs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@aboutUs',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@aboutUs',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.aboutUs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@blog',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@blog',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blogPost' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-post/{id}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@blogPost',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@blogPost',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blogPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.clients' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@clients',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@clients',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.clients',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@contact',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@contact',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.contactSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@contactSubmit',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@contactSubmit',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.contactSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.costCalculation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cost-calculation',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@costCalculation',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@costCalculation',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.costCalculation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.costCalculationResult' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cost-calculation-result',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@costCalculationResult',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@costCalculationResult',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.costCalculationResult',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.individualMember' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'individual-member',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@individualMember',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@individualMember',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.individualMember',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.ourTeam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'our-team',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@ourTeam',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@ourTeam',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.ourTeam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.ourWork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'our-work',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@ourWork',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@ourWork',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.ourWork',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
