<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="registration tabs-panel" id="camp-registration">
	<h2><?php echo $campTitle . '<em> ' . $campLocation . ' ';?>Registration</em></h2>
	<h4><?php the_field('camp_dates'); ?></h4>

<?php /** If application instructions are present, display them */

	if(get_field('application_instructions'))
	{
		echo get_field('application_instructions');
	}

?>

<table>
	<?php /*Registration headings*/

	if( have_rows('registration_headings') ): ?>
	 	<thead>
		 	<tr>
		 		<?php if ($programType == 'camp') echo '<th>'; //adding Blank TH for Camps only ?>

			    <?php while( have_rows('registration_headings') ): the_row(); ?>

			        <?php
				        $registrationGroup = get_sub_field('registration_group');
			        ?>
			 		<th><?php echo $registrationGroup;?></th>
			    <?php endwhile; ?>
		    </tr>
		</thead>
	<?php endif; ?>

	<tbody>

	<?php /*Week One Registration Links*/
	if( have_rows('week_one_registration_links') ): ?>
		<tr>
			<?php if ($programType == 'camp') echo '<th>Week 1</th>'; //adding Week 1 TH for Camps only ?>

		    <?php while( have_rows('week_one_registration_links') ): the_row(); ?>

		        <?php
			        $registrationID = get_sub_field('regatta_registration_id');
			        $registrationStatus = get_sub_field('registration_status');
			        $conversionlink = get_sub_field ('custom_link');
		        ?>

		        <td>
		        	<a class="button
		        		<?php /*Adds Correct Button Class*/
		        			if ($registrationStatus != 'Closed') echo 'success';
		        			else echo 'alert';?>"
		        		<?php echo $conversionlink;?> href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
		        		?>
	        		</a>
				</td>

		    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>

	<?php /*Week Two Registration Links*/

	if( have_rows('week_two_registration_links') ): ?>
		<tr>
			<?php if ($programType == 'camp') echo '<th>Week 2</th>'; //adding Week 2 TH for Camps only ?>
	    <?php while( have_rows('week_two_registration_links') ): the_row(); ?>

	        <?php

		        $registrationID = get_sub_field('regatta_registration_id');
		        $registrationStatus = get_sub_field('registration_status');
		        $conversionlink = get_sub_field ('custom_link');

	        ?>

			<td>
	        	<a class="button
	        		<?php
	        			if ($registrationStatus != 'Closed') echo 'success';
	        			else echo 'alert';?>"
	        		<?php echo $conversionlink;?> href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
	        		?>
	        	</a>
			</td>

	    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>

	<?php /*Week Three Registration Links*/

	if( have_rows('week_three_registration_links') ): ?>
	 	<tr>
	 		<?php if ($programType == 'camp') echo '<th>Week 3</th>'; //adding Week 3 TH for Camps only ?>
	    <?php while( have_rows('week_three_registration_links') ): the_row(); ?>

	        <?php
		        $registrationID = get_sub_field('regatta_registration_id');
		        $registrationStatus = get_sub_field('registration_status');
		        $conversionlink = get_sub_field ('custom_link');
	        ?>

	        <td>
	        	<a class="button
	        		<?php
	        			if ($registrationStatus != 'Closed') echo 'success';
	        			else echo 'alert';?>"
	        		<?php echo $conversionlink;?> href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
	        		?>
	        	</a>
			</td>

	    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>

	<?php /*Week Four Registration Links*/

	if( have_rows('week_four_registration_links') ): ?>
		<tr>
			<?php if ($programType == 'camp') echo '<th>Week 4</th>'; //adding Week 4 TH for Camps only ?>
	    <?php while( have_rows('week_four_registration_links') ): the_row(); ?>

	        <?php

		        $registrationID = get_sub_field('regatta_registration_id');
		        $registrationStatus = 'Open';
		        $conversionlink = get_sub_field ('custom_link');

	        ?>

	        <td>
	        	<a class="button
		        		<?php
		        			if ($registrationStatus != 'Closed') echo 'success';
		        			else echo 'alert';?>"
		        		<?php echo $conversionlink;?> href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
		        		?>
	        	</a>
			</td>

	    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>
	</tbody>
</table>

<?php /** If additional instructions are present, display them */
	$moreInstructions = get_field('additional_instructions');

	if(!empty($moreInstructions) ):

		echo $moreInstructions;

	endif;


?>

<?php /** If promo content is present, display it */
	$regPromo = get_field('registration_promo');

	if(!empty($regPromo) ):

		echo $regPromo;

	endif;

?>

</div><!--end panel-->