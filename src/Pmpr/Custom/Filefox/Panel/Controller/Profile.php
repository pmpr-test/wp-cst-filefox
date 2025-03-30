<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0c4b985             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Panel\Panel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Controller { const kscoikwuqiwqoqww = 'caption'; const yiucoseagukmwiym = 'expertise'; const uqmckkqqkogyqiog = 'languages'; const cyqumeayeesguoma = 'memberships'; const mymoiguoqqsqkamk = 'certificates'; const oiouqkwsyyeogqyo = 'public_phone'; const cgguusqsqyacaqyo = 'public_email'; const mqiiweoyasgqawam = 'external_accounts'; const aeouqakuikwyucmm = 'aparat_introduce_link'; const giuqqccwwiscqgkk = 'education_'; const mkqyqaucaimeomqo = self::giuqqccwwiscqgkk . 'place'; const asgmocqsmywocsui = self::giuqqccwwiscqgkk . Constants::gueokgaoyascgeqe; const eqaymssaawwyssis = self::giuqqccwwiscqgkk . 'degree'; const gqsscweoswwqioqy = self::mkqyqaucaimeomqo . Constants::wassgkgmoyygyaya . Constants::oeoceeacyascgkai; public function __construct() { $this->rest_base = 'profile'; parent::__construct(); } public function register_routes() { $this->register('/get-additional-info', [Constants::wwgusigoaksqmwsm => [$this, 'qgeiuwkwaosmcokw']]); $this->register('/update-additional-info', [Constants::wwgusigoaksqmwsm => [$this, 'gceiiuomgccaseiw'], Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw]); } public function qgeiuwkwaosmcokw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->_getAdditionalInfo($this->issssuygyewuaswa($aqmwamyiwgeeymqa)); $keccaugmemegoimu[Constants::ymckmcsiymwqucoq] = $this->ayssaocauwgssywa($keccaugmemegoimu[Constants::ymckmcsiymwqucoq]); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gceiiuomgccaseiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = $this->ocksiywmkyaqseou('panel_user_save_info', $mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $this->_getAdditionalInfo($mkucggyaiaukqoce)[Constants::ymckmcsiymwqucoq]); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu === $mkucggyaiaukqoce) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Something is wrong, can not update you profile, please contact us.', PR__CST__FILEFOX)); } else { $keccaugmemegoimu = $this->qasywwyamoesisyi(__('Additional information update successfully.', PR__CST__FILEFOX)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function _getAdditionalInfo($mkucggyaiaukqoce) : array { $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; if ($mkucggyaiaukqoce) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $pesgayguaoiggwsy = Panel::symcgieuakksimmu(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kscoikwuqiwqoqww)->gswweykyogmsyawy(__('Caption', PR__CST__FILEFOX))->kyiucygqsgequoys(__('Professional Python programmer', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::yiucoseagukmwiym)->gswweykyogmsyawy(__('Expertise', PR__CST__FILEFOX))->kyiucygqsgequoys(__('Game console specialist', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::aeouqakuikwyucmm)->gswweykyogmsyawy(__('Aparat Introduce Link', PR__CST__FILEFOX))->xkgcwkwsqysqamic()->kyiucygqsgequoys(__('', PR__CST__FILEFOX)), $gusoaiguqeaommcc->wowyaacgaccyeici('educational_info')->gswweykyogmsyawy(__('Educational Information', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::mkqyqaucaimeomqo)->gswweykyogmsyawy(__('Place of Study', PR__CST__FILEFOX))->kyiucygqsgequoys(__('Tehran University', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::asgmocqsmywocsui)->gswweykyogmsyawy(__('Field of Study', PR__CST__FILEFOX))->kyiucygqsgequoys(__('Computer Engineering', PR__CST__FILEFOX)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(self::eqaymssaawwyssis)->gswweykyogmsyawy(__('Degree', PR__CST__FILEFOX))->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->acauweqyyugwisqc($pesgayguaoiggwsy->kosmwwayyqqowcya()), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::gqsscweoswwqioqy)->gswweykyogmsyawy(__('Education Place Website', PR__CST__FILEFOX))->kyiucygqsgequoys('https://ut.ac.ir/')->xkgcwkwsqysqamic(), $gusoaiguqeaommcc->mccagaqeagiikkec(self::uqmckkqqkogyqiog)->gswweykyogmsyawy(__('Languages', PR__CST__FILEFOX))->acauweqyyugwisqc($pesgayguaoiggwsy->oiceouwgwuakccqu())->mkmssscwmeekwgqo()->oikgogcweiiaocka()->gucwmccyimoagwcm(__('Languages you speak or are familiar with', PR__CST__FILEFOX)), $gusoaiguqeaommcc->wowyaacgaccyeici('memberships_certificates')->gswweykyogmsyawy(__('Memberships & Certificates', PR__CST__FILEFOX))->gucwmccyimoagwcm(__('Organizations or institutions of which you are a member, for example, the Medical System Organization + certificates and credentials (exclusively those related to the specialized field of the fax file content) that you have received', PR__CST__FILEFOX)), $gusoaiguqeaommcc->qqmgmgasauucoago(self::cyqumeayeesguoma)->gswweykyogmsyawy(__('Memberships', PR__CST__FILEFOX))->mkmssscwmeekwgqo()->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::NAME)->kyiucygqsgequoys(__('Organization Name', PR__CST__FILEFOX)))->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::oeoceeacyascgkai)->xkgcwkwsqysqamic()->kyiucygqsgequoys(__('Organization Website', PR__CST__FILEFOX))), $gusoaiguqeaommcc->qqmgmgasauucoago(self::mymoiguoqqsqkamk)->gswweykyogmsyawy(__('Certificates', PR__CST__FILEFOX))->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->kyiucygqsgequoys(__('Certificate Name', PR__CST__FILEFOX)))->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::NAME)->kyiucygqsgequoys(__('Organization Name', PR__CST__FILEFOX)))->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::oeoceeacyascgkai)->xkgcwkwsqysqamic()->kyiucygqsgequoys(__('Organization Website', PR__CST__FILEFOX))), $gusoaiguqeaommcc->wowyaacgaccyeici('contact_points')->gswweykyogmsyawy(__('Public Contact Points', PR__CST__FILEFOX))->gucwmccyimoagwcm(__('This contact information will be displayed to all visitors on your public profile.', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oiouqkwsyyeogqyo)->smigkcmumwkgamkk()->gswweykyogmsyawy(__('Phone', PR__CST__FILEFOX)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::cgguusqsqyacaqyo)->mkiaygiogeeyogqm()->gswweykyogmsyawy(__('Email', PR__CST__FILEFOX))->kyiucygqsgequoys('example@email.com'), $gusoaiguqeaommcc->wowyaacgaccyeici('external_acs')->gswweykyogmsyawy(__('External Accounts', PR__CST__FILEFOX))->gucwmccyimoagwcm(__('Your profile on reference websites like Reddit and Stack Exchange', PR__CST__FILEFOX)), $gusoaiguqeaommcc->qqmgmgasauucoago(self::mqiiweoyasgqawam)->gswweykyogmsyawy(__('External Accounts', PR__CST__FILEFOX))->mkmssscwmeekwgqo()->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->kyiucygqsgequoys(__('Website Title', PR__CST__FILEFOX)))->mkksewyosgeumwsa($gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::ogigqueukwysusii)->xkgcwkwsqysqamic()->kyiucygqsgequoys(__('Your Account Link', PR__CST__FILEFOX)))]; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { $eqgoocgaqwqcimie = $yoiguusocukqeayg->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $mkucggyaiaukqoce); $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } return [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); return $mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce) && $this->emwagqamysmyeigc($mkucggyaiaukqoce); } }
