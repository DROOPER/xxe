<?php
    
    libxml_disable_entity_loader (false);
    $xmlfile = $argv[1];

    $dom = new DOMDocument();
    $dom->load($argv[1], LIBXML_NOENT | LIBXML_DTDLOAD);
    $secret = simplexml_import_dom($dom);
    $s = $secret->text;
    echo "<p> Secret: $s </p>";
?> 


</body>
