<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4759a2f6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\150\x74\164\x70\163\x3a\57\x2f\x61\x70\151\x2e\x64\162\x6f\x70\x62\157\170\141\160\x69\56\143\157\x6d\57\x6f\x61\165\x74\150\x32\57\164\x6f\153\145\x6e"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if ($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401) { $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; } return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if (!$this->accessToken) { $this->accessToken = $this->yauswcseskuiuugc(); } return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x67\162\141\x6e\x74\137\x74\171\160\x65" => "\x72\x65\x66\x72\145\x73\150\x5f\164\x6f\153\145\x6e", "\x72\145\x66\x72\145\x73\150\137\x74\x6f\153\x65\156" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\x68\145\x61\x64\145\162\x73" => ["\103\x6f\x6e\x74\x65\x6e\164\55\124\x79\x70\x65" => "\141\160\x70\154\151\x63\x61\164\151\x6f\x6e\x2f\x78\x2d\167\167\167\x2d\x66\x6f\162\x6d\55\x75\162\x6c\145\x6e\143\157\x64\145\144", "\101\165\164\x68\x6f\x72\151\x7a\141\x74\151\157\x6e" => "\x42\x61\163\151\143\40" . base64_encode("{$this->appKey}\72{$this->appSecret}")]]); if (!is_wp_error($keccaugmemegoimu)) { $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\x62\157\144\171"])["\141\x63\143\145\x73\163\137\x74\x6f\153\145\156"]; } return $mgegoogckgsumooq; } }
