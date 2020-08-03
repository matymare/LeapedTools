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

use matymare\LeapedTools\Main;

class LT extends PluginCommand
{
	
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct("lt", $plugin);
		$this->plugin = $plugin;
		$this->setDescription("Main LeapedTools command");
		$this->setPermission("leapedtools.main");
	}
	
	public function execute(CommandSender $o, $label, array $args)
	{
	    if(!$o->hasPermission("leapedtools.main")){
            $o->sendMessage("§cYou do not have permission to use this command");
            return;
        }
		if($o instanceof Player){
			$o->sendMessage("§c> LeapedTools help menu! \n§7/leap : Leap up! \n§7/leapedaxe : Get a Leaped Axe! \n§7/leapall : Leap all players");
		}
	}
}

