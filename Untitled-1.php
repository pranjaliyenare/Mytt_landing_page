            <div class="absolute top-0 right-0 hidden w-1/3 h-full md:block lg:w-1/2 hero-image">
            <div class="container">
                <div class="bg-img">
                <form class="container" style="max-width: 400px;">
                  <h1><b>Enroll to Free Consultation</b></h1><br/>

                  <label for="name"><b>Name :</b></label>
                  <input type="text" placeholder="Enter Name" name="name" required style="  padding: 5px 5px 5px 5px;"><br/>

                  <label for="email"><b>Email Address : </b></label>
                  <input type="email" placeholder="Enter Email" name="email" style="  padding: 5px 5px 5px 5px;" required><br/>

                  <label for="mob"><b>Mobile Number : </b></label>
                  <input type="number" placeholder="Mobile Number" name="mob" style="  padding: 5px 5px 5px 5px;" required><br/>

                  <label for="addr"><b>Address :</b></label>
                  <input type="text" placeholder="Enter Address" name="addr" style="  padding: 5px 5px 5px 5px;" required><br/>

                  <label for="desc"><b>Description :</b></label>
                  <input type="text" placeholder="Enter Description" name="desc" style="  padding: 5px 5px 5px 5px;" required>

                  <button type="submit" class="btn">Login</button>
                </form>
              </div>
            </div>
        </div>

        <style>
      
      .bg-img {
  /* The image used */
  background-image: url("<?php echo base_url();?>/public/IMG1.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  /* right: 0; */
  margin: 50px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input{
  width: 100%;
  /* padding: 15px; */
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;

}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
      </style>