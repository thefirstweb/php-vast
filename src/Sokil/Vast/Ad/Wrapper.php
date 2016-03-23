<?php

namespace Sokil\Vast\Ad;

class Wrapper extends \Sokil\Vast\Ad
{
    public function addVASTAdTagURI($uri)
    {
        // create VASTAdTagURI-Node
        $VASTAdTagURIDomElement = $this->_domElement->ownerDocument->createElement('VASTAdTagURI');
        $this->_domElement->firstChild->appendChild($VASTAdTagURIDomElement);

        // create VASTAdTagURI-cdata
        $cdata = $this->_domElement->ownerDocument->createCDATASection($uri);
        $VASTAdTagURIDomElement->appendChild($cdata);
        
        return $this;
    }
}