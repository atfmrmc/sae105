$(document).ready(function () {
  console.log("go");
  $("#ye_playlist").DataTable({
    language: {
      url: "http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json",
    },
    columnDefs: [
      {
        targets: [0, 1, 5, 6],
        className: "dt-body-center",
      },
    ],
  });
});
