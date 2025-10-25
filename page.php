<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UconnectA
 */

get_header();
?>
<!-- Hero Section -->
<section id="hero" class="gradient-bg text-white py-20 mt-[44px] px-[16px] flex items-center">
  <div class="container mx-auto px-4">
    <?php 
        $hero_title = get_field('hero_title');
        $hero_subtitle = get_field('hero_subtitle');
        $download_beta_btn = get_field('download_beta_btn');
      ?>
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 mb-10 lg:mb-0">
        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
          <?php echo $hero_title ?>
        </h1>
        <p class="text-xl text-blue-100 mb-8 leading-relaxed">
          <?php echo $hero_subtitle ?>
        </p>

        <div class="flex flex-col sm:flex-row gap-4 mb-8">
          <button class="bg-white text-uconnect-blue px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors flex items-center justify-center cursor-pointer">
            <i class="fa-solid fa-download mr-2"></i> <a href="<?php echo get_template_directory_uri() . "/assets/downloads/UconnectA.zip" ?>" download><?php echo $download_beta_btn ?></a>
          </button>
        </div>

        <div class="flex items-center text-blue-100">
          <i class="fa-solid fa-shield mr-2"></i>
          <span>Secure • Private • Anonymous</span>
        </div>
      </div>

      <div class="lg:w-1/2 flex justify-center hidden lg:flex">
        <div class="relative">
          <div class="bg-white rounded-3xl p-4 shadow-2xl ">
            <img class="w-80 h-auto rounded-2xl" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/83ed3d38d5-5bacc7cc9db6a773258b.png" alt="mobile app interface showing car communication with QR code scanner">
          </div>
          <div class="absolute -bottom-4 -right-4 bg-yellow-400 rounded-xl p-4 shadow-xl">
            <img class="w-24 h-24" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/de9380461c-fc74d0f7070d500709eb.png" alt="QR code sticker for car windshield black and yellow design">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Problem Solution Section -->
<section id="problem-solution" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <div class="mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-6"><?php echo get_field("problem_title"); ?></h2>
        <p class="text-xl text-gray-600 mb-8">
          <?php echo get_field("prob_sol_subtitle"); ?>
        </p>

        <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
          <div class="flex items-center">
            <i class="fa-solid fa-exclamation-triangle text-red-400 text-2xl mr-4"></i>
            <p class="text-red-800"><?php echo get_field("problem_describe"); ?></p>
          </div>
        </div>
      </div>

      <div class="mb-12">
        <i class="fa-solid fa-arrow-down text-4xl text-uconnect-blue mb-8"></i>
      </div>

      <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6"><?php echo get_field("solution_title"); ?></h2>
        <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-lg">
          <div class="flex items-center">
            <i class="fa-solid fa-check-circle text-green-400 text-2xl mr-4"></i>
            <p class="text-green-800 text-lg">
              <?php echo get_field("solution_describe"); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section id="how_it_works" class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-16 text-gray-900"><?php echo the_field("h_i_w_tite"); ?></h2>

    <div class="flex flex-col md:flex-row justify-between items-center gap-8 max-w-6xl mx-auto">
      <div class="text-center flex-1">
        <div class="bg-uconnect-light rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
          <i class="fa-solid fa-mobile-screen-button text-uconnect-blue text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-900"><?php echo the_field("step_1_title"); ?></h3>
        <p class="text-gray-600"><?php echo the_field("step_1_description"); ?></p>
      </div>

      <div class="hidden md:block">
        <i class="fa-solid fa-arrow-right text-2xl text-gray-300"></i>
      </div>

      <div class="text-center flex-1">
        <div class="bg-uconnect-light rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
          <i class="fa-solid fa-qrcode text-uconnect-blue text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-900"><?php echo the_field("step_2_title"); ?></h3>
        <p class="text-gray-600"><?php echo the_field("step_2_description"); ?></p>
      </div>

      <div class="hidden md:block">
        <i class="fa-solid fa-arrow-right text-2xl text-gray-300"></i>
      </div>

      <div class="text-center flex-1">
        <div class="bg-uconnect-light rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
          <i class="fa-solid fa-comments text-uconnect-blue text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-900"><?php echo the_field("step_3_title"); ?></h3>
        <p class="text-gray-600"><?php echo the_field("step_3_description"); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Advantages -->
<section id="advantages" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-16 text-gray-900"><?php echo get_field("advantages_title"); ?></h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
      <?php
        $advantages = get_field('advantages_cards');

        if ($advantages) :
          foreach ($advantages as $a_card) : ?>
            <div class="bg-white rounded-lg p-6 shadow-sm">
              <div class="bg-green-100 rounded-lg w-12 h-12 flex items-center justify-center mb-4">
                <?php echo $a_card['advantage_icon']; ?>
              </div>
              <h3 class="font-semibold mb-2 text-gray-900">
                <?php echo esc_html($a_card['advantage_title']); ?>
              </h3>
              <p class="text-gray-600 text-sm">
                <?php echo esc_html($a_card['advantage_describe']); ?>
              </p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
</section>

