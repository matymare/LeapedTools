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

class LeapedTools extends PluginCommand
{
	
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct("leapedtools", $plugin);
		$this->plugin = $plugin;
		$this->setDescription("Main LeapedTools command");
		$this->setPermission("leapedtools.main");
	}
	
	public function execute(CommandSender $z, $label, array $args)
	{
	    if(!$z->hasPermission("leapedtools.main")){
            $z->sendMessage("§cYou do not have permission to use this command");
            return;
        }
		if($z instanceof Player){
			$z->sendMessage("§c§lLeapedTools help menu! \n§r§2/leap §7> Leap up! \n§2/leapedaxe §7> ");
		}
	}
}

