<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977cbabe45f             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Common\Foundation\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Page { use CommonTrait; public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw(Constants::kucuwimmakgiieom)->oakemcgacwakmawm()->ekgmmugauoasqwyc()->gswweykyogmsyawy(__("\x44\157\x77\x6e\154\157\141\144", PR__CST__FILEFOX))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::swaueacqeaiooqgc)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x74\x65\155\160\154\141\x74\145\137\162\145\x64\151\162\145\143\164", [$this, "\143\x65\151\165\x73\151\x63\163\x61\x77\167\141\141\141\x6d\x71"])->qcsmikeggeemccuu("\x6e\157\156\143\145\x5f\x6c\x69\x66\x65", [$this, "\x67\x79\x65\145\x61\147\x73\x67\155\x79\145\x65\x69\x6d\161\x71"], 10, 2); if (isset($_GET[Constants::kucuwimmakgiieom], $_GET[Constants::mwkumwoeyuaukcms], $_GET[Constants::wygwikaqsmcmosas])) { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x71\x69\x71\x71\147\x77\x6d\143\161\145\161\x79\x6f\x71\163\167"]); } parent::wigskegsqequoeks(); } public function ceiusicsawwaaamq() { if ($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou() && Constants::yquayuasseumiiii === $this->weysguygiseoukqw(Setting::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { $this->gwqgmkqcgwwmweom(); } } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = $this->weysguygiseoukqw(Setting::okawgmqeyoeeugeo); if (!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom)) { $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); } if ($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; } } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wygwikaqsmcmosas), Constants::cgmyyekauckqmwyg)) { $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kucuwimmakgiieom); if ($aiooqyausygaasqm && $umkkkaqkwugkemce) { $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mwkumwoeyuaukcms, 0); if ($aeiwmoeicwaiwmwu > 0) { $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\x67\145\164\x5f\x72\145\160\154\x69\143\141\x5f\x6c\x69\x6e\153", '', $aeiwmoeicwaiwmwu); if ($iwywmkygwewiamwm) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); } } $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { case Constants::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); break; default: case Constants::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); break; } } } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (Constants::wygwikaqsmcmosas === $aiamqeawckcsuaou) { $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; } return $iwwoeyqsyeiikuyk; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->oaaywquaycsmykuc(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\144\157\x77\156\x6c\157\x61\144", "\144\x6f\167\156\x6c\x6f\141\x64\56\152\x73")->simswskycwagoeqy())->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => ["\147\x65\164\x5f\x75\162\x6c" => Ajax::gumsmyccuyyqsmoc, "\x67\x65\164\x5f\144\157\x77\x6e\x6c\157\141\144\137\154\151\x6e\x6b\163" => Ajax::kikskooimuqywswe], Constants::eoskkkieowogacws => ["\x66\151\x6c\x65\137\x6e\157\x74\x5f\146\157\165\x6e\144" => __("\x46\x69\x6c\x65\40\160\x61\x72\x61\155\x65\x74\x65\162\x20\155\x69\163\163\151\156\x67\x2e", PR__CST__FILEFOX)]]); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { $mmeioagwmyscwumo = 1; } else { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq); if ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $owmuuoycwiskaeme = 0; if ($this->weysguygiseoukqw(Setting::akoqkkisyueccwcu)) { $owmuuoycwiskaeme = (int) $this->weysguygiseoukqw(Setting::euioekgyyaegcoqa, 0); } $uqiiskyaukiiasik = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sggkkiiqkekaomig([Constants::uissasisiuymwsmu => $this->weysguygiseoukqw(Setting::gemeksocqsmskcyg), Constants::yeowwkiiyimoykye => [Constants::eqewsqmqmsiocaeg => true, Constants::DURATION => $owmuuoycwiskaeme, "\x73\x68\x6f\167\x50\x65\162\x63\x65\156\x74\x61\147\x65" => true]]); $qookweymeqawmcwo = ["\x70\x72\x6f\147\162\x65\x73\x73\x62\x61\162" => $uqiiskyaukiiasik, "\x77\x61\151\164\137\145\x6e\141\142\154\x65\144" => $this->weysguygiseoukqw(Setting::akoqkkisyueccwcu), "\163\x74\x61\162\x74\137\x62\165\164\164\157\x6e" => $this->weysguygiseoukqw(Setting::qemieaasiccekaui, __("\x53\x74\141\162\164\x20\104\x6f\x77\156\154\x6f\141\144", PR__CST__FILEFOX)), "\163\x74\x61\162\x74\x5f\x6d\145\163\163\x61\x67\145" => $this->weysguygiseoukqw(Setting::uikuwskagqmcqacm), "\144\x6f\x77\156\x6c\157\141\144\137\142\165\164\x74\x6f\x6e" => $this->weysguygiseoukqw(Setting::qqsmqwwiioemkiie, __("\x44\157\167\x6e\x6c\157\141\144", PR__CST__FILEFOX)), "\144\157\167\156\x6c\x6f\141\x64\137\x6d\145\163\163\141\147\145" => $this->weysguygiseoukqw(Setting::ogckyyegowyqgyma), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce)]; } } return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq)) { $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); if ($umkkkaqkwugkemce && $this->caokeucsksukesyo()->aqasygcsqysmmyke()->sywcyoouayqkqisk($umkkkaqkwugkemce)) { $iyoakscesymascsc = false; } } return $iyoakscesymascsc; } }
