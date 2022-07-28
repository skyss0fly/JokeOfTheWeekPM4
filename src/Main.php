<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{
	
	private bool $debugMode = true;
	
	public function onLoad(): void {
		
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_BLUE . "JokeOfTheWeekPM4 Has Successfully loaded| It is advised to use PiggyUpdateChecker!!");
		}
	}
	
	public function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_GREEN . "Why don’t pirates take a shower before they walk the plank? They just wash up on shore.");
		}
	}
	
	public function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_RED . "Goodbye hope you had fun!!");
		}
	}
}
