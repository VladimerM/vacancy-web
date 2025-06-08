<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Web App</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <?php include '../components/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero__content">
        <div class="hero__text">
          <h1 class="hero__title">Et nunc ut tempus duis nisl sed massa</h1>
          <p class="hero__description">
            Nunc sed a nisl purus. Nibh dis faucibus proin lacus tristique. Sit congue non vitae odio sit erat in. Felis
            eu ultrices a sed massa. Commodo fringilla sed tempor risus laoreet ultrices ipsum. Habitasse morbi faucibus
            in iaculis lectus. Nisl enim feugiat enim volutpat. Sem quis viverra viverra odio mauris nunc.
          </p>
        </div>
        <div class="hero__image">
          <div class="hero__image-placeholder">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="how-it-works">
    <div class="container">
      <div class="how-it-works__header">
        <h2 class="how-it-works__title">How it works</h2>
        <p class="how-it-works__subtitle">
          At eu lobortis pretium tincidunt amet lacus ut aenean aliquet. Blandit a massa elementum id scelerisque
          rhoncus.
        </p>
      </div>
      <div class="how-it-works__steps">
        <div class="step">
          <div class="step__icon">
            <img src="../assets/images/icons/profile.png" alt="">
          </div>
          <h3 class="step__title">Create Account</h3>
          <p class="step__description">Nunc sed a nisl purus. Nibh dis faucibus proin lacus</p>
        </div>

        <div class="step">
          <div class="step__icon">
            <img src="../assets/images/icons/resume.png" alt="">
          </div>
          <h3 class="step__title">Upload Resume</h3>
          <p class="step__description">Felis eu ultrices a sed massa. Commodo fringilla sed tempor</p>
        </div>

        <div class="step">
          <div class="step__icon">
            <img src="../assets/images/icons/suitcase.png" alt="">
          </div>
          <h3 class="step__title">Find Jobs</h3>
          <p class="step__description">Commodo fringilla sed tempor risus laoreet ultrices ipsum</p>
        </div>

        <div class="step">
          <div class="step__icon">
            <img src="../assets/images/icons/check.png" alt="">
          </div>
          <h3 class="step__title">Apply Job</h3>
          <p class="step__description">Nisl enim feugiat enim volutpat. Sem quis viverra</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq">
    <div class="container">
      <div class="faq__header">
        <h2 class="faq__title">Frequently Asked Questions</h2>
        <p class="faq__subtitle">
          At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
        </p>
      </div>
      <div class="faq__list">
        <div class="faq__item faq__item--active">
          <button class="faq__question" onclick="toggleFaq(0)">
            <div class="faq__question-header">
              <div class="faq__question-content">
                <span class="faq__question-number">01</span>
                <span class="faq__question-text">Can I upload a CV?</span>
              </div>
              <div class="faq__toggle">
                <svg viewBox="0 0 24 24">
                  <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
              </div>
            </div>
          </button>
          <div class="faq__answer faq__answer--active">
            <p class="faq__answer-text">Nunc sed a nisl purus. Nibh dis faucibus proin lacus tristique. Sit congue non
              vitae odio sit erat in. Felis eu ultrices a sed massa. Commodo fringilla sed tempor risus laoreet ultrices
              ipsum. Habitasse morbi faucibus in iaculis lectus. Nisl enim feugiat enim volutpat. Sem quis viverra
              viverra odio mauris nunc.</p>
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question" onclick="toggleFaq(1)">
            <div class="faq__question-header">
              <div class="faq__question-content">
                <span class="faq__question-number">02</span>
                <span class="faq__question-text">How long will the recruitment process take?</span>
              </div>
              <div class="faq__toggle">
                <svg viewBox="0 0 24 24">
                  <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
              </div>
            </div>
          </button>
          <div class="faq__answer">
            <p class="faq__answer-text">The recruitment process typically takes 2-4 weeks from application to final
              decision, depending on the position and number of candidates.</p>
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question" onclick="toggleFaq(2)">
            <div class="faq__question-header">
              <div class="faq__question-content">
                <span class="faq__question-number">03</span>
                <span class="faq__question-text">What does the recruitment and selection process involve?</span>
              </div>
              <div class="faq__toggle">
                <svg viewBox="0 0 24 24">
                  <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
              </div>
            </div>
          </button>
          <div class="faq__answer">
            <p class="faq__answer-text">Our process includes initial application review, phone screening, technical
              assessment, in-person interviews, and reference checks.</p>
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question" onclick="toggleFaq(3)">
            <div class="faq__question-header">
              <div class="faq__question-content">
                <span class="faq__question-number">04</span>
                <span class="faq__question-text">Do you recruit for Graduates, Apprentices and Students?</span>
              </div>
              <div class="faq__toggle">
                <svg viewBox="0 0 24 24">
                  <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
              </div>
            </div>
          </button>
          <div class="faq__answer">
            <p class="faq__answer-text">Yes, we have dedicated programs for graduates, apprentices, and students with
              specialized career development opportunities.</p>
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question" onclick="toggleFaq(4)">
            <div class="faq__question-header">
              <div class="faq__question-content">
                <span class="faq__question-number">05</span>
                <span class="faq__question-text">Can I receive notifications for any future jobs that may interest
                  me?</span>
              </div>
              <div class="faq__toggle">
                <svg viewBox="0 0 24 24">
                  <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
              </div>
            </div>
          </button>
          <div class="faq__answer">
            <p class="faq__answer-text">Absolutely! You can set up job alerts based on your preferences and receive
              notifications when matching positions become available.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../components/footer.php'; ?>


  <script>
    function toggleFaq(index) {
      const faqItems = document.querySelectorAll('.faq__item');
      const clickedItem = faqItems[index];
      const isActive = clickedItem.classList.contains('faq__item--active');

      // Close all FAQ items
      faqItems.forEach(item => {
        item.classList.remove('faq__item--active');
        const answer = item.querySelector('.faq__answer');
        answer.classList.remove('faq__answer--active');
      });

      // If the clicked item wasn't active, open it
      if (!isActive) {
        clickedItem.classList.add('faq__item--active');
        const answer = clickedItem.querySelector('.faq__answer');
        answer.classList.add('faq__answer--active');
      }
    }
  </script>
</body>

</html>