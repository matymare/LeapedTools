<?php

/**
 * Plugin created by matymare
 * LeapedTools - It is a PocketMine-MP plugin which will allow you leaped tools
 * The plugin must not be modified without asking the plugin owner
 * You can write to me on Discord: Roospy#1666
 * 
*/

namespace matymare\LeapedTools;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\command\CommandSender;
use pocketmine\inventory\Inventory;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;

use matymare\LeapedTools\commands\LeapedTools;
use matymare\LeapedTools\commands\Leap;
use matymare\LeapedTools\commands\LeapedAxe;
use matymare\LeapedTools\commands\LT;
use matymare\LeapedTools\commands\LeapAll;
use matymare\LeapedTools\commands\LPerms;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getCommandMap()->register("/leap", new Leap($this));
		$this->getServer()->getCommandMap()->register("/leapedtools", new LeapedTools($this));
		$this->getServer()->getCommandMap()->register("/leapedaxe", new LeapedAxe($this));
		$this->getServer()->getCommandMap()->register("/lt", new LT($this));
		$this->getServer()->getCommandMap()->register("/leapall", new LeapAll($this));
		$this->getServer()->getCommandMap()->register("/lperms", new LPerms($this));
	}
    
	public function onInteract(PlayerInteractEvent $event){
					$player = $event->getPlayer();
					$item = $event->getItem();
					if($item->getCustomName() == "§eLeaped Axe\n§7(Use)"){
						$player->setMotion(new Vector3(0, 1.7 ,0));
						$player->sendMessage("§8[§eLeapedTools§8] §aYou were successfully leaped!");
						$hand = $player->getInventory()->getItemInHand();
             $handclone = clone $player->getInventory()->getItemInHand();
             $handclone->setCount($handclone->getCount() - 1);
             $player->getInventory()->removeItem($hand);
							return;
		        }
	}
}