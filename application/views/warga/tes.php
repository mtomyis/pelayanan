<html>

<body>
 		ktp
          <input type="text" class="form-control" id="ktp" onkeyup="autofill()" aria-describedby="emailHelp" name="datanoktp" required>
         
       
            <input type="text" class="form-control" id="namalama" name="datanamalama">
        
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 <script>
    function autofill(){
        var iktp = document.getElementById('ktp').value;
        $.ajax({
                       url:"<?php echo base_url('C_buat_surat/autocomplete');?>",
                       data:'&nik ='+iktp,
                       success:function(data){
                           var hasil = JSON.parse(data);  
                    
            $.each(hasil, function(key,val){ 
                
               document.getElementById('namalama').value=val.nama_penduduk;
              });
            }
                   });
                  
    }
</script>

<body>

</html>
