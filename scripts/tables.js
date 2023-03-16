var ascending = true; // dichiarazione globale della variabile

function sortTable(col) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementsByTagName("table")[0];
  switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("td")[col];
      y = rows[i + 1].getElementsByTagName("td")[col];
      if (ascending && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      } else if (!ascending && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
  ascending = !ascending;
}