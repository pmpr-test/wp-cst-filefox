<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3edb5aaf             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; class Post extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('template_redirect', [$this, 'mgogsqikgegaymki']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('request', [$this, 'ueaosiqeyyakuwkq'])->cecaguuoecmccuse('rewrite_rules_array', [$this, 'suiyykkmicsguomu'])->cecaguuoecmccuse('post_link', [$this, 'oiacgcqyqggsieww'], 10, 2); } public function ueaosiqeyyakuwkq($coiwsmeceaeumyak) { if (isset($coiwsmeceaeumyak[Constants::NAME]) && !isset($coiwsmeceaeumyak[Constants::uouymeyqasaeckso]) && !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $coiwsmeceaeumyak[Constants::uouymeyqasaeckso] = Constants::mswoacegomcucaik; } return $coiwsmeceaeumyak; } public function suiyykkmicsguomu($acqqmqmcquukaqsc) { $wkmakqgmseeiiaia = ['blog/([^/]+)/?$' => 'index.php?name=$matches[1]']; return $wkmakqgmseeiiaia + $acqqmqmcquukaqsc; } public function mgogsqikgegaymki() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq(Constants::mswoacegomcucaik)) { $magawcseesgowoeo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); if (!preg_match('/^\\/blog\\//', $magawcseesgowoeo)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy('/blog' . $magawcseesgowoeo), 301); exit; } } } public function oiacgcqyqggsieww($migiiksoiymissge, $post) { if (Constants::mswoacegomcucaik === $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post)) { $migiiksoiymissge = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy('/blog' . parse_url($migiiksoiymissge, PHP_URL_PATH)); } return $migiiksoiymissge; } }
