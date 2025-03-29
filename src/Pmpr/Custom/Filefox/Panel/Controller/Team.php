<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853bc7c761             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use Pmpr\Custom\Filefox\Salary\Model\Team as Model; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Aggregate; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Daily; use Pmpr\Module\Salary\Model\Request; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Team extends Controller { public function __construct() { $this->rest_base = 'team'; parent::__construct(); } public function register_routes() { $this->register('/get', [Constants::wwgusigoaksqmwsm => [$this, 'emuyyyamcqkeecoi']]); $this->register('/get-by-code', [Constants::wwgusigoaksqmwsm => [$this, 'awgmyaaceyycyaki']]); $this->register('/get-join-fields', [Constants::wwgusigoaksqmwsm => [$this, 'uayeaiwqeyuyecwk']]); $this->register('/check-code', [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, 'seeeuukuamcwiymk']]); $this->register('/join', [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, 'join']]); $this->register('/get-posts', [Constants::wwgusigoaksqmwsm => [$this, 'iyssgoiwgwygeacg']]); $this->register('/get-manager', [Constants::wwgusigoaksqmwsm => [$this, 'amosaeggmeksgwea']]); $this->register('/get-producers', [Constants::wwgusigoaksqmwsm => [$this, 'gkqoequsgyikesue']]); $this->register('/get-metadata', [Constants::wwgusigoaksqmwsm => [$this, 'kymakekgqcqyqgmy']]); } public function emuyyyamcqkeecoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->kcuqasmkogakwgqu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = [Salary::susokqyqcmqomwqk => $keccaugmemegoimu[Salary::mwisuqgywiccyykw], Constants::eyqgmoumkowegyse => $keccaugmemegoimu[Constants::eyqgmoumkowegyse], Constants::qgeesceacsmeqacu => $keccaugmemegoimu[PostOwner::cmiegiycgiucucgs]]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kymakekgqcqyqgmy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->kcuqasmkogakwgqu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $wgkogsmkwskskgsw = $keccaugmemegoimu[Salary::mwisuqgywiccyykw] ?? 0; $swqwqwmwseiessaw = Model::symcgieuakksimmu()->acakasgiikmaqusw($wgkogsmkwskskgsw); $qwqyoimasiuqciyk = $swqwqwmwseiessaw[Constants::sokiwgiwgagukgsg]; $smgwuyiwyccmgosk = $swqwqwmwseiessaw[Model::mmwykkacqsucssgc]; $yuaomukemsoukgey = $swqwqwmwseiessaw[Constants::asmooogmgyecqqka]; $kkqqyeokeqassuqk = $swqwqwmwseiessaw[Constants::iqycswgaoqiuweym]; $keccaugmemegoimu = [Constants::qwumqqyuasyskkkc => ['prev_month_traffic' => [Constants::qescuiwgsyuikume => sprintf('%s (%s)', __('Previous period traffic', PR__CST__FILEFOX), $qwqyoimasiuqciyk[Constants::qescuiwgsyuikume]), Constants::ciyoccqkiamemcmm => $qwqyoimasiuqciyk[Constants::qiyqwyiiwykeccmo]], 'current_month_traffic' => [Constants::qescuiwgsyuikume => sprintf('%s (%s)', __('Current period traffic', PR__CST__FILEFOX), $yuaomukemsoukgey[Constants::qescuiwgsyuikume]), Constants::ciyoccqkiamemcmm => $yuaomukemsoukgey[Constants::qiyqwyiiwykeccmo]], 'members_count' => [Constants::qescuiwgsyuikume => __('Team users count', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $smgwuyiwyccmgosk]], Constants::syomkiqgogwyuiyw => ['suffix_text' => __('My Share', PR__CST__FILEFOX), Constants::TEXT => $kkqqyeokeqassuqk / 10, 'postfix_text' => __('From the net sales revenue of each team file', PR__CST__FILEFOX)]]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amosaeggmeksgwea(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->kcuqasmkogakwgqu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $mmsugugggqciomke = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ksuesqoiqqiiyqsq = $keccaugmemegoimu[Salary::susokqyqcmqomwqk]; $wweeaomsuoqskysy = (int) $mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, $mmsugugggqciomke::ouesgysauomeocqm); if ($wweeaomsuoqskysy) { $scacuycqigggysoo = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($wweeaomsuoqskysy); $kuguwoaesuqsqysu = []; if ($wweeaomsuoqskysy === (int) $keccaugmemegoimu[PostOwner::cmiegiycgiucucgs]) { $kuguwoaesuqsqysu = [$mmsugugggqciomke::ioqucgokmmucaqyq => [Constants::qescuiwgsyuikume => __('Team Entry Code', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, $mmsugugggqciomke::ioqucgokmmucaqyq)]]; } $eqscwouqqskoswcq = $kueeocmceokoouqa->waecsyqmwascmqoa($scacuycqigggysoo, Constants::meksegaoamowuwoq); $keccaugmemegoimu = [Salary::susokqyqcmqomwqk => $mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, Constants::qescuiwgsyuikume), Constants::NAME => $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($eqscwouqqskoswcq, Constants::cuyqkgecokgmcwqu, true), Constants::ceaooaoacwwcuoqm => $this->caokeucsksukesyo()->issssuygyewuaswa()->quasyaqmmikeyoag($eqscwouqqskoswcq), Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('This team has no manager.', PR__CST__FILEFOX)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gkqoequsgyikesue(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->kcuqasmkogakwgqu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea] = false; $wgkogsmkwskskgsw = $keccaugmemegoimu[Salary::mwisuqgywiccyykw]; $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Salary::mwisuqgywiccyykw => $wgkogsmkwskskgsw, Constants::ciywsqoeiymemsys => Constants::cwiummueqsucqayc])); $keccaugmemegoimu = $kueeocmceokoouqa->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); $oksmgoaugwkygkqs = Aggregate::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ycoeoaakqyskgykq = $kueeocmceokoouqa->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::meksegaoamowuwoq, 0); $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($igqsaukqcqscimok); $uoiyqmsewicueqma = $oquqsamoqkequssa->iekyeyicoyyawomk()->asskucacysemeoiu($eqwoegegiamegqsm->gwumowwouoisykio([$oquqsamoqkequssa::cmiegiycgiucucgs => $ousomaowqseoamse, $oquqsamoqkequssa::mwisuqgywiccyykw => $wgkogsmkwskskgsw])); $kqgcmeuakqsgeaka = $oksmgoaugwkygkqs->iekyeyicoyyawomk()->oqomcmyuuakigusk($eqwoegegiamegqsm->gwumowwouoisykio([Constants::eggygikowgywcayq => $ousomaowqseoamse, Constants::wwcycgyaiaksckuk => Constants::qgeesceacsmeqacu])); $muocgugcqiewywag = ['post_count' => sprintf(_n('%s Post', '%s Posts', $uoiyqmsewicueqma, PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uoiyqmsewicueqma)), Constants::meksegaoamowuwoq => $yoiguusocukqeayg->ygwimyogyaqgumam($ycoeoaakqyskgykq), 'all_traffic' => $oksmgoaugwkygkqs->cokuiuygigcwcoms($kqgcmeuakqsgeaka, Constants::qiyqwyiiwykeccmo, 0), 'last_month_traffic' => Daily::symcgieuakksimmu()->qkgskiygkagymayy($ousomaowqseoamse, Constants::qgeesceacsmeqacu, 1)[Constants::qiyqwyiiwykeccmo]]; $igqsaukqcqscimok = $kueeocmceokoouqa->scqakcemaqsqkema($igqsaukqcqscimok); if ($muocgugcqiewywag) { $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function iyssgoiwgwygeacg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->kcuqasmkogakwgqu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $gqgemcmoicmgaqie = []; $emwagqamysmyeigc = false; $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); switch ($keccaugmemegoimu[Constants::eyqgmoumkowegyse]) { case Salary::icygkcucieasceuk: $emwagqamysmyeigc = true; $gqgemcmoicmgaqie[$oquqsamoqkequssa::mwisuqgywiccyykw] = $keccaugmemegoimu[$oquqsamoqkequssa::mwisuqgywiccyykw]; break; case Salary::emceseoyeswkikuu: $gqgemcmoicmgaqie[$oquqsamoqkequssa::cmiegiycgiucucgs] = $keccaugmemegoimu[$oquqsamoqkequssa::cmiegiycgiucucgs]; break; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $oquqsamoqkequssa->iekyeyicoyyawomk()->kqewyqqqiyiouaou($eqwoegegiamegqsm->gwumowwouoisykio($gqgemcmoicmgaqie)); $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea] = false; $keccaugmemegoimu = $oquqsamoqkequssa->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $kcugcsqiuqaomqom = []; $okycmmskgswewacc = []; $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $oksmgoaugwkygkqs = Aggregate::symcgieuakksimmu(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $gcqseksiskwueksc = $oquqsamoqkequssa->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::kqigmeickowqiiyy); if ($gcqseksiskwueksc) { $post = $seumokooiykcomco->get($gcqseksiskwueksc, Constants::ckmqoekmugkggeym, true); if ($post) { $kqgcmeuakqsgeaka = $oksmgoaugwkygkqs->iekyeyicoyyawomk()->oqomcmyuuakigusk($eqwoegegiamegqsm->gwumowwouoisykio([Constants::eggygikowgywcayq => $gcqseksiskwueksc, Constants::wwcycgyaiaksckuk => Constants::mswoacegomcucaik])); $muocgugcqiewywag = [Constants::qescuiwgsyuikume => $this->caokeucsksukesyo()->owgcciayoweymuws()->kogyygyqqyqcioeg($seumokooiykcomco->qcgakseyaikigqco($post), 100), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::agamkomsaiquemks => $seumokooiykcomco->squyiyimquqicqke(null, $post), 'all_traffic' => $oksmgoaugwkygkqs->cokuiuygigcwcoms($kqgcmeuakqsgeaka, Constants::qiyqwyiiwykeccmo, 0), 'this_month_traffic' => $aomkuyuqaiswycso->qkgskiygkagymayy($gcqseksiskwueksc, Constants::mswoacegomcucaik, 1)[Constants::qiyqwyiiwykeccmo]]; if ($emwagqamysmyeigc) { $ousomaowqseoamse = $oquqsamoqkequssa->waecsyqmwascmqoa($igqsaukqcqscimok, $oquqsamoqkequssa::cmiegiycgiucucgs); if (!isset($okycmmskgswewacc[$ousomaowqseoamse])) { $okycmmskgswewacc[$ousomaowqseoamse] = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($ousomaowqseoamse); } $qgciakuqggmiywuk = $okycmmskgswewacc[$ousomaowqseoamse] ?? null; $ycoeoaakqyskgykq = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Constants::meksegaoamowuwoq, 0); if ($ycoeoaakqyskgykq) { if (!isset($kcugcsqiuqaomqom[$ycoeoaakqyskgykq])) { $kcugcsqiuqaomqom[$ycoeoaakqyskgykq] = $yoiguusocukqeayg->get($ycoeoaakqyskgykq, true); } $mkucggyaiaukqoce = $kcugcsqiuqaomqom[$ycoeoaakqyskgykq] ?? null; $muocgugcqiewywag[Constants::iwascisiiokuackw] = $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce); } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function uqwkammwsiuiuioc(WP_REST_Request $aqmwamyiwgeeymqa) { $cwqccmkuqegcemuk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::vswoiouoaykswgym); if ($cwqccmkuqegcemuk) { $mmsugugggqciomke = Model::symcgieuakksimmu(); $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc(strtoupper($cwqccmkuqegcemuk), $mmsugugggqciomke::ioqucgokmmucaqyq); if ($ksuesqoiqqiiyqsq) { $wgkogsmkwskskgsw = $mmsugugggqciomke->mwyqswsaeeewsosm($ksuesqoiqqiiyqsq); $ycoeoaakqyskgykq = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($ycoeoaakqyskgykq, Constants::meksegaoamowuwoq); if (!$qgciakuqggmiywuk) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Sorry you have no request yet.', PR__CST__FILEFOX)); } else { $caycmooqeaeumesy = null; $ccsoggoqocaksmio = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Salary::mwisuqgywiccyykw, 0); if ($ccsoggoqocaksmio) { $caycmooqeaeumesy = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($ccsoggoqocaksmio); } if ($caycmooqeaeumesy) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('You are currently a member of %s team.', PR__CST__FILEFOX), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, Constants::qescuiwgsyuikume)))); } else { $scacuycqigggysoo = $mmsugugggqciomke->iekyeyicoyyawomk()->iscemaoqqckmkago($mmsugugggqciomke::ouesgysauomeocqm, $ksuesqoiqqiiyqsq); $oueqmgygagwgissk = $kueeocmceokoouqa->waecsyqmwascmqoa($scacuycqigggysoo, Constants::meksegaoamowuwoq); if ($oueqmgygagwgissk && (int) $oueqmgygagwgissk === (int) $ycoeoaakqyskgykq) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('You already registered as %s on this team.', PR__CST__FILEFOX), __('Content Manager', PR__CST__FILEFOX))); } $sogksuscggsicmac = [$wgkogsmkwskskgsw, $ksuesqoiqqiiyqsq, $oueqmgygagwgissk, $qgciakuqggmiywuk]; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('There is no team with entered code.', PR__CST__FILEFOX)); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } public function seeeuukuamcwiymk(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->uqwkammwsiuiuioc($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$wgkogsmkwskskgsw, $ksuesqoiqqiiyqsq, $oueqmgygagwgissk] = $keccaugmemegoimu; $smgwuyiwyccmgosk = 0; $scuqwqiqyekewcoq = []; $mmsugugggqciomke = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($oueqmgygagwgissk) { $scuqwqiqyekewcoq[$mmsugugggqciomke::ouesgysauomeocqm] = [Constants::qescuiwgsyuikume => __('Team Manager', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($oueqmgygagwgissk)]; $smgwuyiwyccmgosk = 1; } $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $gaeqamemwmwsyukm = $smgwuyiwyccmgosk + $kueeocmceokoouqa->iekyeyicoyyawomk()->asskucacysemeoiu($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::ciywsqoeiymemsys => Constants::cwiummueqsucqayc, Salary::mwisuqgywiccyykw => $wgkogsmkwskskgsw])); $scuqwqiqyekewcoq['members'] = [Constants::qescuiwgsyuikume => __('Members Count', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => sprintf(__('%s people', PR__CST__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess($gaeqamemwmwsyukm))]; $scuqwqiqyekewcoq[Constants::CREATED_AT] = [Constants::qescuiwgsyuikume => __('Start of Activity', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $mmsugugggqciomke->cokuiuygigcwcoms($ksuesqoiqqiiyqsq, Constants::CREATED_AT)]; $scuqwqiqyekewcoq[Constants::vswoiouoaykswgym] = [Constants::qescuiwgsyuikume => __('Membership code', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, $mmsugugggqciomke::ioqucgokmmucaqyq)]; $qqwmisgwmosogkcs = $mmsugugggqciomke->cokuiuygigcwcoms($ksuesqoiqqiiyqsq, $mmsugugggqciomke::cmockeoekcciguqa, []); if ($qqwmisgwmosogkcs && is_array($qqwmisgwmosogkcs)) { $qsqwqsymmqeoqwcu = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($qqwmisgwmosogkcs as $wwucawyiykqocuis) { $uycaaqiuaswwyamg = $wwucawyiykqocuis[Constants::oeeqisiiqoswqqmy] ?? 0; $eyscsimwcyaqakqg = $wwucawyiykqocuis[Constants::aaaesuouquiygige] ?? []; if ($eyscsimwcyaqakqg && $uycaaqiuaswwyamg) { $ewgwqamkygiqaawc = ''; $eukwicwqggokmweg = $icwkuwimswoisqss->aoaesiikusqamcqc(', '); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $ewgwqamkygiqaawc .= $aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas) . $eukwicwqggokmweg; } $qsqwqsymmqeoqwcu[] = [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($uycaaqiuaswwyamg), Constants::ssmskyqgcmeiayco => $swqimwqeweekeusq->ciuuiyckmsygceis(trim($ewgwqamkygiqaawc, $eukwicwqggokmweg))]; } } $qqwmisgwmosogkcs = $qsqwqsymmqeoqwcu; } $keccaugmemegoimu = ['activities' => [Constants::qescuiwgsyuikume => __('Activity Fields', PR__CST__FILEFOX), Constants::qwumqqyuasyskkkc => $qqwmisgwmosogkcs], 'identifies' => [Constants::qescuiwgsyuikume => __('Team Identify', PR__CST__FILEFOX), Constants::qwumqqyuasyskkkc => $scuqwqiqyekewcoq], Constants::qescuiwgsyuikume => $mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, Constants::qescuiwgsyuikume), Constants::eqkeooqcsscoggia => $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($mmsugugggqciomke->waecsyqmwascmqoa($ksuesqoiqqiiyqsq, Constants::eqkeooqcsscoggia, ''))]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function join(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->uqwkammwsiuiuioc($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$wgkogsmkwskskgsw, $ksuesqoiqqiiyqsq, $oueqmgygagwgissk, $qgciakuqggmiywuk] = $keccaugmemegoimu; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $keccaugmemegoimu = $kueeocmceokoouqa->gssiscqyqsacmeca()->eaywmggcsekawucw($qgciakuqggmiywuk, Salary::mwisuqgywiccyykw, $wgkogsmkwskskgsw); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(sprintf(__('You have successfully become a member of %s\'s team.', PR__CST__FILEFOX), Model::symcgieuakksimmu()->uikgwcuascgeissw($ksuesqoiqqiiyqsq)), [Salary::mwisuqgywiccyykw => $wgkogsmkwskskgsw]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uayeaiwqeyuyecwk(WP_REST_Request $aqmwamyiwgeeymqa) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $keccaugmemegoimu = $this->qasywwyamoesisyi('', $this->ayssaocauwgssywa([$gusoaiguqeaommcc->yqgagqgesqyuyuqq(Constants::eoskkkieowogacws)->ocyagsiykqkycmus()->igiywquyccyiaucw(Constants::TEXT, __('You are not currently a member of any team, please enter your team invitation code in the field below.', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::vswoiouoaykswgym)->kqqqugemmqagucuq()->qigsyyqgewgskemg('text-center')->gswweykyogmsyawy('')->ougkuowgkuqmwkka(6)])); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
