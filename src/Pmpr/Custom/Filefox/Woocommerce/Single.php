<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcdd6092ae             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Simple; class Single extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\157\x63\x6f\x6d\155\x65\x72\x63\145\x5f\x61\x66\x74\145\162\x5f\x73\151\x6e\x67\154\x65\137\x70\x72\157\x64\x75\143\x74\137\163\x75\x6d\x6d\141\x72\x79", [$this, "\x61\151\x75\153\141\151\161\x63\x69\x65\x63\x75\x73\x77\x6f\x77"]); } public function aiukaiqciecuswow() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); if ($okcscwesammossuq) { $oammesyieqmwuwyi = []; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kkgaogiwoigwywyw = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw(); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $usmsssmiougymckk->get($wcgsoqmmciswkmiq); $gaeqamemwmwsyukm = count($wcgsoqmmciswkmiq->get_downloads()); $gekiwqmekmguicsk = false; $oammesyieqmwuwyi[] = ["\151\163\x5f\146\145\141\x74\x75\x72\145\x64" => $wcgsoqmmciswkmiq->is_featured(), Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm, Constants::ckmqoekmugkggeym => $wcgsoqmmciswkmiq, Constants::qescuiwgsyuikume => $usmsssmiougymckk->qcgakseyaikigqco($wcgsoqmmciswkmiq), Product::qegsskmoyomsgaii => $wcgsoqmmciswkmiq->get_meta(Product::qegsskmoyomsgaii), Constants::sauwwsocmukoaayu => $usmsssmiougymckk->ycqquoiyyuesegsy($wcgsoqmmciswkmiq), Constants::eqkeooqcsscoggia => $wcgsoqmmciswkmiq->get_short_description(), Constants::ckcuiukmyisueqeo => [Constants::kumuoysauoagaiiy => [Constants::qescuiwgsyuikume => __("\x46\x69\154\x65\x73\x20\x55\160\x6c\x6f\141\144\x20\x44\141\164\145", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $omwieegygisoswgw->yekemqwyimcqgeuk($kkgaogiwoigwywyw->ikuqieqosemkwuio($wcgsoqmmciswkmiq->get_date_modified()), $wcgsoqmmciswkmiq->get_date_modified()), Constants::qgqyauaqwqmqseim => IconInterface::qcyaqcamyiuukygg], Constants::qiyqwyiiwykeccmo => [Constants::qgqyauaqwqmqseim => $gaeqamemwmwsyukm > 0 ? IconInterface::uiawkaseyoockksk : IconInterface::kqiaiweasggoiyks, Constants::qescuiwgsyuikume => __("\x46\151\154\x65\40\103\157\x75\156\x74", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)], "\160\162\x65\x76\151\x65\x77" => [Constants::qgqyauaqwqmqseim => $gekiwqmekmguicsk ? IconInterface::cyqogogyqcuimaqc : IconInterface::mmwiumyiokssiuys, Constants::qescuiwgsyuikume => __("\x50\x72\145\x76\x69\x65\x77", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $gekiwqmekmguicsk ? __("\x48\141\x73", PR__CST__FILEFOX) : __("\x44\x6f\145\163\x20\x6e\157\164\x20\150\141\x76\145", PR__CST__FILEFOX)], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::qescuiwgsyuikume => __("\104\157\x77\156\154\157\x61\x64\40\x43\157\165\x6e\x74", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(127)]]]; } $this->iuygowkemiiwqmiw("\x63\150\x69\x6c\x64\x72\145\156", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::oeouaqyskusqoasi => __("\126\151\x65\x77\x20\46\x20\x44\x6f\167\x6e\154\x6f\x61\x64", PR__CST__FILEFOX), Product::qegsskmoyomsgaii => ["\163\145\x65\137\x6d\157\x72\x65" => __("\x74\x6f\40\x73\145\145\40\155\157\162\x65\x20\146\x75\154\154\x20\x6c\x69\x73\x74\40\x6f\146\40\x63\x68\141\156\x67\145\163\x2c\x20\x63\x6c\x69\x63\153\x20\x6f\x6e\x20\x64\157\x77\156\x6c\157\x61\x64\40\142\x75\164\164\x6f\156", PR__CST__FILEFOX), Constants::qescuiwgsyuikume => __("\103\x68\141\156\147\145\x73\x20\157\x66\x20\164\x68\151\x73\40\166\x65\x72\x73\151\x6f\156", PR__CST__FILEFOX)], Constants::qescuiwgsyuikume => __("\126\x65\x72\163\x69\157\156\x73", PR__CST__FILEFOX), Constants::igqkwqsakswkeiog => $this->weysguygiseoukqw(Setting::ogeyqwwiuekcomwk, '')], [Constants::qaacaqioeyiuakeu => true]); } else { if ($product instanceof WC_Product_Simple && $product->is_downloadable()) { if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce)) { $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); } $this->iuygowkemiiwqmiw("\x64\157\167\156\154\157\141\144\x73", ["\x66\162\x65\145\x5f\x70\162\x69\x63\x65" => __("\x46\x72\x65\145", PR__CST__FILEFOX), Constants::gouqcwikiiygyasc => $usmsssmiougymckk->iooowgsqoyqseyuu($product), Constants::acymsykymkiewqsy => $usmsssmiougymckk->owuaywucuaiyocum($product), Constants::qescuiwgsyuikume => __("\104\x6f\x77\156\x6c\x6f\141\x64\163", PR__CST__FILEFOX), Constants::mmeomwsgcemayuuu => $this->woamsogakkycsqcc($product), Constants::ueasagmikqewqcay => $usmsssmiougymckk->iimgkucsckeosmmk($product), Constants::iikosyqiawkweouo => $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom)], [Constants::qaacaqioeyiuakeu => true]); } } } } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if ($omwmuycmeqcqokom) { $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); } $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = $this->weysguygiseoukqw(Setting::ukuccmaooeiuuycs, sprintf(__("\x44\157\167\x6e\x6c\157\x61\144\40\45\163", PR__CST__FILEFOX), "\173\x74\x69\x74\x6c\145\175")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if ($acsweksygkmmgggk instanceof WC_Product_Download) { $cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file()); if ($cwgqkcumeaswoscu) { $oqaakomygquqkuag = [Constants::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $qsqwqsymmqeoqwcu = [Constants::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [Constants::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), Constants::ckcuiukmyisueqeo => [Constants::yqemseykugmsyeqa => [Constants::qgqyauaqwqmqseim => $meakksicouekcgoe->aqmcwcyggeiyooyg($this, "\x69\155\147\57\x66\x69\x6c\145\x2d\x74\x79\160\145\57{$acsweksygkmmgggk->get_file_extension()}\x2e\163\166\x67"), Constants::TEXT => $acsweksygkmmgggk->get_file_type()], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::TEXT => sprintf(__("\45\163\x20\x74\151\155\145\x73\40\144\x6f\167\156\154\157\x61\144\x65\144", PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(112))], Constants::waguuiqqgsysuukq => [Constants::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, Constants::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]], Constants::eqkeooqcsscoggia => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($cwgqkcumeaswoscu) ?: ($smeeaysicaigqymu->cqcsquysckuaewym($cwgqkcumeaswoscu) ?: '')]; if ($usmsssmiougymckk->owuaywucuaiyocum($product) > 0) { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x41\x64\144\40\x74\x6f\40\x43\x61\x72\x74", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::sssqeiwoeckqywku; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $usmsssmiougymckk->eimgmimuuycwqeug($product); } else { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x44\x6f\167\x6e\154\x6f\x61\144\40\x46\151\x6c\x65", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::msyqysqykouywsua; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()); } $casweeiuuwgqsykq[] = $qsqwqsymmqeoqwcu; } } } return $casweeiuuwgqsykq; } }
