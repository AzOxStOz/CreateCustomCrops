<?php

namespace azoxstoz\createcustomcrops\events;

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

use azoxstoz\createcustomcrops\Main;
use pocketmine\block\VanillaBlocks;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\item\StringToItemParser;
use pocketmine\utils\Config;

class EventsListener implements Listener {

    public function onBreak(BlockBreakEvent $event): void
    {
        $block = $event->getBlock();
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        $data = $config->getAll();
        if ($data['crops'] == "minecraft:wheat") {
            if (VanillaBlocks::WHEAT()->getTypeId() === $block->getTypeId()) {
                $event->setDrops([]);
                if ($block->getAge() >= 7) {
                    $rand = mt_rand($data['rand.min'], $data['rand.max']);
                    $separation = $data['rand.separate'];
                    if ($rand > $separation) {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.good'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    } else {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.bad'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    }
                } else {
                    $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.seed'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                }
            }
        } elseif ($data['crops'] == "minecraft:beetroots") {
            if (VanillaBlocks::BEETROOTS()->getTypeId() === $block->getTypeId()) {
                $event->setDrops([]);
                if ($block->getAge() >= 7) {
                    $rand = mt_rand($data['rand.min'], $data['rand.max']);
                    $separation = $data['rand.separate'];
                    if ($rand > $separation) {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.good'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    } else {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.bad'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    }
                } else {
                    $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.seed'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                }
            }
        } elseif ($data['crops'] == "minecraft:potato") {
            if (VanillaBlocks::POTATOES()->getTypeId() === $block->getTypeId()) {
                $event->setDrops([]);
                if ($block->getAge() >= 7) {
                    $rand = mt_rand($data['rand.min'], $data['rand.max']);
                    $separation = $data['rand.separate'];
                    if ($rand > $separation) {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.good'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    } else {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.bad'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    }
                } else {
                    $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.seed'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                }
            }
        } elseif ($data['crops'] == "minecraft:carrot") {
            if (VanillaBlocks::CARROTS()->getTypeId() === $block->getTypeId()) {
                $event->setDrops([]);
                if ($block->getAge() >= 7) {
                    $rand = mt_rand($data['rand.min'], $data['rand.max']);
                    $separation = $data['rand.separate'];
                    if ($rand > $separation) {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.good'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    } else {
                        $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.bad'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                    }
                } else {
                    $event->setDrops([StringToItemParser::getInstance()->parse($data['loot.seed'])->setCount(mt_rand($data['rand.lootmin'], $data['rand.lootmax']))]);
                }
            }
        }
    }
}