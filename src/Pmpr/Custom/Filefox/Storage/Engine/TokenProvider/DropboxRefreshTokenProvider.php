<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835fad7e9             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\150\164\x74\x70\163\72\57\57\141\160\x69\56\144\162\157\160\x62\157\x78\x61\x70\x69\56\x63\x6f\x6d\x2f\157\141\x75\164\x68\62\x2f\x74\157\153\x65\x6e"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if ($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401) { $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; } return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if (!$this->accessToken) { $this->accessToken = $this->yauswcseskuiuugc(); } return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\147\162\141\156\164\137\164\x79\160\x65" => "\162\145\x66\162\145\163\x68\x5f\164\157\x6b\x65\156", "\x72\x65\x66\x72\x65\x73\150\x5f\x74\x6f\x6b\145\156" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\150\145\141\144\145\x72\163" => ["\x43\x6f\156\x74\145\156\x74\x2d\124\171\160\145" => "\141\x70\160\x6c\151\x63\x61\164\x69\x6f\156\x2f\170\55\x77\x77\167\x2d\146\x6f\162\x6d\x2d\x75\162\154\x65\156\143\x6f\x64\x65\144", "\101\x75\x74\150\x6f\x72\x69\x7a\x61\x74\x69\x6f\156" => "\102\141\163\151\143\40" . base64_encode("{$this->appKey}\72{$this->appSecret}")]]); if (!is_wp_error($keccaugmemegoimu)) { $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\142\157\x64\x79"])["\x61\x63\143\145\x73\x73\x5f\164\x6f\153\x65\x6e"]; } return $mgegoogckgsumooq; } }
