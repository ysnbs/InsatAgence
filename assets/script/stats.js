const ticketData = [
  // 2023
  { year: 2023, month: 1, day: 1, from: "Tunis", to: "Paris", buy: 50, rest: 10 },
  { year: 2023, month: 1, day: 2, from: "Tunis", to: "Paris", buy: 30, rest: 20 },
  { year: 2023, month: 1, day: 1, from: "Tunis", to: "London", buy: 40, rest: 5 },
  { year: 2023, month: 2, day: 3, from: "Sfax", to: "Paris", buy: 20, rest: 15 },
  { year: 2023, month: 2, day: 4, from: "Sfax", to: "London", buy: 25, rest: 10 },
  { year: 2023, month: 3, day: 5, from: "Tunis", to: "Berlin", buy: 60, rest: 12 },
  { year: 2023, month: 3, day: 6, from: "Monastir", to: "Paris", buy: 45, rest: 5 },
  { year: 2023, month: 4, day: 7, from: "Tunis", to: "Rome", buy: 70, rest: 8 },
  { year: 2023, month: 5, day: 8, from: "Sousse", to: "Paris", buy: 55, rest: 15 },
  { year: 2023, month: 6, day: 9, from: "Tunis", to: "Madrid", buy: 65, rest: 20 },

  // 2024
  { year: 2024, month: 1, day: 1, from: "Tunis", to: "Paris", buy: 60, rest: 15 },
  { year: 2024, month: 1, day: 2, from: "Tunis", to: "London", buy: 35, rest: 10 },
  { year: 2024, month: 2, day: 3, from: "Sfax", to: "Paris", buy: 30, rest: 12 },
  { year: 2024, month: 2, day: 4, from: "Sfax", to: "London", buy: 28, rest: 8 },
  { year: 2024, month: 3, day: 5, from: "Tunis", to: "Berlin", buy: 50, rest: 15 },
  { year: 2024, month: 3, day: 6, from: "Monastir", to: "Paris", buy: 40, rest: 7 },
  { year: 2024, month: 4, day: 7, from: "Tunis", to: "Rome", buy: 72, rest: 9 },
  { year: 2024, month: 5, day: 8, from: "Sousse", to: "Paris", buy: 58, rest: 12 },
  { year: 2024, month: 6, day: 9, from: "Tunis", to: "Madrid", buy: 67, rest: 18 },

  // 2025
  { year: 2025, month: 1, day: 1, from: "Tunis", to: "Paris", buy: 55, rest: 10 },
  { year: 2025, month: 2, day: 2, from: "Tunis", to: "London", buy: 45, rest: 12 },
  { year: 2025, month: 2, day: 3, from: "Sfax", to: "Berlin", buy: 35, rest: 8 },
  { year: 2025, month: 3, day: 4, from: "Monastir", to: "Rome", buy: 60, rest: 15 },
  { year: 2025, month: 4, day: 5, from: "Tunis", to: "Madrid", buy: 70, rest: 20 },
  { year: 2025, month: 5, day: 6, from: "Sousse", to: "London", buy: 65, rest: 12 },
  { year: 2025, month: 6, day: 7, from: "Tunis", to: "Berlin", buy: 80, rest: 10 },
  { year: 2025, month: 7, day: 8, from: "Monastir", to: "Paris", buy: 45, rest: 5 },

  // 2026
  { year: 2026, month: 1, day: 1, from: "Tunis", to: "Paris", buy: 75, rest: 15 },
  { year: 2026, month: 2, day: 2, from: "Sfax", to: "London", buy: 50, rest: 20 },
  { year: 2026, month: 3, day: 3, from: "Tunis", to: "Rome", buy: 60, rest: 25 },
  { year: 2026, month: 4, day: 4, from: "Sousse", to: "Paris", buy: 70, rest: 30 },
  { year: 2026, month: 5, day: 5, from: "Monastir", to: "Madrid", buy: 55, rest: 10 },
  { year: 2026, month: 6, day: 6, from: "Tunis", to: "London", buy: 65, rest: 15 },
  { year: 2026, month: 7, day: 7, from: "Sfax", to: "Berlin", buy: 80, rest: 20 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "libya", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "alger", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "morocco", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "rabat", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "egypt", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "qatar", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "sausite", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "syria", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "denmark", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "norvege", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "usa", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "canada", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "japan", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "china", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "korea", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "emirate", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "kuwait", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "saudi", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "mexico", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "brasil", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "south africa", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "taiwan", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "frankfurt", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "berlin", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "ukraine", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "haungry", buy: 90, rest: 10 },
  { year: 2026, month: 8, day: 8, from: "Tunis", to: "poland", buy: 90, rest: 10 },
  { year: 2026, month: 1, day: 1, from: "Tunis", to: "Paris", buy: 90, rest: 10 },
  { year: 2026, month: 1, day: 2, from: "Tunis", to: "London", buy: 80, rest: 15 },
  { year: 2026, month: 1, day: 3, from: "Tunis", to: "Rome", buy: 70, rest: 20 },
  { year: 2026, month: 1, day: 4, from: "Tunis", to: "Berlin", buy: 60, rest: 25 },
  { year: 2026, month: 1, day: 5, from: "Tunis", to: "Madrid", buy: 50, rest: 30 },
  { year: 2026, month: 1, day: 6, from: "Tunis", to: "Lisbon", buy: 65, rest: 15 },
  { year: 2026, month: 1, day: 7, from: "Tunis", to: "Amsterdam", buy: 55, rest: 20 },
  { year: 2026, month: 1, day: 8, from: "Tunis", to: "Vienna", buy: 75, rest: 10 },
  { year: 2026, month: 1, day: 9, from: "Tunis", to: "Prague", buy: 85, rest: 5 },
  { year: 2026, month: 1, day: 10, from: "Tunis", to: "Barcelona", buy: 90, rest: 8 },

  { year: 2026, month: 2, day: 1, from: "Sfax", to: "Paris", buy: 60, rest: 20 },
  { year: 2026, month: 2, day: 2, from: "Sfax", to: "London", buy: 70, rest: 15 },
  { year: 2026, month: 2, day: 3, from: "Sfax", to: "Rome", buy: 50, rest: 25 },
  { year: 2026, month: 2, day: 4, from: "Sfax", to: "Berlin", buy: 80, rest: 10 },
  { year: 2026, month: 2, day: 5, from: "Sfax", to: "Madrid", buy: 65, rest: 20 },
  { year: 2026, month: 2, day: 6, from: "Sfax", to: "Lisbon", buy: 75, rest: 15 },
  { year: 2026, month: 2, day: 7, from: "Sfax", to: "Amsterdam", buy: 55, rest: 25 },
  { year: 2026, month: 2, day: 8, from: "Sfax", to: "Vienna", buy: 60, rest: 20 },
  { year: 2026, month: 2, day: 9, from: "Sfax", to: "Prague", buy: 70, rest: 10 },
  { year: 2026, month: 2, day: 10, from: "Sfax", to: "Barcelona", buy: 80, rest: 5 },

  { year: 2026, month: 3, day: 1, from: "Monastir", to: "Paris", buy: 90, rest: 10 },
  { year: 2026, month: 3, day: 2, from: "Monastir", to: "London", buy: 85, rest: 15 },
  { year: 2026, month: 3, day: 3, from: "Monastir", to: "Rome", buy: 80, rest: 20 },
  { year: 2026, month: 3, day: 4, from: "Monastir", to: "Berlin", buy: 75, rest: 25 },
  { year: 2026, month: 3, day: 5, from: "Monastir", to: "Madrid", buy: 70, rest: 30 },
  { year: 2026, month: 3, day: 6, from: "Monastir", to: "Lisbon", buy: 65, rest: 15 },
  { year: 2026, month: 3, day: 7, from: "Monastir", to: "Amsterdam", buy: 60, rest: 20 },
  { year: 2026, month: 3, day: 8, from: "Monastir", to: "Vienna", buy: 55, rest: 25 },
  { year: 2026, month: 3, day: 9, from: "Monastir", to: "Prague", buy: 50, rest: 30 },
  { year: 2026, month: 3, day: 10, from: "Monastir", to: "Barcelona", buy: 45, rest: 35 },

  { year: 2026, month: 4, day: 1, from: "Sousse", to: "Paris", buy: 60, rest: 10 },
  { year: 2026, month: 4, day: 2, from: "Sousse", to: "London", buy: 65, rest: 15 },
  { year: 2026, month: 4, day: 3, from: "Sousse", to: "Rome", buy: 70, rest: 20 },
  { year: 2026, month: 4, day: 4, from: "Sousse", to: "Berlin", buy: 75, rest: 25 },
  { year: 2026, month: 4, day: 5, from: "Sousse", to: "Madrid", buy: 80, rest: 30 },
  { year: 2026, month: 4, day: 6, from: "Sousse", to: "Lisbon", buy: 85, rest: 15 },
  { year: 2026, month: 4, day: 7, from: "Sousse", to: "Amsterdam", buy: 90, rest: 20 },
  { year: 2026, month: 4, day: 8, from: "Sousse", to: "Vienna", buy: 95, rest: 25 },
  { year: 2026, month: 4, day: 9, from: "Sousse", to: "Prague", buy: 100, rest: 30 },
  { year: 2026, month: 4, day: 10, from: "Sousse", to: "Barcelona", buy: 85, rest: 35 },

  { year: 2026, month: 5, day: 1, from: "Tozeur", to: "Paris", buy: 70, rest: 10 },
  { year: 2026, month: 5, day: 2, from: "Tozeur", to: "London", buy: 65, rest: 15 },
  { year: 2026, month: 5, day: 3, from: "Tozeur", to: "Rome", buy: 60, rest: 20 },
  { year: 2026, month: 5, day: 4, from: "Tozeur", to: "Berlin", buy: 55, rest: 25 },
  { year: 2026, month: 5, day: 5, from: "Tozeur", to: "Madrid", buy: 50, rest: 30 },
  { year: 2026, month: 5, day: 6, from: "Tozeur", to: "Lisbon", buy: 45, rest: 15 },
  { year: 2026, month: 5, day: 7, from: "Tozeur", to: "Amsterdam", buy: 40, rest: 20 },
  { year: 2026, month: 5, day: 8, from: "Tozeur", to: "Vienna", buy: 35, rest: 25 },
  { year: 2026, month: 5, day: 9, from: "Tozeur", to: "Prague", buy: 30, rest: 30 },
  { year: 2026, month: 5, day: 10, from: "Tozeur", to: "Barcelona", buy: 25, rest: 35 },

  { year: 2026, month: 6, day: 1, from: "Gabes", to: "Paris", buy: 50, rest: 10 },
  { year: 2026, month: 6, day: 2, from: "Gabes", to: "London", buy: 55, rest: 15 },
  { year: 2026, month: 6, day: 3, from: "Gabes", to: "Rome", buy: 60, rest: 20 },
  { year: 2026, month: 6, day: 4, from: "Gabes", to: "Berlin", buy: 65, rest: 25 },
  { year: 2026, month: 6, day: 5, from: "Gabes", to: "Madrid", buy: 70, rest: 30 },
  { year: 2026, month: 6, day: 6, from: "Gabes", to: "Lisbon", buy: 75, rest: 15 },
  { year: 2026, month: 6, day: 7, from: "Gabes", to: "Amsterdam", buy: 80, rest: 20 },
  { year: 2026, month: 6, day: 8, from: "Gabes", to: "Vienna", buy: 85, rest: 25 },
  { year: 2026, month: 6, day: 9, from: "Gabes", to: "Prague", buy: 90, rest: 30 },
  { year: 2026, month: 6, day: 10, from: "Gabes", to: "Barcelona", buy: 95, rest: 35 },

  { year: 2026, month: 7, day: 1, from: "Tunis", to: "Warsaw", buy: 60, rest: 15 },
  { year: 2026, month: 7, day: 2, from: "Tunis", to: "Oslo", buy: 65, rest: 20 },
  { year: 2026, month: 7, day: 3, from: "Tunis", to: "Athens", buy: 70, rest: 25 },
  { year: 2026, month: 7, day: 4, from: "Tunis", to: "Helsinki", buy: 75, rest: 10 },
  { year: 2026, month: 7, day: 5, from: "Tunis", to: "Stockholm", buy: 80, rest: 15 },
  { year: 2026, month: 7, day: 6, from: "Tunis", to: "Copenhagen", buy: 85, rest: 20 },
  { year: 2026, month: 7, day: 7, from: "Tunis", to: "Zurich", buy: 90, rest: 25 },
  { year: 2026, month: 7, day: 8, from: "Tunis", to: "Budapest", buy: 95, rest: 30 },
  { year: 2026, month: 7, day: 9, from: "Tunis", to: "Brussels", buy: 55, rest: 15 },
  { year: 2026, month: 7, day: 10, from: "Tunis", to: "Dublin", buy: 60, rest: 20 },
];


