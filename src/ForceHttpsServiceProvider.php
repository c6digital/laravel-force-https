<?php

namespace C6Digital\ForceHttps;

use C6Digital\ForceHttps\Middleware\ForceHttps;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\URL;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ForceHttpsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('force-https')
            ->hasConfigFile();
    }

    public function packageBooted()
    {
        $this->app->get(Kernel::class)->pushMiddleware(ForceHttps::class);

        if ($this->app['config']->get('force-https.force')) {
            URL::forceScheme('https');
        }
    }
}
