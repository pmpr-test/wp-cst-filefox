<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693699aab             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\CPT; use Pmpr\Common\Cover\Breadcrumb\Generator; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Traits\CommonTrait; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Traits\RelatedTermsTrait; use WP_Query; class Product extends Container { use CommonTrait, RelatedTermsTrait; const qegsskmoyomsgaii = 'change_log'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'], PHP_INT_MAX)->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('pre_get_posts', [$this, 'okaumkccucyaeqig'])->qcsmikeggeemccuu('add_meta_boxes', [$this, 'ggmmaqwqaywwiuui'], 10, 999)->qcsmikeggeemccuu('manage_product_posts_custom_column', [$this, 'egqkcyeqowwyiamc'], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('post_type_link', [$this, 'qymcsmswgweiemyc'], 10, 2)->cecaguuoecmccuse('product_type_selector', [$this, 'qkqaeiiimyuqoyug'])->cecaguuoecmccuse('woocommerce_product_get_image', [$this, 'yuwguaiuoukawwem'], 10, 4)->cecaguuoecmccuse('wpseo_robots_array', [$this, 'mswccymsoewwmyqc'], 10, 2)->cecaguuoecmccuse('manage_edit-product_columns', [$this, 'oiseyeeuumyawocm'], 0)->cecaguuoecmccuse('wpseo_posts_where', [$this, 'yoiuyycowamiccoa'], 10, 2)->cecaguuoecmccuse('register_post_type_args', [$this, 'sswqwqusocsismiu'], 10, 2); $this->cecaguuoecmccuse('woocommerce_is_sold_individually', '__return_true'); $this->cecaguuoecmccuse('wp_unique_post_slug', [$this, 'iwaiawaoseywiwyy'], 10, 6)->cecaguuoecmccuse('wp_unique_post_slug_is_bad_hierarchical_slug', [$this, 'omoosgyqmkauseek'], 10, 4); $this->aqaqisyssqeomwom('breadcrumb_add_item', [$this, 'csaymuooaeyuasee'], 10, 2); } public function init() { $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->aimosgcaukumakge('^download/(.+?)/?$', 'index.php?product=$matches[1]', 'top'); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); $cqcqsgykasiqwowi->ycewygugskisecuo(Constants::qgciomgukmcwscqw, Constants::oguseymmyyoyaako); } public function yuwguaiuoukawwem($mcqieaigyeeyaksm, $product, $oiegiwogmwmawkeo, $wisgiwskwawciiee) { return $mcqieaigyeeyaksm; } public function qkqaeiiimyuqoyug(array $qgeeqyucwycemwmo) : array { unset($qgeeqyucwycemwmo[Constants::saigsamygcyickiw], $qgeeqyucwycemwmo[Constants::usmqkiimwsukwsmm], $qgeeqyucwycemwmo[Constants::ykmuwoysogkekswg]); return $qgeeqyucwycemwmo; } public function qymcsmswgweiemyc($iwywmkygwewiamwm, $post) { if ($this->eikmwwusgumqyika($post)) { $kmiiouceokmmgqow = $this->caokeucsksukesyo()->wikusamwomuogoau()->ewswusimyeosaogm('product_base'); if ($kmiiouceokmmgqow) { $kmiiouceokmmgqow = str_replace('/', '', $kmiiouceokmmgqow); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc("/{$kmiiouceokmmgqow}/", "/download/", $iwywmkygwewiamwm); } } return $iwywmkygwewiamwm; } public function iwaiawaoseywiwyy($aaokuekaimigoyue, $gcqseksiskwueksc, $qisccquumwewokoy, $useksmwkuswkwcqg, $yugqsecigucogiei, $oseueaowekmmocoq) { global $wpdb; if ($aaokuekaimigoyue !== $oseueaowekmmocoq && Constants::oguseymmyyoyaako === $useksmwkuswkwcqg) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aoeusogyssuaoasg = $eqwoegegiamegqsm->prepare("SELECT ID FROM {$wpdb->posts} WHERE post_name = %s AND post_type = %s AND ID != %d", $oseueaowekmmocoq, $useksmwkuswkwcqg, $gcqseksiskwueksc); if ($post = $eqwoegegiamegqsm->qaumqeeagueuqkcg($aoeusogyssuaoasg)) { $uycaaqiuaswwyamg = $seumokooiykcomco->kckogqkiycqeumoa($gcqseksiskwueksc, Constants::oeeqisiiqoswqqmy); if ($uycaaqiuaswwyamg) { $cowkygcmkoqyccua = false; if ($iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($post, Constants::oeeqisiiqoswqqmy)) { if ($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk) != $aoskwucuugeuaeus->iooowgsqoyqseyuu($uycaaqiuaswwyamg)) { $cowkygcmkoqyccua = true; } } if ($cowkygcmkoqyccua) { $aaokuekaimigoyue = $oseueaowekmmocoq; } } } } return $aaokuekaimigoyue; } public function omoosgyqmkauseek($kewccwwoguaqgske, $aaokuekaimigoyue, $useksmwkuswkwcqg, $yugqsecigucogiei) { if (!$kewccwwoguaqgske && Constants::oguseymmyyoyaako === $useksmwkuswkwcqg) { } return $kewccwwoguaqgske; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { switch ($qgoqiacsiccwoawi) { case Constants::oeeqisiiqoswqqmy: case Constants::syuccqmowioeosuc: if ($uyuaosigqymaqsaa = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($gcqseksiskwueksc, $qgoqiacsiccwoawi, [Constants::yewiqemgmmucemey => true])) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $momcykaoccoymeig = 1; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { echo $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk)); if ($momcykaoccoymeig < count($uyuaosigqymaqsaa)) { echo ", "; } $momcykaoccoymeig++; } } break; } } public function oiseyeeuumyawocm($wkkweuacukumqmya) { if (is_array($wkkweuacukumqmya)) { $wkkweuacukumqmya[Constants::oeeqisiiqoswqqmy] = __('Material', PR__CST__FILEFOX); $wkkweuacukumqmya[Constants::syuccqmowioeosuc] = __('Application', PR__CST__FILEFOX); } return $wkkweuacukumqmya; } public function ggmmaqwqaywwiuui($useksmwkuswkwcqg, $post) { if (Constants::oguseymmyyoyaako === $useksmwkuswkwcqg) { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->iaekyqikwgmkcsok('pageparentdiv', $useksmwkuswkwcqg, Constants::qayiiikwusguoask); } } public function yoiuyycowamiccoa($gqgemcmoicmgaqie, $useksmwkuswkwcqg) { global $wpdb; if (Constants::oguseymmyyoyaako === $useksmwkuswkwcqg) { $gqgemcmoicmgaqie = sprintf('AND %s.post_parent = 0', $wpdb->posts); } return $gqgemcmoicmgaqie; } public function okaumkccucyaeqig($gqgemcmoicmgaqie) { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if (!$mumyimcwkaemyyue->goecwaaykqoaaagg() && $owaoeyikmqaeegma->kgkwyuuwwyoskcsq($gqgemcmoicmgaqie) && ($mumyimcwkaemyyue->gouusicsisumuiei() || $mumyimcwkaemyyue->qmssqeyayicowkgy(Constants::oeeqisiiqoswqqmy) || $this->caokeucsksukesyo()->aqasygcsqysmmyke()->omuogooguicuqewu() || $mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw())) { $this->caokeucsksukesyo()->skckwsgymkimyuwo()->ccwowuakmqoemoem($gqgemcmoicmgaqie, [Constants::isukysauqkiecswi => 0]); } return $gqgemcmoicmgaqie; } public function mswccymsoewwmyqc($uomewyckeuqoqocu, $owgumcsyqsamiemg) { if ($this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!empty($seumokooiykcomco->ygqycmmkoiuocoia($seumokooiykcomco->iooowgsqoyqseyuu()))) { $uomewyckeuqoqocu['index'] = 'noindex'; $uomewyckeuqoqocu['follow'] = 'follow'; } } return $uomewyckeuqoqocu; } public function csaymuooaeyuasee($igqsaukqcqscimok, $eaekkwggowaaogiu) { if ($igqsaukqcqscimok instanceof PageInfo && $eaekkwggowaaogiu instanceof Generator) { if ($this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm()) { if (Constants::oguseymmyyoyaako === $igqsaukqcqscimok->gueasuouwqysmomu() && Constants::uouymeyqasaeckso === $igqsaukqcqscimok->asuigsqoowmekwok()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($uycaaqiuaswwyamg = $seumokooiykcomco->kckogqkiycqeumoa($seumokooiykcomco->get(), Constants::oeeqisiiqoswqqmy, [Constants::yewiqemgmmucemey => true])) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $igqsaukqcqscimok = $eaekkwggowaaogiu->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($uycaaqiuaswwyamg), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($uycaaqiuaswwyamg), false); } } else { if (Constants::qgciomgukmcwscqw === $igqsaukqcqscimok->gueasuouwqysmomu() && Constants::gmmygyiecgmggaam === $igqsaukqcqscimok->asuigsqoowmekwok()) { $igqsaukqcqscimok = null; } } } else { if (Constants::oguseymmyyoyaako === $igqsaukqcqscimok->gueasuouwqysmomu() && Constants::uouymeyqasaeckso === $igqsaukqcqscimok->asuigsqoowmekwok() && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::oeeqisiiqoswqqmy)) { $igqsaukqcqscimok = null; } } } return $igqsaukqcqscimok; } public function sswqwqusocsismiu($ywmkwiwkosakssii, $ymqmyyeuycgmigyo) : array { if (Constants::oguseymmyyoyaako === $ymqmyyeuycgmigyo) { $ywmkwiwkosakssii[Constants::gooeqsoiiiooeeky][] = 'page-attributes'; $ywmkwiwkosakssii[Constants::ikagyegqaweawkkc] = true; } return $ywmkwiwkosakssii; } public function yeyiguyegmmyusea() { $useksmwkuswkwcqg = Constants::oguseymmyyoyaako; if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($useksmwkuswkwcqg)) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->gkyyuggqywmsywoi(); $omwmuycmeqcqokom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey('parent_id'); if (empty($omwmuycmeqcqokom)) { $omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($post); } $geyaiaooguuumkie = $uuyucgkyusckoaeq->scyscgskcwukckyy("{$useksmwkuswkwcqg}_custom_data")->gswweykyogmsyawy(__('Custom Data', PR__CST__FILEFOX))->qewcwaikmqqqseem()->kwcoiysqqkqsugqo(); if (empty($omwmuycmeqcqokom)) { $geyaiaooguuumkie->aucimgwswmgaocae($this->oauqscamacmwmyyq($post, $useksmwkuswkwcqg)); } else { $geyaiaooguuumkie->aucimgwswmgaocae($uuyucgkyusckoaeq->doeuiogekyiwgsgw('change_log')->gswweykyogmsyawy(__('Change Logs', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::egueqigeewosqmqu)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::qegsskmoyomsgaii)->gswweykyogmsyawy(__('Change Log', PR__CST__FILEFOX))->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->uouyygwcgsmygaee(Constants::TEXT)->qsecygiycssgacqs(2)))); } $geyaiaooguuumkie->pknsqyeeymygoqqu($useksmwkuswkwcqg)->register(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $uuyucgkyusckoaeq->scyscgskcwukckyy('productparentdiv')->pknsqyeeymygoqqu($useksmwkuswkwcqg)->qqqycgoaysysgiqm()->meskiqimkaimwksw()->gswweykyogmsyawy($cskucqcumqsyimye->uikgwcuascgeissw($useksmwkuswkwcqg, Constants::iikosyqiawkweouo))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec('parent_id')->ccwowuakmqoemoem([Constants::isukysauqkiecswi => 0])->gswweykyogmsyawy(__('Parent', PR__CST__FILEFOX))->ukqywcsoogkyoaoa($useksmwkuswkwcqg)->iygyugseyaqwywyg($omwmuycmeqcqokom))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws('menu_order')->gswweykyogmsyawy(__('Order', PR__CST__FILEFOX))->escqqisecooswqgo()->eyygsasuqmommkua(0)->iygyugseyaqwywyg($seumokooiykcomco->ygwimyogyaqgumam('menu_order', $post)))->register(); } } }
