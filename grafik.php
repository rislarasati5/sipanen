// grafik.js
function tampilkanGrafik(data) {
    const ctx = document.getElementById('grafikProduksi').getContext('2d');

    const labels = data.map(item => item.nama_tanaman);
    const hasil = data.map(item => item.total_panen);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Hasil Panen (kg)',
                data: hasil,
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: '#2d6a4f',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            },
            plugins: {
                legend: { position: 'top' },
                title: {
                    display: true,
                    text: 'Grafik Total Produksi per Jenis Tanaman'
                }
            }
        }
    });
}
