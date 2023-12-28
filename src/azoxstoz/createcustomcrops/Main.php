<?php

namespace azoxstoz\createcustomcrops;

##   ____    ____    ____
## / ___|  / ___|  / ___|
## | |     | |     | |
## | |___  | |___  | |___
## \____|  \____|  \____|
##
## This plugin, created by AzOxStOz,
## is freely available for redistribution and use.
## You are welcome to incorporate it into your projects,
## provided proper credit is given.

use azoxstoz\createcustomcrops\events\EventsListener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {

    use SingletonTrait;

    public function onEnable(): void
    {
        $this->setInstance($this);
        $this->saveResource("config.yml");
        $this->getServer()->getPluginManager()->registerEvents(new EventsListener(), $this);
    }
}