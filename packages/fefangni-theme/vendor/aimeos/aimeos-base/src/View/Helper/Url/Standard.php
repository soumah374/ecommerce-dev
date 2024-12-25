<?php

/**
 * @license LGPLv3, https://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2024
 * @package Base
 * @subpackage View
 */


namespace Aimeos\Base\View\Helper\Url;


/**
 * View helper class for building URLs.
 *
 * @package Base
 * @subpackage View
 */
class Standard
	extends \Aimeos\Base\View\Helper\Url\Base
	implements \Aimeos\Base\View\Helper\Url\Iface
{
	private string $baseUrl;


	/**
	 * Initializes the URL view helper.
	 *
	 * @param \Aimeos\Base\View\Iface $view View instance with registered view helpers
	 * @param string $baseUrl URL which acts as base for all constructed URLs
	 */
	public function __construct( \Aimeos\Base\View\Iface $view, string $baseUrl = '' )
	{
		parent::__construct( $view );

		$this->baseUrl = rtrim( $baseUrl, '/' );
	}


	/**
	 * Returns the URL assembled from the given arguments.
	 *
	 * @param string|null $target Route or page which should be the target of the link (if any)
	 * @param string|null $controller Name of the controller which should be part of the link (if any)
	 * @param string|null $action Name of the action which should be part of the link (if any)
	 * @param array $params Associative list of parameters that should be part of the URL
	 * @param string[] $trailing Trailing URL parts that are not relevant to identify the resource (for pretty URLs)
	 * @param array $config Additional configuration parameter per URL
	 * @return string Complete URL that can be used in the template
	 */
	public function transform( ?string $target = null, ?string $controller = null, ?string $action = null,
		array $params = [], array $trailing = [], array $config = [] ) : string
	{
		$path = ( $target !== null ? $target . '/' : '' );
		$path .= ( $controller !== null ? $controller . '/' : '' );
		$path .= ( $action !== null ? $action . '/' : '' );

		$parameter = ( !empty( $params ) ? '?' . http_build_query( $this->sanitize( $params ) ) : '' );
		$pretty = ( !empty( $trailing ) ? implode( '-', $this->sanitize( $trailing ) ) : '' );

		return $this->baseUrl . '/' . $path . $pretty . $parameter;
	}
}
