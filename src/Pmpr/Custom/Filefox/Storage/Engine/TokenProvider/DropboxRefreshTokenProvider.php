<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4a8c1a363             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\150\x74\164\x70\x73\72\x2f\x2f\x61\x70\x69\x2e\x64\162\x6f\x70\142\157\170\141\160\x69\x2e\143\157\x6d\x2f\157\x61\x75\x74\150\62\57\x74\157\153\x65\156"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if ($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401) { $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; } return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if (!$this->accessToken) { $this->accessToken = $this->yauswcseskuiuugc(); } return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x67\162\x61\x6e\x74\137\164\x79\160\145" => "\162\145\x66\x72\x65\x73\x68\137\164\x6f\x6b\x65\x6e", "\x72\x65\146\x72\145\163\x68\x5f\x74\x6f\x6b\x65\156" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\x68\145\x61\x64\x65\x72\163" => ["\x43\x6f\156\164\145\x6e\x74\x2d\x54\x79\160\145" => "\141\x70\160\154\151\x63\141\164\x69\x6f\x6e\57\x78\x2d\x77\x77\x77\55\x66\157\162\x6d\x2d\x75\x72\x6c\145\x6e\143\x6f\144\145\144", "\101\x75\164\x68\x6f\x72\x69\172\x61\164\x69\x6f\156" => "\x42\141\x73\x69\x63\x20" . base64_encode("{$this->appKey}\x3a{$this->appSecret}")]]); if (!is_wp_error($keccaugmemegoimu)) { $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\142\x6f\144\171"])["\141\x63\143\x65\163\x73\137\x74\157\153\145\156"]; } return $mgegoogckgsumooq; } }
