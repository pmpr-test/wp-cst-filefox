<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a374470c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Traffic; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use Pmpr\Custom\Filefox\Salary\Model\Team; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Aggregate; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Daily; use Pmpr\Module\Salary\Model\Request; class Traffic extends Container { const swwikgysyiekmiiw = 50; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu(Process::awcueascsucimqmy, [$this, 'yimwwkwgaemskaig'])->qcsmikeggeemccuu(Process::yeakqieeiwmucoky, [$this, 'uuuwwoaakiksiekq'], 10, 2)->qcsmikeggeemccuu(Process::wwkkmkiecmqeesec, [$this, 'kggymscgeiaoegqa'], 10, 3)->qcsmikeggeemccuu(Process::ioecsywaaqyimmug, [$this, 'quwwsyssqgciwquy'], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('ff_traffic_get_post_daily_count', [$this, 'ecosakkeiockamgw'], 10, 3)->aqaqisyssqeomwom('ff_traffic_get_post_aggregate_count', [$this, 'qmiyeyaiuscqcywm'], 10, 2); $this->aqaqisyssqeomwom('ff_traffic_get_team_daily_count', [$this, 'koacycmiawokwssm'], 10, 3)->aqaqisyssqeomwom('ff_traffic_get_team_aggregate_count', [$this, 'giqmaycosekykuao'], 10, 2); $this->aqaqisyssqeomwom('ff_traffic_get_request_daily_count', [$this, 'wiuwuegikmwyugiw'], 10, 3)->aqaqisyssqeomwom('ff_traffic_get_request_aggregate_count', [$this, 'cmceicoauusmaucq'], 10, 2); $this->aqaqisyssqeomwom('metadata_get_all_items', [$this, 'ocqswkkikyyagwiu'])->aqaqisyssqeomwom('metadata_update_traffic', [$this, 'eeuisswaweoqsmom'], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->gaawugksaskamooe()) { Widget::symcgieuakksimmu(); } } public function init() { $ueiegogoeyqoiewa = $this->weysguygiseoukqw(Setting::yyyysqggcikwcyus, ''); if ($ueiegogoeyqoiewa) { Process::symcgieuakksimmu()->wwomeauyemiugssa(); } if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg('fetch-data') == 1) { $this->yimwwkwgaemskaig(); } } public function ocqswkkikyyagwiu($kuguwoaesuqsqysu) : array { $kuguwoaesuqsqysu['traffic'] = __('Post Traffic', PR__CST__FILEFOX); return $kuguwoaesuqsqysu; } public function eeuisswaweoqsmom($ugugimquukqwogge, $post = null) { if ($post && $ugugimquukqwogge instanceof Metadata) { if (empty($ugugimquukqwogge->qooeaookuemoqecm())) { $oksmgoaugwkygkqs = Aggregate::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kqgcmeuakqsgeaka = $oksmgoaugwkygkqs->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::eggygikowgywcayq, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, Constants::mswoacegomcucaik)]); $ugugimquukqwogge->iygyugseyaqwywyg($oksmgoaugwkygkqs->cokuiuygigcwcoms($kqgcmeuakqsgeaka, Constants::qiyqwyiiwykeccmo, 0)); } $ugugimquukqwogge->saemoowcasogykak(IconInterface::cyqogogyqcuimaqc); } return $ugugimquukqwogge; } public function yimwwkwgaemskaig() { $ocogsiouoiuuguym = date('Y-m-d', strtotime('yesterday', current_time('U'))); $this->kggymscgeiaoegqa($ocogsiouoiuuguym, 1); } public function qywycoummgiekwky($sogksuscggsicmac, $yeacayasgueouoqc) : bool { $ymiyawysimukkoso = $sogksuscggsicmac[Constants::ycuusiweasqygwiw] ?? []; return (int) ($ymiyawysimukkoso[Constants::yusuiaeueqwieqqq] ?? 1) <= (int) $yeacayasgueouoqc; } public function kggymscgeiaoegqa($ocogsiouoiuuguym, $suaemuyiacqyugsm) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $sugmyysiukmaaoqq = Aggregate::symcgieuakksimmu(); $sogksuscggsicmac = $this->wqcmqkuskacoecsi($ocogsiouoiuuguym, $suaemuyiacqyugsm); if (!empty($sogksuscggsicmac)) { $oammesyieqmwuwyi = $sogksuscggsicmac[Constants::qwumqqyuasyskkkc] ?? []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (isset($igqsaukqcqscimok[Constants::qiyqwyiiwykeccmo], $igqsaukqcqscimok[Constants::auqoykcmsiauccao]) && $igqsaukqcqscimok[Constants::qiyqwyiiwykeccmo] > self::swwikgysyiekmiiw) { $iwywmkygwewiamwm = $igqsaukqcqscimok[Constants::auqoykcmsiauccao]; $gaeqamemwmwsyukm = $igqsaukqcqscimok[Constants::qiyqwyiiwykeccmo]; $gcqseksiskwueksc = $wgkqagumoowawogg->ssacaeeassumyuws($iwywmkygwewiamwm); if ($gcqseksiskwueksc) { $icwicymcioeyeyek = [Constants::squoamkioomemiyi => $aomkuyuqaiswycso::kaqkcwwmucykacug, Constants::kumuoysauoagaiiy => $ocogsiouoiuuguym, Constants::eggygikowgywcayq => $gcqseksiskwueksc, Constants::wwcycgyaiaksckuk => Constants::mswoacegomcucaik]; $gqgemcmoicmgaqie = $eqwoegegiamegqsm->gwumowwouoisykio($icwicymcioeyeyek); $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] = $gaeqamemwmwsyukm; if (!$aomkuyuqaiswycso->iekyeyicoyyawomk()->exists($gqgemcmoicmgaqie)) { $aomkuyuqaiswycso->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek, true); $euoccqsqokgmccku = [Constants::squoamkioomemiyi => $aomkuyuqaiswycso::kaqkcwwmucykacug, Constants::eggygikowgywcayq => $gcqseksiskwueksc, Constants::wwcycgyaiaksckuk => Constants::mswoacegomcucaik]; $geookyiieqiecymy = $sugmyysiukmaaoqq->iekyeyicoyyawomk()->oqomcmyuuakigusk($eqwoegegiamegqsm->gwumowwouoisykio($euoccqsqokgmccku)); if ($geookyiieqiecymy) { $icwicymcioeyeyek[$sugmyysiukmaaoqq->kumuygiiqswoyasy()] = $sugmyysiukmaaoqq->mwyqswsaeeewsosm($geookyiieqiecymy); } $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] = (int) $aomkuyuqaiswycso->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::qiyqwyiiwykeccmo, $eqwoegegiamegqsm->gwumowwouoisykio($euoccqsqokgmccku)); $sugmyysiukmaaoqq->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek, true); } } } } if (!$this->qywycoummgiekwky($sogksuscggsicmac, $suaemuyiacqyugsm)) { $this->kggymscgeiaoegqa($ocogsiouoiuuguym, ++$suaemuyiacqyugsm); } else { $this->quwwsyssqgciwquy($ocogsiouoiuuguym, 1); } } } public function quwwsyssqgciwquy($ocogsiouoiuuguym, $suaemuyiacqyugsm) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->megqywqeuquawkim(Salary::mwisuqgywiccyykw)->amwwousckkqyweok(), $eqwoegegiamegqsm->megqywqeuquawkim(Salary::mwisuqgywiccyykw, '0')->maqiysyuqmwcqoig('>')]); $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => 10]); $okycmmskgswewacc = $sogksuscggsicmac[Constants::qwumqqyuasyskkkc] ?? []; if ($okycmmskgswewacc) { $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); $ygeusocssmausoyo = $kueeocmceokoouqa->kumuygiiqswoyasy(true); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa); $gyycewisqacsckaw = $aomkuyuqaiswycso->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::qiyqwyiiwykeccmo, [$eqwoegegiamegqsm->owackeyiuiikegqg(Constants::eggygikowgywcayq, $oquqsamoqkequssa->myywwqkyiwawwquy(Constants::kqigmeickowqiiyy))->aqkyoweegqwuwsgw($oquqsamoqkequssa->cokoiaeeomgssqgy()), $eqwoegegiamegqsm->owackeyiuiikegqg($oquqsamoqkequssa->myywwqkyiwawwquy($oquqsamoqkequssa::cmiegiycgiucucgs), $ygeusocssmausoyo)->aqkyoweegqwuwsgw($kueeocmceokoouqa->cokoiaeeomgssqgy()), $eqwoegegiamegqsm->megqywqeuquawkim($ygeusocssmausoyo, $ousomaowqseoamse), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, Constants::mswoacegomcucaik), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, $ocogsiouoiuuguym)->maqiysyuqmwcqoig('=')]); $this->imiusoskcmgsmeso($ousomaowqseoamse, Constants::qgeesceacsmeqacu, $ocogsiouoiuuguym, $gyycewisqacsckaw); } if (!$this->qywycoummgiekwky($sogksuscggsicmac, $suaemuyiacqyugsm)) { $this->quwwsyssqgciwquy($ocogsiouoiuuguym, ++$suaemuyiacqyugsm); } else { $this->uuuwwoaakiksiekq($ocogsiouoiuuguym, 1); } } } public function uuuwwoaakiksiekq($ocogsiouoiuuguym, $suaemuyiacqyugsm) { $mmsugugggqciomke = Team::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $sogksuscggsicmac = $mmsugugggqciomke->iekyeyicoyyawomk()->aeggeuqycwawueqy(null, [Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => 10]); $iaseaecuamsukckm = $sogksuscggsicmac[Constants::qwumqqyuasyskkkc] ?? []; if ($iaseaecuamsukckm) { $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); foreach ($iaseaecuamsukckm as $ksuesqoiqqiiyqsq) { $wgkogsmkwskskgsw = $mmsugugggqciomke->mwyqswsaeeewsosm($ksuesqoiqqiiyqsq); $gyycewisqacsckaw = $aomkuyuqaiswycso->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::qiyqwyiiwykeccmo, [$eqwoegegiamegqsm->owackeyiuiikegqg(Constants::eggygikowgywcayq, $kueeocmceokoouqa->kumuygiiqswoyasy(true))->aqkyoweegqwuwsgw($kueeocmceokoouqa->cokoiaeeomgssqgy()), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa->myywwqkyiwawwquy(Salary::mwisuqgywiccyykw), $wgkogsmkwskskgsw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, Constants::qgeesceacsmeqacu), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, $ocogsiouoiuuguym)->maqiysyuqmwcqoig(Constants::esgoecsaucwswuia)]); $this->imiusoskcmgsmeso($wgkogsmkwskskgsw, Salary::susokqyqcmqomwqk, $ocogsiouoiuuguym, $gyycewisqacsckaw); } if ($this->qywycoummgiekwky($sogksuscggsicmac, $suaemuyiacqyugsm)) { $this->uuuwwoaakiksiekq($ocogsiouoiuuguym, ++$suaemuyiacqyugsm); } } } private function imiusoskcmgsmeso($moqewomugocaueis, $mqyaskyaekmkegmg, $ocogsiouoiuuguym, $gyycewisqacsckaw) { if ($gyycewisqacsckaw > 0) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $oksmgoaugwkygkqs = Aggregate::symcgieuakksimmu(); $wuukccswskwueseo = [Constants::kumuoysauoagaiiy => $ocogsiouoiuuguym, Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $mqyaskyaekmkegmg]; $wskykeyysimiyqem = $aomkuyuqaiswycso->iekyeyicoyyawomk()->oqomcmyuuakigusk($eqwoegegiamegqsm->gwumowwouoisykio($wuukccswskwueseo)); if ($wskykeyysimiyqem) { $wuukccswskwueseo[$aomkuyuqaiswycso->kumuygiiqswoyasy()] = $aomkuyuqaiswycso->mwyqswsaeeewsosm($wskykeyysimiyqem); } $wuukccswskwueseo[Constants::qiyqwyiiwykeccmo] = $gyycewisqacsckaw; $sogksuscggsicmac = $aomkuyuqaiswycso->gssiscqyqsacmeca()->gsegsiocqmsoayii($wuukccswskwueseo); if (!is_wp_error($sogksuscggsicmac)) { $yscgssmcqeggmscm = [Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $mqyaskyaekmkegmg]; $icwswoaucsgwyosq = $aomkuyuqaiswycso->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::qiyqwyiiwykeccmo, $eqwoegegiamegqsm->gwumowwouoisykio($yscgssmcqeggmscm)); $iciokqwygacookse = $oksmgoaugwkygkqs->iekyeyicoyyawomk()->oqomcmyuuakigusk($eqwoegegiamegqsm->gwumowwouoisykio($yscgssmcqeggmscm)); if ($iciokqwygacookse) { $yscgssmcqeggmscm[$oksmgoaugwkygkqs->kumuygiiqswoyasy()] = $oksmgoaugwkygkqs->mwyqswsaeeewsosm($iciokqwygacookse); } $yscgssmcqeggmscm[Constants::qiyqwyiiwykeccmo] = $icwswoaucsgwyosq; $sogksuscggsicmac = $oksmgoaugwkygkqs->gssiscqyqsacmeca()->gsegsiocqmsoayii($yscgssmcqeggmscm); return !is_wp_error($sogksuscggsicmac); } } return false; } public function ecosakkeiockamgw($gaeqamemwmwsyukm, $post, $ocogsiouoiuuguym) : int { return $this->muwomcoygiyeyoki($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post), Constants::mswoacegomcucaik, $ocogsiouoiuuguym); } public function qmiyeyaiuscqcywm($gaeqamemwmwsyukm, $post) : int { return $this->kseuwmgasmemyyec($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post), Constants::mswoacegomcucaik); } public function koacycmiawokwssm($gaeqamemwmwsyukm, $wgkogsmkwskskgsw, $ocogsiouoiuuguym) : int { return $this->muwomcoygiyeyoki($wgkogsmkwskskgsw, Salary::susokqyqcmqomwqk, $ocogsiouoiuuguym); } public function giqmaycosekykuao($gaeqamemwmwsyukm, $wgkogsmkwskskgsw) : int { return $this->kseuwmgasmemyyec($wgkogsmkwskskgsw, Salary::susokqyqcmqomwqk); } public function wiuwuegikmwyugiw($gaeqamemwmwsyukm, $ousomaowqseoamse, $ocogsiouoiuuguym) : int { return $this->muwomcoygiyeyoki($ousomaowqseoamse, Constants::qgeesceacsmeqacu, $ocogsiouoiuuguym); } public function cmceicoauusmaucq($gaeqamemwmwsyukm, $ousomaowqseoamse) : int { return $this->kseuwmgasmemyyec($ousomaowqseoamse, Constants::qgeesceacsmeqacu); } private function kseuwmgasmemyyec($moqewomugocaueis, $mqyaskyaekmkegmg) : int { $gaeqamemwmwsyukm = 0; if ($moqewomugocaueis && $mqyaskyaekmkegmg) { $sugmyysiukmaaoqq = Aggregate::symcgieuakksimmu(); $mksyucucyswaukig = $sugmyysiukmaaoqq->iekyeyicoyyawomk()->oqomcmyuuakigusk($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $mqyaskyaekmkegmg])); $gaeqamemwmwsyukm = (int) $sugmyysiukmaaoqq->waecsyqmwascmqoa($mksyucucyswaukig, Constants::qiyqwyiiwykeccmo, 0); } return $gaeqamemwmwsyukm; } private function muwomcoygiyeyoki($moqewomugocaueis, $mqyaskyaekmkegmg, $ocogsiouoiuuguym) : int { $gaeqamemwmwsyukm = 0; if ($moqewomugocaueis && $mqyaskyaekmkegmg && $ocogsiouoiuuguym) { $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $mksyucucyswaukig = $aomkuyuqaiswycso->iekyeyicoyyawomk()->oqomcmyuuakigusk($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::CREATED_AT => $ocogsiouoiuuguym, Constants::wwcycgyaiaksckuk => $mqyaskyaekmkegmg])); $gaeqamemwmwsyukm = (int) $aomkuyuqaiswycso->waecsyqmwascmqoa($mksyucucyswaukig, Constants::qiyqwyiiwykeccmo, 0); } return $gaeqamemwmwsyukm; } private function wqcmqkuskacoecsi(string $ocogsiouoiuuguym, int $suaemuyiacqyugsm) : array { return $this->yyccsyausiqesawq('get-list-by-site', [Constants::aqagcwckwecgqyaa => "{$ocogsiouoiuuguym} 00:00:00", Constants::ouuqcauwoymcwkes => "{$ocogsiouoiuuguym} 23:59:59", Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => $this->weysguygiseoukqw(Setting::cswsmwiyyqiogsui), Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::swwikgysyiekmiiw)]); } private function yyccsyausiqesawq(string $mkomwsiykqigmqca, array $eyagkkkqkwcuygso = []) : array { $icwicymcioeyeyek = []; $ueiegogoeyqoiewa = (string) $this->weysguygiseoukqw(Setting::yyyysqggcikwcyus, ''); if ($ueiegogoeyqoiewa) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $ueiegogoeyqoiewa = untrailingslashit($ueiegogoeyqoiewa) . "/wp-json/pmpr/v1/api-mediator/gsc-traffic/{$mkomwsiykqigmqca}"; $eyagkkkqkwcuygso[Constants::wqekaoqqacecmuyg] = 'filefox'; $eyagkkkqkwcuygso[Constants::sygmkaeayiiouiwm] = $eiicaiwgqkgsekce->cmaecekuqkwmemms('PR_API_MEDIATOR_TOKEN'); $keccaugmemegoimu = $eiicaiwgqkgsekce->ooeyomkwieykuywo($ueiegogoeyqoiewa, [Constants::mgayauuimqisiyqq => $eyagkkkqkwcuygso]); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu)) { $sogksuscggsicmac = $eiicaiwgqkgsekce->weyscqicysskoama($keccaugmemegoimu) ?? []; if (isset($sogksuscggsicmac[Constants::uiwqcumqkgikqyue])) { $icwicymcioeyeyek = $sogksuscggsicmac[Constants::uiwqcumqkgikqyue]; } } } return $icwicymcioeyeyek; } }
