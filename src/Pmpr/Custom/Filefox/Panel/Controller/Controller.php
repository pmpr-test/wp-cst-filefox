<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aac8172ee             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use Pmpr\Custom\Filefox\Salary\Model\Team; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Daily; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\Salary\Model\Request; use WP_Error; use WP_REST_Request; abstract class Controller extends AbstractREST { public function __construct() { $this->abstract = true; parent::__construct(); $this->namespace .= '/content'; } public function emwagqamysmyeigc($mkucggyaiaukqoce) : bool { return $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(Salary::icygkcucieasceuk, $mkucggyaiaukqoce, true); } public function mgawqagyqukmasom($mkucggyaiaukqoce) : bool { return $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(Salary::emceseoyeswkikuu, $mkucggyaiaukqoce, true); } public function kcuqasmkogakwgqu($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($mkucggyaiaukqoce, Constants::meksegaoamowuwoq); if ($qgciakuqggmiywuk) { $wgkogsmkwskskgsw = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Salary::mwisuqgywiccyykw); $mmsugugggqciomke = Team::symcgieuakksimmu(); if ($wgkogsmkwskskgsw) { $oeucsuyqysaciasy = Salary::emceseoyeswkikuu; $ksuesqoiqqiiyqsq = $kueeocmceokoouqa->iekyeyicoyyawomk()->iscemaoqqckmkago(Salary::mwisuqgywiccyykw, $qgciakuqggmiywuk); } else { $oeucsuyqysaciasy = Salary::icygkcucieasceuk; $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($kueeocmceokoouqa->mwyqswsaeeewsosm($qgciakuqggmiywuk), Team::ouesgysauomeocqm); } $wgkogsmkwskskgsw = $mmsugugggqciomke->mwyqswsaeeewsosm($ksuesqoiqqiiyqsq); if ($ksuesqoiqqiiyqsq) { return [Salary::susokqyqcmqomwqk => $ksuesqoiqqiiyqsq, Salary::mwisuqgywiccyykw => $wgkogsmkwskskgsw, Constants::eyqgmoumkowegyse => $oeucsuyqysaciasy, Constants::qgeesceacsmeqacu => $qgciakuqggmiywuk, PostOwner::cmiegiycgiucucgs => $kueeocmceokoouqa->mwyqswsaeeewsosm($qgciakuqggmiywuk)]; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('You have no team yet', PR__CST__FILEFOX)); } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('You are not applied for any agreement yet.', PR__CST__FILEFOX)); } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Access denied.', PR__CST__FILEFOX)); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); return $mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce) && ($this->emwagqamysmyeigc($mkucggyaiaukqoce) || $this->mgawqagyqukmasom($mkucggyaiaukqoce)); } }
