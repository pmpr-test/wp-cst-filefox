<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68169d900ebe0             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const PREFIX = 'ff_salary_'; const iuqesigcoummmkws = self::PREFIX . 'insert_post_owners_job'; const okcwwauugmiisyua = self::PREFIX . 'start_insert_post_owners_job'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'ff_salary'; } public function ccsskqckeuaeuiek() : int { return $this->ooosmymooksgmyos(strtotime('midnight'), WEEK_IN_SECONDS, self::okcwwauugmiisyua); } public function uamuwgiguyaysyem() : int { $ksaameoqigiaoigg = 0; if (!$this->aecycuwyocgoieqq()) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::iuqesigcoummmkws); } return $ksaameoqigiaoigg; } public function aecycuwyocgoieqq() : bool { return $this->exists([Constants::cmooywkooekaakwk => self::iuqesigcoummmkws, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
