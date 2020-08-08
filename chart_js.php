<script>

  /*$(document).ready(function(){

    load_data(1);

    function load_data(query = '')
    {
      $.ajax({
        url:"chart_search.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
          $('#piechart1').html(data);
        }
      });
    }


    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });*/




    var count_manu = ['<?php echo implode("','",$manufacturer);?>'];
    var quantity = ['<?php echo implode("','",$quantity);?>'];
    var color = ['<?php echo implode("','",$color);?>'];

    let myChart = document.getElementById('myChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily='Lato';
    Chart.defaults.global.defaultFontSize= 12;
    Chart.defaults.global.defaultFontColor= '#777';




    let massPopChart = new Chart(myChart,{
      type: 'pie', //bar,horizontalBar, pie, line, doughnut, radar, polarArea

      data: {
        labels: count_manu,
        datasets: [{
          label: 'Quantity of Cars Per Manufacturer',
          data: quantity,
          //backgroundColor: 'orange'

          backgroundColor: color,

          borderWidth: 2,
          //borderColor: '#777',
          hoverBorderWidth: 2,
          hoverBorderColor: '#000'
        }]
      },
      options: {
        title: {
          display: true,
          text: 'Quantity of Cars Per Manufacturer',
          fontSize: 14
        },
        
      }

    })
   
  </script>





<!-- <script>
    
$(document).ready(function(){

    $('#manufacturer').change(function(){
        var manufacturer = $(this).val();
        if(manufacturer != '')
        {
            load_monthwise_data(manufacturer, 'Month Wise Profit Data For');
        }
    });

});

</script> -->
