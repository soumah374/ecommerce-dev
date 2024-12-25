<?php

/**
 * @license MIT, http://opensource.org/licenses/MIT
 */


namespace Aimeos\fefangnitheme;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;


class ExtensionServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


	public function boot()
	{
		$this->loadViewsFrom( __DIR__ . DIRECTORY_SEPARATOR . 'views', 'fefangni-theme' );

		foreach( \Composer\InstalledVersions::getInstalledPackagesByType( 'aimeos-themes' ) as $package )
		{
			$path = realpath( \Composer\InstalledVersions::getInstallPath( $package ) );

			if( file_exists( $path . '/themes/client/html' ) ) {
				$this->publishes( [$path . '/themes/client/html' => public_path( 'vendor/shop/themes' )], 'public' );
			}
		}
	}
}