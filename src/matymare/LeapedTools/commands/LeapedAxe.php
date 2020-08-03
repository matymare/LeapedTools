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
use pocketmine\inventory\Inventory;
use pocketmine\item\Item;

use matymare\LeapedTools\Main;

class LeapedAxe extends PluginCommand
{
	
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct("leapedaxe", $plugin);
		$this->plugin = $plugin;
		$this->setDescription("Get a Leaped Axe!");
		$this->setPermission("leapedtools.axe");
	}
	
	public function execute(CommandSender $d, $label, array $args)
	{
	    if(!$d->hasPermission("leapedtools.axe")){
            $d->sendMessage("§cYou do not have permission to use this command");
            return;
        }
		if($d instanceof Player){
			$d->getInventory()->setItem(0, Item::get(258, 0, 1)->setCustomName("§eLeaped Axe\n§7(Use)"));
		    $d->sendMessage("§8[§eLeapedTools§8] §aSuccessfully given to you Leaped Axe!");
		}
	}
}

