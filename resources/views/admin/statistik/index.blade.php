<x-layout>
    <x-slot name='page_content'>
        <h3 class="text-center mb-4">Statistik Progres Tugas</h3>

        <!-- Grafik -->
        <canvas id="progressLineChart" width="400" height="160"></canvas>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            // Data dari controller
            const completedTasks = {{ $completedTasks }};
            const notStartedTasks = {{ $notStartedTasks }};
            const inProgressTasks = {{ $inProgressTasks }};

            var ctx = document.getElementById('progressLineChart').getContext('2d');
            var progressLineChart = new Chart(ctx, {
                type: 'line', // Jenis grafik garis
                data: {
                    labels: ['Not Started', 'In Progress', 'Completed'], // Label status
                    datasets: [{
                        label: 'Jumlah Tugas',
                        data: [notStartedTasks, inProgressTasks, completedTasks], // Data untuk grafik
                        fill: false, // Tidak ada pengisian area
                        borderColor: 'rgba(75, 192, 192, 1)', // Warna garis
                        tension: 0.1, // Kelenturan garis
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true // Mulai sumbu Y dari 0
                        }
                    }
                }
            });
        </script>
    </x-slot>
</x-layout>
