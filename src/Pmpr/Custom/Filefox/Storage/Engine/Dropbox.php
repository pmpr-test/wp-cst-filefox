<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e750d6dc7             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine; use Pmpr\Custom\Filefox\Storage\Engine\TokenProvider\DropboxRefreshTokenProvider; use Spatie\Dropbox\Client; class Dropbox extends Engine { public function __construct($eiwicgsqoiaeawkk) { $this->client = new Client(new DropboxRefreshTokenProvider($eiwicgsqoiaeawkk)); parent::__construct($eiwicgsqoiaeawkk); } public function wmciwsucuuyumkes() : Client { return $this->client; } public function aaaycaqymuikesme($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if ($esaqeawoigqgagum = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm)) { $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $mkomwsiykqigmqca = $this->kockgkymesyqiueg($esaqeawoigqgagum); $iwywmkygwewiamwm = $qcakkkwickkwyuck->getTemporaryLink($mkomwsiykqigmqca); } return $iwywmkygwewiamwm; } public function aqccqyskogogkaak($aiooqyausygaasqm) : bool { return false; } public function cgwsoaeeaomscacg($aiooqyausygaasqm) : bool { $igoyusqoooaqyksm = false; if ($esaqeawoigqgagum = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm)) { $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); $mkomwsiykqigmqca = $this->kockgkymesyqiueg($esaqeawoigqgagum); $sogksuscggsicmac = $qcakkkwickkwyuck->upload($mkomwsiykqigmqca, $ewgwqamkygiqaawc); $igoyusqoooaqyksm = true; } return $igoyusqoooaqyksm; } public function uagqwamoeaygcmmc($aiooqyausygaasqm) : bool { $ekmacukqumaiaquo = false; if ($esaqeawoigqgagum = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm)) { $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $mkomwsiykqigmqca = $this->kockgkymesyqiueg($esaqeawoigqgagum); $sogksuscggsicmac = $qcakkkwickkwyuck->delete($mkomwsiykqigmqca); $ekmacukqumaiaquo = true; } return $ekmacukqumaiaquo; } }
