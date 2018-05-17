<?php
//Import header including meta and nav
include_once'includes/header.php';
?>

<header class="header">
  <div class="container d-flex justify-content-center">
    <div class="overlay">
    </div>
    <div class="content">
      <h1>A Directory of Schools for the Deaf in Nigeria</h1>
      <div class="form">
        <form class="form-inline">
          <label class="sr-only">Search School</label>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type Name of School or Location" autofocus required />
            <div class="input-group-append">
              <button class="intput-group-text btn btn-primary">Search</button>
            </div>
          </div>
        </form>
      </div>
      <div class="arrow text-center">
        <a class="fa fa-angle-double-down fa-2x" href="#about" title="Read more"></a>
      </div>
    </div>
  </div>

</header>


<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <img src="temp/img/orodo.jpg" class="img-fluid" alt="School for the Deaf Orodo" />
      </div>
      <div class="col-md-8 col-sm-12">
        <h2>About the Directory</h2>
        <hr />
        <p>
          This website serves as a reliable data center for policy makers, researchers,
          NGOs and interest persons who need to know about special schools for the in Nigeria.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
  </div>
</section>


<section class="featured">
  <div class="container">
   <h2>Featured Schools</h2>
   <hr />
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-img">
            <a href="#"><img src="temp/img/img1.jpg" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <h4 class="card-title">School 1</h4>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-img">
            <a href="#"><img src="temp/img/img2.jpg" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <h4 class="card-title">School 2</h4>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-img">
            <a href="#"><img src="temp/img/img3.JPG" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <h4 class="card-title">School 3</h4>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Read more</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-img">
            <a href="#"><img src="temp/img/img4.JPG" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <h4 class="card-title">School 1</h4>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-img">
            <a href="#"><img src="temp/img/img5.JPG" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <h4 class="card-title">School 2</h4>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-img">
            <a href="#"><img src="temp/img/img6.JPG" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <h4 class="card-title">School 3</h4>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
//import footer
include_once 'includes/footer.php';
?>
