<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecadf46170             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Traits\RelatedTermsTrait; class Article extends CPT { use RelatedTermsTrait; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::goumieeyyqigueiw, Constants::egwoacukmsioosum])->wiskakymeaywyeuw(true)->ckaeqgiaiqwsccke(6)->acqyqaaeeogkosoq(Constants::ocsomysosuqaimuc)->acqyqaaeeogkosoq(Constants::qgciomgukmcwscqw)->acqyqaaeeogkosoq(Constants::oeeqisiiqoswqqmy)->muuwuqssqkaieqge(__('Articles', PR__CST__FILEFOX))->guiaswksukmgageq(__('Article', PR__CST__FILEFOX))->yioesawwewqaigow(IconInterface::sqomikyigsmkymsk); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('manage_article_posts_custom_column', [$this, 'yiaammmogmaisoka'], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('manage_edit-article_columns', [$this, 'mmsmgcqkccucouuk'], 20); parent::kgquecmsgcouyaya(); } public function qyecwywaoyamkmci() { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); if ($cciauwuwuqaywgce = $this->oauqscamacmwmyyq($this->gkyyuggqywmsywoi(), $useksmwkuswkwcqg)) { $this->sikqggwmmykuiymy($this->caokeucsksukesyo()->wmkogisswkckmeua()->scyscgskcwukckyy("{$useksmwkuswkwcqg}_custom_data")->gswweykyogmsyawy(__('Custom Data', PR__CST__FILEFOX))->aucimgwswmgaocae($cciauwuwuqaywgce)->qewcwaikmqqqseem()->kwcoiysqqkqsugqo()); } } public function yiaammmogmaisoka($qgoqiacsiccwoawi, $gcqseksiskwueksc) { switch ($qgoqiacsiccwoawi) { case Constants::oeeqisiiqoswqqmy: if ($iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($gcqseksiskwueksc, $qgoqiacsiccwoawi)) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); echo $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk)); } break; } } public function mmsmgcqkccucouuk($wkkweuacukumqmya) { if (is_array($wkkweuacukumqmya)) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, [Constants::oeeqisiiqoswqqmy => __('Material', PR__CST__FILEFOX)], 2); } return $wkkweuacukumqmya; } }
