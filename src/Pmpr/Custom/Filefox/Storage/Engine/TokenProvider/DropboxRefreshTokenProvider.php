<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977cbabe45f             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\150\164\164\160\x73\72\57\x2f\x61\x70\151\56\x64\162\x6f\160\x62\x6f\x78\141\x70\151\x2e\143\x6f\155\x2f\157\x61\165\x74\x68\62\57\x74\157\x6b\145\x6e"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if ($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401) { $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; } return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if (!$this->accessToken) { $this->accessToken = $this->yauswcseskuiuugc(); } return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x67\x72\x61\x6e\164\137\164\x79\x70\145" => "\162\145\x66\x72\145\x73\150\137\x74\157\x6b\145\156", "\162\x65\x66\162\x65\163\150\x5f\x74\157\x6b\x65\156" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\150\x65\141\x64\x65\162\163" => ["\x43\157\156\164\145\156\x74\55\x54\171\x70\x65" => "\141\x70\160\x6c\x69\x63\141\x74\151\x6f\x6e\57\170\x2d\x77\167\167\x2d\x66\x6f\162\x6d\55\x75\162\154\x65\x6e\143\x6f\144\x65\144", "\101\165\164\x68\157\x72\151\172\x61\x74\x69\x6f\x6e" => "\102\141\x73\x69\x63\40" . base64_encode("{$this->appKey}\x3a{$this->appSecret}")]]); if (!is_wp_error($keccaugmemegoimu)) { $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\142\x6f\x64\171"])["\x61\143\x63\145\163\163\137\x74\157\x6b\145\x6e"]; } return $mgegoogckgsumooq; } }
