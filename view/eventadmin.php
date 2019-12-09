<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome Admin!</title>
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="assetsAdmin/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assetsAdmin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assetsAdmin/css/sleek.css" />
  <!-- FAVICON -->
  <link href="assetsAdmin/img/favicon.png" rel="shortcut icon" />
  <script src="assetsAdmin/plugins/nprogress/nprogress.js"></script>
    <title>Document</title>
</head>
<body>
    
<?php
                        include "../core/eventC.php";
                        $event1C = new eventC();
						$listeevents=$event1C->afficherevent();
						
                 ?>
                  <div class="card card-table-border-none" id="promotion">
                    <div class="card-header justify-content-between">
                      <h2>events</h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>id_event</th>
                            <th class="d-none d-md-table-cell">date debut</th>
							<th>date fin</th>
                            <th>nom event</th>
							<th>description</th>
							
							
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(is_array($listeevents) || is_object($listeevents)){
                        foreach ($listeevents as $row) {
                        ?>
                         <tr>
                          <tr>
                            <td align="center"><?PHP echo $row['id']; ?></td>
                            <td >
                              <a class="text-dark" href=""align="center"> <?PHP echo $row['date_deb']; ?></a>
                            </td>
                            <td class="d-none d-md-table-cell" align="center"><?PHP echo $row['date_fin']; ?></td>
							<td class="d-none d-md-table-cell"><?PHP echo $row['nom event']; ?></td>
							<td class="d-none d-md-table-cell"><?PHP echo $row['description']; ?></td>
						
                           
                         
                          </tr>
                          <?php }} ?>
                    
                          
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
</div>
							</div>						
</div>

          


        </div>


</body>
