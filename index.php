<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Weton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@491&display=swap" rel="stylesheet">
    
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   
    
    <link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body>

<div class="container-md mt-5 col-11">
    <h1>Hitung Weton</h1>
    <div id="emailHelp" class="form-text">by <img src="github.png" alt="" srcset="" class="github"></div>
    <img src="head-min.jpg" alt="" srcset="" class="ikon">
    <div class="card mb-3">
        <div class="card-body" >
            <form>
                <div class="mb-1 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Kamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNama1">
                        <small id="nama-alert" class="form-text text-danger"></small>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputTanggal1">
                        <small id="tanggal-alert" class="form-text text-danger"></small>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Pasangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNama2">
                        <small id="nama2-alert" class="form-text text-danger"></small>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputTanggal2">
                        <small id="tanggal2-alert" class="form-text text-danger"></small>
                    </div>
                </div>
                <input type="button" value="Hitung" id="submit" class="btn btn-primary mt-2 col-12 btn-hitung">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
               <br><b>Disclaimer!</b> Pemahaman ini tidak bisa dijadikan patokan utama dalam kehidupan sehari-hari. 
              Tergantung dari sisi kepercayaan masing-masing. </div>
            </form>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hasil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="result">
            <div class="card">
            </div>
        </div>
      </div>
      <div class="modal-footer">
      <div id="emailHelp" class="form-text">Find on <img src="https://1.bp.blogspot.com/-TJveDHmopf8/YAczjGBH28I/AAAAAAAAHts/Ypusd4262wgzQAzJySOLp_jrldMW2_enwCLcBGAsYHQ/s1134/blangkon.png" alt="" srcset="" class="github"></div>
      </div>
    </div>
  </div>
</div>
    
</div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" 
        crossorigin="anonymous">
</script>
<script src="script.js"></script>

</html>
