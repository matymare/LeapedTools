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

class LPerms extends PluginCommand
{
	
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct("lperms", $plugin);
		$this->plugin = $plugin;
		$this->setDescription("LeapedTools permission");
		$this->setPermission("leapedtools.lperms");
	}
	
	public function execute(CommandSender $w, $label, array $args)
	{
	    if(!$w->hasPermission("leapedtools.lperms")){
            $w->sendMessage("§cYou do not have permission to use this command");
            return;
        }
		if($w instanceof Player){
			$w->sendMessage("§c> LeapedTools permission! \n§7leapedtools.main : Permission on the main commands! \n§7leapedtools.lperms : Permission on the /lperms \n§7leapedtools.axe : Permission on the /leapedaxe \n§7leapedtools.leapall : Permission on the /leapall \n§7leapedtools.leap : Permission on the /leap");
		}
	}
}

