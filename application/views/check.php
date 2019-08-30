<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Design System - Free Design System for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?= asset_url() ?>img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= asset_url() ?>vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?= asset_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= asset_url() ?>css/argon.css?v=1.0.0" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="<?= asset_url() ?>css/docs.min.css" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="../index.html">
          <img src="<?= asset_url() ?>img/brand/white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="<?= asset_url() ?>img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <div class="shape shape-style-1 shape-primary shape-skew alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <section class="section section-skew">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?= asset_url() ?>img/theme/team-1-800x800.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-4 mt-lg-0">
                  <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                  <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading">30</span>
                    <span class="description">Tahun</span>
                  </div>
                  <div>
                    <span class="heading">56</span>
                    <span class="description">Kg</span>
                  </div>
                  <div>
                    <span class="heading">170</span>
                    <span class="description">Cm</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h3>Didin Jaenudin</h3>
              <div class="h6 font-weight-300">Karang Sembung, Sindang Laut</div>
              <div class="h6 mt-4">Laki Laki</div>

              <div class="mt-4">
                Periksa Tanggal
                <p>19/09/2019 : 08:00 WIB</p>
              </div>
            </div>
            <div class="mt-5 py-5 px-3">
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th scope="col" width="10%">No</th>
                        <th scope="col" width="60%">Gejala</th>
                        <th scope="col" width="40%">Pilih Kondisi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Kondisi Mata</td>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>Pilih Kondisi</option>
                            <option>Mata Merah</option>
                            <option>Mata Rabun</option>
                            <option>Mata Biru</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Kondisi Lidah</td>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>Pilih Kondisi</option>
                            <option>Mata Merah</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Detak Jantung</td>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>Pilih Kondisi</option>
                            <option>Mata Merah</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Suhu Tubuh</td>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>Pilih Kondisi</option>
                            <option>Mata Merah</option>
                            <option>Mata Rabun</option>
                            <option>Mata Biru</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Tensi Darah</td>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>Pilih Kondisi</option>
                            <option>Mata Merah</option>
                            <option>Mata Rabun</option>
                            <option>Mata Biru</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2018
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="<?= asset_url() ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= asset_url() ?>vendor/popper/popper.min.js"></script>
  <script src="<?= asset_url() ?>vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?= asset_url() ?>vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= asset_url() ?>js/argon.js?v=1.0.0"></script>
</body>

</html>