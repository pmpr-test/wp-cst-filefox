<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3edb5aaf             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\Salary\Model\Request; class PostOwner extends Model { const mwisuqgywiccyykw = 'team_id'; const cmiegiycgiucucgs = 'request_id'; public function register() { $this->saemoowcasogykak(IconInterface::quowqmuiikukkkay)->guiaswksukmgageq(__('Post Owners', PR__CST__FILEFOX))->muuwuqssqkaieqge(__('Posts Owners', PR__CST__FILEFOX)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::kqigmeickowqiiyy)->gswweykyogmsyawy(__('Post', PR__CST__FILEFOX))->acceqyqygswoecwe(10))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::mwisuqgywiccyykw)->gswweykyogmsyawy(__('Team', PR__CST__FILEFOX))->wuuqgaekqeymecag(Team::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->gswweykyogmsyawy(__('Request', PR__CST__FILEFOX))->wuuqgaekqeymecag(Request::class)); } public function aiwkayseywyckasm($mksyucucyswaukig, $ousomaowqseoamse, string $mqyaskyaekmkegmg = Constants::mswoacegomcucaik) : bool { if (!$mksyucucyswaukig || !$ousomaowqseoamse) { return false; } $woewcmgaacwwcmyy = null; switch ($mqyaskyaekmkegmg) { case Constants::mswoacegomcucaik: $gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($mksyucucyswaukig, true); if ($gcqseksiskwueksc) { $woewcmgaacwwcmyy = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($gcqseksiskwueksc, Constants::kqigmeickowqiiyy); } break; default: if (is_numeric($mksyucucyswaukig)) { $woewcmgaacwwcmyy = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); } else { $woewcmgaacwwcmyy = $mksyucucyswaukig; } } if ($woewcmgaacwwcmyy) { $ousomaowqseoamse = Request::symcgieuakksimmu()->mwyqswsaeeewsosm($ousomaowqseoamse); if ($ousomaowqseoamse === $this->waecsyqmwascmqoa($woewcmgaacwwcmyy, self::cmiegiycgiucucgs)) { return true; } $mmsugugggqciomke = Team::symcgieuakksimmu(); $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($ousomaowqseoamse, $mmsugugggqciomke::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq && ($wgkogsmkwskskgsw = $mmsugugggqciomke->mwyqswsaeeewsosm($ksuesqoiqqiiyqsq))) { return $wgkogsmkwskskgsw === $this->waecsyqmwascmqoa($woewcmgaacwwcmyy, self::mwisuqgywiccyykw); } } return false; } }
