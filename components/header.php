<?php
$basePath = '/job-portal';

$navItems = [
    'Home' => $basePath . '/index.php',
    'Jobs' => $basePath . '/pages/jobs.php',
    'About Us' => $basePath . '/pages/about.php',
    'Contact Us' => $basePath . '/pages/contact.php'
];

$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="header">
    <div class="header__container">
        <a href="<?php echo $basePath; ?>/index.php" class="header__logo">
            <img src="<?php echo $basePath; ?>/assets/images/icons/logo.png" alt="Job Portal Logo" class="header__logo-icon">
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
            <a href="<?php echo $basePath; ?>/login.php" class="header__login">Login</a>
            <a href="<?php echo $basePath; ?>/register.php" class="header__register">Register</a>
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
                            class="header__mobile-nav-link <?php echo ($currentPage === basename($url)) ? 'header__mobile-nav-link--active' : ''; ?>">
                            <?php echo $name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="header__mobile-actions">
            <a href="<?php echo $basePath; ?>/login.php" class="header__mobile-login">Login</a>
            <a href="<?php echo $basePath; ?>/register.php" class="header__mobile-register">Register</a>
        </div>
    </div>
</header>

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