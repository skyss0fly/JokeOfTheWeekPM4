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
            $sender->sendMessage("You can not run this command via console!");
            return true;
		}
        if(!$sender->hasPermission("JokeOfTheWeekPM4.command")) {
            $sender->sendMessage(TextFormat::RED . "You do not have permission to use this command!");
            return true;
        }
	
	private bool $debugMode = true;
	
	public function onLoad(): void {
		
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::MINECOIN_GOLD . "JokeOfTheWeekPM4 Has Successfully loaded| It is advised to use LibPiggyUpdateChecker!!");
		}
	}
	
	public function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "What do you call a fish with no eyes? A FSH!");
		}
	}
	
	public function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_AQUA . "Goodbye hope you had fun!!");
		}
	}
	
    /** @var array */
    public $hitSessions = [];
    /** @var array */
    public $idSessions = [];
    /** @var string */
    public $prefix = TextFormat::GREEN . "[" . TextFormat::YELLOW . "JOTW" . TextFormat::GREEN . "] ";
    /** @var string */
    public $noperm = TextFormat::GREEN . "[" . TextFormat::YELLOW . "JOTW" . TextFormat::GREEN . "] You don't have permission.";
    /** @var string */
    public $helpHeader =
        TextFormat::YELLOW . "---------- " .
        TextFormat::GREEN . "[" . TextFormat::YELLOW . "JOTW Help" . TextFormat::GREEN . "] " .
        TextFormat::YELLOW . "----------";

    /** @var string[] */
}
	}
}
