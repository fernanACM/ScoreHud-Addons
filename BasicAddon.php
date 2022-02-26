<?php
declare(strict_types = 1);

/**
 * @name BasicAddon
 * @version 1.1.0
 * @main    JackMD\ScoreHud\Addons\BasicAddon
 */

namespace JackMD\ScoreHud\Addons
{

	use JackMD\ScoreHud\addon\AddonBase;
	use pocketmine\player\Player;

	class BasicAddon extends AddonBase{

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			
			return [
				"{name}"	       => $player->getName(),
				"{real_name}"          => $player->getName(),
				"{display_name}"       => $player->getDisplayName(),
				"{online}"             => count($player->getServer()->getOnlinePlayers()),
				"{max_online}"         => $player->getServer()->getMaxPlayers(),
				"{item_name}"          => $player->getInventory()->getItemInHand()->getName(),
				"{item_id}"            => $player->getInventory()->getItemInHand()->getId(),
				"{item_count}"         => $player->getInventory()->getItemInHand()->getCount(),
				"{x}"                  => $player->getPosition()->getX(),
				"{y}"                  => $player->getPosition()->getY(),
				"{z}"                  => $player->getPosition()->getZ(),
				"{load}"               => $player->getServer()->getTickUsage(),
				"{tps}"                => $player->getServer()->getTicksPerSecond(),
				"{levelname}"          => $player->getWorld()->getFolderName(),
				"{ping}"               => $player->getNetworkSession()->getPing(),
				"{time}"               => date($this->getScoreHud()->getConfig()->get("time-format")),
				"{date}"               => date($this->getScoreHud()->getConfig()->get("date-format")),
				"{world_player_count}" => count($player->getWorld()->getPlayers())
			];
		}
	}
}