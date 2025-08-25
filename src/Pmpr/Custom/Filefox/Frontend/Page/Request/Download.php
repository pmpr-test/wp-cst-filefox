<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68ac85971d7d8             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page\Request; use Pmpr\Common\Foundation\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Setting\Setting; class Download extends Page { public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw(Constants::kucuwimmakgiieom)->gswweykyogmsyawy(__('Request File', PR__CST__FILEFOX))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::oeyomkquakmseosk)); } public function rsysgcucogueguuk() : array { return ['track_title' => __('Track Request', PR__CST__FILEFOX), 'track_action' => 'ff_ticket_get_track_form', 'submit_title' => __('Submit Request', PR__CST__FILEFOX), 'submit_action' => 'ff_ticket_get_file_request_form']; } public function enqueue() { $this->ewcsyqaaigkicgse('ticket_enqueue_form_assets'); } }
