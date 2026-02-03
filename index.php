<!doctype html>
<html lang="en-us" class="pf-theme-dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Viewfinder Lite</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/brands.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/tab-dark.css" />
  <link rel="stylesheet" href="css/patternfly.css" />
  <link rel="stylesheet" href="css/patternfly-addons.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://kit.fontawesome.com/8a8c57f9cf.js" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #151515 !important;
      color: #ccc !important;
    }

    .landing-page-wrapper {
      min-height: calc(100vh - 200px);
      display: flex;
      flex-direction: column;
    }

    .landing-cards-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 2rem 0;
    }

    .landing-card {
      background: #2a2a2a;
      border: 1px solid #444;
      border-radius: 8px;
      padding: 2rem;
      transition: all 0.3s ease;
    }

    .landing-card:hover {
      border-color: #0d60f8;
      box-shadow: 0 4px 16px rgba(13, 96, 248, 0.3);
      transform: translateY(-4px);
    }

    .landing-card-header {
      text-align: center;
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 2px solid #444;
    }

    .landing-card-header i {
      font-size: 3rem;
      color: #12bbd4;
      margin-bottom: 0.5rem;
      display: block;
    }

    .landing-card-header h2 {
      color: #9ec7fc;
      font-size: 1.5rem;
      margin: 0;
    }

    .landing-card-description {
      color: #ccc;
      line-height: 1.6;
      margin-bottom: 1.5rem;
      text-align: center;
      min-height: 80px;
    }

    .landing-card-buttons {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .landing-button {
      display: inline-block;
      padding: 1rem 1.5rem;
      border-radius: 4px;
      text-decoration: none;
      font-weight: 600;
      text-align: center;
      transition: all 0.2s ease;
      border: none;
      cursor: pointer;
      font-size: 1rem;
    }

    .landing-button i {
      margin-right: 0.5rem;
    }

    .landing-button-primary {
      background: linear-gradient(135deg, #0d60f8 0%, #004cbf 100%);
      color: #fff;
    }

    .landing-button-primary:hover {
      background: linear-gradient(135deg, #4d90fe 0%, #0d60f8 100%);
      box-shadow: 0 4px 12px rgba(13, 96, 248, 0.4);
    }

    .landing-button-success {
      background: linear-gradient(135deg, #2aaa04 0%, #1b7003 100%);
      color: #fff;
    }

    .landing-button-success:hover {
      background: linear-gradient(135deg, #3fcc00 0%, #2aaa04 100%);
      box-shadow: 0 4px 12px rgba(42, 170, 4, 0.4);
    }

    @media (max-width: 768px) {
      .landing-cards-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
  <header class="pf-c-page__header">
    <div class="pf-c-page__header-brand">
      <div class="pf-c-page__header-brand-toggle"></div>
      <a class="pf-c-page__header-brand-link" href="index.php">
        <img class="pf-c-brand" src="images/viewfinder-logo.png" alt="Viewfinder logo" />
      </a>
    </div>
  </header>

  <div class="landing-page-wrapper">
    <div class="container" style="max-width: 1000px; margin: 3rem auto;">
      <div style="text-align: center; margin-bottom: 3rem;">
        <h1 style="color: #9ec7fc; font-size: 2.5rem; margin-bottom: 1rem;">
          <i class="fa-solid fa-compass"></i> Viewfinder Lite
        </h1>
        <p style="color: #ccc; font-size: 1.2rem; max-width: 800px; margin: 0 auto;">
          Digital Sovereignty Assessment Tools
        </p>
      </div>

      <div class="landing-cards-grid">
        <!-- Digital Sovereignty Readiness Assessment Card -->
        <div class="landing-card">
          <div class="landing-card-header">
            <i class="fa-solid fa-clipboard-check"></i>
            <h2>Digital Sovereignty Readiness Assessment</h2>
          </div>
          <p class="landing-card-description">
            Quick 10-15 minute assessment to evaluate your organization's digital sovereignty readiness across 7 key domains
          </p>
          <div class="landing-card-buttons">
            <a href="ds-qualifier/" class="landing-button landing-button-primary">
              <i class="fa-solid fa-rocket"></i> Start Assessment
            </a>
          </div>
        </div>

        <!-- Digital Sovereignty Quiz Card -->
        <div class="landing-card">
          <div class="landing-card-header">
            <i class="fa-solid fa-graduation-cap"></i>
            <h2>Digital Sovereignty Quiz</h2>
          </div>
          <p class="landing-card-description">
            Interactive knowledge quiz with 7 domains, instant results, certificates, and leaderboard rankings
          </p>
          <div class="landing-card-buttons">
            <a href="quiz/" class="landing-button landing-button-success">
              <i class="fa-solid fa-brain"></i> Take the Quiz
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
