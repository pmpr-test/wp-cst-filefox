<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b1b9fbd             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait RelatedTermsTrait { public function gkyyuggqywmsywoi() { $post = null; $gcqseksiskwueksc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::mswoacegomcucaik); if (empty($gcqseksiskwueksc)) { $gcqseksiskwueksc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::kqigmeickowqiiyy); } if ($gcqseksiskwueksc) { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($gcqseksiskwueksc, Constants::ckmqoekmugkggeym, true); } return $post; } public function oauqscamacmwmyyq($post, $useksmwkuswkwcqg = null) : ?Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!$useksmwkuswkwcqg && $post) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); } $ikgwqyuyckaewsow = [Constants::syuccqmowioeosuc => __('Application', PR__CST__FILEFOX), Constants::MEDIUM => __('Medium', PR__CST__FILEFOX), Constants::oeeqisiiqoswqqmy => __('Material', PR__CST__FILEFOX), Constants::qgciomgukmcwscqw => __('Category', PR__CST__FILEFOX)]; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $yuwymayicwwqiske = 'tax_input'; $icmkaawucgymacsg = null; $oyuqkqayqyqysyse = null; $wymqceaocqooyskc = array_keys($ikgwqyuyckaewsow); $ikqasgququoqeock = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs($useksmwkuswkwcqg); $iqgwcsimagmskkaq = 0; foreach (array_keys($wymqceaocqooyskc) as $momcykaoccoymeig) { $kcsgsyaamuqkciag = $wymqceaocqooyskc[$momcykaoccoymeig]; $oikiwocqusekokue = next($wymqceaocqooyskc); if (!in_array($kcsgsyaamuqkciag, $ikqasgququoqeock, true)) { $oikiwocqusekokue = null; continue; } $meqocwsecsywiiqs = $ikgwqyuyckaewsow[$wymqceaocqooyskc[$momcykaoccoymeig]]; $qiouiwasaauyaaue = []; if ($iqgwcsimagmskkaq === 0 || Constants::MEDIUM === $kcsgsyaamuqkciag || Constants::syuccqmowioeosuc === $kcsgsyaamuqkciag) { $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($kcsgsyaamuqkciag, [Constants::mkucwyayaakigquq => false, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); } else { if ($oyuqkqayqyqysyse && $icmkaawucgymacsg) { $qiouiwasaauyaaue = $this->aiwmwqwgqmyscwwe($kcsgsyaamuqkciag, $icmkaawucgymacsg, $oyuqkqayqyqysyse); } } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kcsgsyaamuqkciag); if ($kesssewsiegssiya) { $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog, false); $aiowsaccomcoikus = $uuyucgkyusckoaeq->mccagaqeagiikkec("{$yuwymayicwwqiske}_{$kcsgsyaamuqkciag}")->usuqmwksoeaayaig("{$yuwymayicwwqiske}[{$kcsgsyaamuqkciag}]")->gswweykyogmsyawy($meqocwsecsywiiqs)->acauweqyyugwisqc($qiouiwasaauyaaue)->mkmssscwmeekwgqo(); if ($oikiwocqusekokue) { $aiowsaccomcoikus->qyucewwiggkyeaso('', "{$yuwymayicwwqiske}_{$oikiwocqusekokue}", true); } if (!$qyucoagsiyeieyiu) { $aiowsaccomcoikus->oikgogcweiiaocka(); } if ($eqgoocgaqwqcimie = $this->yeqawkgiwasigeeu($post, $kcsgsyaamuqkciag, $qyucoagsiyeieyiu)) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); $icmkaawucgymacsg = $kcsgsyaamuqkciag; $oyuqkqayqyqysyse = $eqgoocgaqwqcimie; } else { $icmkaawucgymacsg = null; $oyuqkqayqyqysyse = null; } $ikgwqyuyckaewsow[$kcsgsyaamuqkciag] = $aiowsaccomcoikus; $iqgwcsimagmskkaq++; } } if (!$ikgwqyuyckaewsow) { return null; } return $uuyucgkyusckoaeq->doeuiogekyiwgsgw('taxonomies')->gswweykyogmsyawy(__('Taxonomies', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::cgaumaacsaeauwqy)->ewweaossowcqywaw($ikgwqyuyckaewsow); } public function yeqawkgiwasigeeu($post, $kesssewsiegssiya, bool $qyucoagsiyeieyiu = true) { $eqgoocgaqwqcimie = 0; if ($post) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($post, $kesssewsiegssiya, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); if ($qyucoagsiyeieyiu) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[0] ?? ''; } } return $eqgoocgaqwqcimie; } public function aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew, string $aqykuigiuwmmcieu = Constants::eoaiagsgqsmskugs) : array { $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($kesssewsiegssiya, [Constants::aisguagukaewucii => $aqykuigiuwmmcieu, Constants::mkucwyayaakigquq => false, Constants::cuoyscoiacswuauq => [Constants::ygyiacciqgemekwc => Constants::ieiyckasqmcyekim, [Constants::ascagqcquwgmygkm => $maygkiawicqomkuc, Constants::ciyoccqkiamemcmm => '"' . $dieeqwiqwmwakmew . '"', Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui], [Constants::ascagqcquwgmygkm => $maygkiawicqomkuc, Constants::ciyoccqkiamemcmm => $dieeqwiqwmwakmew, Constants::ykemsyouoqyoaysg => '=']]]); return $this->mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew); } private function mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew) : array { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $sogksuscggsicmac = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { $kuguwoaesuqsqysu = $aoskwucuugeuaeus->igawqaomowicuayw($aokagokqyuysuksm, $maygkiawicqomkuc); if ($kuguwoaesuqsqysu && (is_numeric($kuguwoaesuqsqysu) && $dieeqwiqwmwakmew != $kuguwoaesuqsqysu || is_array($kuguwoaesuqsqysu) && !in_array($dieeqwiqwmwakmew, $kuguwoaesuqsqysu))) { continue; } $okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm, [Constants::aisguagukaewucii => $aqykuigiuwmmcieu, Constants::mkucwyayaakigquq => false]); if ($okcscwesammossuq) { $sogksuscggsicmac[$aokagokqyuysuksm] = [Constants::miceosguuseyyuqe => $iwewcwusemqaiggk, Constants::geocwaecmeeskuci => $this->mycoayosisckwogq($okcscwesammossuq, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew)]; } else { $sogksuscggsicmac[$aokagokqyuysuksm] = $iwewcwusemqaiggk; } } return $sogksuscggsicmac; } }
