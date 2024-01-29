<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T13 Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles-contact.css" rel="stylesheet">
    <link rel="stylesheet" href="styles-header-footer.css">
    <!-- Add your favicon here -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link href="styles-header-footer.css" rel="stylesheet">
</head>

<body class="d-flex-column">
  <!-- Header -->
  <div class="header-container align-content-center fs-5 fw-bold text-dark">
    <!-- Logo -->
    <div class="logo-container alignment">
      <img src="./img/logo.png" alt="logo">
    </div>
    <!-- Navigation -->
    <div class="nav-container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse nav-item"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ex1.php">Ex1</a>
              </li><li class="nav-item">
                <a class="nav-link" href="ex2.php">Ex2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ex3.php">Ex3</a>
              </li><li class="nav-item">
                <a class="nav-link" href="ex4.php">Ex4</a>
              </li>
            </ul>
            <div class="search">
              <input
                type="text"
                class="search-input"
                placeholder="Search"
                name="Search">
              <a href="#" class="search-icon">
                <img src="img/icons8-search.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- Body -->
  <div class="full-container">
    <!-- Banner -->
    <div class="banner">
      <img src="img/contact-banner.jpg" alt="Banner">
     </div>
    </div>
    <!-- Main -->
    <main class="container mt-5">
      <section class="contact-form">
        <h2>Send us your request</h2>
        <p>Qui sequam, voluptatum. Incidunt, quia aperiam quos cupiditate consectetur, illum doloremque nulla ratione, amet consequuntur voluptates natus neque modi animi nam quaerat consequatur!, a illo!</p>
        
        <form>
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="e.g John Smith">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="username@gmail.com">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="tel" class="form-control" id="phone" placeholder="+358 1234 56789">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="123 Boulevard">
          </div>
          <div class="row">
            <div class="col">
              <label for="city" class="form-label">City</label>
              <select id="city" class="form-select">
                <option selected>Choose...</option>
                <!-- Options here -->
              </select>
            </div>
            <div class="col">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="00000">
            </div>
          </div>
          <div class="mb-3">
            <label for="request" class="form-label">Request</label>
            <textarea class="form-control" id="request" rows="3"></textarea>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="contact-agreement">
            <label class="form-check-label" for="contact-agreement">I agree to get contacted by email or message for this request.</label>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </section>

      <!-- Contact info -->
      <div class="newcar-box">
        <div class="flex-item"> 
          <div class="newcar-text">
            <h3>QUESTIONS ABOUT DIGITAL SERVICES.</h3>
            <p>For example, Digital key, remote software upgrade, map functions or My T13 App.</p>
            <p><strong>Email:</strong> <a href="mailto:connecteddrive.fi@group-t13.fi">connecteddrive.fi@group-t13.fi</a></p>
            <p><strong>Telephone number:</strong> +358 1234 56789</p>
            <p><strong>Opening hours</strong></p>
            <p>Monday to Friday from 8 am to 8 pm.</p>
          </div>
        </div>
        <div class="flex-item">
          <div class="newcar-img"><img src="./img/Contact-question.jpg" alt="digital-services">
          </div>
        </div>
      </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>