<div class="navbarholder">
<div class="navbar">
    <a href="<?php echo base_url()?>dashboard/" id="home"><img id='main' src="<?php echo base_url()?>/assets/images/home.svg" alt="" srcset=""></a>
    <a href="<?php echo base_url()?>dashboard/calls" id="calls"><img src="<?php echo base_url()?>/assets/images/call.svg" alt="" srcset=""></a>
    <a href="<?php echo base_url()?>dashboard/messages" id="messages"><img src="<?php echo base_url()?>/assets/images/mail.svg" alt="" srcset=""></a>
    <a href="<?php echo base_url()?>dashboard/settings" id="settings"><img src="<?php echo base_url()?>/assets/images/settings.svg" alt="" srcset=""></a>
</div>
</div>
<script>
 
        document.getElementById("<?php echo $active?>").style="background:rgb(223 160 255);border-radius:20px"

   
</script>
