<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795527f3173c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Common\Foundation\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Page { use CommonTrait; public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw(Constants::kucuwimmakgiieom)->oakemcgacwakmawm()->ekgmmugauoasqwyc()->gswweykyogmsyawy(__("\x44\157\x77\156\x6c\x6f\141\144", PR__CST__FILEFOX))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::swaueacqeaiooqgc)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\164\145\155\160\x6c\141\x74\145\137\162\145\x64\x69\162\145\143\164", [$this, "\143\x65\151\165\163\x69\143\163\x61\x77\167\x61\x61\x61\155\161"])->qcsmikeggeemccuu("\x6e\x6f\156\x63\145\x5f\x6c\x69\x66\145", [$this, "\x67\171\145\x65\x61\x67\x73\x67\x6d\x79\x65\145\151\x6d\x71\x71"], 10, 2); if (isset($_GET[Constants::kucuwimmakgiieom], $_GET[Constants::mwkumwoeyuaukcms], $_GET[Constants::wygwikaqsmcmosas])) { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x71\x69\x71\161\147\167\x6d\x63\x71\145\x71\x79\157\x71\x73\x77"]); } parent::wigskegsqequoeks(); } public function ceiusicsawwaaamq() { if ($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou() && Constants::yquayuasseumiiii === $this->weysguygiseoukqw(Setting::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { $this->gwqgmkqcgwwmweom(); } } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = $this->weysguygiseoukqw(Setting::okawgmqeyoeeugeo); if (!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom)) { $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); } if ($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; } } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wygwikaqsmcmosas), Constants::cgmyyekauckqmwyg)) { $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kucuwimmakgiieom); if ($aiooqyausygaasqm && $umkkkaqkwugkemce) { $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mwkumwoeyuaukcms, 0); if ($aeiwmoeicwaiwmwu > 0) { $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\147\x65\164\x5f\162\145\160\154\151\x63\x61\137\154\x69\x6e\153", '', $aeiwmoeicwaiwmwu); if ($iwywmkygwewiamwm) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); } } $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { case Constants::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); break; default: case Constants::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); break; } } } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (Constants::wygwikaqsmcmosas === $aiamqeawckcsuaou) { $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; } return $iwwoeyqsyeiikuyk; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->oaaywquaycsmykuc(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\x64\x6f\x77\x6e\x6c\x6f\141\x64", "\144\157\167\x6e\x6c\157\x61\144\x2e\152\163")->simswskycwagoeqy())->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => ["\x67\x65\x74\137\x75\162\x6c" => Ajax::gumsmyccuyyqsmoc, "\x67\x65\x74\x5f\x64\157\167\156\154\x6f\141\x64\x5f\154\151\x6e\x6b\x73" => Ajax::kikskooimuqywswe], Constants::eoskkkieowogacws => ["\x66\151\x6c\x65\x5f\156\157\164\137\x66\x6f\x75\x6e\x64" => __("\x46\x69\x6c\x65\40\x70\x61\x72\141\x6d\x65\x74\145\162\40\x6d\151\x73\x73\151\156\147\56", PR__CST__FILEFOX)]]); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { $mmeioagwmyscwumo = 1; } else { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq); if ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $owmuuoycwiskaeme = 0; if ($this->weysguygiseoukqw(Setting::akoqkkisyueccwcu)) { $owmuuoycwiskaeme = (int) $this->weysguygiseoukqw(Setting::euioekgyyaegcoqa, 0); } $uqiiskyaukiiasik = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sggkkiiqkekaomig([Constants::uissasisiuymwsmu => $this->weysguygiseoukqw(Setting::gemeksocqsmskcyg), Constants::yeowwkiiyimoykye => [Constants::eqewsqmqmsiocaeg => true, Constants::DURATION => $owmuuoycwiskaeme, "\163\150\157\167\120\145\x72\x63\145\156\164\141\147\x65" => true]]); $qookweymeqawmcwo = ["\x70\162\x6f\x67\x72\x65\x73\x73\142\141\162" => $uqiiskyaukiiasik, "\167\141\151\164\x5f\145\x6e\141\x62\154\x65\144" => $this->weysguygiseoukqw(Setting::akoqkkisyueccwcu), "\163\164\x61\162\164\137\x62\165\x74\x74\157\x6e" => $this->weysguygiseoukqw(Setting::qemieaasiccekaui, __("\x53\x74\x61\x72\164\40\104\157\x77\x6e\154\157\x61\x64", PR__CST__FILEFOX)), "\x73\164\141\162\x74\x5f\155\145\163\163\141\x67\145" => $this->weysguygiseoukqw(Setting::uikuwskagqmcqacm), "\144\157\x77\x6e\154\x6f\141\x64\x5f\x62\165\x74\164\x6f\156" => $this->weysguygiseoukqw(Setting::qqsmqwwiioemkiie, __("\x44\x6f\x77\156\x6c\157\x61\144", PR__CST__FILEFOX)), "\144\157\167\x6e\154\x6f\x61\144\x5f\x6d\145\x73\163\141\147\x65" => $this->weysguygiseoukqw(Setting::ogckyyegowyqgyma), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce)]; } } return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq)) { $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); if ($umkkkaqkwugkemce && $this->caokeucsksukesyo()->aqasygcsqysmmyke()->sywcyoouayqkqisk($umkkkaqkwugkemce)) { $iyoakscesymascsc = false; } } return $iyoakscesymascsc; } }
