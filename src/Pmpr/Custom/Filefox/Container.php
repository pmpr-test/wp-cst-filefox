<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e77a28575             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew, string $aqykuigiuwmmcieu = Constants::eoaiagsgqsmskugs) : array { $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($kesssewsiegssiya, [Constants::aisguagukaewucii => $aqykuigiuwmmcieu, Constants::mkucwyayaakigquq => false, Constants::cuoyscoiacswuauq => [Constants::ygyiacciqgemekwc => Constants::ieiyckasqmcyekim, [Constants::ascagqcquwgmygkm => $maygkiawicqomkuc, Constants::ciyoccqkiamemcmm => "\42" . $dieeqwiqwmwakmew . "\42", Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui], [Constants::ascagqcquwgmygkm => $maygkiawicqomkuc, Constants::ciyoccqkiamemcmm => $dieeqwiqwmwakmew, Constants::ykemsyouoqyoaysg => "\75"]]]); return $this->mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew); } private function mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew) : array { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $sogksuscggsicmac = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { $kuguwoaesuqsqysu = $aoskwucuugeuaeus->igawqaomowicuayw($aokagokqyuysuksm, $maygkiawicqomkuc); if (!($kuguwoaesuqsqysu && (is_numeric($kuguwoaesuqsqysu) && $dieeqwiqwmwakmew != $kuguwoaesuqsqysu || is_array($kuguwoaesuqsqysu) && !in_array($dieeqwiqwmwakmew, $kuguwoaesuqsqysu, true)))) { goto qmuwoecuacmkwgem; } goto wakmayaoqoskekqy; qmuwoecuacmkwgem: $okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm, [Constants::aisguagukaewucii => $aqykuigiuwmmcieu, Constants::mkucwyayaakigquq => false]); if ($okcscwesammossuq) { goto owmuceyswmgueasi; } $sogksuscggsicmac[$aokagokqyuysuksm] = $iwewcwusemqaiggk; goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $sogksuscggsicmac[$aokagokqyuysuksm] = [Constants::miceosguuseyyuqe => $iwewcwusemqaiggk, Constants::geocwaecmeeskuci => $this->mycoayosisckwogq($okcscwesammossuq, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew)]; mwsmsguqqkcwiiuk: wakmayaoqoskekqy: } wkeuuycukmuqiaom: return $sogksuscggsicmac; } }
