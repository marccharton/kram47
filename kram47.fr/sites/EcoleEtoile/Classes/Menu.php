<?php

Class Menu
{	
	private $_pagesNames;
	private $_page;
	private $_footerPagesNames;
	
	public function Menu()
	{
		$this->_pagesNames = array ('accueil' => 'Accueil', 
						'historique' => 'Historique',
						'galerie' => 'Galerie',
						'activites' => 'Activites');
		$this->_footerPagesNames = array ('contacts' => 'Contacts', 
						'lol' => 'salut menu');
		$this->getPage();
	}
	
	public function getPage()
	{
		$this->_page = 0;
		if (isset($_GET['p']))
			$this->_page = $_GET['p'];
	}
	
	public function printHeadMenu()
	{
            $i = 0;
            foreach ($this->_pagesNames as $key => $value) {
                echo "<li "; 
                if ($this->_page == $i)
                    echo "id=\"selected_page\" ";
                echo ">\n";
                    echo "<a class=\"pages_link\" href=\"index.php?p=" . $i . "\">\n";
                        echo "<div>";
                            echo strtoupper($value). "\n";
                        echo "</div>";
                    echo "</a>\n" ;
                echo "</li>\n";
            $i++;
            }	
	}
	
	public function printFooterMenu() 
	{
            $i = 0;
            foreach ($this->_footerPagesNames as $key => $value) {
                echo "<li "; 
                if ($this->_page == $i)
                    echo "id=\"selected_page\" ";
                echo ">\n";
                    echo "<a class=\"pages_link\" href=\"index.php?p=" . (count($this->_pagesNames) + $i) . "\">\n";
                        echo "<div>";
                            echo strtoupper($value). "\n";
                        echo "</div>";
                    echo "</a>\n" ;
                echo "</li>\n";
            $i++;
            }
	}
	
	public function checkPage()
	{
		if ($this->_page < count($this->_pagesNames) + count($this->_footerPagesNames))
			return true;
		return false;
	}
	
	public function includePage()
	{
            $pages = array_keys($this->_pagesNames);
            $footerPages = array_keys($this->_footerPagesNames);
            if ($this->checkPage())
			if ($this->_page < count($this->_pagesNames))
				include "pages/" . $pages[intval($this->_page)] . ".php";
			else
				include "pages/" . $footerPages[$this->_page - count($this->_pagesNames)] . ".php";
		else
			include "pages/badPage.php";
	}
        
        public function getFooterIndex()
        {
            return count($this->_pagesNames);
        }
        
}

?>