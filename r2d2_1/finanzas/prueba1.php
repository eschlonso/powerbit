<div id="chart" style="width: 100%; height: 500px;"></div>
 
<script type="text/javascript">
 
    google.load("visualization", "1", {packages:["corechart"], callback:drawChart});
 
    function drawChart() {
        var jsonData = $.ajax({
            url: "generate_data.php",
            dataType:"json",
            async: false
            }).responseText;
 
        var options = {
            title: 'Your Chart Title'
        };
 
        var data = new google.visualization.DataTable(jsonData);
 
        var chart = new google.visualization.LineChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
</script>