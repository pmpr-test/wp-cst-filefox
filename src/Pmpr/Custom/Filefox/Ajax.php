<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835fad7e9             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Traits\RelatedTermsTrait; class Ajax extends Container { use RelatedTermsTrait; const wiysygukkaksueso = ''; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\147\x65\164\x5f\162\x65\154\x61\164\145\x64\137\164\145\162\155\x73", [$this, "\x65\141\x79\151\145\x6d\x75\x6b\x71\157\x75\x61\157\x6b\x71\141"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\145\154\141\164\145\x64\137\164\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\145\154\x61\x74\145\x64\137\164\x6f\x5f\164\141\x78"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $eiicaiwgqkgsekce->uaggqsoeugksgooc(array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk, Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\154\x61\163\163" => "\x6c\x65\x76\x65\154\x2d{$iqaosyayeiuaisqi}"]; } else { if (isset($iwewcwusemqaiggk[Constants::miceosguuseyyuqe], $iwewcwusemqaiggk[Constants::geocwaecmeeskuci])) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk[Constants::miceosguuseyyuqe], Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\x6c\141\x73\x73" => "\154\x65\166\145\154\x2d{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[Constants::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); } } } return $keccaugmemegoimu; } }
