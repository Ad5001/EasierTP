<?php
namespace Ad5001\EasierTP;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use pocketmine\block\Block; 

class Main extends PluginBase{
  public function onEnable(){
    // $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onLoad(){
  }
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
		case "up":
		  if($args[0] ==! null){
			  if(is_numeric($args[0])) {
		           $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
		           $sender->teleport(new Vector3($x, $y + $args[0], $z), $yaw, $pitch);
				   $block = Block::get(20, 0); 
                   $air = Block::get(0, 0); 
                   $level->setBlock(new Vector3($x, $y + $args[0] - 1, $z), $block);
				   $level->setBlock(new Vector3($x, $y + $args[0], $z), $air);
				   $level->setBlock(new Vector3($x, $y + $args[0] + 1, $z), $air);
				   $sender->sendMessage("§l§d[EasierTP]§r§d You had teleported yourself ". $args[0] . " blocks down!");
				   } else {
				  $sender->sendMessage("§4Number of block to get up must be numeric");
			  }
		  } else {
			  $sender->sendMessage("§4Usage: /down <number of blocks>");
		  }
        return true;
		break;
	    case "down":
		  if($args[0] ==! null){
			  if(is_numeric($args[0])) {
		           $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
		           $sender->teleport(new Vector3($x, $y - $args[0], $z), $yaw, $pitch);
				   $block = Block::get(20, 0); 
				   $air = Block::get(0, 0); 
                   $level->setBlock(new Vector3($x, $y - $args[0] - 1, $z), $block);
				   $level->setBlock(new Vector3($x, $y - $args[0], $z), $air);
				   $level->setBlock(new Vector3($x, $y - $args[0] + 1, $z), $air);
				   $sender->sendMessage("§l§d[EasierTP]§r§d You had teleported yourself ". $args[0] . " blocks down!");
			  } else {
				  $sender->sendMessage("§4Number of block to get down must be numeric");
			  }
		  } else {
			  $sender->sendMessage("§4Usage: /down <number of blocks>");
		  }
        return true;
		break;
		case "north":
		  if($args[0] ==! null){
			  if(is_numeric($args[0])) {
		           $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
		           $sender->teleport(new Vector3($x, $y, $z - $args[0]), $yaw, $pitch);
				   $block = Block::get(20, 0); 
				   $air = Block::get(0, 0); 
                   $level->setBlock(new Vector3($x, $y - 1, $z - $args[0]), $block);
				   $level->setBlock(new Vector3($x, $y, $z - $args[0]), $air);
				   $level->setBlock(new Vector3($x, $y + 1, $z - $args[0]), $air);
				   $sender->sendMessage("§l§d[EasierTP]§r§d You had teleported yourself ". $args[0] . " blocks north!");
			  } else {
				  $sender->sendMessage("§4Number of block to get down must be numeric");
			  }
		  } else {
			  $sender->sendMessage("§4Usage: /north <number of blocks>");
		  }
        return true;
		break;
	    case "south":
		  if($args[0] ==! null){
			  if(is_numeric($args[0])) {
		           $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
		           $sender->teleport(new Vector3($x, $y, $z + $args[0]), $yaw, $pitch);
				   $block = Block::get(20, 0); 
				   $air = Block::get(0, 0); 
                   $level->setBlock(new Vector3($x, $y - 1, $z + $args[0]), $block);
				   $level->setBlock(new Vector3($x, $y, $z - $args[0]), $air);
				   $level->setBlock(new Vector3($x, $y + 1, $z + $args[0]), $air);
				   $sender->sendMessage("§l§d[EasierTP]§r§d You had teleported yourself ". $args[0] . " blocks south!");
			  } else {
				  $sender->sendMessage("§4Number of block to get down must be numeric");
			  }
		  } else {
			  $sender->sendMessage("§4Usage: /south <number of blocks>");
		  }
        return true;
		break;
		case "east":
		  if($args[0] ==! null){
			  if(is_numeric($args[0])) {
		           $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
		           $sender->teleport(new Vector3($x + $args[0], $y, $z), $yaw, $pitch);
				   $block = Block::get(20, 0); 
				   $air = Block::get(0, 0); 
                   $level->setBlock(new Vector3($x + $args[0], $y - 1, $z), $block);
				   $level->setBlock(new Vector3($x + $args[0], $y, $z), $air);
				   $level->setBlock(new Vector3($x + $args[0], $y + 1, $z), $air);
				   $sender->sendMessage("§l§d[EasierTP]§r§d You had teleported yourself ". $args[0] . " blocks east!");
			  } else {
				  $sender->sendMessage("§4Number of block to get down must be numeric");
			  }
		  } else {
			  $sender->sendMessage("§4Usage: /east <number of blocks>");
		  }
        return true;
		break;
		case "west":
		  if($args[0] ==! null){
			  if(is_numeric($args[0])) {
		           $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
		           $sender->teleport(new Vector3($x - $args[0], $y, $z), $yaw, $pitch);
				   $block = Block::get(20, 0); 
				   $air = Block::get(0, 0); 
                   $level->setBlock(new Vector3($x - $args[0], $y - 1, $z), $block);
				   $level->setBlock(new Vector3($x - $args[0], $y, $z), $air);
				   $level->setBlock(new Vector3($x - $args[0], $y + 1, $z), $air);
				   $sender->sendMessage("§l§d[EasierTP]§r§d You had teleported yourself ". $args[0] . " blocks west!");
			  } else {
				  $sender->sendMessage("§4Number of block to get down must be numeric");
			  }
		  } else {
			  $sender->sendMessage("§4Usage: /west <number of blocks>");
		  }
        return true;
		break;
		case "surface":
		           $x = $sender->x;
                   $z = $sender->z;
				   $yaw = $sender->yaw;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
				   $yid = 128;
				   while($level->getBlock(new Vector3($x, $yid, $z)) ==! Block::get(0, 0)) {
					   $yid - 1;
				   } if ($level->getBlock(new Vector3($x, $yid, $z)) ==! Block::get(0, 0)) {
					   $sender->teleport(new Vector3($x, $yid, $z), $yaw, $pitch);
				   }
				   $sender->sendMessage("§l§d[EasierTP]§r§d Welcome to surface!");
		case "facing":
		if($args == null) {
	         $yaw = $sender->yaw;
		    	if (0 <= $yaw && $yaw < 22.5) {
			      $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing North (z-negative) §r");
                } elseif (22.5 <= $yaw && $yaw < 67.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing North-East (z-negative, x-positive) §r");
                } elseif (67.5 <= $yaw && $yaw < 112.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing East (x-positive) §r");
                } elseif (112.5 <= $yaw && $yaw < 157.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing South-East (z-positive, x-positive) §r");
                } elseif (157.5 <= $yaw && $yaw < 202.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing South (z-positive) §r");
                } elseif (202.5 <= $yaw && $yaw < 247.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing South-West (z-positive, x-negative) §r");
                } elseif (247.5 <= $yaw && $yaw < 292.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing West (x-negative) §r§f");
                } elseif (292.5 <= $yaw && $yaw < 337.5) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing North-West (z-negative, x-negative) §r§f");
                } elseif (337.5 <= $yaw && $yaw < 360.0) {
                    $sender->sendMessage("§l§d[EasierTP]§r §e§oYou're facing North (z-negative) §r§f");
                } else {
					$sender->sendMessage("§4You're not a player or you are in an invalid position");
				}
		} else {
			switch($args[0]) {
				case "z-":
				case "North":
				   $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = 360;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
				   $sender->sendMessage("§l§d[EasierTP]§r§d You're now facing north!");
		           $sender->teleport(new Vector3($x, $y, $z), $yaw, $pitch);
				 return true;
				 break;
				 case "z+":
				case "South":
				   $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = 180;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
				   $sender->sendMessage("§l§d[EasierTP]§r§d You're now facing south!");
		           $sender->teleport(new Vector3($x, $y, $z), $yaw, $pitch);
				 return true;
				 break;
				 case "x+":
				case "East":
				   $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = 95;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
				   $sender->sendMessage("§l§d[EasierTP]§r§d You're now facing east!");
		           $sender->teleport(new Vector3($x, $y, $z), $yaw, $pitch);
				 return true;
				 break;
				 case "z-":
				case "West":
				   $x = $sender->x;
                   $y = $sender->y;
                   $z = $sender->z;
				   $yaw = 270;
				   $pitch = $sender->pitch;
                   $level = $sender->getLevel();
				   $sender->sendMessage("§l§d[EasierTP]§r§d You're now facing west!");
		           $sender->teleport(new Vector3($x, $y, $z), $yaw, $pitch);
				 return true;
				 break;
				default:
				   $sender->sendMessage("§l§d[EasierTP]§r§d Value not found. Please une /facing [North/East/South/West]");
				 return true;
				 break;
			}
		}
		return true;
		break;
    }
    }
  }
