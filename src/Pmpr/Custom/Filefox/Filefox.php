<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a99a2347d7             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\CPT\CPT; use Pmpr\Custom\Filefox\CPT\News; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\CTX\CTX; use Pmpr\Custom\Filefox\Frontend\Frontend; use Pmpr\Custom\Filefox\Panel\Panel; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Storage\Storage; use Pmpr\Custom\Filefox\Ticket\Ticket; use Pmpr\Custom\Filefox\Woocommerce\Single; class Filefox extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\106\x69\154\x65\x66\x6f\x78\x20\x43\165\163\164\x6f\x6d", PR__CST__FILEFOX); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70", [$this, "\x67\157\x73\155\x71\x63\x6d\155\x6f\x6d\153\161\167\155\151\x73"], 20); $this->waqewsckuayqguos("\142\145\146\x6f\x72\x65\137\145\x6e\161\165\145\165\x65\137\142\x61\143\153\145\156\144\x5f\x61\163\163\145\164\163", [$this, "\145\156\161\x75\x65\165\145"]); } public function mameiwsayuyquoeq() { CTX::symcgieuakksimmu(); News::symcgieuakksimmu(); Product::symcgieuakksimmu(); Storage::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Ajax::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x74\151\x63\153\145\x74")) { Ticket::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x70\141\x6e\145\154")) { Panel::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x73\141\x6c\x61\162\171")) { Salary::symcgieuakksimmu(); } } public function gosmqcmmomkqwmis() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Single::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x62\x61\143\x6b\x65\x6e\144", "\142\141\x63\x6b\145\x6e\x64\56\x6a\163")->simswskycwagoeqy()); } }
