<?php
function Total_row($bd, $status, $clid)
{
  if ($status == "All")

    $sql = "SELECT count(*) as cnt FROM orders where clientid='$clid'";
  else
    $sql = "SELECT count(*) as cnt FROM orders where  clientid='$clid' and status='$status'";
  $res = mysqli_query($bd, $sql);
  $row = mysqli_fetch_array($res);
  return $row['cnt'];
}
?>




<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="index.php" class="small-box-footer">
      <div class="small-box" style="background-color: #FFFFFF !important">
        <div class="inner" style="color: #000 !important;font-weight: bold;">
          <h3>
            <?php

            $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and status='New'");
            $rowh = mysqli_fetch_assoc($resulth);
            echo $rowh['sm'];   ?>
          </h3>
          <p style="color: #000 !important;font-weight: bold;">New Cases</p>
        </div>
        <div class="icon">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="index2.php" class="small-box-footer">
    <div class="small-box" style="background-color: #399793 !important">
      <div class="inner" style="color: #000 !important">
        <h3 style="color: #FFF !important;font-weight: bold;"><?php

                                                              $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and tduration='Rush' and status='New'");
                                                              $rowh = mysqli_fetch_array($resulth);
                                                              echo $rowh['sm'];   ?>
        </h3>

        <p style="color: #FFF !important;font-weight: bold;">Rush Cases</p>
      </div>
      <div class="icon">
        <i class="fas fa-money-bill-alt"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="pagination.php?type=<?php echo base64_encode('Completed') ?>&clientid=<?php echo base64_encode($em) ?>" class="small-box-footer">
    <div class="small-box" style="background-color: #E6CF86 !important">
      <div class="inner">
        <h3 style="color: #000 !important;font-weight: bold;"> <?php
                                                                $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and status='Completed'");
                                                                $rowh = mysqli_fetch_array($resulth);
                                                                echo $rowh['sm'];
                                                                ?>

        </h3>

        <p style="color: #000 !important;font-weight: bold;">Completed Cases</p>
      </div>
      <div class="icon">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="pagination.php?type=<?php echo base64_encode('Hold') ?>&clientid=<?php echo base64_encode($em) ?>" class="small-box-footer">
    <div class="small-box" style="background-color: #C01E22 !important">
      <div class="inner">
        <h3 style="color: #FFF !important;font-weight: bold;">
          <?php
          $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and status='Hold'");
          $rowh = mysqli_fetch_array($resulth);
          echo $rowh['sm'];
          ?>
        </h3>

        <p style="color: #FFF !important;font-weight: bold;">Case On Hold</p>
      </div>
      <div class="icon">
        <i class="fas fa-money-bill-alt"></i>
      </div>
      <i class="fas fa-arrow-circle-right"> </i>
  </a>
</div>
</div>
<!-- ./col -->

</div>


<!-- Small boxes (Stat box) -->
<div class="row">

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="index3.php" class="small-box-footer">
      <div class="small-box" style="background-color: #FFFFFF !important">
        <div class="inner" style="color: #000 !important;font-weight: bold;">
          <h3 style="color: #000 !important"> <?php
                                              $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and status='progress'");
                                              $rowh = mysqli_fetch_array($resulth);
                                              echo $rowh['sm'];
                                              ?>

          </h3>

          <p style="color: #000 !important;font-weight: bold;">In Progress</p>
        </div>
        <div class="icon">
          <i class="fas fa-tasks"></i>
        </div>
        <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</div>

<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="index7.php" class="small-box-footer">
    <div class="small-box" style="background-color: #399793 !important">
      <div class="inner">
        <h3 style="color: #FFF !important;font-weight: bold;"><?php
                                                              $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and status='QC Required'");
                                                              $rowh = mysqli_fetch_array($resulth);
                                                              echo $rowh['sm'];

                                                              ?>
        </h3>
        <p style="color: #FFF !important;font-weight: bold;">QC Required</p>
      </div>
      <div class="icon">
        <i class="fas fa-money-bill-alt"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>
