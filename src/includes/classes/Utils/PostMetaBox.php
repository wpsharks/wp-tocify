<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpTocify\Classes\Utils;

use WebSharks\WpSharks\WpTocify\Classes;
use WebSharks\WpSharks\WpTocify\Interfaces;
use WebSharks\WpSharks\WpTocify\Traits;
#
use WebSharks\WpSharks\WpTocify\Classes\AppFacades as a;
use WebSharks\WpSharks\WpTocify\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpTocify\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Post meta box utils.
 *
 * @since 160724.1960 Initial release.
 */
class PostMetaBox extends SCoreClasses\SCore\Base\Core
{
    /**
     * On admin init.
     *
     * @since 160724.1960 Initial release.
     */
    public function onAdminInit()
    {
        s::addPostMetaBox([
            'include_post_types' => s::getOption('include_post_types'),
            'exclude_post_types' => s::getOption('exclude_post_types'),

            'slug'          => 'settings',
            'context'       => 'side',
            'template_file' => 'admin/menu-pages/post-meta-box/settings.php',
        ]);
    }
}
