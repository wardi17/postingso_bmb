<?php require 'pages/header.php'; ?>
<body>
<?php 
$comp = [
  "All"=>"dummy",
 "DKI"=> "bambi-mg2",
 "JBR"=> "bambi04",
 "JTM"=> "SB",
 "JTG"=> "NS2",
 "SMT"=> "NS1",
 "KLM"=> "NS4",
 "SLW"=> "NS3",
 "DGM"=> "DGM",
];

?>
 <main role="main" class="container">

<!-- BATAS FORM -->
    <div  class="card">
      <div class="card-header">
      <h2 class="text-center"></h2>
      </div>
      <div class="card-body">
      <div class="col-md-10">
                              <div class ="row col-md-10">
                                  <label for="direksi" class="col-sm-3 col-form-label" >Divisi Terkait</label>
                                  <div class ="col-md-8">
                                    <?php  foreach($ms_divisi as $file):
                                          $kode = $file['kode_divisi'];
                                          $nama = $file['nama_divisi'];
                                      ?>
                                          <div class="form-check form-check-inline col-md-5">
                                          <input class="form-check-input checkterkait" for ="<?=$kode?>" type="checkbox" id="divisi_tkt"name="divisi_tkt[]" value="<?=$kode?>">
                                          <label class="form-check-label" for ="<?=$kode?>" ><?=$nama?></label>
                                      </div>
                                  <?php endforeach;?> 
                                     
                                  </div>
                              </div>
                            </div>


<?php require 'pages/footer.php'; ?>