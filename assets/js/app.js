console.log("JavaScript utama berjalan");

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const confirmDelete = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (!confirmDelete) {
                e.preventDefault();
            }
        });
    });
});
