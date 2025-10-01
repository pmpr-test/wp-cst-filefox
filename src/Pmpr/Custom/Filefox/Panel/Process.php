<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68dda1c19ff55             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const PREFIX = 'ff_panel_'; const eeqqkagqamcgcusm = self::PREFIX . 'fetch_users_stackexchange_data'; const auicmwiikuiogwca = self::PREFIX . 'start_fetch_users_stackexchange_data'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'ff_panel'; } public function qqgeywcccgwaeeoa() : int { return $this->ooosmymooksgmyos(strtotime('midnight'), WEEK_IN_SECONDS, self::auicmwiikuiogwca); } public function weiekagwessqcciw($suaemuyiacqyugsm) : int { $ksaameoqigiaoigg = 0; if (!$this->uuqgqyssiyamwawu($suaemuyiacqyugsm)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::eeqqkagqamcgcusm, [$suaemuyiacqyugsm]); } return $ksaameoqigiaoigg; } public function uuqgqyssiyamwawu($suaemuyiacqyugsm) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::eeqqkagqamcgcusm, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$suaemuyiacqyugsm]]); } }
