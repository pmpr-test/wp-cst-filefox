<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d410ebe55a             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Common\Foundation\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Page { use CommonTrait; public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw(Constants::kucuwimmakgiieom)->oakemcgacwakmawm()->ekgmmugauoasqwyc()->gswweykyogmsyawy(__("\x44\157\167\156\154\x6f\x61\144", PR__CST__FILEFOX))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::swaueacqeaiooqgc)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\164\145\155\x70\x6c\x61\164\145\137\x72\x65\144\x69\162\145\143\164", [$this, "\143\x65\151\165\x73\x69\x63\163\141\167\167\x61\x61\141\x6d\161"])->qcsmikeggeemccuu("\156\157\x6e\143\x65\137\154\151\x66\145", [$this, "\147\x79\x65\x65\141\x67\163\x67\155\171\x65\x65\x69\x6d\x71\161"], 10, 2); if (isset($_GET[Constants::kucuwimmakgiieom], $_GET[Constants::mwkumwoeyuaukcms], $_GET[Constants::wygwikaqsmcmosas])) { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x71\151\x71\x71\147\167\155\143\161\145\161\171\x6f\x71\163\x77"]); } parent::wigskegsqequoeks(); } public function ceiusicsawwaaamq() { if ($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou() && Constants::yquayuasseumiiii === $this->weysguygiseoukqw(Setting::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { $this->gwqgmkqcgwwmweom(); } } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = $this->weysguygiseoukqw(Setting::okawgmqeyoeeugeo); if (!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom)) { $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); } if ($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; } } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wygwikaqsmcmosas), Constants::cgmyyekauckqmwyg)) { $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kucuwimmakgiieom); if ($aiooqyausygaasqm && $umkkkaqkwugkemce) { $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mwkumwoeyuaukcms, 0); if ($aeiwmoeicwaiwmwu > 0) { $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\147\x65\164\x5f\x72\x65\x70\x6c\x69\143\x61\x5f\x6c\x69\x6e\153", '', $aeiwmoeicwaiwmwu); if ($iwywmkygwewiamwm) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); } } $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { case Constants::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); break; default: case Constants::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); break; } } } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (Constants::wygwikaqsmcmosas === $aiamqeawckcsuaou) { $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; } return $iwwoeyqsyeiikuyk; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->oaaywquaycsmykuc(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\x64\x6f\x77\x6e\154\157\141\144", "\144\x6f\167\x6e\154\157\141\x64\56\x6a\163")->simswskycwagoeqy())->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => ["\147\x65\164\137\x75\x72\x6c" => Ajax::gumsmyccuyyqsmoc, "\147\x65\164\137\x64\157\167\x6e\154\157\x61\144\137\154\x69\156\x6b\x73" => Ajax::kikskooimuqywswe], Constants::eoskkkieowogacws => ["\146\x69\x6c\145\x5f\x6e\x6f\x74\137\x66\157\x75\x6e\144" => __("\106\x69\154\145\40\160\141\x72\141\x6d\145\x74\x65\162\x20\155\x69\163\x73\151\156\147\x2e", PR__CST__FILEFOX)]]); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { $mmeioagwmyscwumo = 1; } else { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq); if ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $owmuuoycwiskaeme = 0; if ($this->weysguygiseoukqw(Setting::akoqkkisyueccwcu)) { $owmuuoycwiskaeme = (int) $this->weysguygiseoukqw(Setting::euioekgyyaegcoqa, 0); } $uqiiskyaukiiasik = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sggkkiiqkekaomig([Constants::uissasisiuymwsmu => $this->weysguygiseoukqw(Setting::gemeksocqsmskcyg), Constants::yeowwkiiyimoykye => [Constants::eqewsqmqmsiocaeg => true, Constants::DURATION => $owmuuoycwiskaeme, "\163\x68\x6f\167\x50\x65\162\x63\145\156\x74\141\x67\145" => true]]); $qookweymeqawmcwo = ["\160\162\157\147\x72\x65\x73\x73\x62\141\162" => $uqiiskyaukiiasik, "\x77\x61\151\164\x5f\145\x6e\141\142\154\145\144" => $this->weysguygiseoukqw(Setting::akoqkkisyueccwcu), "\x73\164\x61\162\164\137\x62\x75\x74\164\x6f\x6e" => $this->weysguygiseoukqw(Setting::qemieaasiccekaui, __("\x53\x74\141\x72\164\x20\104\157\x77\156\x6c\x6f\141\x64", PR__CST__FILEFOX)), "\163\x74\141\162\164\x5f\x6d\x65\163\x73\x61\147\145" => $this->weysguygiseoukqw(Setting::uikuwskagqmcqacm), "\144\x6f\x77\156\154\x6f\x61\x64\x5f\142\x75\x74\164\157\156" => $this->weysguygiseoukqw(Setting::qqsmqwwiioemkiie, __("\104\x6f\167\156\154\157\x61\x64", PR__CST__FILEFOX)), "\x64\157\167\156\x6c\157\x61\x64\x5f\x6d\x65\x73\x73\x61\147\145" => $this->weysguygiseoukqw(Setting::ogckyyegowyqgyma), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce)]; } } return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq)) { $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); if ($umkkkaqkwugkemce && $this->caokeucsksukesyo()->aqasygcsqysmmyke()->sywcyoouayqkqisk($umkkkaqkwugkemce)) { $iyoakscesymascsc = false; } } return $iyoakscesymascsc; } }
