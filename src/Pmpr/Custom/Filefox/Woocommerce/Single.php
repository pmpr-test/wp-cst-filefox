<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0003ea178             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Variable; use WC_Product_Variation; class Single extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\157\157\143\x6f\155\x6d\x65\x72\x63\145\x5f\163\151\156\147\154\145\x5f\160\x72\x6f\x64\x75\143\x74\137\x73\165\x6d\x6d\141\162\171", [$this, "\x61\x69\x75\x6b\x61\x69\161\143\x69\145\x63\x75\x73\x77\x6f\x77"]); } public function aiukaiqciecuswow() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce]); if ($okcscwesammossuq) { $this->iuygowkemiiwqmiw("\143\150\151\154\x64\162\145\x6e", [Constants::geocwaecmeeskuci => $okcscwesammossuq], [Constants::qaacaqioeyiuakeu => true]); } else { if ($usmsssmiougymckk->cmqemkgqoweiwiqu($product)) { $oammesyieqmwuwyi = []; if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce)) { $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); } if ($product instanceof WC_Product_Variable) { foreach ($product->get_available_variations() as $isweyuoisomqyaag) { if ($isweyuoisomqyaag instanceof WC_Product_Variation && $usmsssmiougymckk->cmqemkgqoweiwiqu($isweyuoisomqyaag)) { $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($isweyuoisomqyaag, $omwmuycmeqcqokom); } } } else { $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($product, $omwmuycmeqcqokom); } $this->iuygowkemiiwqmiw("\x64\x6f\x77\x6e\x6c\157\141\x64\163", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __("\x44\x6f\167\156\x6c\x6f\141\x64\163", PR__CST__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } } } } public function kiaeomkeqacsssoy($product, $omwmuycmeqcqokom = null) : array { $qcokcugqceckmigs = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $qcokcugqceckmigs[Constants::iikosyqiawkweouo] = $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom); $qcokcugqceckmigs[Constants::gouqcwikiiygyasc] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); if ($usmsssmiougymckk->sywcyoouayqkqisk($product)) { $qcokcugqceckmigs[Constants::mmeomwsgcemayuuu] = $this->woamsogakkycsqcc($product); } else { $qcokcugqceckmigs[Constants::acymsykymkiewqsy] = $usmsssmiougymckk->owuaywucuaiyocum($product); } return $qcokcugqceckmigs; } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if ($omwmuycmeqcqokom) { $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); } $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ukuccmaooeiuuycs, sprintf(__("\x44\x6f\167\x6e\x6c\157\141\144\x20\x25\x73", PR__CST__FILEFOX), "\x7b\x74\x69\x74\154\145\x7d")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if ($acsweksygkmmgggk instanceof WC_Product_Download && ($cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file()))) { $oqaakomygquqkuag = [Constants::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $casweeiuuwgqsykq[] = [Constants::qgqyauaqwqmqseim => $gaumukogkkgkiiuo->get("\151\155\x67\x2f\146\x69\154\145\55\x74\171\x70\145\57{$acsweksygkmmgggk->get_file_extension()}\x2e\x73\x76\x67"), Constants::ogigqueukwysusii => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()), Constants::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [Constants::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), Constants::ckcuiukmyisueqeo => [Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::TEXT => sprintf(__("\x25\x73\40\x74\x69\x6d\x65\163\40\144\157\x77\x6e\154\157\x61\144\x65\x64", PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(112))], Constants::waguuiqqgsysuukq => [Constants::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, Constants::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]]]; } } return $casweeiuuwgqsykq; } }
