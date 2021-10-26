<?php


namespace Mdigi\SettingPemda\Helpers;


class Options
{
    const VIEWS_PATH = 'views/vendor/mdigi/setting-pemda';

    public static function isConfigPublished()
    {
        return file_exists(config_path('settingpemda.php'));
    }

    public static function isViewsPublished()
    {
        return is_dir(resource_path(self::VIEWS_PATH));
    }
}