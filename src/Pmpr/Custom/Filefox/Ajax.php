<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e77a28575             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Container { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x67\145\x74\137\x72\145\x6c\141\x74\145\144\x5f\x74\145\162\155\163", [$this, "\x65\141\171\x69\x65\x6d\x75\153\x71\x6f\165\141\157\153\x71\x61"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\145\154\141\x74\x65\144\137\x74\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\x65\x6c\x61\x74\145\x64\x5f\164\x6f\137\x74\141\x78"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $eiicaiwgqkgsekce->uaggqsoeugksgooc(array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { goto qwigomakwmyiwkgo; } if (!is_array($iwewcwusemqaiggk)) { goto qgoiooayqmqqsiok; } if (!isset($iwewcwusemqaiggk[Constants::miceosguuseyyuqe], $iwewcwusemqaiggk[Constants::geocwaecmeeskuci])) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk[Constants::miceosguuseyyuqe], Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\x63\154\x61\163\163" => "\154\145\x76\x65\x6c\x2d{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[Constants::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); qogqewiwmwiwskgm: qgoiooayqmqqsiok: goto myoicgcuugciueis; qwigomakwmyiwkgo: $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk, Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\x63\154\141\163\x73" => "\x6c\145\x76\145\x6c\x2d{$iqaosyayeiuaisqi}"]; myoicgcuugciueis: qiaqsassksqiuyae: } cecuyayqoioasumi: return $keccaugmemegoimu; } }
