<?php namespace Enlivenapp\BootswatchLumenTheme;
use Illuminate\Support\ServiceProvider;
/**
 * Class ExampleThemeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleTheme
 */
class BootswatchLumenThemeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Enlivenapp\BootswatchLumenTheme\BootswatchLumenThemeRouteProvider');
    }
}