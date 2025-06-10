<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Web App</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="home-page">
  <?php include 'components/header.php'; ?>

  <main>
    <div class="main-container">
      <section class="hero-block container">
        <!-- Hero Section -->
        <div class="hero">
          <h1 class="hero__title">Find Your Dream Job Today!</h1>
          <p class="hero__subtitle">Connecting Talent with Opportunity: Your Gateway to Career Success</p>
        </div>

        <!-- Search Section -->
        <div class="search">
          <div class="search__container">
            <form class="search__form">
              <div class="search__form-group">
                <input type="text" class="search__input" placeholder="Job Title or Company">
                <select class="search__input">
                  <option>Select Location</option>
                  <option>London</option>
                  <option>San Francisco</option>
                </select>
                <select class="search__input">
                  <option>Select Category</option>
                  <option>IT</option>
                  <option>Finance</option>
                </select>
                <button type="submit" class="search__button">
                  <img src="./assets/images/icons/search.png" alt=""> Search Job
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Stats Bar -->
        <div class="stats">
          <div class="stats__container">
            <div class="stats__item">
              <div class="stats__icon">
                <img src="./assets/images/icons/case.png" alt="">
              </div>
              <div class="stats__content">
                <span class="stats__number">25,850</span>
                <span class="stats__label">Jobs</span>
              </div>
            </div>

            <div class="stats__item">
              <div class="stats__icon">
                <img src="./assets/images/icons/group.png" alt="">
              </div>
              <div class="stats__content">
                <span class="stats__number">10,250</span>
                <span class="stats__label">Candidates</span>
              </div>
            </div>

            <div class="stats__item">
              <div class="stats__icon">
                <img src="./assets/images/icons/building.png" alt="">
              </div>
              <div class="stats__content">
                <span class="stats__number">18,400</span>
                <span class="stats__label">Companies</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="companies">
      <div class="companies__container">
        <div class="companies__logos">
          <div class="companies__logo">
            <img src="./assets/images/icons/spotify.png" alt="Spotify">
          </div>
          <div class="companies__logo">
            <img src="./assets/images/icons/slack.png" alt="Slack">
          </div>
          <div class="companies__logo">
            <img src="./assets/images/icons/adobe.png" alt="Adobe">
          </div>
          <div class="companies__logo">
            <img src="./assets/images/icons/asana.png" alt="Asana">
          </div>
          <div class="companies__logo">
            <img src="./assets/images/icons/linear.png" alt="Linear">
          </div>
        </div>
      </div>
    </section>
    </div>

    <!-- Companies Section -->
    

    <!-- About-Company -->
    <div class="container">
      <section class="about-company">
        <div class="about-company__container">
          <div class="about-company__content">
            <div class="about-company__image-wrapper">
              <img class="about-company__image" src="./assets/images/second.png" alt="">
            </div>
            <div class="about-company__text-wrapper">
              <h2 class="about-company__title">
                <span class="about-company__title-line">Good Life Begins With</span>
                <span class="about-company__title-line about-company__title-line--break">A Good Company</span>
              </h2>
              <p class="about-company__description">Ultricies purus dolor viverra mi laoreet at cursus justo.
                Ultricies purus diam egestas amet faucibus tempor blandit. Elit velit mauris aliquam est diam.
                Leo sagittis consectetur diam morbi erat aenean.
              </p>

              <div class="about-company__actions">
                <button class="button button--primary">Search Job</button>
                <a href="#" class="button button--text">Learn more</a>
              </div>
            </div>
          </div>

          <div class="about-company__stats">
            <div class="about-company__stats-item">
              <span class="about-company__stats-number">12k+</span>
              <span class="about-company__stats-label">Clients worldwide</span>
              <p class="about-company__stats-text">At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
                Risus risus lectus augue justo lacus viverra sit.</p>
            </div>
            <div class="about-company__stats-item">
              <span class="about-company__stats-number">20k+</span>
              <span class="about-company__stats-label">Active resume</span>
              <p class="about-company__stats-text">At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
                Risus risus lectus augue justo lacus viverra sit.</p>
            </div>
            <div class="about-company__stats-item">
              <span class="about-company__stats-number">18k+</span>
              <span class="about-company__stats-label">Companies</span>
              <p class="about-company__stats-text">At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
                Risus risus lectus augue justo lacus viverra sit.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="better-future">
        <div class="better-future__content">
          <h2 class="better-future__title">
            <span class="better-future__title-line">Create A Better</span>
            <span class="better-future__title-line">Future For Yourself</span>
          </h2>
          <p class="better-future__description">At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
            Blandit a massa elementum id scelerisque rhoncus...</p>
          <button class="button button--primary">Search Job</button>
        </div>
      </section>
    </div>

  </main>

  <?php include 'components/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>