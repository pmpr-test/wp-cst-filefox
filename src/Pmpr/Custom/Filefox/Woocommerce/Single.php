<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c4418964             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Variable; use WC_Product_Variation; class Single extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\x6f\x63\157\155\x6d\x65\162\143\145\x5f\x61\x66\x74\145\x72\137\163\151\156\x67\x6c\x65\x5f\160\x72\x6f\144\x75\x63\x74\137\x73\x75\155\155\x61\162\171", [$this, "\x61\151\165\x6b\141\x69\x71\143\x69\x65\143\x75\x73\167\157\167"]); } public function aiukaiqciecuswow() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); if ($okcscwesammossuq) { $oammesyieqmwuwyi = []; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $oammesyieqmwuwyi[] = $usmsssmiougymckk->get($wcgsoqmmciswkmiq); } $this->iuygowkemiiwqmiw("\x63\x68\x69\x6c\x64\162\x65\x6e", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __("\x56\145\162\163\151\x6f\x6e\163", PR__CST__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } else { if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce)) { $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); } $oammesyieqmwuwyi = []; if ($product instanceof WC_Product_Variable) { foreach ($product->get_available_variations() as $isweyuoisomqyaag) { if (isset($isweyuoisomqyaag[Constants::iowymakmaoaqweoe])) { $isweyuoisomqyaag = $usmsssmiougymckk->get($isweyuoisomqyaag[Constants::iowymakmaoaqweoe]); } if ($isweyuoisomqyaag instanceof WC_Product_Variation && $usmsssmiougymckk->cmqemkgqoweiwiqu($isweyuoisomqyaag)) { $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($isweyuoisomqyaag, $omwmuycmeqcqokom); } } } else { $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($product, $omwmuycmeqcqokom); } $this->iuygowkemiiwqmiw("\x64\x6f\x77\x6e\154\x6f\x61\144\x73", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __("\104\157\167\x6e\154\157\x61\144\x73", PR__CST__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } } } public function kiaeomkeqacsssoy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $qcokcugqceckmigs = $this->woamsogakkycsqcc($product); $qcokcugqceckmigs[Constants::gouqcwikiiygyasc] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $qcokcugqceckmigs[Constants::acymsykymkiewqsy] = $usmsssmiougymckk->owuaywucuaiyocum($product); $qcokcugqceckmigs[Constants::ueasagmikqewqcay] = $usmsssmiougymckk->iimgkucsckeosmmk($product); $qcokcugqceckmigs[Constants::iikosyqiawkweouo] = $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom); return $qcokcugqceckmigs; } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if ($omwmuycmeqcqokom) { $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); } $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product, bool $eysqkuoeaoisuigm = true) : array { $casweeiuuwgqsykq = []; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = $this->weysguygiseoukqw(Setting::ukuccmaooeiuuycs, sprintf(__("\104\157\167\x6e\154\x6f\141\x64\40\45\x73", PR__CST__FILEFOX), "\x7b\x74\x69\x74\x6c\145\x7d")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if ($acsweksygkmmgggk instanceof WC_Product_Download && ($cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file()))) { $oqaakomygquqkuag = [Constants::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $qsqwqsymmqeoqwcu = [Constants::qgqyauaqwqmqseim => $meakksicouekcgoe->aqmcwcyggeiyooyg($this, "\x69\x6d\147\x2f\x66\x69\154\x65\x2d\164\171\160\x65\57{$acsweksygkmmgggk->get_file_extension()}\x2e\x73\166\147"), Constants::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [Constants::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), Constants::ckcuiukmyisueqeo => [Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::TEXT => sprintf(__("\x25\163\x20\x74\151\x6d\x65\163\x20\x64\157\167\x6e\154\157\141\144\x65\144", PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(112))], Constants::waguuiqqgsysuukq => [Constants::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, Constants::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]]]; if ($usmsssmiougymckk->owuaywucuaiyocum($product) > 0) { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x41\144\x64\40\164\x6f\40\103\141\x72\x74", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::sssqeiwoeckqywku; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $usmsssmiougymckk->eimgmimuuycwqeug($product); } else { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x44\157\x77\156\154\x6f\141\x64\40\x46\151\x6c\145", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::msyqysqykouywsua; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()); } if ($eysqkuoeaoisuigm) { return $qsqwqsymmqeoqwcu; } $casweeiuuwgqsykq[] = $qsqwqsymmqeoqwcu; } } return $casweeiuuwgqsykq; } }
