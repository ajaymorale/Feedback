<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>FeedBack Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  include "connection.php";
  session_start();
  if(isset($_GET['unm'])){
    $u=$_GET['unm'];
    echo "Hiiiiiiiiiiiiiiii". $u ." !";
  }
  if(isset($_GET['id'])){
    $ename=$_GET['id'];
    //echo "Hiiiiiiiiiiiiiiii". $u ." !";
  }
  if(isset($_GET['user'])){
    $u=$_GET['user'];
    echo "Hiiiiiiiiiiiiiiii". $u ." !";
  }
  if(isset($_GET['fil']))
  {
    $file3=$_GET['fil'];
  }

  //$eName=$_POST['ename'];
  //$img=$_POST['image'];
  if(isset($_POST['ename'])){
    $ename = mysqli_real_escape_string($conn,$_POST['ename']);
  }
  //   $_SESSION['eventname'] = $ename;
  if(isset($_SESSION['login_user'])) {
    echo 'welcome,'.$_SESSION['login_user'];
    $u=$_SESSION['login_user'];}
    //$uName=$_SESSION['login_user'];
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "ok here";
      $target = "images/" . basename($_FILES["image"]["name"]);
      //  $uploadOk = 1;

      //==========================================
      //    $imageFileType = pathinfo($target,PATHINFO_EXTENSION);
      echo "ok 2";
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo "The file  has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }

      $imagess= basename($_FILES["image"]["name"],".jpg"); // used to store the filename in a variable
      //$_SESSION['img']=$imagess;
      //storind the data in your database
    }
    //===========insert elink

    $data="form3.php?id=".$ename."&user=".$u."&fil=".$imagess;
    $sql="INSERT INTO events(elink) VALUES('$data') where ename='$ename'";
    $_SESSION['login_user'] = $userName;
    $_SESSION['loggedIN'] = $userName;
    if(!mysqli_query($conn,$sql))
    {
      echo "not inserted";
    }else
    {
      echo "inserted";
    }






    ?>
    <div class="form">
      <div class="tab-content">
        <div id="signup">
          <img src="logo.png" alt="logo" width="530" height="150"><br><br>

          <form action="<?php echo "form2.php?img=$imagess&id=$ename&user=$u"?>" method="post">

            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Student Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name="name" id="name" />
              </div>
              <div class="field-wrap">
                <label>
                  Student Email<span class="req">*</span>
                </label>
                <input type="email"required autocomplete="off" name="email" id="email" />
              </div>
              <br>
              <div class="field-wrap">
                <label>
                  review<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off" name="review" id="review" />
              </div>
            </div>
            <button type="submit" class="button button-block"/>submit</button>
          </div><br>


        </form>
        <?php

        ?>
        <input type="text" id="copyTarget" value="<?php  echo 'form3.php?id=$ename&user=$u&fil=$imagess';?>">
        <button id="copyButton" class="button button-block">Copy</button><br><br>
        <input type="text" placeholder="Click here and press Ctrl-V to see clipboard contents">
        <script>
        document.getElementById("copyButton").addEventListener("click", function() {
          copyToClipboard(document.getElementById("copyTarget"));
        });

        function copyToClipboard(elem) {
          // create hidden text element, if it doesn't already exist
          var targetId = "_hiddenCopyText_";
          var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
          var origSelectionStart, origSelectionEnd;
          if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
          } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
              var target = document.createElement("textarea");
              target.style.position = "absolute";
              target.style.left = "-9999px";
              target.style.top = "0";
              target.id = targetId;
              document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
          }
          // select the content
          var currentFocus = document.activeElement;
          target.focus();
          target.setSelectionRange(0, target.value.length);

          // copy the selection
          var succeed;
          try {
            succeed = document.execCommand("copy");
          } catch(e) {
            succeed = false;
          }
          // restore original focus
          if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
          }

          if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
          } else {
            // clear temporary content
            target.textContent = "";
          }
          return succeed;
        }
      </script>

    </div>

  </div><!-- tab-content -->

</div> <!-- /form -->
</body>
</html>
