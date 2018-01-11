$(document).ready(function(){
  $('.button-collapse').sideNav({
    menuWidth: 250,
    draggable: 'true'
  });
  $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 15,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false
  });
});