<!-- Features (condensed) -->
<section id="features" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-16 text-gray-900"><?php echo get_field("features_title"); ?></h2>

    <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
      <?php 
      $features = get_field('features');

      if ($features): ?>
        <?php foreach ($features as $f_card): ?>
          <div class="bg-white rounded-xl p-8 shadow-sm">
            <div class="flex items-center mb-6">
              <div class="bg-uconnect-light rounded-lg p-3 mr-4">
                <?php echo $f_card["feature_icon"]; ?>
              </div>
              <h3 class="text-2xl font-bold text-gray-900"><?php echo $f_card["feature_title"]; ?></h3>
            </div>
            <p class="text-gray-600 mb-4"><?php echo $f_card["feature_describe"]; ?></p>
            <ul class="text-gray-600 space-y-2">
              <?php 
              if ($features):?>
                <?php foreach ($f_card["feature_implements"] as $f_imp): ?>
                  <li class="flex items-center"><?php echo $f_imp["feature_implement_icon"]; ?><?php echo $f_imp["feature_implement_title"]; ?></li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Beta CTA -->
<section id="beta" class="py-16 bg-uconnect-blue text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold mb-6"><?php echo get_field("c_t_a_title"); ?></h2>
    <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto">
      <?php echo get_field("c_t_a_subtitle"); ?>
    </p>

    <div class="max-w-md mx-auto bg-white rounded-lg p-6">
      <form class="space-y-4" action="" id="page_form">
        <div>
          <input class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-uconnect-blue text-gray-900" placeholder="Enter your e-mail address" type="email" required>
        </div>
        <div>
          <select class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-uconnect-blue text-gray-900">
            <option>iOS (iPhone)</option>
            <option>Android</option>
          </select>
        </div>
        <div class="flex items-center text-left">
          <input type="checkbox" class="mr-3" required>
          <span class="text-gray-700 text-sm"><?php echo get_field("c_t_a_checkbox"); ?></span>
        </div>
        <button type="submit" id="get_beta" disabled class="disabled w-full bg-uconnect-blue text-white py-4 rounded-lg font-semibold hover:bg-uconnect-dark transition-colors">
          <?php echo get_field("c_t_a_btn_title"); ?>
        </button>
      </form>
    </div>

    <div class="mt-8 text-blue-100">
      <p class="mb-2"><?php echo get_field("c_t_a_addiction_text"); ?></p>
    </div>
  </div>
</section>

<!-- Feedbacks -->
<?php
// Підключення до бази даних
$host = 'localhost';
$db = 'uconnecta';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}

// Налаштування пагінації
$reviewsPerPage = 7; // скільки відгуків показувати на сторінку
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // поточна сторінка
$offset = ($page - 1) * $reviewsPerPage;

$totalReviews = $pdo->query("SELECT COUNT(*) FROM reviews")->fetchColumn();
$totalPages = ceil($totalReviews / $reviewsPerPage);

$stmt = $pdo->prepare("SELECT * FROM reviews ORDER BY id DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $reviewsPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$reviews = $stmt->fetchAll();
?>

<section id="testimonials" class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-16 text-gray-900"><?php echo get_field("testimonials_title"); ?></h2>
    <div class="relative">
      <div class="overflow-x-auto scrollbar-hide">
        <div id="iz6n3u" class="flex space-x-6 pb-4">
          <?php foreach ($reviews as $review): ?>
            <div class="bg-gray-50 rounded-xl p-6 w-80 flex-shrink-0">
              <div class="flex items-center mb-4">
                <img src="<?= htmlspecialchars($review['avatar']) ?>" alt="<?= htmlspecialchars($review['name']) ?>" class="w-12 h-12 rounded-full mr-4">
                <div>
                  <h4 class="font-semibold"><?= htmlspecialchars($review['name']) ?></h4>
                  <p class="text-gray-600 text-sm"><?= htmlspecialchars($review['role']) ?></p>
                </div>
              </div>
              <p class="text-gray-700 max-h-[170px] overflow-y-scroll"><?= htmlspecialchars($review['text']) ?></p>
              <div class="flex mt-4">
                <?php for ($i = 0; $i < $review['stars']; $i++): ?>
                  <i class="fa-solid fa-star text-yellow-400"></i>
                <?php endfor; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="flex justify-center mt-8 space-x-2">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <a href="?page=<?= $i ?>"
            class="px-3 py-1 rounded <?= ($i == $page) ? 'bg-[#2563eb] text-white' : 'bg-gray-200 text-black hover:bg-gray-300' ?>">
            <?= $i ?>
          </a>
        <?php endfor; ?>
      </div>
    </div>
    <div class="text-center mt-12">
        <p class="text-gray-600 mb-6">In development partnerships with:</p>
        <div class="flex justify-center items-center space-x-8 opacity-60">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/bosco_logo.png'; ?>" alt="Bosco logo">
        </div>
      </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-16 bg-gray-50" id="faq">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-16 text-gray-900"><?php echo get_field("faqs_title"); ?></h2>

    <div class="max-w-4xl mx-auto space-y-6" id="faqs">
      <?php 
      $faqs = get_field('faqs');

      if ($faqs): ?>
        <?php foreach ($faqs as $faq): ?>
          <div class="bg-white rounded-lg shadow-sm">
            <button class="w-full text-left p-6 focus:outline-none faq-btn">
              <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900"><?php echo $faq['faq_title']; ?></h3>
                <i class="fa-solid fa-chevron-down text-gray-400 transition-all easy-out duration-[0.3s]" id="faq-icon-1"></i>
              </div>
            </button>
            <div class="px-6 pb-6 hidden transition-all easy-out duration-[0.3s]" id="faq-content-1">
              <p class="text-gray-600 mt-[10px]"><?php echo $faq['faq_describe']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<div id="popup" class="popup hide">
  <p></p>
</div>
<?php
get_footer();
