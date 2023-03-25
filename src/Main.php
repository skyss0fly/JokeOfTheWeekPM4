<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use skyss0fly\jokes\JokesList;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use DaPigGuy\libPiggyUpdateChecker\libPiggyUpdateChecker;

class Main extends PluginBase{
	

  
	
	 function onLoad(): void {
		
		$this->list = new JokesList(new JokeList($this->getDataFolder() . "jokeslist.yml", JokesList::YAML));
	
	 function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "enabled the plugin");
		}
	}
	
	 function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_AQUA . "Goodbye hope you had fun!!");
		}
	}
	}
}
