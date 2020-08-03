<?php

/**
 * Plugin created by matymare
 * LeapedTools - It is a PocketMine-MP plugin which will allow you leaped tools
 * The plugin must not be modified without asking the plugin owner
 * You can write to me on Discord: Roospy#1666
 * 
*/

namespace matymare\LeapedTools\commands;

use pocketmine\Player;
use pocketmine\command\PluginCommand;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;

use matymare\LeapedTools\Main;

class Leap extends PluginCommand
{
	
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct("leap", $plugin);
		$this->plugin = $plugin;
		$this->setDescription("Leap up");
		$this->setPermission("leapedtools.leap");
	}
	
	public function execute(CommandSender $m, $label, array $args)
	{
	    if(!$m->hasPermission("leapedtools.leap")){
            $m->sendMessage("§cYou do not have permission to use this command");
            return;
        }
		if($m instanceof Player){
			$m->setMotion(new Vector3(0, 1.7 ,0));
		    $m->sendMessage("§8[§eLeapedTools§8] §aYou have successfully leaped!");
		}
	}
}

