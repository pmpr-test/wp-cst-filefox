<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9eafc18a58             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Common { public function wigskegsqequoeks() { $this->iqkqummseggmikgo('ff_ticket_get_track_form', [$this, 'yamcgmsqqseaqewu'])->iqkqummseggmikgo('ff_ticket_get_file_request_form', [$this, 'mkckoqqcmekgkygi'])->iqkqummseggmikgo('ff_ticket_get_file_provide_form', [$this, 'oigeikmeqmeoyeqg']); } public function yamcgmsqqseaqewu() { $this->wkukmuukogmagmai(self::gewoiiswcuiwggqo, [Constants::mgsccwumkcawaqcy => 'track']); } public function mkckoqqcmekgkygi() { $this->wkukmuukogmagmai(self::gewoiiswcuiwggqo, [Constants::mgsccwumkcawaqcy => 'ticket']); } public function oigeikmeqmeoyeqg() { $this->wkukmuukogmagmai(self::suooagqkicoeawcy, [Constants::mgsccwumkcawaqcy => 'ticket']); } public function wkukmuukogmagmai(string $aokagokqyuysuksm, array $ywmkwiwkosakssii = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); $occymigcemkqucuw = false; if (!is_wp_error($keccaugmemegoimu)) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::ocwsuwyiiasigqaa => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)]); $eaoumsseceiowgsk = $this->ocksiywmkyaqseou('ticket_get_form_html', '', $ywmkwiwkosakssii); if (!$eaoumsseceiowgsk) { $keccaugmemegoimu = __('Something wrong, please try again or contact us.', PR__CST__FILEFOX); } else { $keccaugmemegoimu = $eaoumsseceiowgsk; $occymigcemkqucuw = true; } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
