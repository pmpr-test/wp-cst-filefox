<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839b9b52c4             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class User extends Container { const eocekouyugomaqwo = 'user_registered'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pre_get_users', [$this, 'mcemoeyqwmcauque']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('manage_users_columns', [$this, 'ciwuisugoymqgows'])->cecaguuoecmccuse('manage_users_sortable_columns', [$this, 'mqyqgqkqikwwigum'])->cecaguuoecmccuse('manage_users_custom_column', [$this, 'ckkuqeogocyiqooe'], 10, 3); } public function mcemoeyqwmcauque($gqgemcmoicmgaqie) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $sikaymiwcesagayc = $gqgemcmoicmgaqie->get(Constants::gqiasegggowomgie); if (self::eocekouyugomaqwo === $sikaymiwcesagayc || $sikaymiwcesagayc === Constants::yuguikokwoymmqem) { $gqgemcmoicmgaqie->set(Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko); $gqgemcmoicmgaqie->set(Constants::gqiasegggowomgie, self::eocekouyugomaqwo); } } } public function ciwuisugoymqgows($wkkweuacukumqmya) { $wkkweuacukumqmya[self::eocekouyugomaqwo] = __('Registered Date', PR__CST__FILEFOX); return $wkkweuacukumqmya; } public function mqyqgqkqikwwigum($wkkweuacukumqmya) { $wkkweuacukumqmya[self::eocekouyugomaqwo] = self::eocekouyugomaqwo; return $wkkweuacukumqmya; } public function ckkuqeogocyiqooe($eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $ycoeoaakqyskgykq) { if ($qgoqiacsiccwoawi === self::eocekouyugomaqwo) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ycoeoaakqyskgykq); if ($mkucggyaiaukqoce) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($mkucggyaiaukqoce->user_registered), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); } } return $eqgoocgaqwqcimie; } }
