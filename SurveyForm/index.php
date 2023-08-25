 <!-- Survay Form -->
 <!doctype html>
 <html lang="en" data-bs-theme="auto">

 <head>
     <script src="assets/js/color-modes.js"></script>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.115.4">
     <title>Code Alpha Survey Form</title>

     <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
     <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="StyleSheet.css" rel="stylesheet">
     <link href="Script.js">
     <link  rel="shortcut icon" href="images/form.png" type="image">


     <!-- Custom styles for this template -->
     <link href="assets/sign-in.css" rel="stylesheet">
 </head>


 <body class="d-flex align-items-center py-4 bg-body-tertiary">

     <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
         <symbol id="check2" viewBox="0 0 16 16">
             <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
         </symbol>
         <symbol id="circle-half" viewBox="0 0 16 16">
             <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
         </symbol>
         <symbol id="moon-stars-fill" viewBox="0 0 16 16">
             <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
             <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
         </symbol>
         <symbol id="sun-fill" viewBox="0 0 16 16">
             <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
         </symbol>
     </svg>

     <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
         <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
             <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                 <use href="#circle-half"></use>
             </svg>
             <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
             <li>
                 <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                     <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                         <use href="#sun-fill"></use>
                     </svg>
                     Light
                     <svg class="bi ms-auto d-none" width="1em" height="1em">
                         <use href="#check2"></use>
                     </svg>
                 </button>
             </li>
             <li>
                 <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                     <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                         <use href="#moon-stars-fill"></use>
                     </svg>
                     Dark
                     <svg class="bi ms-auto d-none" width="1em" height="1em">
                         <use href="#check2"></use>
                     </svg>
                 </button>
             </li>
             <li>
                 <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                     <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                         <use href="#circle-half"></use>
                     </svg>
                     Auto
                     <svg class="bi ms-auto d-none" width="1em" height="1em">
                         <use href="#check2"></use>
                     </svg>
                 </button>
             </li>
         </ul>
     </div>


     <main class="form-signin w-100 m-auto">
         <div class="container">
             <div class="row">
                 <div class="col"></div>
                 <div class="col mt-5 ">
                     <form name="myForm" action="home.php" method="post" enctype="multipart/form-data" > 

                         <!-- Icon and header -->
                         <center>
                             <svg xmlns="http://www.w3.org/2000/svg" height="75" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                 <style>
                                     svg {
                                         fill: fuchsia;

                                     }
                                 </style>
                                 <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />

                             </svg>
                             <h1>Code Alpha Survey Form</h1>
                         </center>
                         <h2 class="h3 mb-3 fw-normal">Please sign in</h2>

                         <!-- Enter Name -->
                         <div class="input-group">
                             <span class="input-group-text">First and last name</span>
                             <input type="text" aria-label="First name" name="FirstName" class="form-control" required>
                             <input type="text" aria-label="Last name" name="LastName" class="form-control">

                         </div>
                         <br>
                         <!-- Enter Email -->
                         <div class="form-floating">
                             <input type="Email" name="email" class=" form-control" id="floatingEmail" required>
                             <label for="floatingEmail">Email address</label>
                             <br>
                         </div>

                         <!-- Enter Age -->
                         <div class="form-floating">
                             <input type="number" name="Age" class="form-control" id="floatingAge" required>
                             <label for="floatingAge">Age</label>
                             <br>
                         </div>

                         <!-- Select Gender Radio-->
                         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-ambiguous" viewBox="0 0 16 16">
                             <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z" />
                             <label>
                                 <h6>Select your Gender</h6>
                             </label>
                         </svg>
                         <div class="form-check form-check-inline">

                             <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male">
                             <label class="form-check-label" for="inlineRadio1">Male</label>
                         </div>

                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female">
                             <label class="form-check-label" for="inlineRadio2">Female</label>
                         </div>
                         <br><br>

                         <!-- Upload Resume -->
                         <div class="input-group mb-3">
                             <input type="file" class="form-control" name="Resume" id="inputGroupFile02" required>
                             <label class="input-group-text" for="inputGroupFile02">Upload Resume/CV</label>

                         </div>
                         <br>

                         <!-- Remember me Checkbox -->
                         <div class="form-check text-start my-3">
                             <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                             <label class="form-check-label" for="flexCheckDefault">
                                 Remember me
                             </label>
                             <br>
                         </div>

                         <!-- Next button -->
                         <button class="btn btn-primary w-100 py-2" type="submit">Next</button>
                         <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
                         <!-- <input type="hidden" name="_url" value="https://yourdomain.co/contact.html"> -->
                     </form>

                 </div>
                 <div class="col"></div>

             </div>
         </div>

     </main>
     <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

 </body>

 </html>