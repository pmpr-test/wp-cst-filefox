<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             694c4d40edc2e             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Report; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const csqsymqoqwyowokg = 'ff_report_job_'; const miukuoecssaqmkio = self::csqsymqoqwyowokg . 'store_user_daily_post_stats'; const mcsyquqmyoykwmsa = self::csqsymqoqwyowokg . 'start_store_daily_post_stats'; public function ikcgmcycisiccyuc() { $this->group = 'ff_report'; } public function gkkwyeccuqkkacsg() : int { return $this->ooosmymooksgmyos(strtotime('midnight'), DAY_IN_SECONDS, self::mcsyquqmyoykwmsa); } public function iimgsaawycyqukie($suaemuyiacqyugsm) : int { $ksaameoqigiaoigg = 0; if (!$this->ukoiaemuumuucgcq($suaemuyiacqyugsm)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::miukuoecssaqmkio, [$suaemuyiacqyugsm]); } return $ksaameoqigiaoigg; } public function ukoiaemuumuucgcq($suaemuyiacqyugsm) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::miukuoecssaqmkio, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$suaemuyiacqyugsm]]); } }
