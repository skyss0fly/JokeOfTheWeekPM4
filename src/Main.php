<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;


use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use DaPigGuy\libPiggyUpdateChecker\libPiggyUpdateChecker;

class Main extends PluginBase{
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if(!$sender instanceof Player) {
            $sender->sendMessage(TextFormat::MINECOIN_GOLD . "What do you call a Fish with No Eyes? A FSH!");
            return true;
		}
        if(!$sender->hasPermission("JokeOfTheWeekPM4.command")) {
            $sender->sendMessage(TextFormat::DARK_RED . "!!" . TextFormat::RED . "HEY!" . TextFormat::GREEN. "] You don't have permission.");
            return true;
        }
	
	
	 function onLoad(): void {
		
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::MINECOIN_GOLD . "JokeOfTheWeekPM4 Has Successfully loaded| It is advised to use LibPiggyUpdateChecker!!");
		}
	}
	
	 function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "What do you call a fish with no eyes? A FSH!");
		}
	}
	
	 function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_AQUA . "Goodbye hope you had fun!!");
		}
	}

