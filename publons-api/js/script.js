function searchPublication() {
    $('#publication-list').html('');
    $('#menampilkan').html('');

    $.ajax({
        url: 'https://publons.com/api/v2/academic/publication/',
        type: 'get',
        dataType: 'json',
        crossDomain: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Token 18c43f699317ef4fd49c4b225fe8b5a554ecd7db')
        },
        data: {
            'academic': $('#search-input').val()
        },
        success: function (result) {
            if (result.results != '') {
                $('#menampilkan').append(`
                Menampilkan hasil dari : <strong class="text-success">"` + $('#search-input').val() + `"</strong></h6>        
                `);
                let publications = result.results;
                $.each(publications, function (i, data) {
                    $('#publication-list').append(`
                        <div class="card mb-2">
                            <div class="card-body">
                                <a href="` + data.publication.ids.url + `"><h5 class = "card-title">` + data.publication.title + `</h5></a>
                                <strong class="card-subtitle mb-2 text-dark"> Tahun : </strong>` + data.publication.date_published + `<br>
                                <strong class="card-subtitle mb-2 text-dark">Doi : </strong>` + data.publication.ids.doi + `<br>
                                <strong class="card-subtitle mb-2 text-dark">Jurnal : </strong>` + data.journal.name + `<br>
                                <strong class="card-subtitle mb-2 text-dark">ISSN : </strong>` + data.journal.ids.issn + `  
                            </div>
                        </div>
                    `);
                });
            }
            elseif() {
                $('#publication-list').html(`
                <div class="col">
                    <h1 class="text-center>Publication not Found!</h1>
                </div>
                `);
            }
        }
    });
}

$('#search-button').on('click', function () {
    searchPublication();
});

$('#search-input').on('keyup', function (e) {
    if (e.which === 13) {
        searchPublication();
    }
});