function getFilteredData(year, month, day, destination) {
  let filtered = ticketData;

  if (year) filtered = filtered.filter(d => d.year == year);
  if (month) filtered = filtered.filter(d => d.month == month);
  if (day) filtered = filtered.filter(d => d.day == day);
  if (destination) filtered = filtered.filter(d => d.to == destination);

  return filtered;
}
function prepareChartData(filtered, destination) {
  // Labels
  let labels;
  if (destination) {
    labels = [...new Set(filtered.map(d => d.from))]; // si une destination choisie => labels = from
  } else {
    labels = [...new Set(filtered.map(d => d.to))];   // sinon labels = to
  }

  const buyData = labels.map(l => filtered.filter(d => (destination ? d.from : d.to) === l)
                                       .reduce((sum, d) => sum + d.buy, 0));

  const restData = labels.map(l => filtered.filter(d => (destination ? d.from : d.to) === l)
                                        .reduce((sum, d) => sum + d.rest, 0));

  return { labels, buyData, restData };
}
const ctx5 = document.getElementById('ticketBarChart').getContext('2d');
let barChart;

function updateChart(year, month, day, destination) {
  const filtered = getFilteredData(year, month, day, destination);
  const { labels, buyData, restData } = prepareChartData(filtered, destination);

  const data = {
    labels: labels,
    datasets: [
      { label: 'Tickets Buy', data: buyData, backgroundColor: 'rgba(54, 162, 235, 0.7)' },
      { label: 'Tickets Rest', data: restData, backgroundColor: 'rgba(255, 99, 132, 0.7)' }
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      responsive: false, // important pour scroll
      maintainAspectRatio: false,
      plugins: {
        legend: { position: 'top' },
        title: { display: true, text: 'Tickets by Destination', font: { size: 18 } }
      }
    }
  };

  if (barChart) {
    barChart.data = data;
    barChart.update();
  } else {
    barChart = new Chart(ctx5, config);
  }
}
document.querySelectorAll('.filters select').forEach(sel => {
  sel.addEventListener('change', () => {
    const year = document.getElementById('filterYear').value;
    const month = document.getElementById('filterMonth').value;
    const day = document.getElementById('filterDay').value;
    const destination = document.getElementById('filterDestination').value;
    updateChart(year, month, day, destination);
  });
});

// Initial chart
updateChart(); // tous "all" au départ