<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da2f5c3f9             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\CPT\News; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\CTX\CTX; use Pmpr\Custom\Filefox\Frontend\Frontend; use Pmpr\Custom\Filefox\Panel\Panel; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Storage; use Pmpr\Custom\Filefox\Ticket\Ticket; use Pmpr\Custom\Filefox\Traffic\Traffic; use Pmpr\Custom\Filefox\Woocommerce\Single; class Filefox extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x46\151\x6c\x65\146\157\x78\40\103\165\x73\164\x6f\x6d", PR__CST__FILEFOX); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70", [$this, "\147\x6f\163\x6d\161\x63\x6d\155\x6f\155\153\x71\167\155\151\163"], 20); $this->waqewsckuayqguos("\142\145\x66\x6f\162\145\x5f\x65\156\161\x75\145\165\x65\x5f\142\x61\143\153\x65\156\x64\137\x61\163\x73\145\164\163", [$this, "\145\x6e\161\x75\x65\165\145"]); } public function mameiwsayuyquoeq() { CTX::symcgieuakksimmu(); News::symcgieuakksimmu(); Product::symcgieuakksimmu(); Storage::symcgieuakksimmu(); Traffic::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Ajax::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x74\x69\x63\153\x65\164")) { Ticket::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\160\x61\156\145\154")) { Panel::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\163\141\154\x61\162\x79")) { Salary::symcgieuakksimmu(); } } public function gosmqcmmomkqwmis() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Single::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\142\141\143\153\145\156\144", "\142\x61\x63\153\145\x6e\144\x2e\152\x73")->simswskycwagoeqy()); } }
