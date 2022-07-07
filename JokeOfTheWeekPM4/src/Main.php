<?php

declare(strict_types=1);

namespace skyss0fly\JokeOfTheWeekPM4;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command\joke;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
    switch($command->getName()){
        case "joke":
            $sender->sendMessage("Why did the actor have to go to hospital? Because He had a cast!");

            return true;
}
