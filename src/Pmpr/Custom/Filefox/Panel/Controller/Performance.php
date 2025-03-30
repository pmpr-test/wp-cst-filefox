<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e9a7a9c2b05             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Salary\Traffic\Model\Daily; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Performance extends Controller { public function __construct() { $this->rest_base = 'performance'; parent::__construct(); } public function register_routes() { $this->register('/get-monthly-traffic', [Constants::wwgusigoaksqmwsm => [$this, 'iiwcoeqiyiyeggue']]); $this->register('/get-weekly-traffic', [Constants::wwgusigoaksqmwsm => [$this, 'acawuisywsmaiugy']]); $this->register('/get-daily-traffic', [Constants::wwgusigoaksqmwsm => [$this, 'cyaauayiqiaugqcu']]); } public function iiwcoeqiyiyeggue(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->ewmkmmsuiuwmmwoy($this->askusgcoggmkmuwe($aqmwamyiwgeeymqa, Constants::kccekmguugamiusg)); } public function acawuisywsmaiugy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->ewmkmmsuiuwmmwoy($this->askusgcoggmkmuwe($aqmwamyiwgeeymqa, Constants::iqaiecywsaysmmkq)); } public function cyaauayiqiaugqcu(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->ewmkmmsuiuwmmwoy($this->askusgcoggmkmuwe($aqmwamyiwgeeymqa, Constants::wmasmcgmyeoaisoa)); } private function askusgcoggmkmuwe(WP_REST_Request $aqmwamyiwgeeymqa, string $ymmgciamciieaysq, int $ymkqyawksmqcgsei = 7) { $moqewomugocaueis = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); $mqyaskyaekmkegmg = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi); if ($mqyaskyaekmkegmg && $moqewomugocaueis) { $aomkuyuqaiswycso = Daily::symcgieuakksimmu(); switch ($mqyaskyaekmkegmg) { case 'team_performance': $ugkcqgcakoiaimiw = $aomkuyuqaiswycso->ccauuimmaouoqkyc(Salary::susokqyqcmqomwqk, $moqewomugocaueis, $ymmgciamciieaysq, $ymkqyawksmqcgsei); $ygugikkeauqiceoo = [Constants::uiwqcumqkgikqyue => [[Constants::NAME => __('Worst Team', PR__CST__FILEFOX), Constants::igssuqwuicwawgam => '#9E4A06', Constants::uiwqcumqkgikqyue => $aomkuyuqaiswycso->qcmsiiamkiqscqgi(Salary::susokqyqcmqomwqk, 'worst', $ymmgciamciieaysq, $ymkqyawksmqcgsei)[Constants::uiwqcumqkgikqyue]], [Constants::NAME => __('All Teams Average', PR__CST__FILEFOX), Constants::igssuqwuicwawgam => '#A3A3A3', Constants::uiwqcumqkgikqyue => $aomkuyuqaiswycso->qcmsiiamkiqscqgi(Salary::susokqyqcmqomwqk, 'average', $ymmgciamciieaysq, $ymkqyawksmqcgsei)[Constants::uiwqcumqkgikqyue]], [Constants::NAME => __('Best Team', PR__CST__FILEFOX), Constants::igssuqwuicwawgam => '#63993D', Constants::uiwqcumqkgikqyue => $aomkuyuqaiswycso->qcmsiiamkiqscqgi(Salary::susokqyqcmqomwqk, 'best', $ymmgciamciieaysq, $ymkqyawksmqcgsei)[Constants::uiwqcumqkgikqyue]], [Constants::NAME => __('Your Team', PR__CST__FILEFOX), Constants::igssuqwuicwawgam => '#0066CC', Constants::uiwqcumqkgikqyue => $ugkcqgcakoiaimiw[Constants::uiwqcumqkgikqyue]]], Constants::eoaiagsgqsmskugs => $ugkcqgcakoiaimiw[Constants::eoaiagsgqsmskugs]]; break; default: $ygugikkeauqiceoo = $aomkuyuqaiswycso->ccauuimmaouoqkyc($mqyaskyaekmkegmg, $moqewomugocaueis, $ymmgciamciieaysq, $ymkqyawksmqcgsei); break; } } else { $ygugikkeauqiceoo = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $ygugikkeauqiceoo; } }
