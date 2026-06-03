const hapus = document.querySelectorAll('.hapus');

hapus.forEach(function(tombol){
    tombol.addEventListener('click', function(e){

        const yakin = confirm("Yakin ingin menghapus data?");

        if(!yakin){
            e.preventDefault();
        }

    });
});