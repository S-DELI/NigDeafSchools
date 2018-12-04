$(document).ready(function(){
$("#table").dataTable({
    ajax: "../data.php?table=get_schools",
    "columns": [
      {"data": "serial"},
      {"data": "name"},
      {"data": "address"},
      {"data": "type"},
      {"data": "ownership"},
      {"data": "level"},
      {"data": "state"}
    ],
    "lengthMenu": [[50, 100, 200], [50, 100, 200]]
  });

})
