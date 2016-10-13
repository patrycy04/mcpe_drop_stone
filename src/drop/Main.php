<?php

namespace drop;

use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;
use pocketmine\utils\TextFormat;
use pocketmine\utils\MainLogger;
use pocketmine\block\Air;
use pocketmine\entity\Effect;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\level\sound\PopSound as Pop;
use pocketmine\level\particle\LavaParticle as Lava;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\item\Item;

class Main extends P implements L{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->saveDefaultConfig();
		$this->getServer()->getLogger()->info(TextFormat::GREEN."[db] Włączony!");
	}

	
	public function onBreak(BlockBreakEvent $e){
		$player = $e->getPlayer();
		$block = $e->getBlock();
		$gracz = $e->getPlayer()->getName();
		if($e->getBlock()->getId() == 1){
			 switch(mt_rand(1,80)){
         case 1:
         $player->sendMessage("§e• [Drop] Znalazłeś (1) Emerald •");
         $player->getInventory()->addItem(Item::get(388, 0, 1));
         break;
         case 2:
         $player->sendMessage("§e• [Drop] Znalazłeś (5) Lapizu•");
         $player->getInventory()->addItem(Item::get(351, 4, 5));
         break;
		 case 3:
         $player->sendMessage("§e• [Drop] Znalazłeś (1) Diament •");
         $player->getInventory()->addItem(Item::get(264,0, 1));
		 break;
		 case 4:
         $player->sendMessage("§e• [Drop] Znalazłeś (5) Biblioteczek •");
         $player->getInventory()->addItem(Item::get(47,0, 5));
		 break;
		 case 5:
         $player->sendMessage("§e• [Drop] Znalazłeś (5) Obsydianu•");
         $player->getInventory()->addItem(Item::get(49,0, 5));
		 break;
		 case 6:
         $player->sendMessage("§e• [Drop] Znalazłeś (2) Sztabki Złota •");
         $player->getInventory()->addItem(Item::get(266,0, 2));
		 break;
		 case 7:
         $player->sendMessage("§e• [Drop] Znalazłeś (1) Koxa •");
         $player->getInventory()->addItem(Item::get(322,0, 1));
         break;
		 case 8:
         $player->sendMessage("§e• [Drop] Znalazłeś (1) Sztabke Żelaza•");
         $player->getInventory()->addItem(Item::get(265,0, 1));
		 break;
		 case 9:
         $player->sendMessage("§e• [Drop] Znalazłeś (3) Diamenty•");
         $player->getInventory()->addItem(Item::get(264,0, 3));
		 break;
		 case 10:
         $player->sendMessage("§e• [Drop] Znalazłeś (3) Obsydianu•");
         $player->getInventory()->addItem(Item::get(49,0, 3));
		 break;
		 case 11:
         $player->sendMessage("§e• [Drop] Znalazłeś (3) Jabłka•");
         $player->getInventory()->addItem(Item::get(260,0, 3));
		 break;
		 case 12:
         $player->sendMessage("§e• [Drop] Znalazłeś (5)Sztabek Żelaza•");
         $player->getInventory()->addItem(Item::get(265,0, 5));





}
		}
	}
}
