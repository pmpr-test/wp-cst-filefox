<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca265c740             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Storage\Model\Replica; use Pmpr\Custom\Filefox\Traits\CommonTrait; class Ajax extends Container { use CommonTrait; const wiysygukkaksueso = 'filefox_'; const gumsmyccuyyqsmoc = self::wiysygukkaksueso . 'get_file_url'; const kikskooimuqywswe = self::wiysygukkaksueso . 'get_download_links'; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::gumsmyccuyyqsmoc, [$this, 'oiucukewkckkwiqc'])->iqkqummseggmikgo(self::kikskooimuqywswe, [$this, 'cwekigqociiiassi']); } public function oiucukewkckkwiqc() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $qogsmwakwacwqogk = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::kekgqaemqessuwmq); if ($qogsmwakwacwqogk && ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk))) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $product = $usmsssmiougymckk->get($umkkkaqkwugkemce); if ($usmsssmiougymckk->cmqemkgqoweiwiqu($product)) { $aumscagymwyyicag = $usmsssmiougymckk->owuaywucuaiyocum($product); if (empty($aumscagymwyyicag) || $aumscagymwyyicag <= 0) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $eyagkkkqkwcuygso = [Constants::kucuwimmakgiieom => $qogsmwakwacwqogk, Constants::woicooamkeqiaemo => $umkkkaqkwugkemce, Constants::wygwikaqsmcmosas => $gqusacuooiagkuom->ikkqcccaweckukug(Constants::cgmyyekauckqmwyg)]; $keccaugmemegoimu = [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($eyagkkkqkwcuygso, $gqusacuooiagkuom->gmigwwwmwemyaayy())]; $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __('Need purchase.', PR__CST__FILEFOX); } } else { $keccaugmemegoimu = __('can not download requested file.', PR__CST__FILEFOX); } } else { $keccaugmemegoimu = __('Can not find requested file.', PR__CST__FILEFOX); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cwekigqociiiassi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::kekgqaemqessuwmq); if ($qogsmwakwacwqogk && ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk))) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($product = $usmsssmiougymckk->get($umkkkaqkwugkemce)) { $cwgqkcumeaswoscu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ouaksagwsqimgqgy($usmsssmiougymckk->woamsogakkycsqcc($product)[$qogsmwakwacwqogk][Constants::kekgqaemqessuwmq]); $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $yuiigwkuaqmwmoqs = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::cqycgsyykemiygou, $cwgqkcumeaswoscu); $yuiigwkuaqmwmoqs[] = [Constants::gouqcwikiiygyasc => 0]; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $oammesyieqmwuwyi = []; $gwgqcsmomamyqsmy = $gqusacuooiagkuom->ikkqcccaweckukug(Constants::cgmyyekauckqmwyg); $gmigwwwmwemyaayy = $gqusacuooiagkuom->gmigwwwmwemyaayy(); foreach ($yuiigwkuaqmwmoqs as $aeiwmoeicwaiwmwu) { $mekgeyuqyeggqiqq = $gkyciwoiiisgywcs->get($aeiwmoeicwaiwmwu, Constants::gouqcwikiiygyasc, 0); $oammesyieqmwuwyi[] = [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::mwkumwoeyuaukcms => $mekgeyuqyeggqiqq, Constants::kucuwimmakgiieom => $cwgqkcumeaswoscu, Constants::woicooamkeqiaemo => $umkkkaqkwugkemce, Constants::wygwikaqsmcmosas => $gwgqcsmomamyqsmy], $gmigwwwmwemyaayy), Constants::TEXT => $this->ocksiywmkyaqseou('get_account_download_link_text', __('Download', PR__CST__FILEFOX), $aeiwmoeicwaiwmwu)]; } $keccaugmemegoimu = $this->iuygowkemiiwqmiw('download_links', [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __('Can not find related product', PR__CST__FILEFOX); } } else { $keccaugmemegoimu = __('Can not find requested file.', PR__CST__FILEFOX); } if ($keccaugmemegoimu && !$occymigcemkqucuw) { $keccaugmemegoimu = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug($keccaugmemegoimu); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
