<?php

namespace pedzed\DirectoryScanner\tests {
    
    use pedzed\DirectoryScanner\DirectoryScanner;
    use PHPUnit_Framework_TestCase as PHPUnit;
    
    class DirectoryScannerTest extends PHPUnit {
        
        public function testSetDirectory() {
            $directoryScanner = new DirectoryScanner();
            $directoryScanner->setDirectory(__DIR__.'/_data');
            
            $actualValue = $directoryScanner->getDirectory();
            
            $this->assertEquals(__DIR__.'/_data', $actualValue);
        }
        
    }
    
}

