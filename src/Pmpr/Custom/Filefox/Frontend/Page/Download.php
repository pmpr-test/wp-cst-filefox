<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0003ea178             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting; use Pmpr\Custom\Filefox\Storage\Model\Replica; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Common { use CommonTrait; public function __construct() { $this->slug = Constants::kucuwimmakgiieom; $this->crawlable = false; $this->isPrivate = false; $this->disableCache = true; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\104\x6f\167\x6e\154\x6f\141\x64", PR__CST__FILEFOX); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x74\145\155\160\x6c\141\164\145\137\x72\x65\x64\151\x72\x65\143\x74", [$this, "\x63\x65\x69\165\x73\151\x63\x73\141\167\167\141\141\x61\155\161"])->qcsmikeggeemccuu("\x6e\157\156\x63\x65\x5f\154\151\146\145", [$this, "\x67\x79\145\x65\141\x67\163\x67\155\171\x65\x65\x69\x6d\x71\161"], 10, 2); if (isset($_GET[Constants::kucuwimmakgiieom], $_GET[Constants::mwkumwoeyuaukcms], $_GET[Constants::wygwikaqsmcmosas])) { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x71\151\161\161\147\x77\155\143\161\x65\161\x79\x6f\161\x73\x77"]); } parent::wigskegsqequoeks(); } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (Constants::wygwikaqsmcmosas === $aiamqeawckcsuaou) { $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; } return $iwwoeyqsyeiikuyk; } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wygwikaqsmcmosas), Constants::cgmyyekauckqmwyg)) { $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kucuwimmakgiieom); if ($aiooqyausygaasqm && $umkkkaqkwugkemce) { $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mwkumwoeyuaukcms, 0); if ($aeiwmoeicwaiwmwu > 0) { $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\x67\145\x74\x5f\162\145\x70\x6c\151\x63\141\x5f\154\151\x6e\x6b", '', $aeiwmoeicwaiwmwu); if ($iwywmkygwewiamwm) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); } } $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { case Constants::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); break; default: case Constants::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); break; } } } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gcegymooyemmaysk = 0; $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::akoqkkisyueccwcu)) { $gcegymooyemmaysk = (int) $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::euioekgyyaegcoqa, 0); } $gaumukogkkgkiiuo->oeoquuwkoywiuesy($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\x6f\x77\x6e\154\x6f\x61\x64", $gaumukogkkgkiiuo->get("\x64\157\x77\156\x6c\x6f\x61\x64\56\x6a\x73"))->simswskycwagoeqy())->iagmuqogkyysiick(["\167\141\151\x74" => $gcegymooyemmaysk, "\x61\x6a\141\x78" => ["\147\x65\164\137\165\162\x6c" => Ajax::gumsmyccuyyqsmoc, "\147\145\164\x5f\144\x6f\x77\x6e\x6c\x6f\141\x64\137\x6c\151\x6e\153\x73" => Ajax::kikskooimuqywswe], Constants::eoskkkieowogacws => ["\x66\151\154\x65\137\x6e\157\164\x5f\146\x6f\165\x6e\x64" => __("\x46\151\x6c\145\40\x70\x61\x72\x61\x6d\x65\164\x65\162\x20\155\x69\x73\163\151\x6e\x67\x2e", PR__CST__FILEFOX)]]); } public function ceiusicsawwaaamq() { if ($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou()) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (Constants::yquayuasseumiiii === $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { $this->gwqgmkqcgwwmweom(); } } } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::okawgmqeyoeeugeo); if (!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom)) { $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); } if ($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; } } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { $mmeioagwmyscwumo = 1; } else { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq); if ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $qookweymeqawmcwo = [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce), "\167\141\151\164\x5f\x65\156\x61\142\154\145\x64" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::akoqkkisyueccwcu), "\167\141\151\x74\x5f\155\x65\163\163\141\147\145" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::gemeksocqsmskcyg), "\x73\x74\x61\x72\164\x5f\142\x75\x74\x74\x6f\x6e" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::qemieaasiccekaui, __("\x53\x74\x61\x72\x74\x20\104\157\x77\x6e\154\157\141\144", PR__CST__FILEFOX)), "\x73\x74\x61\x72\x74\x5f\155\x65\163\x73\141\147\x65" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::uikuwskagqmcqacm), "\x64\x6f\167\156\x6c\157\141\x64\x5f\x62\x75\x74\164\157\x6e" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::qqsmqwwiioemkiie, __("\x44\157\x77\156\x6c\x6f\x61\x64", PR__CST__FILEFOX)), "\x64\157\x77\x6e\154\157\141\144\x5f\x6d\x65\163\x73\141\147\145" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ogckyyegowyqgyma)]; } } return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq)) { $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); if ($umkkkaqkwugkemce && $this->caokeucsksukesyo()->aqasygcsqysmmyke()->sywcyoouayqkqisk($umkkkaqkwugkemce)) { $iyoakscesymascsc = false; } } return $iyoakscesymascsc; } }
