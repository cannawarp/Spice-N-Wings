<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
        <title>SNW System</title>
  <style>
    .chart {
      width: 400px;
      height: 300px;
      border: 1px solid #ccc;
      margin: 20px;
      padding: 10px;
    }
    
    .bar {
      width: 0;
      height: 20px;
      background-color: #3498db;
      transition: width 0.5s;
    }
    
    .bar:hover {
      background-color: #2980b9;
    }
    
    .label {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="chart">
    <div class="bar" style="width: 80%;"></div>
    <div class="label">80%</div>
  </div>
  <div class="chart">
    <div class="bar" style="width: 60%;"></div>
    <div class="label">60%</div>
  </div>
  <div class="chart">
    <div class="bar" style="width: 40%;"></div>
    <div class="label">40%</div>
  </div>
</body>
</html>