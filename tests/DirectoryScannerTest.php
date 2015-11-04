<?php

namespace pedzed\DirectoryScanner\tests {
    
    use pedzed\DirectoryScanner\DirectoryScanner;
    use PHPUnit_Framework_TestCase as PHPUnit;
    
    class DirectoryScannerTest extends PHPUnit {
        
        public function testSetDirectory() {
            $directoryScanner = new DirectoryScanner();
            $directoryScanner->setDirectory(__DIR__.'/_data');
            
            $expectedValue = __DIR__.'/_data';
            $actualValue = $directoryScanner->getDirectory();
            $this->assertEquals($expectedValue, $actualValue);
        }
        
        public function testScan() {
            $directoryScanner = new DirectoryScanner();
            $directoryScanner->setDirectory(__DIR__.'/_data');
            
            $expectedValue = [
                'nested/deeper/deeper than deep',
                'nested/deeper/deeper than deep 2',
                'nested/deeper/deeper than deep 2/Deep.txt',
                'nested',
                'nested/1.txt',
                'nested/2.php',
                'nested/empty',
                '1.txt',
                '2.xml',
                '2.xml - Shortcut.lnk',
            ];
            $actualValue = $directoryScanner->scan();
            $this->assertEquals(sort($expectedValue), sort($actualValue));
        }
        
    }
    
}

