<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9ebfea4dd6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\CTX; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; class Category extends Container { use ObjectTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('add_meta_boxes', [$this, 'iaekyqikwgmkcsok'], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('register_category_taxonomy_args', [$this, 'wkisqssccssesguw'])->cecaguuoecmccuse('nav_menu_item_url', [$this, 'amsyauasoouyugui'], 10, 2); } public function amsyauasoouyugui($eeamcawaiqocomwy, $igqsaukqcqscimok) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (Constants::qgciomgukmcwscqw === $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ckmqoekmugkggeym)) { $ucicuwcaawugkseg = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eggygikowgywcayq); if ($ucicuwcaawugkseg) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($uycaaqiuaswwyamg = $this->ocgagkyikuwwsgme($igqsaukqcqscimok)) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($uycaaqiuaswwyamg); } else { $migiiksoiymissge = $this->caokeucsksukesyo()->wikusamwomuogoau()->cseyuuekwokecyyw(); } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(['pf' => 1, 'tax_' . Constants::qgciomgukmcwscqw => $aoskwucuugeuaeus->aqcogscycyycgkuq($ucicuwcaawugkseg)], $migiiksoiymissge); } } return $eeamcawaiqocomwy; } public function ocgagkyikuwwsgme($mwwsoasauceiwsmk) { $uycaaqiuaswwyamg = null; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (Constants::oeeqisiiqoswqqmy === $gkyciwoiiisgywcs->get($mwwsoasauceiwsmk, Constants::ckmqoekmugkggeym)) { $uycaaqiuaswwyamg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($gkyciwoiiisgywcs->get($mwwsoasauceiwsmk, Constants::ckmqoekmugkggeym . Constants::mswocgcucqoaesaa)); } else { if ($mwwsoasauceiwsmk->menu_item_parent) { $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($mwwsoasauceiwsmk->menu_item_parent); if ($omwmuycmeqcqokom) { $omwmuycmeqcqokom = wp_setup_nav_menu_item($omwmuycmeqcqokom); } if ($omwmuycmeqcqokom) { $uycaaqiuaswwyamg = $this->ocgagkyikuwwsgme($omwmuycmeqcqokom); } } } return $uycaaqiuaswwyamg; } public function wkisqssccssesguw($ywmkwiwkosakssii) { $ywmkwiwkosakssii[Constants::umemcsyeooqwqwsy] = false; return $ywmkwiwkosakssii; } public function yeyiguyegmmyusea() { $iseoqmmuokyweokw = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas(Constants::oeeqisiiqoswqqmy, [Constants::mkucwyayaakigquq => false, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $this->scyscgskcwukckyy(Constants::qgciomgukmcwscqw . '_custom_fields')->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::oeeqisiiqoswqqmy)->gswweykyogmsyawy(__('Material', PR__CST__FILEFOX))->acauweqyyugwisqc($iseoqmmuokyweokw)->oikgogcweiiaocka())->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::sagygwmewiosskgs)->gswweykyogmsyawy(__('Short Description', PR__CST__FILEFOX))->qsecygiycssgacqs(3))->auoaeeuwaqswggqg(Constants::qgciomgukmcwscqw)->register(); } public function iaekyqikwgmkcsok() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $ewsqcacamuomwagw->iaekyqikwgmkcsok('categorydiv', Constants::oguseymmyyoyaako, Constants::qayiiikwusguoask); $ewsqcacamuomwagw->iaekyqikwgmkcsok('categorydiv', Constants::sususqikkuaoqeco, Constants::qayiiikwusguoask); } }
