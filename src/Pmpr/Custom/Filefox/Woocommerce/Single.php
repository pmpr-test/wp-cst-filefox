<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a9fe567a38             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Simple; class Single extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\157\143\157\155\x6d\145\x72\143\145\x5f\x61\146\164\x65\x72\x5f\163\151\156\147\x6c\145\x5f\x70\x72\157\144\x75\143\x74\x5f\x73\x75\x6d\x6d\141\162\x79", [$this, "\141\151\x75\153\141\151\x71\143\x69\x65\143\x75\x73\x77\x6f\x77"]); } public function aiukaiqciecuswow() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); if ($okcscwesammossuq) { $oammesyieqmwuwyi = []; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kkgaogiwoigwywyw = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw(); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $usmsssmiougymckk->get($wcgsoqmmciswkmiq); $gaeqamemwmwsyukm = count($wcgsoqmmciswkmiq->get_downloads()); $gekiwqmekmguicsk = false; $oammesyieqmwuwyi[] = ["\151\x73\x5f\146\145\x61\164\x75\162\145\x64" => $wcgsoqmmciswkmiq->is_featured(), Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm, Constants::ckmqoekmugkggeym => $wcgsoqmmciswkmiq, Constants::qescuiwgsyuikume => $usmsssmiougymckk->qcgakseyaikigqco($wcgsoqmmciswkmiq), Product::qegsskmoyomsgaii => $wcgsoqmmciswkmiq->get_meta(Product::qegsskmoyomsgaii), Constants::sauwwsocmukoaayu => $usmsssmiougymckk->ycqquoiyyuesegsy($wcgsoqmmciswkmiq), Constants::eqkeooqcsscoggia => $wcgsoqmmciswkmiq->get_short_description(), Constants::ckcuiukmyisueqeo => [Constants::kumuoysauoagaiiy => [Constants::qescuiwgsyuikume => __("\106\x69\154\x65\x73\x20\x55\160\x6c\x6f\x61\144\x20\104\x61\x74\145", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $omwieegygisoswgw->yekemqwyimcqgeuk($kkgaogiwoigwywyw->ikuqieqosemkwuio($wcgsoqmmciswkmiq->get_date_modified()), $wcgsoqmmciswkmiq->get_date_modified()), Constants::qgqyauaqwqmqseim => IconInterface::qcyaqcamyiuukygg], Constants::qiyqwyiiwykeccmo => [Constants::qgqyauaqwqmqseim => $gaeqamemwmwsyukm > 0 ? IconInterface::uiawkaseyoockksk : IconInterface::kqiaiweasggoiyks, Constants::qescuiwgsyuikume => __("\x46\x69\x6c\145\40\103\x6f\x75\x6e\164", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)], "\x70\162\x65\166\x69\x65\x77" => [Constants::qgqyauaqwqmqseim => $gekiwqmekmguicsk ? IconInterface::cyqogogyqcuimaqc : IconInterface::mmwiumyiokssiuys, Constants::qescuiwgsyuikume => __("\120\162\145\x76\151\145\167", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $gekiwqmekmguicsk ? __("\110\x61\163", PR__CST__FILEFOX) : __("\x44\157\145\x73\40\x6e\157\164\40\150\x61\x76\145", PR__CST__FILEFOX)], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::qescuiwgsyuikume => __("\104\x6f\167\x6e\x6c\157\x61\x64\x20\103\x6f\x75\156\x74", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(127)]]]; } $this->iuygowkemiiwqmiw("\x63\x68\151\x6c\x64\x72\x65\x6e", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::oeouaqyskusqoasi => __("\126\151\145\167\x20\46\x20\104\157\x77\x6e\x6c\x6f\x61\144", PR__CST__FILEFOX), Product::qegsskmoyomsgaii => ["\x73\145\145\137\155\157\162\145" => __("\x74\157\40\163\x65\x65\x20\x6d\157\162\x65\40\146\165\x6c\x6c\40\154\151\x73\164\40\157\x66\x20\143\150\x61\x6e\147\145\163\54\40\143\154\x69\x63\x6b\x20\x6f\x6e\40\144\x6f\x77\156\x6c\x6f\x61\x64\40\x62\165\x74\x74\x6f\156", PR__CST__FILEFOX), Constants::qescuiwgsyuikume => __("\103\x68\141\156\x67\x65\163\x20\157\146\x20\x74\150\151\x73\x20\x76\x65\162\163\151\157\x6e", PR__CST__FILEFOX)], Constants::qescuiwgsyuikume => __("\x56\x65\x72\163\x69\157\156\163", PR__CST__FILEFOX), Constants::igqkwqsakswkeiog => $this->weysguygiseoukqw(Setting::ogeyqwwiuekcomwk, '')], [Constants::qaacaqioeyiuakeu => true]); } else { if ($product instanceof WC_Product_Simple && $product->is_downloadable()) { if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce)) { $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); } $this->iuygowkemiiwqmiw("\144\157\167\x6e\x6c\157\141\144\x73", ["\146\x72\145\145\137\x70\x72\x69\x63\x65" => __("\106\162\x65\145", PR__CST__FILEFOX), Constants::gouqcwikiiygyasc => $usmsssmiougymckk->iooowgsqoyqseyuu($product), Constants::acymsykymkiewqsy => $usmsssmiougymckk->owuaywucuaiyocum($product), Constants::qescuiwgsyuikume => __("\104\x6f\x77\156\154\157\141\x64\163", PR__CST__FILEFOX), Constants::mmeomwsgcemayuuu => $this->woamsogakkycsqcc($product), Constants::ueasagmikqewqcay => $usmsssmiougymckk->iimgkucsckeosmmk($product), Constants::iikosyqiawkweouo => $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom)], [Constants::qaacaqioeyiuakeu => true]); } } } } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if ($omwmuycmeqcqokom) { $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); } $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = $this->weysguygiseoukqw(Setting::ukuccmaooeiuuycs, sprintf(__("\104\x6f\167\156\x6c\157\141\x64\x20\45\x73", PR__CST__FILEFOX), "\173\x74\x69\x74\x6c\x65\175")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if ($acsweksygkmmgggk instanceof WC_Product_Download) { $cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file()); if ($cwgqkcumeaswoscu) { $oqaakomygquqkuag = [Constants::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $qsqwqsymmqeoqwcu = [Constants::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [Constants::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), Constants::ckcuiukmyisueqeo => [Constants::yqemseykugmsyeqa => [Constants::qgqyauaqwqmqseim => $meakksicouekcgoe->aqmcwcyggeiyooyg($this, "\x69\155\147\x2f\x66\151\154\x65\55\164\x79\x70\145\57{$acsweksygkmmgggk->get_file_extension()}\56\x73\x76\x67"), Constants::TEXT => $acsweksygkmmgggk->get_file_type()], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::TEXT => sprintf(__("\x25\163\40\164\x69\155\145\163\x20\x64\157\x77\x6e\154\157\x61\x64\x65\144", PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(112))], Constants::waguuiqqgsysuukq => [Constants::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, Constants::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]], Constants::eqkeooqcsscoggia => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($cwgqkcumeaswoscu) ?: ($smeeaysicaigqymu->cqcsquysckuaewym($cwgqkcumeaswoscu) ?: '')]; if ($usmsssmiougymckk->owuaywucuaiyocum($product) > 0) { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x41\x64\144\40\x74\157\40\103\141\x72\164", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::sssqeiwoeckqywku; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $usmsssmiougymckk->eimgmimuuycwqeug($product); } else { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __("\x44\x6f\167\x6e\154\x6f\x61\144\40\106\x69\154\145", PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::msyqysqykouywsua; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()); } $casweeiuuwgqsykq[] = $qsqwqsymmqeoqwcu; } } } return $casweeiuuwgqsykq; } }
