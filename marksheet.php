<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"/>
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Hello, world!</title>
    <style>
        form{
            width: 50%;
            height:1000px;
            border:3px solid green;
            margin-left: 350px;
            margin-top:50px;
            padding:30px;
           
        }
        .input-group-text{
            width: 15%;
        }
        .field{
            display:flex;
            gap:8px;
        }
        .dropdown-field{
            height:37px;
        }
    </style>

  </head>
  <body>
    
    <form action="marksheet2.php" method="post">
        <h2 class="text-center mb-4 ">MARKSHEET </h2>
        <p class="text-danger">fill out this marksheet !</p>
        <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Name</span>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Your Name"
            name="userName"
            required
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="input1"> Father Name</span>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Your Father Name"
            name="userFatherName"
            required
          />
        </div> <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Email</span>
          <input
            type="email"
            class="form-control"
            placeholder="Enter Your Email"
            name="userEmail"
            required
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Age</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Age"
            name="userAge"
            required
          />
        </div> 
        <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Class</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Class"
            name="userClass"
            required
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Birth Date</span>
          <input
            type="date"
            class="form-control"
            placeholder="Enter Your Birth Date"
            name="userBirthdate"
            required
          />
        </div> 
        <div class="field">
<label class="input-group-text mb-3 "> Field </label>

    <select class="dropdown-field" name="userField">
    <option>Select Your Field</option>
    <option>Pre-Medical</option>
    <option>Pre-Engineering</option>
    <option>Computer Science</option>
    <option>Commerce</option>
    <option>Arts</option>
    <option>humanities</option>
    </select
    required>

    </div>
    <p>this marks is out of 100</p>
    <div class="input-group mb-3">
          <span class="input-group-text" id="input1">bio/comp</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="userBio"
            required
          />
    </div> <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Maths</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="usermath"
            required
          />
    </div>
       <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Urdu</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="userurdu"
            required
          />
    </div>
    <div class="input-group mb-3">
          <span class="input-group-text" id="input1">English</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="usereng"
            required
          />
    </div> <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Islamiat</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="userisl"
            required
          />
    </div> <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Physics</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="userphy"
            required
          />
    </div> <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Chemistry</span>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Your Marks"
            name="userchem"
            required
          />
    </div> 
        <button type="submit" name="userSubmit" class="btn btn-success"> Submit </button>
    </form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
