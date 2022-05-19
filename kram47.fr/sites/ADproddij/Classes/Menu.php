<?php

Class Menu
{	
	private $_pages;
	private $_pagesNames;
	private $_page;
	private $_footerPages;
	private $_footerPagesNames;
	
	public function Menu()
	{
		$this->_pages = array ('accueil', 'informations', 'photos', 'activites');
		$this->_pagesNames = array ('accueil' => 'Accueil', 
						'informations' => 'Information',
						'photos' => 'Photos',
						'activites' => 'Activites');
						
		$this->_footerPages = array ("contacts", "lol");
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
		for ($i = 0; $i < count($this->_pages) ; $i++)	
		{
			echo "<li "; 
			if ($this->_page == $i)
				echo "id=\"selected_page\" ";
			echo ">\n";
				echo "<a class=\"pages_link\" href=\"index.php?p=" . $i . "\">\n";
					echo "<div>";
						echo strtoupper($this->_pagesNames[$this->_pages[$i]]). "\n";
					echo "</div>";
				echo "</a>\n" ;
			echo "</li>\n";
		}
	}
	
	public function printFooterMenu() 
	{
		for ($i = 0; $i < count($this->_footerPages) ; $i++)
		{
			echo "<li "; 
			if ($this->_page == $i)
				echo "id=\"selected_page\" ";
			echo ">\n";
				echo "<a class=\"pages_link\" href=\"index.php?p=" . (count($this->_pages) + $i) . "\">\n";
					echo "<div>";
						echo strtoupper($this->_footerPagesNames[$this->_footerPages[$i]]). "\n";
					echo "</div>";
				echo "</a>\n" ;
			echo "</li>\n";
		}
	}
	
	public function checkPage()
	{
		if ($this->_page < count($this->_pages) + count($this->_footerPages))
			return true;
		return false;
	}
	
	public function includePage()
	{
		if ($this->checkPage())
			if ($this->_page < count($this->_pages))
				include "pages/" . $this->_pages[intval($this->_page)] . ".php";
			else
				include "pages/" . $this->_footerPages[$this->_page - count($this->_pages)] . ".php";
		else
			include "pages/badPage.php";
	}
}

?>