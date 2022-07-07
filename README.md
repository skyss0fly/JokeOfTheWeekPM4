# JokeOfTheWeekPM4
![image](https://user-images.githubusercontent.com/100278495/177680920-45769b48-6fc3-4c5a-993e-5713113b36c7.png)

Do /jotw for the weekly joke! simple but fun.
STILL IN BETA!! MAKE SURE TO BACKUP YOUR SERVER IF YOU USE THIS PLUGIN, THIS PLUGIN CAN BREAK!

-------------------------
Plugin is broken: 7/07/2022 WORKING ON FIX

Error: Could not check compatibility between skyss0fly\JokeOfTheWeekPM4\Main::onCommand(pocketmine\command\CommandSender $sender, pocketmine\command $command, string $label, array $args): bool and pocketmine\plugin\PluginBase::onCommand(pocketmine\command\CommandSender $sender, pocketmine\command\Command $command, string $label, array $args): bool, because class pocketmine\command is not available
File: plugins/JokeOfTheWeekPM4_dev-42.phar/src/Main
Line: 13
Type: E_COMPILE_ERROR
Backtrace:

Code:
[4] 
[5] namespace skyss0fly\JokeOfTheWeekPM4;
[6] 
[7] use pocketmine\event\Listener;
[8] use pocketmine\plugin\PluginBase;
[9] use pocketmine\command;
[10] use pocketmine\command\CommandSender;
[11] 
[12] class Main extends PluginBase implements Listener{
[13] 		public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
[14] 		if ($command->getName() === "joke") {
[15] 			$sender->sendMessage("Joke: Why do actors have to always go to hospital? Because they always have a CAST");
[16] 			return true;
[17] 		}
[18] 		return true;
[19] 	}
[20] }

Loaded plugins:
DevTools 1.15.0 by PocketMine Team for API(s) 4.0.0
-----------------------------------------
if you know a fix
you can dm me on discord: 
skyss0fly#3428
-------------------
created by skyss0fly 
