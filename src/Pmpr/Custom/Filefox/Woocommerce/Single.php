<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795e80fc4619             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Simple; class Single extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\x6d\155\x65\x72\143\145\137\x61\x66\x74\x65\162\x5f\163\x69\156\147\x6c\x65\137\160\162\157\144\x75\143\164\137\x73\x75\x6d\x6d\141\x72\171", [$this, "\x61\x69\165\153\x61\x69\x71\143\x69\x65\143\x75\163\167\x6f\167"]); } public function aiukaiqciecuswow() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); if ($okcscwesammossuq) { $oammesyieqmwuwyi = []; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kkgaogiwoigwywyw = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw(); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $usmsssmiougymckk->get($wcgsoqmmciswkmiq); $gaeqamemwmwsyukm = count($wcgsoqmmciswkmiq->get_downloads()); $gekiwqmekmguicsk = false; $oammesyieqmwuwyi[] = ["\x69\163\137\x66\x65\x61\164\x75\162\x65\144" => $wcgsoqmmciswkmiq->is_featured(), Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm, Constants::ckmqoekmugkggeym => $wcgsoqmmciswkmiq, Constants::qescuiwgsyuikume => $usmsssmiougymckk->qcgakseyaikigqco($wcgsoqmmciswkmiq), Product::qegsskmoyomsgaii => $wcgsoqmmciswkmiq->get_meta(Product::qegsskmoyomsgaii), Constants::sauwwsocmukoaayu => $usmsssmiougymckk->ycqquoiyyuesegsy($wcgsoqmmciswkmiq), Constants::eqkeooqcsscoggia => $wcgsoqmmciswkmiq->get_short_description(), Constants::ckcuiukmyisueqeo => [Constants::kumuoysauoagaiiy => [Constants::qescuiwgsyuikume => __("\106\151\154\x65\x73\40\x55\160\154\x6f\x61\144\x20\104\x61\164\x65", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $omwieegygisoswgw->yekemqwyimcqgeuk($kkgaogiwoigwywyw->ikuqieqosemkwuio($wcgsoqmmciswkmiq->get_date_modified()), $wcgsoqmmciswkmiq->get_date_modified()), Constants::qgqyauaqwqmqseim => IconInterface::qcyaqcamyiuukygg], Constants::qiyqwyiiwykeccmo => [Constants::qgqyauaqwqmqseim => $gaeqamemwmwsyukm > 0 ? IconInterface::uiawkaseyoockksk : IconInterface::kqiaiweasggoiyks, Constants::qescuiwgsyuikume => __("\x46\151\x6c\145\x20\103\x6f\165\x6e\164", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)], "\160\162\x65\166\x69\145\x77" => [Constants::qgqyauaqwqmqseim => $gekiwqmekmguicsk ? IconInterface::cyqogogyqcuimaqc : IconInterface::mmwiumyiokssiuys, Constants::qescuiwgsyuikume => __("\x50\162\145\166\151\145\167", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $gekiwqmekmguicsk ? __("\x48\141\163", PR__CST__FILEFOX) : __("\104\x6f\x65\x73\x20\156\x6f\x74\40\150\141\x76\x65", PR__CST__FILEFOX)], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::qescuiwgsyuikume => __("\104\157\x77\x6e\x6c\x6f\x61\x64\40\103\x6f\x75\x6e\164", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(127)]]]; } $this->iuygowkemiiwqmiw("\143\x68\151\x6c\144\x72\145\x6e", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::oeouaqyskusqoasi => __("\126\x69\x65\x77\40\x26\40\x44\157\x77\156\154\157\x61\144", PR__CST__FILEFOX), Product::qegsskmoyomsgaii => ["\163\x65\145\137\155\x6f\x72\x65" => __("\x74\x6f\x20\x73\145\x65\x20\x6d\x6f\x72\145\x20\x66\165\154\x6c\x20\x6c\x69\163\164\40\x6f\x66\40\x63\150\x61\x6e\147\x65\x73\x2c\40\143\154\151\143\153\x20\157\156\x20\x64\x6f\x77\156\x6c\x6f\x61\144\x20\142\x75\164\164\157\x6e", PR__CST__FILEFOX), Constants::qescuiwgsyuikume => __("\x43\150\141\x6e\147\x65\163\x20\157\146\x20\164\150\151\x73\x20\166\x65\162\163\151\x6f\156", PR__CST__FILEFOX)], Constants::qescuiwgsyuikume => __("\126\x65\x72\x73\151\x6f\156\x73", PR__CST__FILEFOX), Constants::igqkwqsakswkeiog => $this->weysguygiseoukqw(Setting::ogeyqwwiuekcomwk, '')], [Constants::qaacaqioeyiuakeu => true]); } else { if ($product instanceof WC_Product_Simple && $product->is_downloadable()) { if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce)) { $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); } $this->iuygowkemiiwqmiw("\144\157\167\x6e\154\157\x61\x64\x73", ["\x66\162\x65\145\137\x70\x72\x69\x63\145" => __("\106\162\145\x65", PR__CST__FILEFOX), Constants::gouqcwikiiygyasc => $usmsssmiougymckk->iooowgsqoyqseyuu($product), Constants::acymsykymkiewqsy => $usmsssmiougymckk->owuaywucuaiyocum($product), Constants::qescuiwgsyuikume => __("\104\157\167\x6e\x6c\x6f\141\144\163", PR__CST__FILEFOX), Constants::mmeomwsgcemayuuu => $this->woamsogakkycsqcc($product), Constants::ueasagmikqewqcay => $usmsssmiougymckk->iimgkucsckeosmmk($product), Constants::iikosyqiawkweouo => $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom)], [Constants::qaacaqioeyiuakeu => true]); } } } } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if ($omwmuycmeqcqokom) { $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); } $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = $this->weysguygiseoukqw(Setting::ukuccmaooeiuuycs, sprintf(__("\x44\157\x77\x6e\154\157\141\x64\x20\x25\163", PR__CST__FILEFOX), "\x7b\x74\x69\164\154\x65\175")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if ($acsweksygkmmgggk instanceof WC_Product_Download) { $cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file()); if ($cwgqkcumeaswoscu) { $oqaakomygquqkuag = [Constants::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $qsqwqsymmqeoqwcu = [Constants::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [Constants::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), Constants::ckcuiukmyisueqeo => [Constants::yqemseykugmsyeqa => [Constants::qgqyauaqwqmqseim => $meakksicouekcgoe->aqmcwcyggeiyooyg($this, "\x69\155\147\57\x66\x69\154\145\55\164\171\160\x65\57{$acsweksygkmmgggk->get_file_extension()}\56\x73\x76\147"), Constants::TEXT => $acsweksygkmmgggk->get_file_type()], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::TEXT => sprintf(__("\45\163\x20\164\151\x6d\x65\163\x20\x64\157\167\156\x6c\x6f\x61\x64\145\144", PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(112))], Constants::waguuiqqgsysuukq => [Constants::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, Constants::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]], Constants::eqkeooqcsscoggia => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($cwgqkcumeaswoscu) ?: ($smeeaysicaigqymu->cqcsquysckuaewym($cwgqkcumeaswoscu) ?: '')]; if ($usmsssmiougymckk->owuaywucuaiyocum($product) > 0) { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\101\144\x64\40\x74\157\40\x43\x61\162\164", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::sssqeiwoeckqywku; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $usmsssmiougymckk->eimgmimuuycwqeug($product); } else { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x44\x6f\167\156\154\157\141\x64\40\x46\151\154\145", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::msyqysqykouywsua; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()); } $casweeiuuwgqsykq[] = $qsqwqsymmqeoqwcu; } } } return $casweeiuuwgqsykq; } }
