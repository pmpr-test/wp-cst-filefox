<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795527f3173c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\CPT\News; use Pmpr\Custom\Filefox\CPT\Product; use Pmpr\Custom\Filefox\CTX\CTX; use Pmpr\Custom\Filefox\Frontend\Frontend; use Pmpr\Custom\Filefox\Panel\Panel; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Storage; use Pmpr\Custom\Filefox\Ticket\Ticket; use Pmpr\Custom\Filefox\Traffic\Traffic; use Pmpr\Custom\Filefox\Woocommerce\Single; class Filefox extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x46\151\x6c\145\146\x6f\x78\40\x43\x75\x73\x74\157\155", PR__CST__FILEFOX); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\147\157\163\155\x71\x63\155\x6d\x6f\x6d\x6b\x71\x77\x6d\x69\x73"], 20); $this->waqewsckuayqguos("\142\x65\x66\157\162\145\137\145\x6e\x71\165\x65\165\x65\x5f\142\141\143\153\145\x6e\x64\137\141\163\x73\x65\x74\163", [$this, "\145\156\x71\x75\145\165\x65"]); } public function mameiwsayuyquoeq() { CTX::symcgieuakksimmu(); News::symcgieuakksimmu(); Product::symcgieuakksimmu(); Storage::symcgieuakksimmu(); Traffic::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Ajax::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\164\151\x63\153\x65\164")) { Ticket::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x70\x61\156\145\154")) { Panel::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x73\x61\x6c\141\162\171")) { Salary::symcgieuakksimmu(); } } public function gosmqcmmomkqwmis() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Single::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x62\x61\143\153\145\x6e\x64", "\x62\x61\143\153\145\x6e\x64\56\x6a\x73")->simswskycwagoeqy()); } }
