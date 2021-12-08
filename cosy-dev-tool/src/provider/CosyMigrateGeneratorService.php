<?php

namespace wuwu\cosydevtool\provider;

use addons\CyDevTool\command\make\Build;
use think\Service;

class CosyMigrateGeneratorService extends Service
{
    public function boot()
    {
        $this->commands([
            Build::class
        ]);
    }
}