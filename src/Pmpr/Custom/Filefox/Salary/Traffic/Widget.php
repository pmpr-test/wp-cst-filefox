<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a374470c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Traffic; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget as BaseClass; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Daily; class Widget extends BaseClass { public function __construct() { parent::__construct(__('Posts Traffic', PR__CST__FILEFOX), __('Display the most viewed posts.', PR__CST__FILEFOX), 'traffic'); } public function ykwqaukkycogooii() { $kuguwoaesuqsqysu = $this->ocksiywmkyaqseou('metadata_get_all_items', []); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CST__FILEFOX)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::uouymeyqasaeckso)->gswweykyogmsyawy(__('Post Type', PR__CST__FILEFOX))->oikgogcweiiaocka()->acauweqyyugwisqc($this->caokeucsksukesyo()->gscioiumssogceuc()->mwyawsooaimmcwiu()))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__('Count', PR__CST__FILEFOX))->eyygsasuqmommkua(5)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ckcuiukmyisueqeo)->gswweykyogmsyawy(__('Metadata', PR__CST__FILEFOX))->eksgyasugmuassok($kuguwoaesuqsqysu)->oikgogcweiiaocka()->wywmmeyauqkeskeq(!empty($kuguwoaesuqsqysu)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__('Render Template', PR__CST__FILEFOX))->eyygsasuqmommkua(Constants::ugmwekegkosuuwii)->eksgyasugmuassok([Constants::ugmwekegkosuuwii => __('List', PR__CST__FILEFOX), Constants::ugsuecoyuqcamsac => __('Table', PR__CST__FILEFOX), Constants::iouekwycqkqiceea => __('Simple List', PR__CST__FILEFOX)])); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qiyqwyiiwykeccmo, 5); $useksmwkuswkwcqg = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::uouymeyqasaeckso, Constants::mswoacegomcucaik); $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = $eqwoegegiamegqsm->kyckwuuiqwmyoqma()->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owackeyiuiikegqg(Constants::eggygikowgywcayq, 'ID')->aqkyoweegqwuwsgw(Constants::qgmuskygocwmouos)->ggmcoioqwgyccyus())->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg)->aqkyoweegqwuwsgw(Constants::qgmuskygocwmouos))->wsacuksekeaemucu($uuyoeicyoayimaoa); if ($mumyimcwkaemyyue->cukiusasccucgwqc($useksmwkuswkwcqg)) { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::eggygikowgywcayq, $seumokooiykcomco->iooowgsqoyqseyuu())->maqiysyuqmwcqoig('!=')); } $scumyeasgcsssmko = [Constants::wmasmcgmyeoaisoa => __('Day', PR__CST__FILEFOX), Constants::iqaiecywsaysmmkq => __('Week', PR__CST__FILEFOX), Constants::kccekmguugamiusg => __('Month', PR__CST__FILEFOX)]; $qookweymeqawmcwo = []; $kuguwoaesuqsqysu = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ckcuiukmyisueqeo); foreach ($scumyeasgcsssmko as $ymmgciamciieaysq => $meqocwsecsywiiqs) { $oammesyieqmwuwyi = $aomkuyuqaiswycso->mgyoqmwcqymcciyg(Constants::mswoacegomcucaik, $ymmgciamciieaysq, clone $gqgemcmoicmgaqie); if ($oammesyieqmwuwyi) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $gsoygaueswuygiim = $kuguwoaesuqsqysu; $gaeqamemwmwsyukm = (int) $aomkuyuqaiswycso->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::qiyqwyiiwykeccmo, 0); if ($gaeqamemwmwsyukm === 0) { $gaeqamemwmwsyukm = (int) $aomkuyuqaiswycso->waecsyqmwascmqoa($igqsaukqcqscimok, 'total_count', 0); } if ($quqgwgyaywgssuqa = array_search('traffic', $kuguwoaesuqsqysu, true)) { unset($gsoygaueswuygiim[$quqgwgyaywgssuqa]); if ($gaeqamemwmwsyukm > 0) { $gsoygaueswuygiim['traffic'] = [Constants::ciyoccqkiamemcmm => sprintf(__('%s view', PR__CST__FILEFOX), $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->readable($gaeqamemwmwsyukm))]; } } $oammesyieqmwuwyi[$momcykaoccoymeig] = [Constants::mswoacegomcucaik => $seumokooiykcomco->get($aomkuyuqaiswycso->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::eggygikowgywcayq)), Constants::ckcuiukmyisueqeo => $gsoygaueswuygiim]; } $qookweymeqawmcwo['periods'][$ymmgciamciieaysq] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } } if ($qookweymeqawmcwo) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qescuiwgsyuikume), Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, Constants::okciuaikiyaecwmy => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::kcgwauqkqcyuwwgs, Constants::ugmwekegkosuuwii)]); } return $qookweymeqawmcwo; } }
