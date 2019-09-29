<?php
    $xml = simplexml_load_file("../storage/app/xml_imports/xml_archetype-1569272307.xml") or die("Error al cargar el xml");
    #echo $xml->definition->attributes[0]->rm_attribute_name;
    
    
    foreach($xml->getDocNamespaces() as $strPrefix => $strNamespace) {
        if(strlen($strPrefix)==0) {
            $strPrefix="a"; //Assign an arbitrary namespace prefix.
        }
        $xml->registerXPathNamespace($strPrefix,$strNamespace);
    }
    $busca = $xml->xpath('//a:node_id'); //Retorna un array de objetos SimpleXMLElement o FALSE en caso de error. 
    $busca_relacion = $xml->xpath('//a:term_definitions');
    #print_r($busca[0]);

    foreach($busca as $nodo){
        echo $nodo, "\n";
    }

    #print_r($busca_relacion);
    
    echo $busca_relacion[0]->items[0]->items,"\n"; #imprimo el primer item item de term_definition
    foreach($busca_relacion as $key=>$nodo)
    {
        switch ((string) $nodo['language']) {
            case 'en':
                $mykey = $key;
                echo "encontre lenguaje en----------",$mykey;
                break;
        
        }  
    }

    print "<pre>";
    print_r($busca_relacion);
    print "</pre>";

?>