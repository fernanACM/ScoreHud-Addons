<?php
declare(strict_types = 1);

/**
 * @name EconomyApiAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\EconomyApiAddon
 * @depend EconomyAPI
 */
namespace JackMD\ScoreHud\Addons
{
	use JackMD\ScoreHud\addon\AddonBase;
	use onebone\economyapi\EconomyAPI;
	use pocketmine\player\Player;

	class EconomyApiAddon extends AddonBase{

		/** @var EconomyAPI */
		private $economyAPI;

		public function onEnable(): void{
			$this->economyAPI = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
		}

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			return [
				"{money}" => $this->economyAPI->myMoney($player)
			];
		}
	}
}