<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e750d6dc7             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait RelatedTermsTrait { public function aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew, string $aqykuigiuwmmcieu = Constants::eoaiagsgqsmskugs) : array { $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($kesssewsiegssiya, [Constants::aisguagukaewucii => $aqykuigiuwmmcieu, Constants::mkucwyayaakigquq => false, Constants::cuoyscoiacswuauq => [Constants::ygyiacciqgemekwc => Constants::ieiyckasqmcyekim, [Constants::ascagqcquwgmygkm => $maygkiawicqomkuc, Constants::ciyoccqkiamemcmm => "\x22" . $dieeqwiqwmwakmew . "\x22", Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui], [Constants::ascagqcquwgmygkm => $maygkiawicqomkuc, Constants::ciyoccqkiamemcmm => $dieeqwiqwmwakmew, Constants::ykemsyouoqyoaysg => "\x3d"]]]); return $this->mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew); } private function mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew) : array { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $sogksuscggsicmac = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { $kuguwoaesuqsqysu = $aoskwucuugeuaeus->igawqaomowicuayw($aokagokqyuysuksm, $maygkiawicqomkuc); if ($kuguwoaesuqsqysu && (is_numeric($kuguwoaesuqsqysu) && $dieeqwiqwmwakmew != $kuguwoaesuqsqysu || is_array($kuguwoaesuqsqysu) && !in_array($dieeqwiqwmwakmew, $kuguwoaesuqsqysu))) { continue; } $okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm, [Constants::aisguagukaewucii => $aqykuigiuwmmcieu, Constants::mkucwyayaakigquq => false]); if ($okcscwesammossuq) { $sogksuscggsicmac[$aokagokqyuysuksm] = [Constants::miceosguuseyyuqe => $iwewcwusemqaiggk, Constants::geocwaecmeeskuci => $this->mycoayosisckwogq($okcscwesammossuq, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew)]; } else { $sogksuscggsicmac[$aokagokqyuysuksm] = $iwewcwusemqaiggk; } } return $sogksuscggsicmac; } }
