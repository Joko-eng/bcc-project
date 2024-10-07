import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
  const dataContainer = document.getElementById('data-container');
  const categories = JSON.parse(dataContainer.getAttribute('data-categories'));
  const totals = JSON.parse(dataContainer.getAttribute('data-totals'));

  const options = {
      chart: {
          type: 'bar',
          height: 350
      },
      plotOptions: {
          bar: {
              horizontal: false,
              columnWidth: '55%',
              endingShape: 'rounded'
          },
      },
      dataLabels: {
          enabled: false
      },
      stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
      },
      series: [{
          name: 'Total Produk',
          data: totals // Data total produk per kategori
      }],
      xaxis: {
          categories: categories // Nama kategori sebagai sumbu x
      },
      fill: {
          opacity: 1
      },
      tooltip: {
          y: {
              formatter: function (val) {
                  return val + " produk"; // Menampilkan jumlah produk
              }
          }
      }
  };

  const chart = new ApexCharts(document.querySelector("#column-chart"), options);
  chart.render();
});



// const options = {
//   chart: {
//     height: "100%",
//     maxWidth: "100%",
//     type: "line",
//     fontFamily: "Inter, sans-serif",
//     dropShadow: {
//       enabled: false,
//     },
//     toolbar: {
//       show: false,
//     },
//   },
//   tooltip: {
//     enabled: true,
//     x: {
//       show: false,
//     },
//   },
//   dataLabels: {
//     enabled: false,
//   },
//   stroke: {
//     width: 6,
//   },
//   grid: {
//     show: true,
//     strokeDashArray: 4,
//     padding: {
//       left: 2,
//       right: 2,
//       top: -26
//     },
//   },
//   series: [
//     {
//       name: "Clicks",
//       data: [20, 1, 5, 2, 9, 10, 10],
//       color: "#1A56DB",
//     },
   
//   ],
//   legend: {
//     show: false
//   },
//   stroke: {
//     curve: 'smooth'
//   },
//   xaxis: {
//     categories: categ,
//     labels: {
//       show: true,
//       style: {
//         fontFamily: "Inter, sans-serif",
//         cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
//       }
//     },
//     axisBorder: {
//       show: false,
//     },
//     axisTicks: {
//       show: false,
//     },
//   },
//   yaxis: {
//     show: false,
//   },
// }

if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("line-chart"), options);
  chart.render();
}


  