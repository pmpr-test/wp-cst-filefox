<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc361e7c14c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Traffic\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Query; use WP_Error; class Daily extends Traffic { public function register() { $this->saemoowcasogykak(IconInterface::weyygumkwiqoimsu)->guiaswksukmgageq(__('Daily Traffic', PR__CST__FILEFOX))->muuwuqssqkaieqge(__('Daily Traffics', PR__CST__FILEFOX)); } public function uwmqacgewuauagai() { parent::uwmqacgewuauagai(); $this->uqeoyqiwywwmsiew(Constants::qiyqwyiiwykeccmo)->acceqyqygswoecwe(8); $this->cquokmemekqqywgi($this->caokeucsksukesyo()->skckwsgymkimyuwo()->qwwuoqeeiyuoyogs(Constants::kumuoysauoagaiiy)->gswweykyogmsyawy(__('Date', PR__CST__FILEFOX))->qcqeqimisiisswky()); } public function iyomucagygcakuqa(string $ymmgciamciieaysq, int $ymkqyawksmqcgsei = 7) : array { $wsqkgswwooewwekw = []; $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $sieuygooysiaiykg = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->gwgmymsuwsceguce(true); for ($ciyackuwsqkoqese = 1; $ciyackuwsqkoqese <= $ymkqyawksmqcgsei; $ciyackuwsqkoqese++) { $mcmcymukmqioukkk = ''; $acuayeeoiwokyomo = ''; $icwuwakguqiwywuu = ''; switch ($ymmgciamciieaysq) { case Constants::kccekmguugamiusg: $skswqqweqiyccuoi = $ciyackuwsqkoqese - 1; $ekasyoagocygouom = date(strtotime("-{$skswqqweqiyccuoi} month"), $sieuygooysiaiykg); $acuayeeoiwokyomo = strtotime($icwkuwimswoisqss->eumamymieckakcck($icwkuwimswoisqss->ekasyoagocygouom($ekasyoagocygouom, 'Y-m-t'))); $mcmcymukmqioukkk = strtotime($icwkuwimswoisqss->eumamymieckakcck($icwkuwimswoisqss->ekasyoagocygouom($ekasyoagocygouom, 'Y-m-01'))); $icwuwakguqiwywuu = $icwkuwimswoisqss->ekasyoagocygouom($ekasyoagocygouom, 'F Y'); break; case Constants::iqaiecywsaysmmkq: $kswwggoumcaykyiy = 7; $skswqqweqiyccuoi = $ciyackuwsqkoqese * $kswwggoumcaykyiy + 1; $yqoeoaasooweocaq = $skswqqweqiyccuoi - $kswwggoumcaykyiy; $mcmcymukmqioukkk = strtotime("-{$skswqqweqiyccuoi} days", $sieuygooysiaiykg); $acuayeeoiwokyomo = strtotime("-{$yqoeoaasooweocaq} days", $sieuygooysiaiykg); $icwuwakguqiwywuu = $ciyackuwsqkoqese === 1 ? __('This Week', PR__CST__FILEFOX) : sprintf(_n('%s week ago', '%s weeks ago', $ciyackuwsqkoqese - 1, PR__CST__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess($ciyackuwsqkoqese - 1)); break; case Constants::wmasmcgmyeoaisoa: $mcmcymukmqioukkk = $acuayeeoiwokyomo = strtotime("-{$ciyackuwsqkoqese} days", $sieuygooysiaiykg); $icwuwakguqiwywuu = $icwkuwimswoisqss->ekasyoagocygouom(date('Y-m-d', $mcmcymukmqioukkk), 'j F'); break; } $oceoauekaygmuoko = [Constants::qescuiwgsyuikume => $icwuwakguqiwywuu, Constants::aqagcwckwecgqyaa => date('Y-m-d 00:00:00', $mcmcymukmqioukkk), Constants::ouuqcauwoymcwkes => date('Y-m-d 23:59:59', $acuayeeoiwokyomo)]; $wsqkgswwooewwekw[$ciyackuwsqkoqese] = $oceoauekaygmuoko; } return $wsqkgswwooewwekw; } public function mqwgqucymgukuyqw($oceoauekaygmuoko, $mqyaskyaekmkegmg, $moqewomugocaueis) { $ygugikkeauqiceoo = 0; $mcmcymukmqioukkk = $oceoauekaygmuoko[Constants::aqagcwckwecgqyaa] ?? ''; $acuayeeoiwokyomo = $oceoauekaygmuoko[Constants::ouuqcauwoymcwkes] ?? ''; if ($mcmcymukmqioukkk && $acuayeeoiwokyomo) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ygugikkeauqiceoo = $this->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::qiyqwyiiwykeccmo, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, [$mcmcymukmqioukkk, $acuayeeoiwokyomo])->wiqiksaowkoeiymu()->yaoukqkouaeeycuy(), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::eggygikowgywcayq, $moqewomugocaueis), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, $mqyaskyaekmkegmg)]); } return $ygugikkeauqiceoo; } public function ccauuimmaouoqkyc($mqyaskyaekmkegmg, $moqewomugocaueis, string $ymmgciamciieaysq, int $ymkqyawksmqcgsei = 7) { $ygugikkeauqiceoo = []; $qgweosiseeogigso = $this->uqeoyqiwywwmsiew(Constants::wwcycgyaiaksckuk)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs); if (isset($qgweosiseeogigso[$mqyaskyaekmkegmg])) { $wsqkgswwooewwekw = $this->iyomucagygcakuqa($ymmgciamciieaysq, $ymkqyawksmqcgsei); foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { $ygugikkeauqiceoo[Constants::uiwqcumqkgikqyue][] = $this->mqwgqucymgukuyqw($oceoauekaygmuoko, $mqyaskyaekmkegmg, $moqewomugocaueis); $ygugikkeauqiceoo[Constants::eoaiagsgqsmskugs][] = $oceoauekaygmuoko[Constants::qescuiwgsyuikume] ?? ''; } $ygugikkeauqiceoo = $this->gwawsqicasqiigqq($ygugikkeauqiceoo); } else { $ygugikkeauqiceoo = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Invalid object type', PR__CST__FILEFOX)); } return $ygugikkeauqiceoo; } public function qkgskiygkagymayy($mqyaskyaekmkegmg, $moqewomugocaueis, int $wyagiqkiooueawus) : array { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ekasyoagocygouom = strtotime("-{$wyagiqkiooueawus} month", current_time('U')); $mcmcymukmqioukkk = $icwkuwimswoisqss->eumamymieckakcck($icwkuwimswoisqss->ekasyoagocygouom($ekasyoagocygouom, 'Y-m-01')); $acuayeeoiwokyomo = $icwkuwimswoisqss->eumamymieckakcck($icwkuwimswoisqss->ekasyoagocygouom($ekasyoagocygouom, 'Y-m-t')); return [Constants::qiyqwyiiwykeccmo => $this->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::qiyqwyiiwykeccmo, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, [$mcmcymukmqioukkk, $acuayeeoiwokyomo])->wiqiksaowkoeiymu()->yaoukqkouaeeycuy(), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::eggygikowgywcayq, $moqewomugocaueis), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, $mqyaskyaekmkegmg)]), Constants::qescuiwgsyuikume => $icwkuwimswoisqss->ekasyoagocygouom($ekasyoagocygouom, 'F Y')]; } public function qcmsiiamkiqscqgi(string $mqyaskyaekmkegmg, string $wocwawaaemuoqmig, string $ymmgciamciieaysq, int $ymkqyawksmqcgsei = 7) { $ygugikkeauqiceoo = []; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wsqkgswwooewwekw = $this->iyomucagygcakuqa($ymmgciamciieaysq, $ymkqyawksmqcgsei); foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { $mcmcymukmqioukkk = $oceoauekaygmuoko[Constants::aqagcwckwecgqyaa] ?? ''; $acuayeeoiwokyomo = $oceoauekaygmuoko[Constants::ouuqcauwoymcwkes] ?? ''; if ($mcmcymukmqioukkk && $acuayeeoiwokyomo) { if ($wocwawaaemuoqmig === 'average') { $eqgoocgaqwqcimie = $this->iekyeyicoyyawomk()->sekueegoyaoicsiq(Constants::qiyqwyiiwykeccmo, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, $mqyaskyaekmkegmg), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, [$mcmcymukmqioukkk, $acuayeeoiwokyomo])->wiqiksaowkoeiymu()->yaoukqkouaeeycuy()]); } else { $gqgemcmoicmgaqie = $eqwoegegiamegqsm->kyckwuuiqwmyoqma()->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, $mqyaskyaekmkegmg))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->amasgqwagaukywgi(Constants::qiyqwyiiwykeccmo)->csyqowowokmwskks()->asykgyemqgqyguei('total_count'))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, [$mcmcymukmqioukkk, $acuayeeoiwokyomo])->wiqiksaowkoeiymu()->yaoukqkouaeeycuy())->yockscoguugkeumq(Constants::eggygikowgywcayq)->sgauksuokoaygayk(Constants::eggygikowgywcayq); switch ($wocwawaaemuoqmig) { case 'best': $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq('total_count')->kgyigewyuumysume()->yogqsokgsqemsuoq()); break; case 'worst': $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq('total_count')->kgyigewyuumysume()->mcgisgoaksmyemyq()); break; } $mksyucucyswaukig = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk($gqgemcmoicmgaqie); $eqgoocgaqwqcimie = $this->mqwgqucymgukuyqw($oceoauekaygmuoko, $mqyaskyaekmkegmg, $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::eggygikowgywcayq)); } $ygugikkeauqiceoo[Constants::uiwqcumqkgikqyue][] = (int) $eqgoocgaqwqcimie; $ygugikkeauqiceoo[Constants::eoaiagsgqsmskugs][] = $oceoauekaygmuoko[Constants::qescuiwgsyuikume] ?? ''; } } return $this->gwawsqicasqiigqq($ygugikkeauqiceoo); } public function mgyoqmwcqymcciyg(string $mqyaskyaekmkegmg, string $ymmgciamciieaysq, Query $gqgemcmoicmgaqie) : array { $suuagcecoyuweoqk = []; $wsqkgswwooewwekw = $this->iyomucagygcakuqa($ymmgciamciieaysq, 1); $mcmcymukmqioukkk = $wsqkgswwooewwekw[1][Constants::aqagcwckwecgqyaa] ?? null; $acuayeeoiwokyomo = $wsqkgswwooewwekw[1][Constants::ouuqcauwoymcwkes] ?? null; if ($mcmcymukmqioukkk && $acuayeeoiwokyomo) { $cwisyquukosussqk = !in_array($ymmgciamciieaysq, [Constants::kccekmguugamiusg, Constants::iqaiecywsaysmmkq], true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::wwcycgyaiaksckuk, $mqyaskyaekmkegmg))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::kumuoysauoagaiiy, [$mcmcymukmqioukkk, $acuayeeoiwokyomo])->wiqiksaowkoeiymu()->yaoukqkouaeeycuy()); if ($cwisyquukosussqk) { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq(Constants::qiyqwyiiwykeccmo)->yogqsokgsqemsuoq()); } else { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->amasgqwagaukywgi(Constants::qiyqwyiiwykeccmo)->csyqowowokmwskks()->asykgyemqgqyguei('total_count'))->yockscoguugkeumq(Constants::eggygikowgywcayq)->sgauksuokoaygayk(Constants::eggygikowgywcayq); } $aiaeegymqoykckgo = $this->iekyeyicoyyawomk()->syugmyosqomgwywi($this->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie)); $suuagcecoyuweoqk = $this->iekyeyicoyyawomk()->cieaqygkucwoqwke($gqgemcmoicmgaqie); } return $suuagcecoyuweoqk; } private function gwawsqicasqiigqq($ygugikkeauqiceoo) { if (isset($ygugikkeauqiceoo[Constants::uiwqcumqkgikqyue], $ygugikkeauqiceoo[Constants::eoaiagsgqsmskugs])) { $ygugikkeauqiceoo[Constants::uiwqcumqkgikqyue] = array_reverse($ygugikkeauqiceoo[Constants::uiwqcumqkgikqyue]); $ygugikkeauqiceoo[Constants::eoaiagsgqsmskugs] = array_reverse($ygugikkeauqiceoo[Constants::eoaiagsgqsmskugs]); } return $ygugikkeauqiceoo; } }
