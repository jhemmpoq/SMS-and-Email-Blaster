function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}



















// $(document).ready(function () {
//     $('#conGroup').DataTable({
//       "paging":false,
//       "searching":false,
//       "aaSorting": [],
//       columnDefs: [{
//       orderable: false,
//       targets: 3
//       }]
//     });
//     $('.dataTables_length').addClass('bs-select');
//   });


// // //   $('#myModal').on('shown.bs.modal', function () {
// // //     $('#myInput').trigger('focus')
// // //   })

// $(document).ready(function() {
//   var dataTable = $('#conGroup').DataTable ({
//     "pageLength":5,
//     'aoColumnsDefs':[{
//       'bSortable':false,
//     'aTargets':['nosort'],
//     }],
//     columnDefs:[
//       {type:'title-string', target:0}
//     ],
//     "order":false,
//     "bLengthChange":false,
//     "dom":'<"top">ct<"top"p><"clear">' 
//   });
//   $("#conGroup").keyup(function() {
//     dataTable.search(this.value).draw();
// });
  
// });
