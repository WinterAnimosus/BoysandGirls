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
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2018/12/wildcats.png">
</div>