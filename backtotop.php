<?php
// Backtotop extension, https://github.com/GiovanniSalmeri/yellow-backtotop

class YellowBacktotop {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: cs",
            "BacktotopLabel: Zpět nahoru",
            "Language: de",
            "BacktotopLabel: Zurück zum Anfang",
            "Language: en",
            "BacktotopLabel: Back to top",
            "Language: es",
            "BacktotopLabel: Volver arriba",
            "Language: fr",
            "BacktotopLabel: Retour au début",
            "Language: it",
            "BacktotopLabel: Torna all'inizio",
            "Language: nl",
            "BacktotopLabel: Terug naar boven",
            "Language: pt",
            "BacktotopLabel: Voltar ao topo",
            "Language: sv",
            "BacktotopLabel: Tillbaka till toppen",
        ));
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}backtotop.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}backtotop.js\"></script>\n";
        }
        if ($name=="footer") {
            $output = "<div><a href=\"#\" id=\"backtotop\" title=\"".$this->yellow->language->getTextHtml("backtotopLabel")."\" aria-label=\"".$this->yellow->language->getTextHtml("backtotopLabel")."\">".$this->yellow->language->getTextHtml("backtotopLabel")."</a></div>\n";
        }
        return $output;
    }
}
