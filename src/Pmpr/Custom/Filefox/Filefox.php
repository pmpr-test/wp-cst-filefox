<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675f1cff3c593             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\CPT\CPT; use Pmpr\Custom\Filefox\CTX\CTX; use Pmpr\Custom\Filefox\Frontend\Frontend; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Storage\Storage; use Pmpr\Custom\Filefox\Ticket\Ticket; use Pmpr\Custom\Filefox\Woocommerce\Single; class Filefox extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x46\151\x6c\145\x66\157\170\40\x43\x75\x73\x74\x6f\155", PR__CST__FILEFOX); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\147\x6f\163\x6d\x71\143\155\x6d\157\x6d\153\x71\x77\x6d\151\x73"], 20); $this->waqewsckuayqguos("\x62\145\x66\157\x72\145\137\145\156\161\x75\145\165\x65\137\x62\x61\x63\x6b\145\156\x64\x5f\x61\x73\163\x65\164\163", [$this, "\x65\x6e\x71\165\145\x75\x65"]); } public function mameiwsayuyquoeq() { CPT::symcgieuakksimmu(); CTX::symcgieuakksimmu(); Storage::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Ajax::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x74\x69\x63\153\145\164")) { Ticket::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\163\x61\154\x61\162\x79")) { Salary::symcgieuakksimmu(); } } public function gosmqcmmomkqwmis() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Single::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x62\x61\x63\x6b\145\x6e\144", "\x62\x61\x63\153\145\x6e\144\x2e\x6a\x73")->simswskycwagoeqy()); } }
