<footer>
<ul class="footerlinks">
      <li <?php if($page=="home") echo 'class="active"'; ?> ><a href="<?php echo base_url(); ?>">Home</a></li>
      <li <?php if($page=="aboutm") echo 'class="active"'; ?>><a href="<?php echo site_url('site/aboutm'); ?>">About us</a></li>
      <li <?php if($page=="centres") echo 'class="active"'; ?>><a href="<?php echo site_url('site/aboutm2'); ?>">Programs</a></li>
      <li <?php if($page=="contact") echo 'class="active"'; ?>><a href="<?php echo site_url('site/photos'); ?>">Photos</a></li>
    </ul>
<p>CLAY KIDS &copy; 2015 <span class="extra1"></span> <a target="_blank" href="http://www.wohlig.com/">DESIGNED BY WOHLIG WEB SOLUTION</a>&nbsp;
<a target="_blank" href="https://www.facebook.com/clay.kids.org"><img src="<?php echo base_url('assets/img/followIcon1.png'); ?>" /></a>
<!--<a target="_blank" href="https://twitter.com/"><img src="<?php echo base_url('assets/img/followIcon2.png'); ?>" /></a>-->
</p>
</footer>
</body>
</html>