<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e9a7a9c2b05             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use WP_Query; class Archive extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pre_get_posts', [$this, 'okaumkccucyaeqig'], 999); } public function okaumkccucyaeqig($gqgemcmoicmgaqie) { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->uywcakyieooyscis() || $owaoeyikmqaeegma->syukqeyowauuucwi()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $product = $eqwoegegiamegqsm->get(Constants::oguseymmyyoyaako, null, $gqgemcmoicmgaqie); $yugqsecigucogiei = $eqwoegegiamegqsm->get(Constants::isukysauqkiecswi, 0, $gqgemcmoicmgaqie); if (empty($product) && empty($yugqsecigucogiei)) { $useksmwkuswkwcqg = $eqwoegegiamegqsm->get(Constants::uouymeyqasaeckso, null, $gqgemcmoicmgaqie); $uycaaqiuaswwyamg = $eqwoegegiamegqsm->get(Constants::oeeqisiiqoswqqmy, null, $gqgemcmoicmgaqie); if ($useksmwkuswkwcqg === Constants::oguseymmyyoyaako || !empty($uycaaqiuaswwyamg)) { $eqwoegegiamegqsm->ccwowuakmqoemoem($gqgemcmoicmgaqie, [Constants::isukysauqkiecswi => 0, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako]); } } } return $gqgemcmoicmgaqie; } }
