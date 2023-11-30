<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach ($tgl_kembali as $item)
                    {{$item}}
                @endforeach
            ],
            datasets: [{
                label: 'Barang Selesai Dipinjam',
                data: [
                    @foreach ($count as $item)
                        {{$item}}
                    @endforeach
                ],
                backgroundColor: '#39cccc',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
