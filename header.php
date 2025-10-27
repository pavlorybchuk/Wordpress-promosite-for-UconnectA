<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UconnectA
 */

?>
<!doctype html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header" class="bg-white shadow-sm py-4 fixed top-0 left-0 w-[100%] z-9999 transition-all duration-[0.3s] ease-out">
  <div class="container mx-auto px-4 flex justify-between items-center">
    
    <!-- LOGO -->
    <div class="flex items-center">
      <?php 
        $logo_image = get_field('logo_image');
        $logo_text = get_field('logo_text');
      ?>
      <div class="bg-gradient-to-br from-uconnect-blue to-uconnect-dark rounded-xl p-2 mr-3 shadow-lg">
        <?php if ($logo_image): ?>
          <img src="<?php echo esc_url($logo_image); ?>" alt="Logo" class="w-8 h-8 object-contain" />
        <?php else: ?>
          <i class="text-white text-xl fa-solid fa-car"></i>
        <?php endif; ?>
      </div>
      <span class="text-uconnect-blue text-2xl font-bold cursor-pointer">
        <a href="/"><?php echo esc_html($logo_text ?: get_bloginfo('name')); ?></a>
      </span>
    </div>

    <!-- NAVIGATION -->
    <nav class="hidden md:flex items-center space-x-8">
      <span class="text-gray-600 hover:text-gray-900 font-medium cursor-pointer"><a href="#how_it_works">How it works</a></span>
      <span class="text-gray-600 hover:text-gray-900 font-medium cursor-pointer"><a href="#features">Features</a></span>
      <span class="text-gray-600 hover:text-gray-900 font-medium cursor-pointer"><a href="#testimonials">Feedbacks</a></span>
      <span class="text-gray-600 hover:text-gray-900 font-medium cursor-pointer"><a href="#faq">FAQ</a></span>
    </nav>

    <!-- RIGHT SIDE BUTTONS -->
    <div class="flex items-center space-x-4">
      <?php 
        $support_text = get_field('support_text');
        $beta_text = get_field('cta_text');
        $beta_link = get_field('cta_link');
      ?>
      <span class="text-gray-600 hover:text-gray-900 font-medium cursor-pointer">
        <?php echo ($support_text ?: 'Support'); ?>
      </span>
      <span class="bg-uconnect-blue text-white px-6 py-2 rounded-lg font-medium hover:bg-uconnect-dark transition-colors cursor-pointer">
        <a href="<?php echo ($beta_link ?: '#'); ?>">
          <?php echo ($beta_text ?: 'Get Beta'); ?>
        </a>
      </span>
    </div>

  </div>
</header>