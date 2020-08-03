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
use pocketmine\plugin\PluginBase;
use pocketmine\math\Vector3;
use pocketmine\Server;

use matymare\LeapedTools\Main;

class LeapAll extends PluginCommand
{
	
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct("leapall", $plugin);
		$this->plugin = $plugin;
		$this->setDescription("Leap all players");
		$this->setPermission("leapedtools.leapall");
	}
	
	public function execute(CommandSender $player, $label, array $args)
	{
	    if(!$player->hasPermission("leapedtools.leapall")){
            $player->sendMessage("§cYou do not have permission to use this command");
            return;
        }
        foreach($player->getServer()->getOnlinePlayers() as $players){
            if($players !== $player){
                $players->setMotion(new Vector3(0, 1.7 ,0));
                $players->sendMessage("§8[§eLeapedTools§8] §aYou were successfully leaped!");
            }
        }
        $player->setMotion(new Vector3(0, 1.7 ,0));
        $player->sendMessage("§8[§eLeapedTools§8] §aHe successfully leaped all players!");
    }
}

