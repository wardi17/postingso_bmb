
<?php require 'pages/header.php'; ?>
<body>
<?php
 
 $email = $_POST["emaillist"];
 $total = $_POST["totalharga"];
 $cabang_cust ="603";
?>

<h2>Comfrimasi</h2>
<form id="Adddata" class="row g-3 mt-4">
    <div class="col-md-6">
    <input type="hidden" id="sodate"value="<?=date("Y-m-d H:i:s");?>">
        <input type="hidden" id="email" value="<?=$email?>">
        <input type="hidden" id="total" value="<?=$total?>">
        <input type="hidden" id="cabangCust" value="<?=$cabang_cust?>">
    <div class="mb-3 row">
        <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-6">
                <textarea style="height:100px;" class="form-control" name ="catatan" id="catatan" value="" required></textarea>
              </div>
    </div>
   
            <div class="row col-sm-6 md-5  text-end">
                  <div class="col-sm-2">
                    <button type="submit" id="Createdata" class="btn btn-primary">Submit</button>
                  </div>
              
            </div>
</form>
    


<script>
    //batas document ready
    $(document).ready(function(){
       
    
        $("#Createdata").on("click",function(e){
            e.preventDefault();
            let id_cust ="DATASCRIP";
            let sodate = $("#sodate").val();
            let email =$("#email").val();
            let total = $("#total").val();
            let catatan = $("#catatan").val();
            let cabang = $("#cabangCust").val();   
            let datas ={
                id_cust:id_cust,
                sodate:sodate,
                email:email,
                totol:total,
                catatan:catatan,
                cabang:cabang
            }

            console.log(datas);
            
            $.ajax({
                url:'http://localhost/portalresitapi/public/neworder/simpanorder',
                 method:"POST",
                 data:datas,
                 dataType: "json",
                 success:function(result){
                    console.log(result)
            

                 }
             })
        })
        
    })



</script>

<?php require 'pages/footer.php'; ?>