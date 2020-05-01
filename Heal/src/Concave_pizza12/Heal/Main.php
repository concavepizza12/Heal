<?php

namespace Concave_pizza12\Heal;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase{
	
	public function onEnable(){
	}
	
	public function onCommand(CommandSender $player, Command $cmd, string $label, array $args):bool {
		switch($cmd->getName()){
			case "heal":
				if($player instanceof Player){
					$player->sendMessage("You have been healed!");
					$player->setHealth(20);
					$player->setFood(20);
					
				}
			break;
		}
		return true;
	}

}