<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="pagination.php?type=<?php echo base64_encode('All') ?>&clientid=<?php echo base64_encode($em) ?>" class="small-box-footer">
    <div class="small-box" style="background-color: #E6CF86 !important">
      <div class="inner">
        <h3 style="color: #000 !important;font-weight: bold;"><?php
                                                              $tdate = date('d-M-Y', strtotime('-1 day', strtotime(date("d-M-Y"))));
                                                              $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em'");
                                                              $rowh = mysqli_fetch_array($resulth);
                                                              echo $rowh['sm'];
                                                              ?>

        </h3>

        <p style="color: #000 !important;font-weight: bold;">All Cases</p>
      </div>
      <div class="icon">
        <i class="fas fa-tasks"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>
<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="pagination.php?type=<?php echo base64_encode('Cancel') ?>&clientid=<?php echo base64_encode($em) ?>" class="small-box-footer">
    <div class="small-box" style="background-color: #C01E22  !important">
      <div class="inner">
        <h3 style="color: #FFF !important;font-weight: bold;">
          <?php
          $resulth = mysqli_query($bd, "SELECT count(*) as sm FROM orders WHERE clientid='$em' and status='Cancel'");
          $rowh = mysqli_fetch_array($resulth);
          echo $rowh['sm'];
          ?>
        </h3>

        <p style="color: #FFF !important;font-weight: bold;">Canceled Case</p>
      </div>
      <div class="icon">
        <i class="fas fa-money-bill-alt"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>
</div>
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="index8.php" class="small-box-footer">
      <div class="small-box" style="background-color: #FFFFFF !important">
        <div class="inner" style="color: #000;font-weight: bold;">
          <h3> <?php
                $tdate = date('d-M-Y', strtotime('-1 day', strtotime(date("d-M-Y"))));
                $cc = 0;
                $resulth = mysqli_query($bd, "SELECT created_at FROM orders WHERE clientid='$em'");
                while ($rowh = mysqli_fetch_array($resulth)) {

                  if (strtotime($tdate) == strtotime(date("d-M-Y", strtotime($rowh['created_at']))))
                    $cc++;
                }
                echo $cc;
                ?>

          </h3>

          <p style="color: #000;font-weight: bold;">Yesterday's Cases</p>
        </div>
        <div class="icon">
          <i class="fas fa-tasks"></i>
        </div>
        <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</div>

<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="index10.php" class="small-box-footer">
    <div class="small-box" style="background-color: #399793 !important">
      <div class="inner">
        <h3 style="color: #FFF !important;font-weight: bold;"> <?php
                                                                $tdate = date('d-M-Y');
                                                                $cc = 0;
                                                                $resulth = mysqli_query($bd, "SELECT created_at FROM orders WHERE clientid='$em'");
                                                                while ($rowh = mysqli_fetch_array($resulth)) {

                                                                  if (strtotime($tdate) == strtotime(date("d-M-Y", strtotime($rowh['created_at']))))
                                                                    $cc++;
                                                                }
                                                                echo $cc;
                                                                ?>

        </h3>
        <p style="color: #FFF !important;font-weight: bold;">Today's Cases</p>
      </div>
      <div class="icon">
        <i class="fas fa-money-bill-alt"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>


<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="weeklycase.php" class="small-box-footer">
    <div class="small-box" style="background-color: #E6CF86 !important">
      <div class="inner">
        <h3 style="color: #000 !important;font-weight: bold;">
          <?php
          $tdate = date('d-M-Y', strtotime('-1 day', strtotime(date("d-M-Y"))));
          $cc = 0;
          $resulth = mysqli_query($bd, "SELECT * FROM orders  WHERE clientid='$em' and STR_TO_DATE(created_at, '%d-%b-%Y') >= CURDATE() - INTERVAL 7 DAY");
          while ($rowh = mysqli_fetch_array($resulth)) {
            $cc++;
          }
          echo $cc;
          ?>
        </h3>

        <p style="color: #000 !important;font-weight: bold;">Last 100 Cases</p>
      </div>
      <div class="icon">
        <i class="fas fa-tasks"></i>
      </div>
      <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>


</div>