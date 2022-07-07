<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
		public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() === "joke") {
			$sender->sendMessage("Joke: Why do actors have to always go to hospital? Because they always have a CAST");
			return true;
		}
		return true;
	}
}
