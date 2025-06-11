<?php
$navItems = [
    'Home' => '/vacancy-web/index.php',
    'Jobs' => '/vacancy-web/pages/jobs.php',
    'About Us' => '/vacancy-web/pages/about.php',
    'Contact Us' => '/vacancy-web/pages/contact.php'
];

$currentPage = basename($_SERVER['PHP_SELF']);
?>
<div class="header-wrap-container">
    <header class="header">
        <div class="header__container">
            <a href="/vacancy-web/index.php" class="header__logo">
                <img src="/vacancy-web/assets/images/icons/logo.png" alt="Job Portal Logo" class="header__logo-icon">
                Job Portal
            </a>

            <nav class="header__nav">
                <ul>
                    <?php foreach ($navItems as $name => $url): ?>
                        <li class="header__nav-item">
                            <a href="<?php echo $url; ?>"
                                class="header__nav-link <?php echo ($currentPage === basename($url)) ? 'header__nav-link--active' : ''; ?>">
                                <?php echo $name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="/vacancy-web/pages/auth.php" class="header__register">Sign In</a>
            </div>

            <div class="header__burger">
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
            </div>
        </div>

        <div class="header__mobile-menu" id="mobileMenu">
            <nav class="header__mobile-nav">
                <ul>
                    <?php foreach ($navItems as $name => $url): ?>
                        <li class="header__mobile-nav-item">
                            <a href="<?php echo $url; ?>"
                                class="header__mobile-nav-link <?php echo ($currentPage === $url) ? 'header__mobile-nav-link--active' : ''; ?>">
                                <?php echo $name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="header__mobile-actions">
                <a href="register.php" class="header__mobile-register">Sign In</a>
            </div>
        </div>
    </header>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        function toggleMobileMenu() {
            $('.header__burger').toggleClass('header__burger--active');
            $('#mobileMenu').toggleClass('header__mobile-menu--active');
        }

        $('.header__burger').on('click', toggleMobileMenu);

        // Close mobile menu when clicking outside
        $(document).on('click', function (event) {
            const $header = $('.header');
            const $mobileMenu = $('#mobileMenu');
            const $burger = $('.header__burger');

            if (!$header.is(event.target) && $header.has(event.target).length === 0) {
                $mobileMenu.removeClass('header__mobile-menu--active');
                $burger.removeClass('header__burger--active');
            }
        });

        // Close mobile menu when clicking a link
        $('.header__mobile-nav-link').on('click', function () {
            $('#mobileMenu').removeClass('header__mobile-menu--active');
            $('.header__burger').removeClass('header__burger--active');
        });
    });
</script>