<div id="footerBigContent">
    <div id="footerContent">
        <ul>
            <li>
                <?php 
                $menu = new Menu();    
                $index = $menu->getFooterIndex();        
                
                echo "<a href='index.php?p=".$index."'>";
                ?>
                <div class="footerSectionTitle">
                    Contacts
                </div>
                <?php echo "</a>"; ?>
                <div class="footerSectionContent">
                    31 rue de la kasbah<br /> 
                    8 et 10 rue des Tonneliers Tunis <br />
                    <span class="pageTextBold">Téléphone : </span> 71 321 352  <br />
                    <span class="pageTextBold">Fax : </span> 71 327 554 <br />
                    <span class="pageTextBold">Email : </span> ramla.chemli@yahoo.fr <br />
                </div>
            </li>
        </ul>
    </div>
</div>