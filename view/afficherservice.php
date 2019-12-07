<?php
          include "../core/serviceC.php";

          $service1C = new serviceC();
          $list = $service1C->afficherservices();

          ?>
          <div class="card card-table-border-none" id="promotion">
            <div class="card-header justify-content-between">
              <h2>Services</h2>
              <div class="date-range-report ">
                <span></span>
              </div>
            </div>
            <div class="card-body pt-0 pb-5">
              <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                <thead>
                  <tr>

                    <td align="center">Name of service</td>
                    <td align="center">ID of service</td>
                    <td align="center"></td>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (is_array($list) || is_object($list)) {
                    foreach ($list as $row) {
                      ?>
                      <tr>
                      <tr>

                        <td align="center"><?PHP echo $row['name']; ?></td>
                        <td align="center"><?PHP echo $row['id']; ?></td>

                      </tr>
                  <?php }
                  } ?>



                  </tr>
                </tbody>
              </table>
            </div>
          </div>