@extends('layouts.admin')

@section('content')


@php
    $series = [];
    $startIndex = 1;
    $endIndex = $cid;

    for ($i = $startIndex; $i <= $endIndex; $i++) {
        $found = false;

        // Cek setiap elemen pada $results
        foreach ($results as $result) {
            if ($result['vote'] == $i) {
                array_push($series, $result['vote_count']);
                $found = true;
                break;
            }
        }

        // Jika tidak ditemukan, tambahkan nilai 0 ke dalam array
        if (!$found) {
            array_push($series, 0);
        }
    }

@endphp

<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14 flex justify-center">

        
<div class="max-w-sm w-full">
    <div class="flex justify-between mb-3">
        <div class="flex justify-center items-center">
            <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                <div data-popper-arrow></div>
            </div>
          </div>
        <div>
          <button type="button" data-tooltip-target="data-tooltip" data-tooltip-placement="bottom" class="hidden sm:inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"><svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
    </svg><span class="sr-only">Download data</span>
          </button>
          <div id="data-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              Download
              <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
        </div>
    </div>
  
    <div id="donut-chart"></div>
  
  <script>
    let votingId = @json($votingId);
    let series = @json($series);
    let candidate = @json($candidate);
    let chart = "";
    window.addEventListener("load", function() {
      const getChartOptions = () => {
          return {
            series: series,
            colors: ["#1C64F2", "#16BDCA", "#FDBA8C", "#000000"],
            chart: {
              id: 'resultchart',
              height: 1000,
              width: "100%",
              type: "donut",
            },
            stroke: {
              colors: ["transparent"],
              lineCap: "",
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      show: true,
                      fontFamily: "Inter, sans-serif",
                      offsetY: 20,
                    },
                    total: {
                      showAlways: true,
                      show: true,
                      label: "Pemilih",
                      fontFamily: "Inter, sans-serif",
                      formatter: function (w) {
                        const sum = w.globals.seriesTotals.reduce((a, b) => {
                          return a + b
                        }, 0)
                        return `${sum}`
                      },
                    },
                    value: {
                      show: true,
                      fontFamily: "Inter, sans-serif",
                      offsetY: -20,
                      formatter: function (value) {
                        return value 
                      },
                    },
                  },
                  size: "80%",
                },
              },
            },
            grid: {
              padding: {
                top: -2,
              },
            },
            labels: candidate,
            dataLabels: {
              enabled: false,
            },
            legend: {
              position: "bottom",
              fontFamily: "Inter, sans-serif",
            },
            yaxis: {
              labels: {
                formatter: function (value) {
                  return value
                },
              },
            },
            xaxis: {
              labels: {
                formatter: function (value) {
                  return value 
                },
              },
              axisTicks: {
                show: false,
              },
              axisBorder: {
                show: false,
              },
            },
          }
        }
  
        if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
          chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
          chart.render();
        }

        

        // const updateSeries = (newSeries) => {
        //   chart.on('rendered', function() {
        //     chart.updateSeries(newSeries);
        //   });
        // };
        

      });
      


    
  </script>
  

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@endsection