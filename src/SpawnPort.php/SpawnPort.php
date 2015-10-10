<?php
namespace SpawnPort;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class SpawnPort extends PluginBase{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }

    public function onDisable(){
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()) === "spawnport"){
            if(!($sender instanceof Player)){
                $sender->sendMessage("Please run this command in game");
                return true;
            }
        }
        return true;
    }

}