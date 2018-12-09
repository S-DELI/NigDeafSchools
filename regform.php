      <!--includes the header file-->
      <?php
          include_once "includes/header.php";
       ?>

       <br><br>
     <center>

           <form class="regFormDesign  p-4 white shadow-lg m-2">

               <h1 class="card-header bg-danger text-white">Register a School <i class="material-icons">school</i></h1><br>

               <!-- name of school field -->
               <div class="d-flex pl-1 cos-fill">
                     <i class="material-icons  prefix my-auto mx-2 text-danger">school</i>
                     <input type="text"  class="in-fill form-control" placeholder="Name of School" required>
               </div>
               <br>

               <!-- address of school -->
               <div class="d-flex pl-1 cos-fill">
                   <i class="material-icons prefix my-auto mx-2 text-danger">location_on</i>
                   <textarea  class="in-fill form-control" resize="false" placeholder="Schools Address"></textarea>
               </div>
               <br>

               <!-- kind of deaf school -->
               <div class="d-flex pl-1 cos-fill">
                   <i class="material-icons prefix my-auto mx-2 text-danger">list</i>
                   <select class=" d-flex in-fill w-100">
                       <option value="" disabled selected>select type</option>
                       <option value="">Mainstream</option>
                       <option value="">Specialize</option>
                       <option value="">Inclusive</option>
                   </select>
               </div>
               <br>

                <!-- type of ownership -->
                 <div class="d-flex pl-1 cos-fill">
                     <span class="fa fa-users prefix my-auto mx-2 text-danger"></span>
                     <select class=" d-flex in-fill w-100">
                         <option value="" disabled selected>select ownership</option>
                         <option value="">Private</option>
                         <option value="">Public</option>
                     </select>
                 </div>
                 <br>

                 <!-- select the levels -->
                 <div class="d-flex pl-1 cos-fill">
                     <span class="fa fa-list-alt prefix my-auto mx-2 text-danger"></span>
                     <select  class=" d-flex in-fill w-100">
                        <option value="" disabled selected> Select highest level</option>
                        <option value="Nursary">Nursary only</option>
                        <option value="Nursary - Primary">Nursary - Primary</option>
                        <option value="Nursary - Secondary">Nursary - Secondary</option>
                        <option value="Primary">Primary only</option>
                        <option value="Primary - Secondary">Primary - Secondary</option>
                        <option value="Secondary">Secondary only</option>
                        <option value="Higer Institution">Higer Institution</span></option>
                     </select>
                 </div>
                 <br>




                 <!-- list of states -->
                 <div class="d-flex pl-1 cos-fill">
                     <i class="material-icons prefix my-auto mx-2 text-danger">format_list_bulleted</i>
                     <select class=" d-flex in-fill w-100 ">
                         <option value="" disabled selected>Select state</option>
                         <option value="Abia">Abia</option>
                         <option value="Adamawa">Adamawa</option>
                         <option value="Anambra">Anambra</option>
                         <option value="Akwa Ibom">Akwa Ibom</option>
                         <option value="Bauchi">Bauchi</option>
                         <option value="Bayelsa">Bayelsa</option>
                         <option value="Benue">Benue</option>
                         <option value="Borno">Borno</option>
                         <option value="Cross River">Cross River</option>
                         <option value="Delta">Delta</option>
                         <option value="Ebonyi">Ebonyi</option>
                         <option value="Enugu">Enugu</option>
                         <option value="Edo">Edo</option>
                         <option value="Ekiti">Ekiti</option>
                         <option value="FCT - Abuja">Abuja</option>
                         <option value="Gombe">Gombe</option>
                         <option value="Imo">Imo</option>
                         <option value="Jigawa">Jigawa</option>
                         <option value="Kaduna">Kaduna</option>
                         <option value="Kano">Kano</option>
                         <option value="Kastina">Kastina</option>
                         <option value="Kebbi">Kebbi</option>
                         <option value="Kogi">Kogi</option>
                         <option value="Kwara">Kwara</option>
                         <option value="Lagos">Lagos</option>
                         <option value="Nasarawa"> Nasarawa</option>
                         <option value="Niger">Niger</option>
                         <option value="Ogun">Ogun</option>
                         <option value="Ondo">Ondo</option>
                         <option value="Osun">Osun</option>
                         <option value="Oyo">Oyo</option>
                         <option value="Plateau">Plateau</option>
                         <option value="Rivers">Rivers</option>
                         <option value="Sokoto">Sokoto</option>
                         <option value="Taraba">Taraba</option>
                         <option value="Yobe">Yobe</option>
                         <option value="Zamfara">Zamfara</option>
                     </select>
                 </div>
                 <br>


                 <div class="">
                     <center>
                         <button name="button" class="btn btn-danger w-50">Submit <i class="material-icons my-auto">add_circle_outline</i></button>
                     </center>
                 </div>
                 <br>
          </form>


     </center>

 <?php 
    include_once "includes/footer.php";
?>
