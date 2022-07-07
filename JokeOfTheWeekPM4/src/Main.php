<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class JokeOfTheWeekPM4 extends PluginBase implements Listener{

	/** This is a public constant that you can access from anywhere by doing ExamplePlugin::VERSION */
	public const VERSION = "v1.0.0";

	/** @var self $main */
	private static $main;

	/** Example of the onEnable function */
	public function onEnable() : void{
		self::$this = $this;
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("Joke of the week is enabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() === "joke") {
			$sender->sendMessage("Joke: Why do actors have to always go to hospital? Because they always have a CAST");
			return true;
		}
		return true;
	}
}
