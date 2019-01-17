<?php /*Template Name: sponsers*/ ?>
<script>
    var hid = false;
    function hide(){
        if(hid == false)
        {
            document.getElementById("hide").innerHTML="Show <i class='arrow up'></i>";
            hid = true;
            document.getElementById("slide").style.display = "none";
            document.getElementById("hide").style.cssText = "grid-row:12/13;";
        }else if(hid == true){
            document.getElementById("hide").innerHTML="hide <i class='arrow down'></i>";
            hid = false;
            document.getElementById("slide").style.display = "flex";
            document.getElementById("hide").style.cssText = "grid-row:11/12;";
        }
    }
</script>
<button type="button" onclick="hide()"id="hide">hide <i class="arrow down"></i></button>
<div class="sliding" id="slide">
<a href="https://www.atlanticsuperstore.ca" title="Atlantic_Super_Store"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Atlantic_Super_Store.jpg"></a>
<a href="https://www.bgccan.com/en" title="BGC_National"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/BGC_National.jpg"></a>
<a href="https://www.canadiantire.ca/en" title="Canadian_Tire"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Canadian_Tire.jpg"></a>
<a href="http://nbchildren.com" title="Childrens_Foundation"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Childrens_Foundation.jpg"></a>
<a href="https://www.dieppe.ca/en" title="Dieppe"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Dieppe.jpg"></a>
<a href="http://www.empirescreenprint.com" title="Empire_Screen_Printing"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Empire_Screen_Printing.jpg"></a>
<a href="https://www.fidelity.ca" title="Fidelity_Investments"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Fidelity_Investments.jpg"></a>
<a href="https://www.gianttiger.com" title="Giant_Tiger"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Giant_Tiger.jpg"></a>
<a href="https://www.grandandtoy.com" title="Grand_and_Toy"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Grand_and_Toy.jpg"></a>
<a href="http://www.cdeckofcnb.org/en" title="Knights_of_Columbus"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Knights_of_Columbus.jpg"></a>
<a href="http://www.kraftcanada.com" title="Kraft"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Kraft.jpg"></a>
<a href="https://www.leons.ca" title="Leons"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Leons.jpg"></a>
<a href="http://www.loblaw.ca/en.html" title="Loblaw"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Loblaw.jpg"></a>
<a href="https://www.medaviebc.ca" title="Medavie"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Medavie.jpg"></a>
<a href="https://www.microsoft.com/en-ca" title="Microsoft"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Microsoft.jpg"></a>
<a href="https://www.cafconnection.ca" title="Military_Families"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Military_Families.jpg"></a>
<a href="https://www.facebook.com/loose.moose1?utm_source=tripadvisor&utm_medium=referral" title="Moosers_Pub"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Moosers_Pub.jpg"></a>
<a href="http://normspizza.strikingly.com" title="Norms_Pizza"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Norms_Pizza.jpg"></a>
<a href="https://www.presidentschoice.ca/en_CA/community/pccc.html" title="President_Choice"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/President_Choice.jpg"></a>
<a href="http://www.rbcroyalbank.com" title="RBC"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/RBC.jpg"></a>
<a href="http://roadwayts.ca/index.php" title="Roadway_Suppliers"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Roadway_Suppliers.jpg"></a>
<a href="https://www.scotiabank.com/ca/en" title="Scotia_Bank"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Scotia_Bank.jpg"></a>
<a href="https://greatermoncton.snapd.com" title="Snapd"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Snapd.jpg"></a>
<a href="https://corporate.sobeys.com" title="Sobeys"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Sobeys.jpg"></a>
<a href="http://www.sportsrockdieppe.com" title="Sports_Rock"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Sports_Rock.jpg"></a>
<a href="https://www.telus.com/en" title="Telus"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Telus.jpg"></a>
<a href="https://www.homedepot.ca/en/home.html?" title="The_Home_Depot"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/The_Home_Depot.jpg"></a>
<a href="https://www.timhortons.com/ca/en/index.php" title="Tim_Hortons_ENG"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Tim_Hortons_ENG.jpg"></a>
<a href="https://www.uni.ca/en" title="UNI"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/UNI.jpg"></a>
<a href="http://gmsenbunitedway.ca" title="United_Way"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/United_Way.jpg"></a>
<a href="https://www.viarail.ca/en" title="Via_Rail"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Via_Rail.jpg"></a>
<a href="https://www.westjet.com/en-ca/about-us/community-investment/cares-for-kids/index" title="West_Jet_Eng"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/West_Jet_Eng.jpg"></a>
<a href="http://moncton-wildcats.com" title="Wildcats"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/logos/ENGSponsorsList/Wildcats.jpg"></a>
</div>