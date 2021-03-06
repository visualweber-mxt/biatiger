<?php

namespace Botble\Api\Providers;

use Botble\Api\Http\Middleware\ForceJsonResponseMiddleware;
use Illuminate\Support\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;

class ApiServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->make('router')->pushMiddlewareToGroup('api', ForceJsonResponseMiddleware::class);
    }

    public function boot()
    {
        $this->setNamespace('packages/api')
            ->publishAssets();

        $this->app->booted(function () {
            config([
                'apidoc.routes.0.match.prefixes' => ['api/*'],
                'apidoc.routes.0.apply.headers'  => [
                    'Authorization' => 'Bearer {token}',
                    'Api-Version'   => 'v1',
                ],
            ]);
        });
    }
}
