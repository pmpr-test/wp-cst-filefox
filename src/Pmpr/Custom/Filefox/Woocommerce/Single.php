<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3edb5aaf             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Simple; class Single extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('woocommerce_render_parent_children', [$this, 'wcaikkowciucmqcq']); } public function wcaikkowciucmqcq() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); if ($okcscwesammossuq) { $oammesyieqmwuwyi = []; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kkgaogiwoigwywyw = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw(); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $usmsssmiougymckk->get($wcgsoqmmciswkmiq); $gaeqamemwmwsyukm = count($wcgsoqmmciswkmiq->get_downloads()); $gekiwqmekmguicsk = false; $oammesyieqmwuwyi[] = ['is_featured' => $wcgsoqmmciswkmiq->is_featured(), Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm, Constants::ckmqoekmugkggeym => $wcgsoqmmciswkmiq, Constants::qescuiwgsyuikume => $usmsssmiougymckk->qcgakseyaikigqco($wcgsoqmmciswkmiq), Product::qegsskmoyomsgaii => $wcgsoqmmciswkmiq->get_meta(Product::qegsskmoyomsgaii), Constants::sauwwsocmukoaayu => $usmsssmiougymckk->ycqquoiyyuesegsy($wcgsoqmmciswkmiq), Constants::eqkeooqcsscoggia => $wcgsoqmmciswkmiq->get_short_description(), Constants::ckcuiukmyisueqeo => [Constants::kumuoysauoagaiiy => [Constants::qescuiwgsyuikume => __('Files Upload Date', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $omwieegygisoswgw->yekemqwyimcqgeuk($kkgaogiwoigwywyw->ikuqieqosemkwuio($wcgsoqmmciswkmiq->get_date_modified()), $wcgsoqmmciswkmiq->get_date_modified()), Constants::qgqyauaqwqmqseim => IconInterface::qcyaqcamyiuukygg], Constants::qiyqwyiiwykeccmo => [Constants::qgqyauaqwqmqseim => $gaeqamemwmwsyukm > 0 ? IconInterface::uiawkaseyoockksk : IconInterface::kqiaiweasggoiyks, Constants::qescuiwgsyuikume => __('File Count', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)], 'preview' => [Constants::qgqyauaqwqmqseim => $gekiwqmekmguicsk ? IconInterface::cyqogogyqcuimaqc : IconInterface::mmwiumyiokssiuys, Constants::qescuiwgsyuikume => __('Preview', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $gekiwqmekmguicsk ? __('Has', PR__CST__FILEFOX) : __('Does not have', PR__CST__FILEFOX)], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::qescuiwgsyuikume => __('Download Count', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(127)]]]; } $this->iuygowkemiiwqmiw('children', [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::oeouaqyskusqoasi => __('View & Download', PR__CST__FILEFOX), Product::qegsskmoyomsgaii => ['see_more' => __('to see more full list of changes, click on download button', PR__CST__FILEFOX), Constants::qescuiwgsyuikume => __('Changes of this version', PR__CST__FILEFOX)], Constants::igqkwqsakswkeiog => $this->weysguygiseoukqw(Setting::ogeyqwwiuekcomwk, '')], [Constants::qaacaqioeyiuakeu => true]); } else { if ($product instanceof WC_Product_Simple && $product->is_downloadable()) { if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce)) { $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); } $this->iuygowkemiiwqmiw('downloads', ['free_price' => __('Free', PR__CST__FILEFOX), Constants::gouqcwikiiygyasc => $usmsssmiougymckk->iooowgsqoyqseyuu($product), Constants::acymsykymkiewqsy => $usmsssmiougymckk->owuaywucuaiyocum($product), Constants::mmeomwsgcemayuuu => $this->woamsogakkycsqcc($product), Constants::ueasagmikqewqcay => $usmsssmiougymckk->iimgkucsckeosmmk($product), Constants::iikosyqiawkweouo => $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom)], [Constants::qaacaqioeyiuakeu => true]); } } } } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if ($omwmuycmeqcqokom) { $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); } $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = $this->weysguygiseoukqw(Setting::ukuccmaooeiuuycs, sprintf(__('Download %s', PR__CST__FILEFOX), '{title}')); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if ($acsweksygkmmgggk instanceof WC_Product_Download) { $cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file()); if ($cwgqkcumeaswoscu) { $oqaakomygquqkuag = [Constants::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $qsqwqsymmqeoqwcu = [Constants::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [Constants::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), Constants::ckcuiukmyisueqeo => [Constants::yqemseykugmsyeqa => [Constants::qgqyauaqwqmqseim => $meakksicouekcgoe->aqmcwcyggeiyooyg($this, "img/file-type/{$acsweksygkmmgggk->get_file_extension()}.svg"), Constants::TEXT => $acsweksygkmmgggk->get_file_type()], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::TEXT => sprintf(__('%s times downloaded', PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(112))], Constants::waguuiqqgsysuukq => [Constants::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, Constants::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]], Constants::eqkeooqcsscoggia => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($cwgqkcumeaswoscu) ?: ($smeeaysicaigqymu->cqcsquysckuaewym($cwgqkcumeaswoscu) ?: '')]; if ($usmsssmiougymckk->owuaywucuaiyocum($product) > 0) { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __('Add to Cart', PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::sssqeiwoeckqywku; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $usmsssmiougymckk->eimgmimuuycwqeug($product); } else { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __('Download File', PR__CST__FILEFOX); $qsqwqsymmqeoqwcu[Constants::ksiswygussyugiue] = IconInterface::msyqysqykouywsua; $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()); } $casweeiuuwgqsykq[] = $qsqwqsymmqeoqwcu; } } } return $casweeiuuwgqsykq; } }
