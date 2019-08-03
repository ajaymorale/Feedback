<html>
<head>
  <meta charset="UTF-8">
  <title>profile</title>
  <style>
  body {
  	background-image: url("abcd.jpg");
    font-family: 'Titillium Web', sans-serif;
  }
  .form {
    background: rgba(19, 35, 47, 0.5);
    padding: 40px;
    max-width: 600px;
    margin: 40px auto;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  }
  label {
    position:absolute;
    -webkit-transform: translateY(6px);
            transform: translateY(6px);
    left: 13px;
    color: rgba(255, 255, 255, 0.5);
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events:none;
    font-size: 22px;
  }
  label.active {
    -webkit-transform: translateY(50px);
            transform: translateY(50px);
    left: 2px;
    font-size: 14px;
  }
  label.active .req {
    opacity: 0;
  }

  label.highlight {
    color: #ffffff;
  }

  .button {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 15px 0;
    font-size: 1.5rem;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: .1em;
    background: #1ab188;
    color: #ffffff;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-appearance: none;
  }
  .button:hover, .button:focus {
    background: #179b77;
  }

  .button-block {

    width: 250px;
  }

  input, textarea {
    font-size: 22px;
    height: 52px;
    padding: 5px 10px;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: border-color .25s ease, box-shadow .25s ease;
    transition: border-color .25s ease, box-shadow .25s ease;
  }
  input:focus, textarea:focus {
    outline: 0;
    border-color: #1ab188;
  }

  </style>
 </head>
 <body>
<img src="logo.png" alt="logo" width="530" height="150">
<br><br>
<form action="form.php" method="Post">
              <label>Event Name<span class="req">*</span></label>
            <input type="text" required autocomplete="off" id="ename" name="ename"/>
            <button type="submit" value="submit" class="button button-block">Create Form</button>
          </form>

</body>
</html>
