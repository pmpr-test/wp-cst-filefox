<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e9a8dd28fa2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Traffic; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const csqsymqoqwyowokg = 'ff_traffic_job_'; const awcueascsucimqmy = self::csqsymqoqwyowokg . 'fetch_posts_data'; const yeakqieeiwmucoky = self::csqsymqoqwyowokg . '_calculate_teams_traffic'; const ioecsywaaqyimmug = self::csqsymqoqwyowokg . '_calculate_requests_traffic'; const wwkkmkiecmqeesec = self::awcueascsucimqmy . '_by_page'; public function ikcgmcycisiccyuc() { $this->group = 'ff_traffic'; } public function wwomeauyemiugssa() : int { return $this->ooosmymooksgmyos(strtotime('midnight'), DAY_IN_SECONDS, self::awcueascsucimqmy); } public function sieiiygagkskwaeg($ocogsiouoiuuguym, $suaemuyiacqyugsm) : int { $ksaameoqigiaoigg = 0; if (!$this->ewqmqwoieawumaei($ocogsiouoiuuguym, $suaemuyiacqyugsm)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::wwkkmkiecmqeesec, [$ocogsiouoiuuguym, $suaemuyiacqyugsm]); } return $ksaameoqigiaoigg; } public function iiqyoawimeeiqymc($ocogsiouoiuuguym, $suaemuyiacqyugsm) : int { return $this->ekyiieacymauaume(self::ioecsywaaqyimmug, [$ocogsiouoiuuguym, $suaemuyiacqyugsm]); } public function yyswugsmammmkqqs($ocogsiouoiuuguym, $suaemuyiacqyugsm) : int { return $this->ekyiieacymauaume(self::yeakqieeiwmucoky, [$ocogsiouoiuuguym, $suaemuyiacqyugsm]); } public function ewqmqwoieawumaei($ocogsiouoiuuguym, int $suaemuyiacqyugsm = 0) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::wwkkmkiecmqeesec, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$ocogsiouoiuuguym, $suaemuyiacqyugsm]]); } }
