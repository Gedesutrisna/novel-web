      // Data untuk grafik product (bar chart)
      const productData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [
            {
                label: 'Dataset 1',
                data: [30, 20, 55, 60, 40, 30, 70],
                backgroundColor: '#B9B9B9',
                barPercentage: 0.5,
                borderRadius: 50, // Set border radius untuk setiap bar
            },
            {
                label: 'Dataset 2',
                data: [30, 20, 55, 60, 40, 15, 75],
                backgroundColor: '#EEE9DA',
                barPercentage: 0.5,
                borderRadius: 50, // Set border radius untuk setiap bar
            },
            {
                label: 'Dataset 3',
                data: [60, 30, 80, 70, 80, 90, 80],
                backgroundColor: '#000000',
                barPercentage: 0.5,
                borderRadius: 50, // Set border radius untuk setiap bar
            },
        ]        
    };

    // Opsi konfigurasi untuk grafik
    const options = {
        responsive: false,
        maintainAspectRatio: false,
        scales: {
            x: {
                grid: {
                    display: false, // Hapus garis grid vertikal
                },
            },
            y: {
                grid: {
                    display: true, // Tampilkan garis grid horizontal
                },
                ticks: {
                    callback: function(value, index, values) {
                        return '$' + value ; // Tambahkan teks di samping label dataranges
                    },
                },
            }
        },
        plugins: {
            legend: {
                display: false, // Matikan tampilan default legend
            }
        }
    };

    // Buat grafik product (bar chart)
    const productChart = new Chart(document.getElementById('productChart'), {
        type: 'bar',
        data: productData,
        options: options
    });


var profileImage = document.getElementById('profile-image');

if (profileImage) {
  profileImage.addEventListener("click", function() {
    document.getElementById('image').click();
  });
}