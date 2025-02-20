<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aac8172ee             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Single extends Controller { public function __construct() { $this->rest_base = 'single'; parent::__construct(); } public function register_routes() { $this->register('/get-post-info', [Constants::wwgusigoaksqmwsm => [$this, 'icumeoogqymwcmqa']]); $this->register('/get-team-info', [Constants::wwgusigoaksqmwsm => [$this, 'qqiywammkgkuquqk']]); $this->register('/get-member-info', [Constants::wwgusigoaksqmwsm => [$this, 'kikgsiiwgcikgqoi']]); } public function icumeoogqymwcmqa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->kcuqasmkogakwgqu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $asiagekggwiqmyyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if ($asiagekggwiqmyyq) { $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); $woewcmgaacwwcmyy = $oquqsamoqkequssa->iekyeyicoyyawomk()->akkkoiiymmamsauc($asiagekggwiqmyyq); if ($woewcmgaacwwcmyy) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = $oquqsamoqkequssa->waecsyqmwascmqoa($woewcmgaacwwcmyy, Constants::kqigmeickowqiiyy); $post = $seumokooiykcomco->get($gcqseksiskwueksc, Constants::ckmqoekmugkggeym, true); if ($post) { $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post)); $ccowyogiqwikkkie = [[Constants::NAME => Constants::ieioeisgwcgysukw, Constants::ogigqueukwysusii => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => sprintf(__('View %s', PR__CST__FILEFOX), $yowggsumsmeoeiqc)]]; if ($oquqsamoqkequssa->aiwkayseywyckasm($woewcmgaacwwcmyy, $keccaugmemegoimu[$oquqsamoqkequssa::cmiegiycgiucucgs], Constants::iockmgiyoygcswog)) { $iwywmkygwewiamwm = $wgkqagumoowawogg->yyykkcyiksewsoqy($post); if ($iwywmkygwewiamwm) { $ccowyogiqwikkkie[] = [Constants::NAME => Constants::awysmmukegasimmq, Constants::ogigqueukwysusii => $iwywmkygwewiamwm, Constants::qgqyauaqwqmqseim => IconInterface::qgmawmcoyqqkcosk, Constants::qescuiwgsyuikume => sprintf(__('Edit %s', PR__CST__FILEFOX), $yowggsumsmeoeiqc)]; } } $keccaugmemegoimu = [Constants::kqigmeickowqiiyy => $gcqseksiskwueksc, Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($post), Constants::egwoacukmsioosum => $wgkqagumoowawogg->uamasysiccecccmw($post), Constants::myikkigscysoykgy => $ccowyogiqwikkkie]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Requested post not exists.', PR__CST__FILEFOX)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Post Not Found', PR__CST__FILEFOX), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function qqiywammkgkuquqk(WP_REST_Request $aqmwamyiwgeeymqa) { $asiagekggwiqmyyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if ($asiagekggwiqmyyq) { } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kikgsiiwgcikgqoi(WP_REST_Request $aqmwamyiwgeeymqa) { $asiagekggwiqmyyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if ($asiagekggwiqmyyq) { } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
