<?php
require_once '../includes/init.php';

$job_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($job_id <= 0) {
    header('Location: jobs.php');
    exit();
}

$job_data = $job->getJobById($job_id);
if (!$job_data) {
    echo "Job not found";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="job-details-page">
        <header class="job-details-header">
            <h1 class="job-details-header_title">Job Details</h1>
        </header>
        <main class="job-details_container">

            <div class="job-card">
                <div class="job-card-header">
                    <span class="time-ago">
                        <?php
                        $time_diff = time() - strtotime($job_data['created_at']);
                        if ($time_diff < 3600) {
                            echo floor($time_diff / 60) . 'min ago';
                        } elseif ($time_diff < 86400) {
                            echo floor($time_diff / 3600) . 'hours ago';
                        } else {
                            echo floor($time_diff / 86400) . 'days ago';
                        } ?>
                    </span>
                    <img src="../assets/images/icons/Icon.png" alt="Bookmark icon" class="bookmark-icon">
                </div>

                <div class="job-info">
                    <div class="company-logo">
                        <?php if (!empty($job_data['company_logo'])): ?>
                            <img src="<?php echo htmlspecialchars($job_data['company_logo']); ?>" alt="Company Logo">
                        <?php else: ?>
                            <img src="../assets/images/icons/corporate.png" alt="Company Logo">
                        <?php endif; ?>
                    </div>

                    <div>
                        <h2><?php echo htmlspecialchars($job_data['job_title']); ?></h2>
                        <p class="company-name"><?php echo htmlspecialchars($job_data['company_name']); ?></p>
                    </div>
                </div>
                <div class="job-card__footer">
                    <div class="job-details-icons">
                        <div class="detail-item">
                            <img src="../assets/images/icons/briefcase.png" alt="Hotels & Tourism icon"
                                class="detail-icon">
                            <span><?php echo htmlspecialchars($job_data['category']); ?></span>
                        </div>
                        <div class="detail-item">
                            <img src="../assets/images/icons/clock.png" alt="Full time icon" class="detail-icon">
                            <span><?php echo htmlspecialchars($job_data['job_type']); ?>
                            </span>
                        </div>
                        <div class="detail-item">
                            <img src="../assets/images/icons/wallet.png" alt="Salary icon" class="detail-icon">
                            <span>
                                <?php
                                if ($job_data['salary_min'] && $job_data['salary_max']) {
                                    echo '$' . number_format($job_data['salary_min']) . '-$' . number_format($job_data['salary_max']);
                                } elseif ($job_data['salary_min']) {
                                    echo 'from $' . number_format($job_data['salary_min']);
                                } else {
                                    echo 'by agreement';
                                }
                                ?>
                            </span>
                        </div>
                        <div class="detail-item">
                            <img src="../assets/images/icons/location.png" alt="Location icon" class="detail-icon">
                            <span><?php echo htmlspecialchars($job_data['location']); ?></span>
                        </div>
                    </div>
                    <button class="job-details-button">Apply Job</button>
                </div>


            </div>
            <div class="job-details_hero">
                <div class="job-details_content">
                    <!-- <div class="job-details_description">
                        <h2>Job Description</h2>
                        <div class="job-details_description-text">
                            Nunc sed a nisl purus. Nibh dis faucibus proin lacus tristique. Sit congue non vitae odio
                            sit
                            erat
                            in.
                            Felis eu ultrices a sed massa. Commodo fringilla sed tempor risus laoreet ultricies ipsum.
                            Habitasse
                            morbi faucibus in iaculis lectus. Nisi enim feugiat enim volutpat. Sem quis viverra viverra
                            odio
                            mauris
                            nunc.
                            Et nunc ut tempus duis nisl sed massa. Ornare varius faucibus nisi vitae vitae cras ornare.
                            Cras
                            facilisis dignissim augue lorem amet adipiscing cursus fames mauris. Tortor amet porta proin
                            in.
                            Orci
                            imperdiet nisi dignissim pellentesque morbi vitae. Quisque tincidunt metus lectus porta eget
                            blandit
                            euismod sem nunc. Tortor gravida amet amet sapien mauris massa.Tortor varius nam maecenas
                            duis
                            blandit
                            elit sit sit. Ante mauris morbi diam habitant donec.
                        </div>
                    </div>
                    <div class="job-details_responsibilities">
                        <h2>Key Responsibilities</h2>
                        <ul class="">
                            <li>
                                <img src="../assets/images/icons/check.png" alt="">
                                <span>Et nunc ut tempus duis nisl sed massa. Ornare varius faucibus nisi vitae vitae
                                    cras
                                    ornare.
                                    Cras
                                    facilisis dignissim augu</span>
                            </li>
                            <li>
                                <img src="../assets/images/icons/check.png" alt="">
                                <span>
                                    Cras facilisis dignissim augue lorem amet adipiscing cursus fames mauris. Tortor
                                    amet
                                    porta
                                    proin in </span>
                            </li>

                            <li>
                                <img src="../assets/images/icons/check.png" alt="">
                                <span>
                                    Ornare varius faucibus nisi vitae vitae cras ornare. Cras facilisis dignissim augue
                                    lorem
                                    amet
                                    adipiscing cursus fames
                                </span>
                            </li>
                            <li>
                                <img src="../assets/images/icons/check.png" alt="">
                                <span>
                                    Tortor amet porta proin in. Orci imperdiet nisi dignissim pellentesque morbi vitae.
                                    Quisque
                                    tincidunt metus lectus porta
                                </span>

                            </li>
                            <li>
                                <img src="../assets/images/icons/check.png" alt="">
                                <span>
                                    Tortor amet porta proin in. Orci imperdiet nisi dignissim pellentesque morbi vitae.
                                    Quisque
                                    tincidunt metus lectus porta
                                </span>

                            </li>
                            <li>
                                <img src="../assets/images/icons/check.png" alt="">
                                <span>
                                    Tortor amet porta proin in. Orci imperdiet nisi dignissim pellentesque morbi vitae.
                                    Quisque
                                    tincidunt metus lectus porta
                                </span>

                            </li>

                        </ul>
                    </div>
                    <div class="job-details_skills">
                        <h2>Professional Skills</h2>
                        <ul>
                            <li> <img src="../assets/images/icons/check.png" alt="">
                                <span>Et nunc ut tempus duis nisl sed massa. Ornare varius faucibus nisi vitae vitae
                                    cras
                                    ornare.</span>
                            </li>
                            <li> <img src="../assets/images/icons/check.png" alt="">
                                <span>Ornare varius faucibus nisi vitae vitae cras ornare</span>
                            </li>
                            <li> <img src="../assets/images/icons/check.png" alt="">
                                <span>Tortor amet porta proin in. Orci imperdiet nisi dignissim pellentesque morbi
                                    vitae</span>
                            </li>
                            <li> <img src="../assets/images/icons/check.png" alt="">
                                <span>Tortor amet porta proin in. Orci imperdiet nisi dignissim pellentesque morbi
                                    vitae</span>
                            </li>
                            <li> <img src="../assets/images/icons/check.png" alt="">
                                <span>
                                    Tortor amet porta proin in. Orci imperdiet nisi dignissim pellentesque morbi vitae
                                </span>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <aside class="job-details_side-bar">
                    <div class="job-details_overview">
                        <h2>Job Overview</h2>

                        <ul>
                            <li>
                                <img src="../assets/images/icons/user.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Job Title</span>
                                    <span>Corporate Solutions Executive</span>
                                </div>
                            </li>
                            <li>
                                <img src="../assets/images/icons/clock.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Job Type</span>
                                    <span>Full Time</span>
                                </div>
                            </li>
                            <li>
                                <img src="../assets/images/icons/briefcase.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Category</span>
                                    <span>Commerce</span>
                                </div>
                            </li>
                            <li>
                                <img src="../assets/images/icons/expertise.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Experience</span>
                                    <span>5 Years</span>
                                </div>
                            </li>
                            <li>
                                <img src="../assets/images/icons/degree.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Degree</span>
                                    <span>Master</span>
                                </div>
                            </li>
                            <li>
                                <img src="../assets/images/icons/wallet.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Offered Salary</span>
                                    <span>$40000-$42000</span>
                                </div>
                            </li>
                            <li>
                                <img src="../assets/images/icons/location.png" alt="">
                                <div class="job-overview-text-group">
                                    <span>Location</span>
                                    <span>New-York, USA</span>
                                </div>
                            </li>
                        </ul>
                        <div class="job-details_overview-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d95376.40581246412!2d44.94817352026366!3d41.66626992048103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sge!4v1749567600488!5m2!1sru!2sge"></iframe>
                        </div>
                    </div>

                </aside>
            </div>

            <div class="job-details_tags">
                <h2>Tags:</h2>
                <ul>
                    <li>Full time</li>
                    <li>Commerce</li>
                    <li>New - York</li>
                    <li>Corporate</li>
                </ul>
            </div>
        </main>
    </div>
    <?php include '../components/footer.php'; ?>
</body>

</html>