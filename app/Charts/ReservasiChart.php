<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Reservasi;
use Carbon\Carbon;

class ReservasiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tahun = date('Y');
        $bulan = date('m');
        $data = [];
        $dataBulan = [];

        for ($i = 1; $i <= $bulan; $i++) { 
            $data[] = Reservasi::whereYear('created_at', $tahun)
                               ->whereMonth('created_at', $i)
                               ->count();
            $dataBulan[] = Carbon::createFromDate($tahun, $i)->format('F');
        }
        
        return $this->chart->lineChart()
            ->setTitle('Grafik Reservasi')
            ->setSubtitle('Jumlah reservasi per bulan di tahun ' . $tahun)
            ->addData('Total Reservasi', $data)
            ->setXAxis($dataBulan)
            ->setColors(['#21618c'])
            ->setMarkers(['#17a589'], 7, 10);
    }
}
