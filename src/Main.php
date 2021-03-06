<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use DaPigGuy\libPiggyUpdateChecker\libPiggyUpdateChecker;

class Main extends PluginBase{
	
	private bool $debugMode = true;
	
	public function onLoad(): void {
		
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::MINECOIN_GOLD . "JokeOfTheWeekPM4 Has Successfully loaded| It is advised to use LibPiggyUpdateChecker!!");
		}
	}
	
	public function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "Why do actors always break their legs? because they have a CAST!");
		}
	}
	
	public function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_AQUA . "Goodbye hope you had fun!!");
		}
	}
}
