<?php

namespace pedzed\DirectoryScanner {
    
    class DirectoryScanner {
        
        private $_directory;
        
        public function setDirectory($dir) {
            $this->_directory = $dir;
        }
        
        public function getDirectory() {
            return $this->_directory;
        }
        
    }
    
}

