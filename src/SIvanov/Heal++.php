<?php

namespace SIvanov;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class SIvanov extends PLuginBase implements Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onJoin(PlayerJoinEvent $e){
    $p = $e->getPlayer();
      $p->setMaxHealth(40); //40 health = 20 hearts
       $p->setHealth(40);
  }
}
