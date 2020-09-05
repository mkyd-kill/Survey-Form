<?php
  include 'process.php';
?>
<!DOCTYPE html>
<html lang="en-US" class="online">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="CovidSurvey is a platform where Kenyans give out their views on   whats affecting their lifestyes. This is my very own first php website.">
      <meta name="author" content="Romeo Namunde(mkyd-kill), made in Kalax Hotspot - Voi">
      <meta name="docsearch:language" content="en">
      <meta http-equiv="x-dns-prefetch-control" content="on">
      <meta name="theme-color" content="#000000">
      <title>CovidSurvey</title>

      <!-- Bootstrap sytle importation -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="covid.css">

      <!-- Favicons -->
      <link rel="shortcut icon" href="images/fav1.ico">
      <link rel="apple-touch-icon" href="fav1.png" sizes="180x180">
      <link rel="icon" href="fav1.png" sizes="32x32" type="image/png">
      <link rel="icon" href="fav1.png" sizes="16x16" type="image/png">
    </head>
    <body>
        <div class="container">

            <header class="header">
              <h1 id="title" class="text-center">CovidSurvey Form</h1>
              <p id="description" class="description text-center">
                Thank you for taking the time to help us know how you feel
              </p>
            </header>
            
            <form id="survey-form" action="survey.php" method="POST">
              <div class="form-group">
                <label id="name-label" for="username">Name</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter your name" required/>
              </div>

              <div  class="form-group">
                <label id="gender" for="gender">Gender</label>
                <select id="dropdown" name="gender" class="form-control" required>
                  <option disabled selected value>Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="others">Others</option>
                </select>
              </div>

              <div class="form-group">
                <label id="number-label" for="number"
                  >Age<span class="clue">(optional)</span></label>
                <input
                  type="number" name="age" id="age"
                  min="10"
                  max="99"
                  class="form-control"
                  placeholder="Age" required
                />
              </div>

              <div class="form-group">
                <label id="name-label" for="name">
                  <p>Please input your work ethics...</p>
                </label>
                <input
                  type="text"
                  name="ethics"
                  id="ethics"
                  class="form-control"
                  placeholder="Enter your profession"
                  required
                />
              </div>
          
              <div class="form-group">
                <p>
                  What do you do to fight against Corona Virus Infection during this pandemic?
                </p>
                <select id="mostLike" name="mostLike" class="form-control" required>
                  <option disabled selected value>Select an option</option>
                  <option value="face-masks">Face mask wearing</option>
                  <option value="hand-washing">Regular Hand Washing</option>
                  <option value="workouts">Frequent body workouts</option>
                  <option value="metre-rule">Observing the One metre rule</option>
                  <option value="avoids">Avoiding shaking hands, hugs and kissing</option>
                  <option value="health">Eating healthy</option>
                  <option value="none">I do nothing of the above</option>
                </select>
              </div>


               <!-- Comment Input fields -->
               <div class="form-group">
                <p><b>What do you think the Government should do to <strong style="color: green;">IMPROVE</strong> the Kenya's Economy?</b>?</p>
                <textarea
                  id="improve"
                  class="input-textarea"
                  name="improve"
                  placeholder="Enter your comment here..."
                ></textarea>
              </div>

              <div class="form-group">
                <p><b>What do you think the Government should do to <strong style="color: red;">STOP</strong> further spread of Corona Virus</b>?</p>
                <textarea
                  id="comment"
                  class="input-textarea"
                  name="comment"
                  placeholder="Enter your comment here..."
                ></textarea>
              </div>

              <div class="form-group">
                <p><b>Do you think that <strong style="color: red;">Corruption</strong> has increased in the Country due to this Pandemic</b>?</p>
                <textarea
                  id="increase"
                  class="input-textarea"
                  name="increase"
                  placeholder="Enter your views here..."
                ></textarea>
              </div>

              <div class="form-group">
                <p><b>What has the Government done during this Pandemic to make the <strong style="color: green;">Lifes</strong> of Kenyans easy?</b> </p>
                <textarea
                  id="benefited"
                  class="input-textarea"
                  name="benefited"
                  placeholder="Enter your views here..."
                ></textarea>
              </div>

              <div class="form-group">
                <p><b>Do you think the level of <strong style="color: red;">Corruption</strong> in the Country will end with the Corona Virus pandemic?</b></p>
                <textarea
                  id="development"
                  class="input-textarea"
                  name="development"
                  placeholder="Enter your views here..."
                ></textarea>
              </div>

              <div class="form-group">
                <p><b>What's your take to the way <strong style="color: red;">Politics</strong> is pulling Kenya down the drain?</b></p>
                <textarea
                  id="pulling_down"
                  class="input-textarea"
                  name="pulling_down"
                  placeholder="Enter your views here..."
                ></textarea>
              </div>

              <!-- Helpfulness -->
              <div  class="form-group">
                <label id="help" for="help">Was this survey Helpful in any way</label>
                <select id="dropdown" name="help" class="form-control">
                  <option disabled selected value>Select Option</option>
                  <option value="yes">Extremely helpful</option>
                  <option value="no">Never helpful</option>
                  <option value="dont_know">Neither helpful</option>
                </select>
              </div>

              <!-- End of Comment input fields -->

              <div class="form-group">
                <button type="submit" id="submit" class="submit-button" value="Add records" method="POST">
                  Submit
                </button>
              </div>
            </form>
        </div>

        <!-- javascript, jquery and popper.js links from Bootstrap -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- end of Bootstrap -->
    </body>
</html>