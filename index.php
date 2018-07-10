<?php
//Import header including meta and nav
include_once'includes/header.php';
?>

<header class="header">
  <div class="container d-flex justify-content-center">
    <div class="overlay">
    </div>
    <div class="content">
      <h1>A Directory of Schools for the Deaf in Nigeria </h1>
        <span class="sub-h1">Compiled by Save the Deaf and Endangered Languages Initiative (S-DELI)</span>
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
          When we started our community engagement outreaches in the Nigerian deaf community late 2013, we wanted to know how many schools for the Deaf in the country as to know how much work we had to do. We searched the internet, and all other sources we hoped to get an answer, but to no avail. The closest information we got was a publication by Excellence and Education Network, with about 22 schools represented. We found out that the 3 schools where we started our project were not represented on the publication, we concluded that the publication could not be a comprehensive one.
        </p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#about-collapse" aria-expanded="false" aria-controls="about-collapse">Read more</button>
      </div>
    </div>

    <div class="collapse" id="about-collapse">
      <div>
        <p>
          Consequently, we became motivated to publish the first comprehensive directory of Schools for the Deaf in Nigeria. Four years after, we present to you a directory we believe is more defined and more comprehensive than any information we had gotten in the past. This is not yet a complete directory of Schools for the Deaf in Nigeria, and some of the information on this publication have not been verified by our field team, especially about schools where we have not had our outreach. Such information was provided to us by deaf individuals who know those schools, parents of deaf children and other individuals who come from those communities.
        </p>

        <dl>
          <em>In this directory, we have classified the schools according to three major types:</em>

          <dt> Specialized </dt>
          <dd> Schools that have only deaf students – may be residential or non-residential. </dd>

          <dt> Inclusive </dt>
          <dd> Schools that have only deaf students – may be residential or non-residential. </dd>

          <dt> Mainstream </dt>
          <dd> Schools that have only deaf students – may be residential or non-residential. </dd>
        </dl>

        <p>
        <strong>Note:</strong> these may not be the terms used to classify these schools according to Federal Government policy for deaf education.
        </p>
        <em>Other sub classification terms on this directory include: </em>
        <p>
          <strong>Public</strong> – schools owned and run by the government. </br>
          <strong>Private</strong> – schools owned and run by individuals (and sometimes faith-based organizations).
        </p>

        <h4>Acknowledgement</h4>

        <p>
          We acknowledge all persons that provided us with information about the schools published on this directory. We may not mention you by names, but we appreciate you so much. We would also need your assistance as we seek to complete the directory to contain all schools with other details this directory will contain. We are a team in this! Thank you! Great thanks too, to the IT Department who worked night and day to publish this material, and the entire Team S-DELI for their supports.
        </p>
        <p>
          <small>Emma Asonye, PhD. </br>
          Head of Project, Global
        </small>

        </p>
      </div>

    </div>
  </div>
</section>

<section id="directory">
  <div class="table-div container table-responsive">
    <h2 class="text-center">Schools for the Deaf in Nigeria</h2>
    <hr class="sch-hr" />
    <table id="table" class="display table table-striped table-bordered">
      <thead>
        <tr>
          <th> Serial </th>
          <th> School Name </th>
          <th> Adress </th>
          <th> Type </th>
          <th> Ownership </th>
          <th> Level </th>
          <th> State </th>
          <th> Visibility </th>
        </tr>
      </thead>
      <tbody>

      </tbody>

    </table>
  </div>
</section>

<section id="add-school">
  <form class="add-school-form">
      <div class="text-center mb-4">
        <h2>Add School</h2>
      </div>
    <div class="form-div">
      <div class="form-label-group">
        <input type="text" id="name-of-school" class="form-control" placeholder="Name of School" required  />
        <label for="name-of-school">Name of School</label>
      </div>

      <div class="form-label-group">
        <input type="text" id="state" class="form-control" placeholder="State" required />
        <label for="state">State</label>
      </div>

      <div class="form-group">
        <select required class="custom-select" id="school-type">
          <option selected disabled>Select school type</option>
          <option value="1">Specialized</option>
          <option value="2">Inclusive</option>
          <option value="3">Mainstream</option>
        </select>
     </div>

     <div class="form-group">
       <select required class="custom-select" id="school-ownership">
         <option selected disabled>Select school ownership</option>
         <option value="1">Public</option>
         <option value="2">Private</option>
       </select>
    </div>

    <div class="form-label-group">
      <input type="text" id="address" class="form-control" placeholder="Address|Location" required />
      <label for="address">Address</label>
    </div>

    <div class="form-label-group">
      <input type="text" id="year" class="form-control" placeholder="Year Founded"  />
      <label for="year">Year Founded</label>
    </div>

      <div class="form-label-group">
        <input type="text" id="contact" class="form-control" placeholder="Contact" />
        <label for="contact">Your contact email or phone number</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>

    </div>
  </form>
</section>

<?php
//import footer
include_once 'includes/footer.php';
?>
