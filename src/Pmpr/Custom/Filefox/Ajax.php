<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da2f5c3f9             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Traits\RelatedTermsTrait; class Ajax extends Container { use RelatedTermsTrait; const wiysygukkaksueso = ''; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\147\x65\x74\137\162\145\154\x61\164\145\144\x5f\164\x65\x72\155\x73", [$this, "\145\141\171\x69\x65\155\165\x6b\x71\157\x75\141\x6f\153\161\141"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\x65\154\141\x74\145\x64\x5f\164\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\x72\x65\x6c\141\x74\x65\x64\x5f\164\x6f\137\164\x61\170"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $eiicaiwgqkgsekce->uaggqsoeugksgooc(array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk, Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\154\141\x73\x73" => "\154\x65\x76\x65\154\x2d{$iqaosyayeiuaisqi}"]; } else { if (isset($iwewcwusemqaiggk[Constants::miceosguuseyyuqe], $iwewcwusemqaiggk[Constants::geocwaecmeeskuci])) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk[Constants::miceosguuseyyuqe], Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\x63\x6c\x61\163\163" => "\154\145\166\x65\x6c\55{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[Constants::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); } } } return $keccaugmemegoimu; } }
