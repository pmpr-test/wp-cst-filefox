<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86c2c9f8             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Daily; use Pmpr\Module\Salary\Model\Request; class Team extends Model { const ouesgysauomeocqm = 'manager'; const mmwykkacqsucssgc = 'producers'; const ioqucgokmmucaqyq = 'invite_code'; const cmockeoekcciguqa = 'activity_fields'; const geuggqeuigqumyum = 6; public function register() { $this->saemoowcasogykak(IconInterface::quowqmuiikukkkay)->guiaswksukmgageq(__('Team', PR__CST__FILEFOX))->muuwuqssqkaieqge(__('Teams', PR__CST__FILEFOX))->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 10]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CST__FILEFOX)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::ioqucgokmmucaqyq)->gswweykyogmsyawy(__('Invite Code', PR__CST__FILEFOX))->acceqyqygswoecwe(self::geuggqeuigqumyum))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Description', PR__CST__FILEFOX))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::cmockeoekcciguqa)->gswweykyogmsyawy(__('Activity Fields', PR__CST__FILEFOX))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ouesgysauomeocqm)->gswweykyogmsyawy(__('Manager', PR__CST__FILEFOX))->geimymogiqyssawi(Request::class, 'team')->wakqsiacyacmumuw())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::mmwykkacqsucssgc)->gswweykyogmsyawy(__('Producers', PR__CST__FILEFOX))->ckgquisaimmgwuyu(Request::class, 'team_id'))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(Salary::aigwoicquyiqsiuo)->gswweykyogmsyawy(__('Posts Owner', PR__CST__FILEFOX))->ckgquisaimmgwuyu(PostOwner::class))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__CST__FILEFOX))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $iseoqmmuokyweokw = $aoskwucuugeuaeus->ciugwooasaqcywas(Constants::oeeqisiiqoswqqmy, [Constants::mkucwyayaakigquq => false, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ouesgysauomeocqm)->ugquamoakekwyiqg(Request::class))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia))->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::cmockeoekcciguqa)->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::oeeqisiiqoswqqmy)->gswweykyogmsyawy(__('Material', PR__CST__FILEFOX))->acauweqyyugwisqc($iseoqmmuokyweokw)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::aaaesuouquiygige)->gswweykyogmsyawy(__('Categories', PR__CST__FILEFOX))->oikgogcweiiaocka()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::guksqgkoswygwycw)->gswweykyogmsyawy(__('Product Categories', PR__CST__FILEFOX))->oikgogcweiiaocka()->mkmssscwmeekwgqo())); parent::aoqwywcqmoqaukkq(); } public function yeuyyckseoiokmmm($icwicymcioeyeyek, $aokagokqyuysuksm = null) { if (empty($aokagokqyuysuksm) && !isset($icwicymcioeyeyek[self::ioqucgokmmucaqyq])) { $icwicymcioeyeyek[self::ioqucgokmmucaqyq] = $this->ysaeeskgqiwuwaeg(); } return $icwicymcioeyeyek; } private function ysaeeskgqiwuwaeg() : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->gykqksiwukaccoyg(self::geuggqeuigqumyum); } public function acakasgiikmaqusw($ksuesqoiqqiiyqsq) : array { $kkqqyeokeqassuqk = $smgwuyiwyccmgosk = 0; $keymykcqkcgcoaqg = $skakeokiiioqaawa = [Constants::qescuiwgsyuikume => '', Constants::qiyqwyiiwykeccmo => 0]; $wgkogsmkwskskgsw = $this->mwyqswsaeeewsosm($ksuesqoiqqiiyqsq); if ($wgkogsmkwskskgsw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $smgwuyiwyccmgosk = Request::symcgieuakksimmu()->iekyeyicoyyawomk()->asskucacysemeoiu($eqwoegegiamegqsm->gwumowwouoisykio([Salary::mwisuqgywiccyykw => $wgkogsmkwskskgsw])); $akeaeawiwiakcmkq = 0; $amqqsucmysiwkmcc = 30; if ($smgwuyiwyccmgosk > 0) { $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $keymykcqkcgcoaqg = $aomkuyuqaiswycso->qkgskiygkagymayy(Salary::susokqyqcmqomwqk, $wgkogsmkwskskgsw, 2); $skakeokiiioqaawa = $aomkuyuqaiswycso->qkgskiygkagymayy(Salary::susokqyqcmqomwqk, $wgkogsmkwskskgsw, 1); $ogykqcoqeikemomy = $keymykcqkcgcoaqg[Constants::qiyqwyiiwykeccmo] ?? 0; $swqmgcusuqgmuyiy = $skakeokiiioqaawa[Constants::qiyqwyiiwykeccmo] ?? 0; $akeaeawiwiakcmkq = 70 * max(0, ($swqmgcusuqgmuyiy - $ogykqcoqeikemomy) / ($smgwuyiwyccmgosk * max(1, $ogykqcoqeikemomy))); } $kkqqyeokeqassuqk = $amqqsucmysiwkmcc + max(0, min(70, $akeaeawiwiakcmkq)); } return [self::mmwykkacqsucssgc => $smgwuyiwyccmgosk, Constants::iqycswgaoqiuweym => number_format($kkqqyeokeqassuqk, 1), Constants::sokiwgiwgagukgsg => $keymykcqkcgcoaqg, Constants::asmooogmgyecqqka => $skakeokiiioqaawa]; } public function ikeqwkqssgswssqq() : array { $ieqakkskiceiewsi = []; return $ieqakkskiceiewsi; } public function gmciscoygqeoaaok(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Salary::susokqyqcmqomwqk => 0, Constants::meksegaoamowuwoq => 0, Constants::aisguagukaewucii => Constants::oeeqisiiqoswqqmy]); $ksuesqoiqqiiyqsq = $ywmkwiwkosakssii[Salary::susokqyqcmqomwqk]; $mkucggyaiaukqoce = $ywmkwiwkosakssii[Constants::meksegaoamowuwoq]; if (empty($ksuesqoiqqiiyqsq) && $mkucggyaiaukqoce) { $ksuesqoiqqiiyqsq = $this->coyaqyocmqmmgeew($mkucggyaiaukqoce); } $sogksuscggsicmac = []; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ikgwqyuyckaewsow = $this->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, self::cmockeoekcciguqa, [], false); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $uycaaqiuaswwyamg = (int) ($aiowsaccomcoikus[Constants::oeeqisiiqoswqqmy] ?? 0); switch ($aqykuigiuwmmcieu) { case Constants::cmckeoksigiaqykc: case Constants::guksqgkoswygwycw: $eqgoocgaqwqcimie = $aiowsaccomcoikus[Constants::guksqgkoswygwycw] ?? []; break; case Constants::qgciomgukmcwscqw: case Constants::aaaesuouquiygige: $eqgoocgaqwqcimie = $aiowsaccomcoikus[Constants::aaaesuouquiygige] ?? []; break; case Constants::oeeqisiiqoswqqmy: $eqgoocgaqwqcimie = $aiowsaccomcoikus[Constants::oeeqisiiqoswqqmy] ?? []; break; default: $eqgoocgaqwqcimie = $aiowsaccomcoikus; } if (is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = (int) $eqgoocgaqwqcimie; } $sogksuscggsicmac[$uycaaqiuaswwyamg] = $eqgoocgaqwqcimie; } return $sogksuscggsicmac; } public function gkqoequsgyikesue($wgkogsmkwskskgsw, string $aqykuigiuwmmcieu = Constants::yauicucwkgqyygas) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = []; switch ($aqykuigiuwmmcieu) { case Constants::meksegaoamowuwoq: case Constants::yauicucwkgqyygas: $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->ssiyoimagsskwsoi([$eqwoegegiamegqsm->megqywqeuquawkim(Salary::mwisuqgywiccyykw, $wgkogsmkwskskgsw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc)], Constants::meksegaoamowuwoq); if ($sogksuscggsicmac && $aqykuigiuwmmcieu === Constants::meksegaoamowuwoq) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); foreach ($sogksuscggsicmac as $momcykaoccoymeig => $ycoeoaakqyskgykq) { $sogksuscggsicmac[$momcykaoccoymeig] = $yoiguusocukqeayg->get($ycoeoaakqyskgykq, true); } } break; } return $sogksuscggsicmac; } public function coyaqyocmqmmgeew($mkucggyaiaukqoce, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { static $sckcawooqqyywucy = []; $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); if (isset($sckcawooqqyywucy[$aqykuigiuwmmcieu][$ycoeoaakqyskgykq])) { return $sckcawooqqyywucy[$aqykuigiuwmmcieu][$ycoeoaakqyskgykq]; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $yomoyogwgsemgwky = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Salary::mwisuqgywiccyykw)->amwwousckkqyweok(), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc)]); $ksuesqoiqqiiyqsq = null; if ($yomoyogwgsemgwky) { $wgkogsmkwskskgsw = $kueeocmceokoouqa->waecsyqmwascmqoa($yomoyogwgsemgwky, Salary::mwisuqgywiccyykw, 0); $ksuesqoiqqiiyqsq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($wgkogsmkwskskgsw); } else { $scacuycqigggysoo = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Salary::mwisuqgywiccyykw)->wegeyaguowmkqiac(), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc)]); if ($scacuycqigggysoo) { $ksuesqoiqqiiyqsq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($kueeocmceokoouqa->mwyqswsaeeewsosm($scacuycqigggysoo), self::ouesgysauomeocqm); } } if ($ksuesqoiqqiiyqsq) { switch ($aqykuigiuwmmcieu) { case Constants::gouqcwikiiygyasc: $ksuesqoiqqiiyqsq = $this->mwyqswsaeeewsosm($ksuesqoiqqiiyqsq); break; } } $sckcawooqqyywucy[$aqykuigiuwmmcieu][$ycoeoaakqyskgykq] = $ksuesqoiqqiiyqsq; return $ksuesqoiqqiiyqsq; } public function kgsmeyeecmqugkqc($ysmaisucicqeigqu, string $aqykuigiuwmmcieu = Constants::yauicucwkgqyygas) { $sogksuscggsicmac = null; $ksuesqoiqqiiyqsq = $this->coyaqyocmqmmgeew($ysmaisucicqeigqu); $wweeaomsuoqskysy = $this->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, self::ouesgysauomeocqm, 0); switch ($aqykuigiuwmmcieu) { case Constants::meksegaoamowuwoq: case Constants::yauicucwkgqyygas: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $scacuycqigggysoo = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($wweeaomsuoqskysy); if ($scacuycqigggysoo) { $sogksuscggsicmac = $kueeocmceokoouqa->waecsyqmwascmqoa($scacuycqigggysoo, Constants::meksegaoamowuwoq, 0); if ($aqykuigiuwmmcieu === Constants::meksegaoamowuwoq) { $sogksuscggsicmac = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac, true); } } break; } return $sogksuscggsicmac; } }
