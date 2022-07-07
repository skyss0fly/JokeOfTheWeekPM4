<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() === "jotw") {
			$sender->SendMessage("Joke: Why do actors have to always go to hospital? Because they always have a CAST");
			return true;
		}
		return true;
	}
}
