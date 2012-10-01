<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package WordPress
 * @subpackage agrilifeorg
 * 
 */
?>
	<?php get_sidebar('agencies'); ?>
	<footer class="site-footer clearfix" id="footer" data-url="<?php bloginfo('wpurl'); ?>/" data-theme="<?php bloginfo('template_directory'); ?>/" data-page="<?php echo $catId ?>" role="contentinfo">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-tamus.png" id="footer-tamus" alt="Texas A&amp;M University System Member" title="Texas A&amp;M University System Member" width="104" height="78" />
		<ul class="req-links">
			<li><a href="http://agrilife.org/vc/compact/" target="_blank">Compact with Texans</a></li>
			<li><a href="http://agrilife.org/vc/privacy/" target="_blank">Privacy and Security</a></li>
			<li><a href="http://itaccessibility.tamu.edu/" target="_blank">Accessibility Policy</a></li>
			<li><a href="http://www.dir.texas.gov/pubs/srrpubs/pages/srrpub11-agencylink.aspx" target="_blank">State Link Policy</a></li>
			<li><a href="http://www.tsl.state.tx.us/trail" target="_blank">Statewide Search</a></li>
			<li><a href="http://aghr.tamu.edu/education-civil-rights.htm" target="_blank">Equal Opportunity for Educational Programs Statement</a></li>
			<li><a href="http://www.tamus.edu/veterans/" target="_blank">Veterans Benefits</a></li>
			<li><a href="http://fcs.tamu.edu/families/military_families/" target="_blank">Military Families</a></li>
			<li><a href="https://secure.ethicspoint.com/domain/en/report_custom.asp?clientid=19681" target="_blank">Risk, Fraud &amp; Misconduct Hotline</a></li>
			<li><a href="http://www.texashomelandsecurity.com/" target="_blank">Texas Homeland Security</a></li>
			<li><a href="http://agrilife.org/vc/orpi/" target="_blank">Open Records/Public Information</a></li>
			<li class="last"><a href="#">Copyright</a></li>
		</ul>				
	</footer>
		
	</div><!-- .page -->
	
<?php wp_footer(); ?>	

<!-- end scripts-->
</body>
</html>
