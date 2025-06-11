<?php
require_once '../includes/init.php';

$jobs = $job->getAllJobs();

function timeAgo($datetime)
{
    $time = time() - strtotime($datetime);

    if ($time < 60)
        return 'Just now';
    if ($time < 3600)
        return floor($time / 60) . ' min ago';
    if ($time < 86400)
        return floor($time / 3600) . ' hours ago';
    if ($time < 2592000)
        return floor($time / 86400) . ' days ago';
    return date('M j, Y', strtotime($datetime));
}

function formatSalary($min, $max)
{
    if ($min && $max) {
        return '$' . number_format($min) . '-$' . number_format($max);
    } elseif ($min) {
        return 'From $' . number_format($min);
    } elseif ($max) {
        return 'Up to $' . number_format($max);
    } else {
        return 'Salary not specified';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs - Your Web App</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="jobs-page">
    <?php include '../components/header.php'; ?>

    <header class="jobs-header">
        <div class="container">
            <h1 class="jobs-header__title">Jobs</h1>
            <p class="jobs-count"><?php echo count($jobs); ?> jobs available</p>
        </div>
    </header>

    <main class="container">
        <div class="jobs-container">
            <?php if (empty($jobs)): ?>
                <div class="no-jobs">
                    <h3>No jobs available at the moment</h3>
                    <p>Please check back later for new opportunities.</p>
                </div>
            <?php else: ?>
                <?php foreach ($jobs as $job_item): ?>
                    <div class="job-card">
                        <div class="job-card__header">
                            <span class="job-card__time"><?php echo timeAgo($job_item['created_at']); ?></span>
                            <img src="../assets/images/icons/Icon.png" alt="Bookmark icon" class="job-card__bookmark">
                        </div>

                        <div class="job-card__info">
                            <div class="job-card__logo">
                                <img src="../assets/images/icons/security.png" alt="Default Company Logo">
                            </div>
                            <div class="job-card__details">
                                <h2 class="job-card__title"><?php echo ($job_item['job_title']); ?></h2>
                                <p class="job-card__company"><?php echo ($job_item['company_name']); ?></p>
                            </div>
                        </div>

                        <div class="job-card__footer">
                            <div class="job-card__tags">
                                <div class="job-card__tag">
                                    <img src="../assets/images/icons/briefcase.png" alt="Category icon"
                                        class="job-card__tag-icon">
                                    <span><?php echo ($job_item['category']); ?></span>
                                </div>
                                <div class="job-card__tag">
                                    <img src="../assets/images/icons/clock.png" alt="Time icon" class="job-card__tag-icon">
                                    <span><?php echo ($job_item['job_type']); ?></span>
                                </div>
                                <div class="job-card__tag">
                                    <img src="../assets/images/icons/wallet.png" alt="Salary icon" class="job-card__tag-icon">
                                    <span><?php echo formatSalary($job_item['salary_min'], $job_item['salary_max']); ?></span>
                                </div>
                                <div class="job-card__tag">
                                    <img src="../assets/images/icons/location.png" alt="Location icon"
                                        class="job-card__tag-icon">
                                    <span><?php echo $job_item['location']; ?></span>
                                </div>
                            </div>
                            <button class="job-card__button">
                                <a href="job-details.php?id=<?php echo $job_item['id']; ?>">Job Details</a>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>
    <section class="top-company">
        <div class="container">
            <div class="top-company__container">
                <div class="top-company__header">
                    <h2 class="top-company__title">Top Company</h2>
                    <p class="top-company__subtitle">Elit velit mauris aliquam est diam. Leo sagittis consectetur diam
                        morbi erat</p>
                </div>
                <div class="top-company__grid">
                    <div class="company-card">
                        <div class="company-card__icon">
                            <img src="../assets/images/icons/insta.png" alt="Instagram logo">
                        </div>
                        <h3 class="company-card__name">Instagram</h3>
                        <p class="company-card__description">At pellentesque amet odio cras imperdiet nisl. Ac magna
                            aliquet massa leo</p>
                        <a href="#" class="company-card__link">8 open jobs</a>
                    </div>

                    <div class="company-card">
                        <div class="company-card__icon">
                            <img src="../assets/images/icons/tesla.png" alt="Tesla logo">
                        </div>
                        <h3 class="company-card__name">Tesla</h3>
                        <p class="company-card__description">Odio aliquet tellus tellus maecenas. Faucibus in viverra
                            venenatis phasellus</p>
                        <a href="#" class="company-card__link">18 open jobs</a>
                    </div>

                    <div class="company-card">
                        <div class="company-card__icon">
                            <img src="../assets/images/icons/mc.png" alt="McDonald's logo">
                        </div>
                        <h3 class="company-card__name">McDonald's</h3>
                        <p class="company-card__description">Odio aliquet tellus tellus maecenas. Faucibus in viverra
                            venenatis phasellus</p>
                        <a href="#" class="company-card__link">12 open jobs</a>
                    </div>

                    <div class="company-card">
                        <div class="company-card__icon">
                            <img src="../assets/images/icons/iphone.png" alt="Apple logo">
                        </div>
                        <h3 class="company-card__name">Apple</h3>
                        <p class="company-card__description">Et odio sem tellus ultrices posuere consequat. Tristique
                            nascetur sapien</p>
                        <a href="#" class="company-card__link">9 open jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../components/footer.php'; ?>
</body>

</html>