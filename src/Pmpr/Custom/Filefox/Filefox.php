<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9ebfea4dd6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\CPT\CPT; use Pmpr\Custom\Filefox\CTX\CTX; use Pmpr\Custom\Filefox\Frontend\Frontend; use Pmpr\Custom\Filefox\Panel\Panel; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Storage; use Pmpr\Custom\Filefox\Ticket\Ticket; use Pmpr\Custom\Filefox\Woocommerce\Attribute; use Pmpr\Custom\Filefox\Woocommerce\Single; class Filefox extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Filefox Custom', PR__CST__FILEFOX); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp', [$this, 'gosmqcmmomkqwmis'], 20); $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue']); $this->aqaqisyssqeomwom('can_show_author_in_post_single', '__return_true'); } public function mameiwsayuyquoeq() { CPT::symcgieuakksimmu(); CTX::symcgieuakksimmu(); Storage::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); Attribute::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Ajax::symcgieuakksimmu(); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { User::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('ticket')) { Ticket::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('structured-data')) { StructuredData::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('salary')) { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('panel')) { Panel::symcgieuakksimmu(); } Salary::symcgieuakksimmu(); } } public function gosmqcmmomkqwmis() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Single::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'backend', 'backend.js')->simswskycwagoeqy()); } }
