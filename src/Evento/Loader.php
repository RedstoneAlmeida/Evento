<?php

namespace Evento;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerMoveEvent;

use pocketmine\Player;

class Loader extends PluginBase implements Listener{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function PlayerMove(PlayerMoveEvent $event){
        $player = $event->getPlayer();
        if($player->isOp()){
            $event->setCancelled(false);
        } else {
        $event->setCancelled(true);
        }
    }
}
