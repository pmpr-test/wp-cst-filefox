<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0c4b985             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Simple; class Single extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_product_tabs', [$this, 'kwkwwucyimoyigyi']); } public function kwkwwucyimoyigyi($ywoucyskcquysiwc) { global $product; $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); if ($umkkkaqkwugkemce) { $okcscwesammossuq = $this->mmoaikqueyiwcesm($umkkkaqkwugkemce); $oyuqsmeuqiumemqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(Product::qegsskmoyomsgaii, $umkkkaqkwugkemce); if ($oyuqsmeuqiumemqg || !empty($okcscwesammossuq)) { $ywoucyskcquysiwc['change_logs'] = [Constants::qescuiwgsyuikume => __('Changes', PR__CST__FILEFOX), Constants::iuqumwggccmcuyem => 10, Constants::wwgusigoaksqmwsm => [$this, 'qkecgakeyqikqwmo']]; } if (!empty($okcscwesammossuq)) { $ywoucyskcquysiwc['versions'] = [Constants::qescuiwgsyuikume => __('Available Versions', PR__CST__FILEFOX), Constants::iuqumwggccmcuyem => 11, Constants::wwgusigoaksqmwsm => [$this, 'ummaiywwwkckgyum']]; } } return $ywoucyskcquysiwc; } public function mmoaikqueyiwcesm($umkkkaqkwugkemce) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); } public function ummaiywwwkckgyum() { global $product; if ($product instanceof WC_Product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::isukysauqkiecswi => $umkkkaqkwugkemce], Constants::oyaoekcogwkcekcc); $oammesyieqmwuwyi = []; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kkgaogiwoigwywyw = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw(); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $usmsssmiougymckk->get($wcgsoqmmciswkmiq); $gaeqamemwmwsyukm = count($wcgsoqmmciswkmiq->get_downloads()); $gekiwqmekmguicsk = false; $oammesyieqmwuwyi[] = ['is_featured' => $wcgsoqmmciswkmiq->is_featured(), Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm, Constants::ckmqoekmugkggeym => $wcgsoqmmciswkmiq, Constants::qescuiwgsyuikume => $usmsssmiougymckk->qcgakseyaikigqco($wcgsoqmmciswkmiq), Product::qegsskmoyomsgaii => $wcgsoqmmciswkmiq->get_meta(Product::qegsskmoyomsgaii), Constants::sauwwsocmukoaayu => $usmsssmiougymckk->ycqquoiyyuesegsy($wcgsoqmmciswkmiq), Constants::eqkeooqcsscoggia => $wcgsoqmmciswkmiq->get_short_description(), Constants::ckcuiukmyisueqeo => [Constants::kumuoysauoagaiiy => [Constants::qescuiwgsyuikume => __('Files Upload Date', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $omwieegygisoswgw->yekemqwyimcqgeuk($kkgaogiwoigwywyw->ikuqieqosemkwuio($wcgsoqmmciswkmiq->get_date_modified()), $wcgsoqmmciswkmiq->get_date_modified()), Constants::qgqyauaqwqmqseim => IconInterface::qcyaqcamyiuukygg], Constants::qiyqwyiiwykeccmo => [Constants::qgqyauaqwqmqseim => $gaeqamemwmwsyukm > 0 ? IconInterface::uiawkaseyoockksk : IconInterface::kqiaiweasggoiyks, Constants::qescuiwgsyuikume => __('File Count', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)], 'preview' => [Constants::qgqyauaqwqmqseim => $gekiwqmekmguicsk ? IconInterface::cyqogogyqcuimaqc : IconInterface::mmwiumyiokssiuys, Constants::qescuiwgsyuikume => __('Preview', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $gekiwqmekmguicsk ? __('Has', PR__CST__FILEFOX) : __('Does not have', PR__CST__FILEFOX)], Constants::kucuwimmakgiieom => [Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::qescuiwgsyuikume => __('Download Count', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(127)]]]; } $this->iuygowkemiiwqmiw('tabs/versions', [Constants::qescuiwgsyuikume => __('Available Versions', PR__CST__FILEFOX), Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Product::qegsskmoyomsgaii => ['see_more' => __('to see more full list of changes, click on download button', PR__CST__FILEFOX), Constants::qescuiwgsyuikume => __('Changes of this version', PR__CST__FILEFOX)], Constants::oeouaqyskusqoasi => __('View & Download', PR__CST__FILEFOX), Constants::igqkwqsakswkeiog => $this->weysguygiseoukqw(Setting::ogeyqwwiuekcomwk, '')], [Constants::qaacaqioeyiuakeu => true]); } } public function qkecgakeyqikqwmo() { global $product; if ($product instanceof WC_Product) { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = ''; $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); $oyuqsmeuqiumemqg = $seumokooiykcomco->igawqaomowicuayw(Product::qegsskmoyomsgaii, $umkkkaqkwugkemce); if (empty($oyuqsmeuqiumemqg)) { $yuwoymiuqkccqsus = true; $okcscwesammossuq = $this->mmoaikqueyiwcesm($umkkkaqkwugkemce); if (!empty($okcscwesammossuq)) { $oyuqsmeuqiumemqg = []; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $kqagasmwymmuiksq = $seumokooiykcomco->igawqaomowicuayw(Constants::auugqowqueaocgsu, $wcgsoqmmciswkmiq); $wggyiigmegawawsc = $seumokooiykcomco->igawqaomowicuayw(Product::qegsskmoyomsgaii, $wcgsoqmmciswkmiq); if ($kqagasmwymmuiksq && $wggyiigmegawawsc) { $oyuqsmeuqiumemqg[] = [Constants::qescuiwgsyuikume => sprintf(__('Version %s - %s', PR__CST__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess($kqagasmwymmuiksq), $seumokooiykcomco->squyiyimquqicqke('j F Y', $umkkkaqkwugkemce)), Constants::auugqowqueaocgsu => $kqagasmwymmuiksq, Constants::qwumqqyuasyskkkc => $wggyiigmegawawsc]; } } } if ($oyuqsmeuqiumemqg) { $meqocwsecsywiiqs = __('Changes', PR__CST__FILEFOX); } $oyuqsmeuqiumemqg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oyuqsmeuqiumemqg, Constants::auugqowqueaocgsu, Constants::omaksceqmigeaoko); } else { $yuwoymiuqkccqsus = false; $kqagasmwymmuiksq = $seumokooiykcomco->igawqaomowicuayw(Constants::auugqowqueaocgsu, $umkkkaqkwugkemce); $meqocwsecsywiiqs = sprintf(__('Changes of %s', PR__CST__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess($kqagasmwymmuiksq)); } if ($oyuqsmeuqiumemqg) { $this->iuygowkemiiwqmiw('tabs/change_logs', ['multiple' => $yuwoymiuqkccqsus, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::qwumqqyuasyskkkc => $oyuqsmeuqiumemqg], [Constants::qaacaqioeyiuakeu => true]); } } } }
