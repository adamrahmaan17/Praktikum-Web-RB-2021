<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Load file JS -->
    <script src="js/jquery-3.4.1.js"></script>

</head>
<body>
<div class="container">
    <br>
    <h4>Submit Form dengan AJAX</h4>

    <form  id="form" method="post">
        <div class="form-group">
            <label>NIM :</label>
            <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required />
        </div>
        <div class="form-group">
            <label>Nama : </label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama mahasiswa" required />
        </div>
        <div class="form-group">
            <label>Prodi :</label>
            <input type="text" name="prodi" class="form-control" placeholder="Masukan prodi" required />
        </div>
        <div class="form-group">
            <label>Angkatan :</label>
            <input type="number" name="angkatan" class="form-control" placeholder="Masukan tahun angkatan" required />
        </div>

        <button type="button" id="Submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


    <div id="tampil">

    </div>

    <script type="text/javascript">
        $(document).ready(function(){

         $('#tampil').load("tampil.php");

            $("#Submit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "insert.php",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("tampil.php");
                    }
                });
            });
        });
    </script>
</div>

</body>
</html>
