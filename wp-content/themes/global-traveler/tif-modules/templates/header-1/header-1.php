<?php

if (!defined('ABSPATH')) exit; ?>

<div class="full-width header-1">
	<?php if (!empty($topline)): 

	if (!empty($topline['classes']))
		$topline['classes'] = apply_filters('filter_classes', $topline['classes'], false);
	?>
	<div class="topline<?php echo (!empty($topline['classes']) && !empty($topline['classes']['main']) ? ' ' . apply_filters('filter_classes', $topline['classes']['main']) : ''); ?>">
		<?php do_action('header1_before_after_menu', $topline, 'before', 'topline-before');

		if (!empty($topline['location']) && has_nav_menu($topline['location'])): ?>
		 	<div class="inner-wrapper<?php echo !empty($topline['classes']) && !empty($topline['classes']['container']) ? ' ' . apply_filters('filter_classes', $topline['classes']['container']) : ''; ?>">
			 	<?php 
			 		if (!empty($topline['wrap']) && !empty($topline['wrap']['before'])):
			 			echo $topline['wrap']['before'];
			 		endif;

				 	if (!empty($topline['logo'])):
				 		$topline['logo']['classes'] = !empty($topline['logo']['classes']) ? apply_filters('filter_classes', $topline['logo']['classes'], false) : array(); ?>
					<a class="navbar-brand<?php echo !empty($topline['logo']['classes']) && !empty($topline['logo']['classes']['link']) ? ' ' . apply_filters('filter_classes', $topline['logo']['classes']['link']) : ''; ?>" href="<?php echo site_url(); ?>">
						<img<?php echo !empty($topline['logo']['classes']) && !empty($topline['logo']['classes']['image']) ? ' class="' . apply_filters('filter_classes', $topline['logo']['classes']['image'])  . '"' : ''; ?> src="<?php echo $topline['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $topline['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $topline['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
					</a>
					<?php endif;
					wp_nav_menu(array(
						'theme_location' => $topline['location'],
						'container' => false,
						'depth' => !empty($topline['depth']) ? (int) $topline['depth'] : 1,
						'menu_id' => $topline['location'],
						'menu_class' => 'topline-menu' . (!empty($topline['classes']) && !empty($topline['classes']['menu']) ? ' ' . apply_filters('filter_classes', $topline['classes']['menu']) : '')
					));

					if (!empty($topline['wrap']) && !empty($topline['wrap']['after'])):
						echo $topline['wrap']['after']; 
					endif; ?>
			</div>
		<?php elseif (isset($topline['links'])): ?>
			<div class="inner-wrapper<?php echo !empty($topline['classes']) && !empty($topline['classes']['container']) ? ' ' . apply_filters('filter_classes', $topline['classes']['container']) : ''; ?>">
				<?php 
				if (!empty($topline['wrap']) && !empty($topline['wrap']['before'])):
		 			echo $topline['wrap']['before'];
		 		endif;

				if (!empty($topline['logo'])): 
					$topline['logo']['classes'] = !empty($topline['logo']['classes']) ? apply_filters('filter_classes', $topline['logo']['classes'], false) : array(); ?>
					<a class="navbar-brand<?php echo !empty($topline['logo']['classes']) && !empty($topline['logo']['classes']['link']) ? ' ' . apply_filters('filter_classes', $topline['logo']['classes']['link']) : ''; ?>" href="<?php echo site_url(); ?>">
						<img<?php echo !empty($topline['logo']['classes']) && !empty($topline['logo']['classes']['image']) ? ' class="' . apply_filters('filter_classes', $topline['logo']['classes']['image']) . '"' : ''; ?> src="<?php echo $topline['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $topline['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $topline['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
					</a>
				<?php
				endif;
				if (!empty($topline['links'])): ?>
				<ul class="topline-menu<?php echo (!empty($topline['classes']) && !empty($topline['classes']['menu']) ? ' ' . apply_filters('filter_classes', $topline['classes']['menu']) : ''); ?>">
					<?php foreach($topline['links'] as $link): ?>
					<li<?php echo !empty($link['class']) ? ' class="' . apply_filters('filter_classes', $link['class']) . '"' : ''; ?>>
					<?php if (!empty($link['href']) && !empty($link['title'])): ?>
						<a href="<?php echo esc_url($link['href']); ?>"<?php echo !empty($link['target']) ? ' target="' . $link['target'] . '"' : ''; ?><?php echo !empty($link['attrs']) ? ' ' . $link['attrs'] : ''; ?>><?php echo esc_html($link['title']); ?></a>
					<?php elseif (!empty($link['title'])): ?>
						<?php echo esc_html($link['title']); ?>
					<?php endif; ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif;

				if (!empty($topline['wrap']) && !empty($topline['wrap']['after'])):
					echo $topline['wrap']['after'];
				endif; ?>
			</div>
		<?php
		endif;
		do_action('header1_before_after_menu', $topline, 'after', 'topline-after'); ?>
	</div>
	<?php endif; ?>

	<?php if (!empty($main_menu)): 

	if (!empty($main_menu['classes']))
		$main_menu['classes'] = apply_filters('filter_classes', $main_menu['classes'], false);
	?>

	<nav class="navbar<?php echo (!empty($main_menu['classes']) && !empty($main_menu['classes']['main']) ? ' ' . apply_filters('filter_classes', $main_menu['classes']['main']) : ''); ?>">
		<?php 
		do_action('header1_before_after_menu', $main_menu, 'before', 'menu-before');

		if (!empty($main_menu['wrap']) && !empty($main_menu['wrap']['before'])):
 			echo $main_menu['wrap']['before'];
 		endif;

		// Logo?
		if (!empty($main_menu['logo'])): 
			$main_menu['logo']['classes'] = !empty($main_menu['logo']['classes']) ? apply_filters('filter_classes', $main_menu['logo']['classes'], false) : array(); 
		?>
		<a class="navbar-brand<?php echo !empty($main_menu['logo']['classes']['link']) ? ' ' . apply_filters('filter_classes', $main_menu['logo']['classes']['link']) : ''; ?>" href="<?php echo site_url(); ?>">
			<img<?php echo !empty($main_menu['logo']['classes']['image']) ? ' class="' . apply_filters('filter_classes', $main_menu['logo']['classes']['image']) . '"' : ''; ?> src="<?php echo $main_menu['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $main_menu['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $main_menu['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
		</a>
		<?php endif; ?>

		<button class="navbar-toggler<?php echo !empty($main_menu['logo']['classes']['button']) ? ' ' . apply_filters('filter_classes', $main_menu['logo']['classes']['button']) : ''; ?> collapsed" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar top-bar"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
		</button>

		<?php 
		if (!empty($main_menu['location']) && has_nav_menu($main_menu['location'])):
			wp_nav_menu(array(
				'theme_location' => $main_menu['location'],
				'menu_class' => 'nav navbar-nav' . (!empty($main_menu['classes']) && !empty($main_menu['classes']['menu']) ? ' ' . apply_filters('filter_classes', $main_menu['classes']['menu']) : ''),
				'menu_id' => $main_menu['location'],
				'depth' => !empty($main_menu['depth']) ? (int) $main_menu['depth'] : 1,
				'container_class' => 'collapse navbar-collapse' . (!empty($main_menu['classes']) && !empty($main_menu['classes']['container']) ? ' ' . apply_filters('filter_classes', $main_menu['classes']['container']) : ''),
				'container_id' => 'mainMenu',
				'walker' => new wp_bootstrap_navwalker()
			));
		elseif (!empty($main_menu['links'])): ?>
			<div id="mainMenu" class="collapse navbar-collapse<?php echo (!empty($main_menu['classes']) && !empty($main_menu['classes']['container']) ? ' ' . apply_filters('filter_classes', $main_menu['classes']['container']) : ''); ?>">
				<ul id="primary-menu" class="nav navbar-nav<?php echo (!empty($main_menu['classes']) && !empty($main_menu['classes']['menu']) ? ' ' . apply_filters('filter_classes', $main_menu['classes']['menu']) : ''); ?>">
					<?php foreach($main_menu['links'] as $link): ?>
					<li<?php echo !empty($link['class']) ? ' class="' . apply_filters('filter_classes', $link['class']) . '"' : ''; ?>>
					<?php if (!empty($link['href']) && !empty($link['title'])): ?>
						<a href="<?php echo esc_url($link['href']); ?>"<?php echo !empty($link['target']) ? ' target="' . $link['target'] . '"' : ''; ?><?php echo !empty($link['attrs']) ? ' ' . $link['attrs'] : ''; ?>><?php echo esc_html($link['title']); ?></a>
					<?php elseif (!empty($link['title'])):
						echo esc_html($link['title']);
					endif; ?>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php
		endif;

		if (!empty($main_menu['wrap']) && !empty($main_menu['wrap']['after'])):
 			echo $main_menu['wrap']['after'];
 		endif;

		do_action('header1_before_after_menu', $main_menu, 'after', 'menu-after'); ?>

	</nav>
	<?php endif; ?>
</div>
