<?php

namespace ByPaps\PrisionBP;

use onebone\economyapi\event\money\MoneyChangedEvent;
use pocketmine\event\Listener;
use pocketmine\event\getUsername;

class MoneyChangeListener implements Listener {

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
        $this->plugin->getServer()->getPluginManager()->registerEvents($this, $plugin);
    }

    public function onMoneyChanged(MoneyChangedEvent $event) {
        $this->plugin->DoBossbar($this->$plugin->getServer()->getPlayer($event->getUsername()));
    }

}
