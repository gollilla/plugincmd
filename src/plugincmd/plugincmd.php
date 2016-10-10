<?php

namespace plugincmd;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class plugincmd extends PluginBase{

	

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){

		$name = $cmd->getName();

		switch($cmd){
			case "cmds":
                         
                                     if(isset($args[0])){
                                         $plugin = $this->getServer()->getPluginManager()->getPlugin($args[0]); 
                                         if($plugin !== null){
                                             $coms = $plugin->getDescription()->getCommands();
                                             $sender->sendMessage("§a------§6".$args[0]."のコマンド§a------");
                                             foreach($coms as $com => $value){
                                                 
                                                   
                                                  $sender->sendMessage("§b[§fcom§b] §e/".$com);
                                             }
                                         }else{
                                            $sender->sendMessage("§cそのプラグインは存在しません");
                                         }
                                     }

			             	
			             
			             break;
		}
	}
}