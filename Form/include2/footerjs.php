<!-- javascripts -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui-1.10.4.min.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="../js/fullcalendar.min.js"></script> 
    <!-- Full Google Calendar - Calendar -->
    <script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../js/calendar-custom.js"></script>
    <script src="../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js" ></script>
    <script src="../assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
    <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/xcharts.min.js"></script>
    <script src="../js/jquery.autosize.min.js"></script>
    <script src="../js/jquery.placeholder.min.js"></script>
    <script src="../js/gdp-data.js"></script>  
    <script src="../js/morris.min.js"></script>
    <script src="../js/sparklines.js"></script>  
    <script src="../js/charts.js"></script>
    <script src="../js/jquery.slimscroll.min.js"></script>
    <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
      $(function(){
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
        backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code){
            el.html(el.html()+' (GDP - '+gdpData[code]+')');
          }
        });
      });
      </script>


<!-- Datetime -->

<script src="../js/date/jquery.datetimepicker.js"></script>
<script>
    $('#datetimepicker').datetimepicker({
    formatTime:'H:m',
    formatDate:'dd/mm/Y',
    timepickerScrollbar:false
    });
    // $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

    // $('.some_class').datetimepicker();

    // $('#default_datetimepicker').datetimepicker({
    //   formatTime:'H:i',
    //   formatDate:'d.m.Y',
    //   //defaultDate:'8.12.1986', // it's my birthday
    //   defaultDate:'+03.01.1970', // it's my birthday
    //   defaultTime:'10:00',
    //   timepickerScrollbar:false
    // });

    // $('#datetimepicker10').datetimepicker({
    //   step:5,
    //   inline:true
    // });
    // $('#datetimepicker_mask').datetimepicker({
    //   mask:'9999/19/39 29:59'
    // });

    // $('#datetimepicker1').datetimepicker({
    //   datepicker:false,
    //   format:'H:i',
    //   step:5
    // });
    // $('#datetimepicker2').datetimepicker({
    //   yearOffset:222,
    //   lang:'ch',
    //   timepicker:false,
    //   format:'d/m/Y',
    //   formatDate:'Y/m/d',
    //   minDate:'-1970/01/02', // yesterday is minimum date
    //   maxDate:'+1970/01/02' // and tommorow is maximum date calendar
    // });
    // $('#datetimepicker3').datetimepicker({
    //   inline:true
    // });
    // $('#datetimepicker4').datetimepicker();
    // $('#open').click(function(){
    //   $('#datetimepicker4').datetimepicker('show');
    // });
    // $('#close').click(function(){
    //   $('#datetimepicker4').datetimepicker('hide');
    // });
    // $('#reset').click(function(){
    //   $('#datetimepicker4').datetimepicker('reset');
    // });
    // $('#datetimepicker5').datetimepicker({
    //   datepicker:false,
    //   allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
    //   step:5
    // });
    // $('#datetimepicker6').datetimepicker();
    // $('#destroy').click(function(){
    //   if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
    //     $('#datetimepicker6').datetimepicker('destroy');
    //     this.value = 'create';
    //   }else{
    //     $('#datetimepicker6').datetimepicker();
    //     this.value = 'destroy';
    //   }
    // });
    // var logic = function( currentDateTime ){
    //   if (currentDateTime && currentDateTime.getDay() == 6){
    //     this.setOptions({
    //       minTime:'11:00'
    //     });
    //   }else
    //     this.setOptions({
    //       minTime:'8:00'
    //     });
    // };
    // $('#datetimepicker7').datetimepicker({
    //   onChangeDateTime:logic,
    //   onShow:logic
    // });
    // $('#datetimepicker8').datetimepicker({
    //   onGenerate:function( ct ){
    //     $(this).find('.xdsoft_date')
    //       .toggleClass('xdsoft_disabled');
    //   },
    //   minDate:'-1970/01/2',
    //   maxDate:'+1970/01/2',
    //   timepicker:false
    // });
    // $('#datetimepicker9').datetimepicker({
    //   onGenerate:function( ct ){
    //     $(this).find('.xdsoft_date.xdsoft_weekend')
    //       .addClass('xdsoft_disabled');
    //   },
    //   weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
    //   timepicker:false
    // });
    // var dateToDisable = new Date();
    //   dateToDisable.setDate(dateToDisable.getDate() + 2);
    // $('#datetimepicker11').datetimepicker({
    //   beforeShowDay: function(date) {
    //     if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
    //       return [false, ""]
    //     }

    //     return [true, ""];
    //   }
    // });
    // $('#datetimepicker12').datetimepicker({
    //   beforeShowDay: function(date) {
    //     if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
    //       return [true, "custom-date-style"];
    //     }

    //     return [true, ""];
    //   }
    // });
    // $('#datetimepicker_dark').datetimepicker({theme:'dark'})
</script>