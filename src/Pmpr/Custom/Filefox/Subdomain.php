<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc361e7c14c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WP_Term; class Subdomain extends Container { use CommonTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('template_redirect', [$this, 'ceiusicsawwaaamq']); } public function kgquecmsgcouyaya() { $kesssewsiegssiya = $this->mqyuouguewuyeioy(); $this->cecaguuoecmccuse('post_rewrite_rules', [$this, 'ekyqmyskegcawgyo'])->cecaguuoecmccuse("{$kesssewsiegssiya}_rewrite_rules", [$this, 'qwswkoyqwigqggay'])->cecaguuoecmccuse('term_link', [$this, 'akyucemyueaukgca'], 10, 2)->cecaguuoecmccuse('admin_url', [$this, 'maemmgqsuqmgekqu'], 10, 2)->cecaguuoecmccuse('post_type_link', [$this, 'oayisgcwgeewawmo'], 10, 2)->cecaguuoecmccuse('query', [$this, 'skkaemayguuuiyeu'], 10, 2)->cecaguuoecmccuse('wpseo_sitemap_entry', [$this, 'wegiiamywoyckysa'], 10, 3)->cecaguuoecmccuse('wpseo_xml_sitemap_post_url', [$this, 'moqoeouycqukymeo'], 10, 2); } public function init() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->gawcqwcqgwgucgya('rewrite_rules', ''); } } public function maemmgqsuqmgekqu($eeamcawaiqocomwy, $mkomwsiykqigmqca) { if ('admin-ajax.php' === $mkomwsiykqigmqca) { if ($this->giycagwmuawumcou()) { $soyimggocqaeswge = $this->euyyuaecekwekuag(); $eeamcawaiqocomwy = str_replace("://", "://{$soyimggocqaeswge}.", $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function ceiusicsawwaaamq() { $gwqgmkqcgwwmweom = false; $kqokeucouewkcomm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc(Constants::oguseymmyyoyaako)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); if ($aaokuekaimigoyue = $this->eikmwwusgumqyika($post)) { $csaswyemmmmusmug = $seumokooiykcomco->ycqquoiyyuesegsy($post); if (false === strpos($kqokeucouewkcomm, "://{$aaokuekaimigoyue}.") && $kqokeucouewkcomm !== $csaswyemmmmusmug) { $gwqgmkqcgwwmweom = $csaswyemmmmusmug; } } } else { if ($this->euyyuaecekwekuag()) { if (!$this->giycagwmuawumcou()) { $gwqgmkqcgwwmweom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } } else { if ($mumyimcwkaemyyue->qmssqeyayicowkgy($this->mqyuouguewuyeioy())) { $gwqgmkqcgwwmweom = $this->ssmiigwgmoceimcy($kqokeucouewkcomm, $mumyimcwkaemyyue->mwyqswsaeeewsosm()); } } } if ($gwqgmkqcgwwmweom) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($gwqgmkqcgwwmweom)); } } public function qwswkoyqwigqggay($acqqmqmcquukaqsc) { if ($iwewcwusemqaiggk = $this->aeuyskymwgkayygc()) { $acqqmqmcquukaqsc = []; $aaokuekaimigoyue = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->aqcogscycyycgkuq($iwewcwusemqaiggk); $kesssewsiegssiya = $this->mqyuouguewuyeioy(); $acqqmqmcquukaqsc["feed/(feed|rdf|rss|rss2|atom)/?\$"] = "index.php?{$kesssewsiegssiya}={$aaokuekaimigoyue}&feed=\$matches[1]"; $acqqmqmcquukaqsc["(feed|rdf|rss|rss2|atom)/?\$"] = "index.php?{$kesssewsiegssiya}={$aaokuekaimigoyue}&feed=\$matches[1]"; $acqqmqmcquukaqsc["page/([0-9]{1,})/?\$"] = "index.php?{$kesssewsiegssiya}={$aaokuekaimigoyue}&paged=\$matches[1]"; $acqqmqmcquukaqsc["\$"] = "index.php?{$kesssewsiegssiya}={$aaokuekaimigoyue}"; } return $acqqmqmcquukaqsc; } public function ekyqmyskegcawgyo($acqqmqmcquukaqsc) { if ($this->giycagwmuawumcou()) { $acqqmqmcquukaqsc['[^/]+/attachment/([^/]+)/?$'] = 'index.php?attachment=$matches[1]'; $acqqmqmcquukaqsc['[^/]+/attachment/([^/]+)/trackback/?$'] = 'index.php?attachment=$matches[1]&tb=1'; $acqqmqmcquukaqsc['[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?attachment=$matches[1]&feed=$matches[2]'; $acqqmqmcquukaqsc['[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?attachment=$matches[1]&feed=$matches[2]'; $acqqmqmcquukaqsc['[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$'] = 'index.php?attachment=$matches[1]&cpage=$matches[2]'; $acqqmqmcquukaqsc['([^/]+)/trackback/?$'] = 'index.php?name=$matches[1]&tb=1'; $acqqmqmcquukaqsc['([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?name=$matches[1]&feed=$matches[2]'; $acqqmqmcquukaqsc['([^/]+)/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?name=$matches[1]&feed=$matches[2]'; $acqqmqmcquukaqsc['([^/]+)/page/?([0-9]{1,})/?$'] = 'index.php?name=$matches[1]&paged=$matches[2]'; $acqqmqmcquukaqsc['([^/]+)/comment-page-([0-9]{1,})/?$'] = 'index.php?name=$matches[1]&cpage=$matches[2]'; $acqqmqmcquukaqsc['([^/]+)(/[0-9]+)?/?$'] = 'index.php?name=$matches[1]&page=$matches[2]'; $acqqmqmcquukaqsc['[^/]+/([^/]+)/?$'] = 'index.php?attachment=$matches[1]'; $acqqmqmcquukaqsc['[^/]+/([^/]+)/trackback/?$'] = 'index.php?attachment=$matches[1]&tb=1'; $acqqmqmcquukaqsc['[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?attachment=$matches[1]&feed=$matches[2]'; $acqqmqmcquukaqsc['[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?attachment=$matches[1]&feed=$matches[2]'; $acqqmqmcquukaqsc['[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$'] = 'index.php?attachment=$matches[1]&cpage=$matches[2]'; } return $acqqmqmcquukaqsc; } public function akyucemyueaukgca($iwywmkygwewiamwm, $aokagokqyuysuksm) { $qyaqaocioqaksekc = $this->mqyuouguewuyeioy(); if ($qyaqaocioqaksekc) { $kskqcquooygsusky = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($aokagokqyuysuksm); if ($kskqcquooygsusky === $qyaqaocioqaksekc) { $iwywmkygwewiamwm = $this->ssmiigwgmoceimcy($iwywmkygwewiamwm, $aokagokqyuysuksm, $qyaqaocioqaksekc); } } return $iwywmkygwewiamwm; } public function oayisgcwgeewawmo($iwywmkygwewiamwm, $post) { if ($aaokuekaimigoyue = $this->eikmwwusgumqyika($post)) { $iwywmkygwewiamwm = str_replace("://", "://{$aaokuekaimigoyue}.", $iwywmkygwewiamwm); } return $iwywmkygwewiamwm; } public function wegiiamywoyckysa($eeamcawaiqocomwy, $ymysywcqikkiqocw, $post) { if (Constants::mswoacegomcucaik === $ymysywcqikkiqocw && isset($eeamcawaiqocomwy['loc'])) { $eeamcawaiqocomwy['loc'] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post); } return $eeamcawaiqocomwy; } public function moqoeouycqukymeo($migiiksoiymissge, $post) { if ($this->eikmwwusgumqyika($post)) { $this->ggmgmqswqkgecosg('post_type_link', [$this, 'oayisgcwgeewawmo']); $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post); $this->cecaguuoecmccuse('post_type_link', [$this, 'oayisgcwgeewawmo'], 10, 2); } return $migiiksoiymissge; } public function skkaemayguuuiyeu($gqgemcmoicmgaqie) { global $wp_query, $wpdb; $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($aaokuekaimigoyue = $owaoeyikmqaeegma->get('pagename', $wp_query)) { if ($owaoeyikmqaeegma->uumoasaecaigsyys($wp_query, Constants::uouymeyqasaeckso, Constants::oguseymmyyoyaako)) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { $soyimggocqaeswge = $this->euyyuaecekwekuag(); $kesssewsiegssiya = $this->mqyuouguewuyeioy(); if ($soyimggocqaeswge && $kesssewsiegssiya) { $aaokuekaimigoyue = rawurlencode(urldecode($aaokuekaimigoyue)); $aaokuekaimigoyue = str_replace('%2F', '/', $aaokuekaimigoyue); $aaokuekaimigoyue = str_replace('%20', ' ', $aaokuekaimigoyue); $ymkqyawksmqcgsei = explode('/', trim($aaokuekaimigoyue, '/')); $ymkqyawksmqcgsei = array_map('sanitize_title_for_query', $ymkqyawksmqcgsei); $kmakqcsaaqgyakom = sprintf("SELECT ID, post_name, post_parent, post_type FROM {$wpdb->posts} WHERE post_name IN ('%s') AND post_type IN ('%s')", implode("','", esc_sql($ymkqyawksmqcgsei)), implode("','", [Constants::oguseymmyyoyaako, Constants::cqycgsyykemiygou])); $sgyaeosgamaymkeo = trim(preg_replace('/\\s+/', ' ', $gqgemcmoicmgaqie)); if ($sgyaeosgamaymkeo == $kmakqcsaaqgyakom) { $eagqsqeocaokmsim = sprintf("LEFT JOIN %s fftr ON (%s.ID = fftr.object_id OR %s.post_parent = fftr.object_id) ", $wpdb->term_relationships, $wpdb->posts, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("LEFT JOIN %s fftt ON (fftr.term_taxonomy_id = fftt.term_taxonomy_id) ", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("LEFT JOIN %s fft ON (fftt.term_id = fft.term_id) ", $wpdb->terms); $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc("FROM {$wpdb->posts} WHERE", "FROM {$wpdb->posts} {$eagqsqeocaokmsim} WHERE", $kmakqcsaaqgyakom) . sprintf(" AND (fft.slug = '%s')", $soyimggocqaeswge); } } } } } return $gqgemcmoicmgaqie; } public function ssmiigwgmoceimcy($iwywmkygwewiamwm, $iwewcwusemqaiggk, $kesssewsiegssiya = null) : string { if (!$kesssewsiegssiya) { $kesssewsiegssiya = $this->mqyuouguewuyeioy(); } $aaokuekaimigoyue = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->aqcogscycyycgkuq($iwewcwusemqaiggk, $kesssewsiegssiya); $iwywmkygwewiamwm = str_replace("/{$kesssewsiegssiya}/", '/', $iwywmkygwewiamwm); $iwywmkygwewiamwm = str_replace("/{$aaokuekaimigoyue}", '', $iwywmkygwewiamwm); return trailingslashit(str_replace("://", "://{$aaokuekaimigoyue}.", $iwywmkygwewiamwm)); } public function euyyuaecekwekuag() : string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->euyyuaecekwekuag(); } public function aeuyskymwgkayygc() { $iwewcwusemqaiggk = false; if ($soyimggocqaeswge = $this->euyyuaecekwekuag()) { $qyaqaocioqaksekc = $this->mqyuouguewuyeioy(); if ($qyaqaocioqaksekc) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $soyimggocqaeswge, $qyaqaocioqaksekc); } } return $iwewcwusemqaiggk; } public function giycagwmuawumcou() : bool { return !empty($this->aeuyskymwgkayygc()); } }
