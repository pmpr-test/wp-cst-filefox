<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977edcdf95d             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Common\Foundation\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Page { use CommonTrait; public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw(Constants::kucuwimmakgiieom)->oakemcgacwakmawm()->ekgmmugauoasqwyc()->gswweykyogmsyawy(__("\104\157\x77\x6e\154\x6f\x61\x64", PR__CST__FILEFOX))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::swaueacqeaiooqgc)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\164\145\x6d\x70\x6c\x61\x74\145\x5f\x72\x65\x64\151\162\145\143\x74", [$this, "\x63\x65\151\x75\163\x69\x63\163\x61\167\167\x61\141\141\155\161"])->qcsmikeggeemccuu("\156\157\156\143\x65\x5f\x6c\151\146\x65", [$this, "\147\171\x65\145\141\147\163\147\x6d\171\145\x65\151\155\x71\x71"], 10, 2); if (isset($_GET[Constants::kucuwimmakgiieom], $_GET[Constants::mwkumwoeyuaukcms], $_GET[Constants::wygwikaqsmcmosas])) { $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x71\151\161\x71\147\x77\x6d\143\x71\145\x71\171\x6f\x71\163\x77"]); } parent::wigskegsqequoeks(); } public function ceiusicsawwaaamq() { if ($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou() && Constants::yquayuasseumiiii === $this->weysguygiseoukqw(Setting::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { $this->gwqgmkqcgwwmweom(); } } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = $this->weysguygiseoukqw(Setting::okawgmqeyoeeugeo); if (!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom)) { $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); } if ($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; } } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wygwikaqsmcmosas), Constants::cgmyyekauckqmwyg)) { $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kucuwimmakgiieom); if ($aiooqyausygaasqm && $umkkkaqkwugkemce) { $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mwkumwoeyuaukcms, 0); if ($aeiwmoeicwaiwmwu > 0) { $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\147\x65\164\x5f\162\x65\160\x6c\x69\143\141\137\154\151\x6e\153", '', $aeiwmoeicwaiwmwu); if ($iwywmkygwewiamwm) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); } } $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { case Constants::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); break; default: case Constants::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); break; } } } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (Constants::wygwikaqsmcmosas === $aiamqeawckcsuaou) { $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; } return $iwwoeyqsyeiikuyk; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->oaaywquaycsmykuc(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\x64\x6f\167\156\x6c\x6f\141\x64", "\144\157\167\x6e\154\157\141\x64\56\152\163")->simswskycwagoeqy())->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => ["\x67\145\x74\x5f\x75\x72\154" => Ajax::gumsmyccuyyqsmoc, "\147\x65\164\x5f\x64\x6f\x77\156\154\157\x61\x64\137\154\x69\156\x6b\163" => Ajax::kikskooimuqywswe], Constants::eoskkkieowogacws => ["\146\151\154\x65\x5f\x6e\157\164\x5f\146\x6f\x75\156\144" => __("\x46\151\154\x65\40\x70\x61\162\x61\155\x65\x74\145\x72\x20\155\151\x73\x73\x69\156\x67\56", PR__CST__FILEFOX)]]); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { $mmeioagwmyscwumo = 1; } else { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq); if ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $owmuuoycwiskaeme = 0; if ($this->weysguygiseoukqw(Setting::akoqkkisyueccwcu)) { $owmuuoycwiskaeme = (int) $this->weysguygiseoukqw(Setting::euioekgyyaegcoqa, 0); } $uqiiskyaukiiasik = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sggkkiiqkekaomig([Constants::uissasisiuymwsmu => $this->weysguygiseoukqw(Setting::gemeksocqsmskcyg), Constants::yeowwkiiyimoykye => [Constants::eqewsqmqmsiocaeg => true, Constants::DURATION => $owmuuoycwiskaeme, "\163\150\x6f\167\120\x65\162\x63\x65\x6e\164\x61\147\x65" => true]]); $qookweymeqawmcwo = ["\x70\162\x6f\147\x72\145\x73\x73\x62\x61\162" => $uqiiskyaukiiasik, "\x77\141\x69\164\137\x65\x6e\x61\142\154\x65\144" => $this->weysguygiseoukqw(Setting::akoqkkisyueccwcu), "\x73\164\x61\x72\164\137\142\x75\x74\x74\x6f\x6e" => $this->weysguygiseoukqw(Setting::qemieaasiccekaui, __("\123\164\x61\162\x74\40\104\157\167\156\x6c\x6f\141\144", PR__CST__FILEFOX)), "\163\164\141\x72\164\137\x6d\145\163\x73\141\147\145" => $this->weysguygiseoukqw(Setting::uikuwskagqmcqacm), "\144\x6f\x77\x6e\x6c\157\141\x64\137\x62\x75\x74\x74\x6f\x6e" => $this->weysguygiseoukqw(Setting::qqsmqwwiioemkiie, __("\104\x6f\167\x6e\154\157\x61\x64", PR__CST__FILEFOX)), "\x64\x6f\x77\156\x6c\157\x61\x64\137\155\145\x73\163\x61\147\145" => $this->weysguygiseoukqw(Setting::ogckyyegowyqgyma), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce)]; } } return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq)) { $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); if ($umkkkaqkwugkemce && $this->caokeucsksukesyo()->aqasygcsqysmmyke()->sywcyoouayqkqisk($umkkkaqkwugkemce)) { $iyoakscesymascsc = false; } } return $iyoakscesymascsc; } }
