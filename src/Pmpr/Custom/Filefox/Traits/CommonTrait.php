<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3edb5aaf             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Setting\Setting; trait CommonTrait { public function mqyuouguewuyeioy() { return $this->weysguygiseoukqw(Setting::ecssqkmociymqkso); } public function eikmwwusgumqyika($post, ?string $aiowsaccomcoikus = Constants::ouywiegeiyuaaawo) { $qqakqoekigkcmyek = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($seumokooiykcomco->ccwssmqgyasqqcoc($post, Constants::oguseymmyyoyaako)) { $qqakqoekigkcmyek = $seumokooiykcomco->kckogqkiycqeumoa($post, $this->mqyuouguewuyeioy(), [Constants::yewiqemgmmucemey => true]); if ($qqakqoekigkcmyek) { switch ($aiowsaccomcoikus) { default: case Constants::ouywiegeiyuaaawo: $qqakqoekigkcmyek = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->aqcogscycyycgkuq($qqakqoekigkcmyek); break; } } } return $qqakqoekigkcmyek; } public function imqksoqiawkuqies($ayseywwqeyucsime) { $product = null; $oksqskmgoqiqciis = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => '_downloadable_files', Constants::ciyoccqkiamemcmm => '"' . $ayseywwqeyucsime . '"', Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui]]]); if ($oksqskmgoqiqciis) { $product = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($oksqskmgoqiqciis, array_key_first($oksqskmgoqiqciis)); } return $product; } }
