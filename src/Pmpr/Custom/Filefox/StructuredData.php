<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9eafc18a58             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Panel\Controller\Profile; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\EducationalOccupationalCredential; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\ProfilePage; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\ContactPoint; use Pmpr\Module\StructuredData\Schema\Organization\EducationalOrganization; use Pmpr\Module\StructuredData\Schema\Organization\Organization; class StructuredData extends AbstractStructuredData { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::ocmiuacywmgycowk . 'before_render_profilepage_schema', [$this, 'mkykgayyamycgsay']); } public function mkykgayyamycgsay($qagmkcieikcsaywi) { if ($qagmkcieikcsaywi instanceof ProfilePage) { $kgcuukieymaqosmm = $qagmkcieikcsaywi->kmwekywqqyigueyi(); $gioqymmeummmwgkc = $this->qukwsgoewmiomios(); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qaqgaqikqmcmukem = $gsqycqmccqgwosck->igawqaomowicuayw(Constants::gouqcwikiiygyasc); if ($qaqgaqikqmcmukem) { if ($kgcuukieymaqosmm) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->mguqscccckuywsya()->uqwkkcooiakyeimy($qaqgaqikqmcmukem, Constants::ocsomysosuqaimuc, -1); $kkieqgwmakgeomyq = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($oammesyieqmwuwyi) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ucicuwcaawugkseg = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ooqggksagkoaeeke); if ($ucicuwcaawugkseg) { $kkieqgwmakgeomyq[] = $aoskwucuugeuaeus->qcgakseyaikigqco($ucicuwcaawugkseg); } } $kgcuukieymaqosmm->ceoksewkcagkoqua($kkieqgwmakgeomyq); } $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mssesmikewggywqc = $yoiguusocukqeayg->igawqaomowicuayw(Profile::cyqumeayeesguoma, $qaqgaqikqmcmukem); if ($mssesmikewggywqc && is_array($mssesmikewggywqc)) { foreach ($mssesmikewggywqc as $kwysocsysqswwgkm) { $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($kwysocsysqswwgkm, Constants::NAME); $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($kwysocsysqswwgkm, Constants::oeoceeacyascgkai); if ($ymqmyyeuycgmigyo && $eeamcawaiqocomwy) { $cwoogqyycoeiegye = new Organization(); $cwoogqyycoeiegye->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->boucusiemiykwime($eeamcawaiqocomwy)->xauiwawimomcgksy($gioqymmeummmwgkc->cmkamqgimsaseogs($cwoogqyycoeiegye, '', $eeamcawaiqocomwy)); $kgcuukieymaqosmm->kmowwqyymiocskcc($cwoogqyycoeiegye); } } } $kgcuukieymaqosmm->gaseqciwmyewoiyu($yoiguusocukqeayg->igawqaomowicuayw(Profile::kscoikwuqiwqoqww, $qaqgaqikqmcmukem))->gqqesamawyysgegm($yoiguusocukqeayg->igawqaomowicuayw(Profile::uqmckkqqkogyqiog, $qaqgaqikqmcmukem)); $ykykggeekmusumwk = $yoiguusocukqeayg->igawqaomowicuayw(Profile::mkqyqaucaimeomqo, $qaqgaqikqmcmukem); $yeuuqwecaygimwee = $yoiguusocukqeayg->igawqaomowicuayw(Profile::gqsscweoswwqioqy, $qaqgaqikqmcmukem); if ($ykykggeekmusumwk && $yeuuqwecaygimwee) { $syycekaqkocyouoy = new EducationalOrganization(); $syycekaqkocyouoy->usuqmwksoeaayaig($ykykggeekmusumwk)->boucusiemiykwime($yeuuqwecaygimwee)->xauiwawimomcgksy($gioqymmeummmwgkc->cmkamqgimsaseogs($syycekaqkocyouoy, "user-{$qaqgaqikqmcmukem}", $yeuuqwecaygimwee)); $kgcuukieymaqosmm->gceeiigeoqmiyums($syycekaqkocyouoy); } $muiesqecqukccouc = $yoiguusocukqeayg->igawqaomowicuayw(Profile::mymoiguoqqsqkamk, $qaqgaqikqmcmukem); if ($muiesqecqukccouc) { $yimossqeoaoowsoy = []; foreach ($muiesqecqukccouc as $uusmaiomayssaecw => $icgsywumgmgmcqkg) { $wgqcoasuqgiywygq = $gkyciwoiiisgywcs->get($icgsywumgmgmcqkg, Constants::NAME); if ($wgqcoasuqgiywygq) { $eawamkegommkcieo = new EducationalOccupationalCredential(); $eawamkegommkcieo->usuqmwksoeaayaig($wgqcoasuqgiywygq)->xauiwawimomcgksy($gioqymmeummmwgkc->cmkamqgimsaseogs($eawamkegommkcieo, $uusmaiomayssaecw))->zswwyugkawiqgcsc(__('Professional Certification', PR__CST__FILEFOX)); $yimossqeoaoowsoy[] = $eawamkegommkcieo; } } $kgcuukieymaqosmm->wsqqcksweociaoug($yimossqeoaoowsoy); } $uaqgmekgysamsgka = $yoiguusocukqeayg->igawqaomowicuayw(Profile::mqiiweoyasgqawam, $qaqgaqikqmcmukem); if ($uaqgmekgysamsgka) { $ukswmyoisgosusky = []; foreach ($uaqgmekgysamsgka as $auygqsqowsqksuao) { $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($auygqsqowsqksuao, Constants::ogigqueukwysusii); if ($eeamcawaiqocomwy && !in_array($eeamcawaiqocomwy, $ukswmyoisgosusky, true)) { $ukswmyoisgosusky[] = $eeamcawaiqocomwy; } } $kgcuukieymaqosmm->qeqwyeuussowiaac($ukswmyoisgosusky); } $qgaqwsqiwkaekysg = $yoiguusocukqeayg->igawqaomowicuayw(Profile::cgguusqsqyacaqyo, $qaqgaqikqmcmukem); $uqckycqkoqsogams = $yoiguusocukqeayg->igawqaomowicuayw(Profile::oiouqkwsyyeogqyo, $qaqgaqikqmcmukem); if ($qgaqwsqiwkaekysg || $uqckycqkoqsogams) { $wywawoqwkeackwck = new ContactPoint(); $wywawoqwkeackwck->oeogosayocuskygw($qgaqwsqiwkaekysg)->sweikoswukusgwwo($uqckycqkoqsogams)->qmgkkgiuwuwiamyi('IR')->qgikewmwgugsycai('Work')->xauiwawimomcgksy($gioqymmeummmwgkc->cmkamqgimsaseogs($wywawoqwkeackwck, "user-{$qaqgaqikqmcmukem}")); $kgcuukieymaqosmm->mywssaqkcwgssomc($wywawoqwkeackwck); } } $wyoiwuqokyeeuguk = $this->caokeucsksukesyo()->umiwkmuuoaqmkwig()->uckuueecsucykcaa(Constants::mswoacegomcucaik, [Constants::iwascisiiokuackw => $qaqgaqikqmcmukem], 10, false); if ($wyoiwuqokyeeuguk) { foreach ($wyoiwuqokyeeuguk as $post) { $qagmkcieikcsaywi->issowqkyqasigmkw($gioqymmeummmwgkc->ayueggmoqeeukqmq($post)); } } } } return $qagmkcieikcsaywi; } }
