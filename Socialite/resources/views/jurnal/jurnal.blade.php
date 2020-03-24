@extends('layouts.master')

@section('title','Cari Jurnal')

@section('nama_halaman','Cari Jurnal')

@section('content')
{{-- Masih dalam tahap pengembangan --}}
{{-- <!-- <?php

function get_cURL($url){
  //proses ngambil data API dengan cURL
  $curl = curl_init(); //persiapan atau inisialisasi cURL
  curl_setopt($curl, CURLOPT_URL,$url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //proses kembalian data API
  $result = curl_exec($curl); //eksekusi data API yang didapat
  curl_close($curl); //tutup proses cURL

  return json_decode($result, true); //merubah file json menjadi array (true), kalo jdi objek (false)
  // var_dump($result);
}

$result = get_cURL('http://api.elsevier.com/content/search/scopus?query=web service&apiKey=706c898b0948885c5f082c477cb0972f');

?> --> --}}

{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Learn API</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
           Learn API
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Scopus </a>
        </div>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Search Jurnal</h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Jurnal title.." id="search-input">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button" id="search-button">Search</button>
                </div>
              </div>
        </div>
    </div>

    <hr>

    <div class="row" id="movie-list">
    </div>
</div>

<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Movie Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        ...
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- pastikan bukan yang slim -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html> --}}


{{-- <script>
    

$('#search-button').on('click',function(){
    $.ajax({
        url: 'https://api.elsevier.com/content/search/scopus/',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '706c898b0948885c5f082c477cb0972f',
            'query' : $('#search-input').val()
        },
        success: function(result){
            console.log(result);
            // if(result.entry.error == "False"){
            //     let movies = result.Search;

            //     $.each(movies, function(i, data){ //pengulangan dalam ajax
            //         $('#movie-list').append(`
            //         <div class="col-md-4"
            //             <div class="card-mb-3">
            //             <img src="`+ data.Poster  +`" class="card-img-top" alt="...">
            //             <div class="card-body">
            //                 <h5 class="card-title">`+data.Title +`</h5>
            //                 <h6 class="card-subtitle mb-2 text-muted">`+ data.Year+`</h6>
            //                 <a href="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="`+data.imdbID+`">See Detail</a>
            //             </div>
            //             </div>
            //         </div>
            //         `);
            //     })

            //     $('#search-input').val(''); //supaya kata-kata inputan menghiilang ketika udah ada hasil pencariannya
            // }else{
            //     $('#movie-list').html(`
            //     <div class="col">
            //         <h1 class="text-center">` +result.Error+ `</h1>
            //     </div>
            //     `)
            // }
            
        }
    });
});
</script> --}}
@endsection
