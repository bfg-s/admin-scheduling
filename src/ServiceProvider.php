<?php

namespace Admin\Extend\AdminScheduling;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminScheduling\Extension\Config;
use Admin\Extend\AdminScheduling\Extension\Install;
use Admin\Extend\AdminScheduling\Extension\Navigator;
use Admin\Extend\AdminScheduling\Extension\Uninstall;
use Admin\Extend\AdminScheduling\Extension\Permissions;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminScheduling
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static string $name = "bfg/admin-scheduling";

    /**
     * Extension call slug
     * @var string
     */
    static string $slug = "bfg_admin_scheduling";

    /**
     * Extension description
     * @var string
     */
    public static string $description = "Task scheduling extension for bfg admin";

    /**
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * @var string
     */
    protected string $install = Install::class;

    /**
     * @var string
     */
    protected string $uninstall = Uninstall::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected string|ConfigExtensionProvider $config = Config::class;
}

