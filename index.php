<?php require(dirname(__FILE__).'/translate/EN.php');
require(dirname(__FILE__).'/translate/vars.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>State Info</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style-global.css">
  <link href="/css/style-top.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style-School.css">
  <link rel="stylesheet" href="/css/style-transit.css">
  <link rel="stylesheet" href="/css/style-nearby.css">
  <link rel="stylesheet" href="/css/style-bottom.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="top-contact">
        <p id="name">Name</p>
        <p id="phone">Phone</p>
        <p id="web">Web</p>
      </div>
      <div class="logo">
        <img src="/img/logo-circle.png" alt="">
      </div>
    </div>
    <div class="block">
      <h1>2037 Waterever Street, C9A5Z0</h1>
      <h4>Toronto, ON</h4>
      <h4>INTERACTIVE ADDRESS REPORT</h4>
    </div>
    <div class="schoolBlock">
        <p class="title">
          <i class="fas fa-school"></i> <?php echo $lang['school-title'] ?>
        </p>
      <hr class="first-dash">
      <div class="school">
        <div class="nameBlock">
          <p class="school-name">
          <i class="fas fa-graduation-cap"></i> <?php echo $vars['school-name-1'] ?>
          </p>
          <div class="bubbles">
            <div class="property">
            <?php echo $lang['school-property-1'] ?>
            </div>
            <div class="rank">
            <?php echo $vars['school-rank-1'] ?>
            </div>
          </div>
        </div>
        <div class="school-info">
          <p><?php echo $vars['school-grade-1'] ?></p>
          <p><?php echo $vars['school-address-1'] ?></p>
          <p><?php echo $vars['school-distance-1'] ?></p>
        </div>
      </div>
      <hr class="normal-dash">
      <div class="school">
        <div class="nameBlock">
          <p class="school-name">
            <i class="fas fa-graduation-cap"></i> <?php echo $vars['school-name-2'] ?>
          </p>
          <div class="bubbles">
            <div class="property">
            <?php echo $lang['school-property-2'] ?>
            </div>
            <div class="rank">
            <?php echo $vars['school-rank-2'] ?>
            </div>
          </div>
        </div>
        <div class="school-info">
          <p><?php echo $vars['school-grade-2'] ?></p>
          <p><?php echo $vars['school-address-2'] ?></p>
          <p><?php echo $vars['school-distance-2'] ?></p>
        </div>
      </div>
      <hr class="normal-dash">
      <div class="school">
        <div class="nameBlock">
          <p class="school-name">
            <i class="fas fa-graduation-cap"></i> <?php echo $vars['school-name-3'] ?>
          </p>
          <div class="bubbles">
            <div class="property">
            <?php echo $lang['school-property-3'] ?>
            </div>
            <div class="rank">
            <?php echo $vars['school-rank-3'] ?>
            </div>
          </div>
        </div>
        <div class="school-info">
          <p><?php echo $vars['school-grade-3'] ?></p>
          <p><?php echo $vars['school-address-3'] ?></p>
          <p><?php echo $vars['school-distance-3'] ?></p>
        </div>
      </div>
      <hr class="normal-dash">
      <div class="school">
        <div class="nameBlock">
          <p class="school-name">
            <i class="fas fa-graduation-cap"></i> <?php echo $vars['school-name-4'] ?>
          </p>
          <div class="bubbles">
            <div class="property">
            <?php echo $lang['school-property-4'] ?>
            </div>
            <div class="rank">
            <?php echo $vars['school-rank-4'] ?>
            </div>
          </div>
        </div>
        <div class="school-info">
          <p><?php echo $vars['school-grade-4'] ?></p>
          <p><?php echo $vars['school-address-4'] ?></p>
          <p><?php echo $vars['school-distance-4'] ?></p>
        </div>
      </div>
      <hr class="normal-dash">
      <div class="school">
        <div class="nameBlock">
          <p class="school-name">
            <i class="fas fa-graduation-cap"></i> <?php echo $vars['school-name-5'] ?>
          </p>
          <div class="bubbles">
            <div class="property">
            <?php echo $lang['school-property-5'] ?>
            </div>
            <div class="rank">
            <?php echo $vars['school-rank-5'] ?>
            </div>
          </div>
        </div>
        <div class="school-info">
          <p><?php echo $vars['school-grade-5'] ?></p>
          <p><?php echo $vars['school-address-5'] ?></p>
          <p><?php echo $vars['school-distance-5'] ?></p>
        </div>
      </div>
    </div>
    <!-- ------------------------------------------------------------------------------------- -->
    <!-- TRANSIT -->
    <div class="transitBlock">
      <p class="title">
        <i class="fas fa-subway"></i> <?php echo $lang['transit-title']; ?>
      </p>
      <hr class="first-dash">
      <div class="transit">
        <p class="transit-name">
          <?php echo $vars['typeOfTransit-1']?> <?php echo $vars['transit-name-1']; ?>
        </p>
        <p class="transit-distance">
          <?php echo $vars['transit-distance-1']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="transit">
        <p class="transit-name">
          <?php echo $vars['typeOfTransit-2']?> <?php echo $vars['transit-name-2']; ?>
        </p>
        <p class="transit-distance">
          <?php echo $vars['transit-distance-2']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="transit">
        <p class="transit-name">
          <?php echo $vars['typeOfTransit-3']?> <?php echo $vars['transit-name-3']; ?>
        </p>
        <p class="transit-distance">
          <?php echo $vars['transit-distance-3']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="transit">
        <p class="transit-name">
          <?php echo $vars['typeOfTransit-4']?> <?php echo $vars['transit-name-4']; ?>
        </p>
        <p class="transit-distance">
          <?php echo $vars['transit-distance-4']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="transit">
        <p class="transit-name">
          <?php echo $vars['typeOfTransit-5']?> <?php echo $vars['transit-name-5']; ?>
        </p>
        <p class="transit-distance">
          <?php echo $vars['transit-distance-5']; ?>
        </p>
      </div>
    </div>
    <!-- ---------------------------------------------------------- -->
    <!-- NEARBY -->
    <div class="nearbyBlock">
      <p class="title">
        <i class="fas fa-thumbs-up"></i> <?php echo $lang['nearby-title']; ?>
      </p>
      <hr class="first-dash">
      <div class="nearby">
        <p class="nearby-name">
          <?php echo $vars['typeOfNearby-1']; ?> <?php echo $vars['nearby-name-1']; ?>
        </p>
        <p class="nearby-address">
          <?php echo $vars['nearby-address-1']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="nearby">
        <p class="nearby-name">
          <?php echo $vars['typeOfNearby-2']; ?> <?php echo $vars['nearby-name-2']; ?>
        </p>
        <p class="nearby-address">
          <?php echo $vars['nearby-address-2']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="nearby">
        <p class="nearby-name">
          <?php echo $vars['typeOfNearby-3']; ?> <?php echo $vars['nearby-name-3']; ?>
        </p>
        <p class="nearby-address">
          <?php echo $vars['nearby-address-3']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="nearby">
        <p class="nearby-name">
          <?php echo $vars['typeOfNearby-4']; ?> <?php echo $vars['nearby-name-4']; ?>
        </p>
        <p class="nearby-address">
          <?php echo $vars['nearby-address-4']; ?>
        </p>
      </div>
      <hr class="normal-dash">
      <div class="nearby">
        <p class="nearby-name">
          <?php echo $vars['typeOfNearby-5']; ?> <?php echo $vars['nearby-name-5']; ?>
        </p>
        <p class="nearby-address">
          <?php echo $vars['nearby-address-5']; ?>
        </p>
      </div>
    </div>
    <div class="bottomContainer">
      <div class="logo">
        <img src="./img/logo-long.png" class="bottomLogo">
      </div>
      <div class="policy">
        <h1>Policy</h1>
        <p>Paragraph shjjsadjl;sadjksadj kasjkdjas djksad  dskajad jkasd asdjas djkasjd sad  dsajd askkk as dasjs oasd oasd jasdjkasd jkasd jksa dj</p>
      </div>
    </div>
  </div>
</body>
</html>