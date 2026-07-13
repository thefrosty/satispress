<?php
/**
 * Capabilities.
 *
 * Meta capabilities are mapped to primitive capabilities in
 * \SatisPress\Provider\Capabilities.
 *
 * @package SatisPress
 * @license GPL-2.0-or-later
 * @since 0.3.0
 */

declare ( strict_types = 1 );

namespace SatisPress;

/**
 * Capabilities.
 *
 * @since 0.3.0
 */
final class Capabilities {
	/**
     * Primitive capability for downloading packages.
     */
    public const string DOWNLOAD_PACKAGES = 'satispress_download_packages';

	/**
     * Meta capability for downloading a specific package.
     */
    public const string DOWNLOAD_PACKAGE = 'satispress_download_package';

	/**
     * Primitive capability for viewing packages.
     */
    public const string VIEW_PACKAGES = 'satispress_view_packages';

	/**
     * Meta capability for viewing a specific package.
     */
    public const string VIEW_PACKAGE = 'satispress_view_package';

	/**
     * Primitive capability for managing options.
     */
    public const string MANAGE_OPTIONS = 'satispress_manage_options';

	/**
	 * Register capabilities.
	 *
	 * @since 0.3.0
	 */
	public static function register() {
		$wp_roles = wp_roles();
		$wp_roles->add_cap( 'administrator', self::DOWNLOAD_PACKAGES );
		$wp_roles->add_cap( 'administrator', self::VIEW_PACKAGES );
		$wp_roles->add_cap( 'administrator', self::MANAGE_OPTIONS );
	}
}
