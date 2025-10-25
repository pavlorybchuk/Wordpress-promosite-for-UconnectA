<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UconnectA
 */

?>
<footer id="footer" class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-4 gap-8">
      <?php 
        $logo_image = get_field('logo_image');
        $logo_text = get_field('logo_text');
      ?>
      <div>
        <div class="flex items-center mb-4">
          <div class="bg-gradient-to-br from-uconnect-blue to-uconnect-dark rounded-xl p-2 mr-3 shadow-lg">
            <?php if ($logo_image): ?>
              <img src="<?php echo esc_url($logo_image); ?>" alt="Logo" class="w-8 h-8 object-contain" />
            <?php else: ?>
              <i class="text-white text-xl fa-solid fa-car"></i>
            <?php endif; ?>
          </div>
          <span class="text-xl font-bold"><?php echo $logo_text ?></span>
        </div>
        <p class="text-gray-400 mb-4"><?php echo get_field('footer_subtitle'); ?></p>
        <div class="flex space-x-4">
          <span class="text-gray-400 hover:text-white cursor-pointer"><i class="fa-brands fa-twitter text-xl"></i></span>
          <span class="text-gray-400 hover:text-white cursor-pointer"><i class="fa-brands fa-facebook text-xl"></i></span>
          <span class="text-gray-400 hover:text-white cursor-pointer"><i class="fa-brands fa-instagram text-xl"></i></span>
          <span class="text-gray-400 hover:text-white cursor-pointer"><i class="fa-brands fa-linkedin text-xl"></i></span>
        </div>
      </div>

      <?php 
      $footer_links = get_field('footer_links');

      if ($footer_links): ?>
        <?php foreach ($footer_links as $f_link): ?>
          <div>
            <h4 class="font-semibold mb-4"><?php echo $f_link['footer_links_title']; ?></h4>
            <ul class="space-y-2 text-gray-400">
              <?php foreach ($f_link["footer_links_list"] as $f_links): ?>
                <li><span class="hover:text-white cursor-pointer"><?php echo $f_links["footer_link"]; ?></span></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center w-[100%]">
      <p class="text-gray-400 text-sm"><?php echo get_field('all_rights_title'); ?></p>
      <div class="flex items-center space-x-4 mt-4 md:mt-0">
        <span class="text-gray-400 text-sm">Contact:</span>
        <span class="text-gray-400 hover:text-white text-sm cursor-pointer"><?php echo get_field('email_title'); ?></span>
        <span class="text-gray-400 hover:text-white text-sm cursor-pointer"><?php echo get_field('phone_title'); ?></span>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
