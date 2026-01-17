<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Public Library Expansion Project</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #000;
      color: #fff;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #6a0dad, #9b4dff);
      padding: 25px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 32px;
    }

    header p {
      margin-top: 8px;
      font-size: 16px;
      opacity: 0.9;
    }

    /* Main content */
    .container {
      padding: 25px;
      max-width: 1000px;
      margin: auto;
    }

    .card {
      background-color: #111;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 0 20px rgba(155, 77, 255, 0.25);
    }

    h2 {
      color: #9b4dff;
      margin-bottom: 15px;
    }

    /* Table */
    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 10px;
    }

    th {
      background-color: #6a0dad;
      padding: 12px;
      text-align: left;
    }

    td {
      background-color: #1a1a1a;
      padding: 12px;
      border-bottom: 1px solid #333;
    }

    tr:hover td {
      background-color: #262626;
    }

    .total-row td {
      font-weight: bold;
      color: #9b4dff;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #aaa;
    }
  </style>
</head>

<body>

  <header>
    <h1>Public Library Expansion Project</h1>
    <p>Cost Estimates</p>
  </header>

  <div class="container">
    <div class="card">
      <h2>Project Expenses</h2>

      <table>
        <tr>
          <th>Expenditures</th>
          <th>Estimated Cost</th>
          <th>10% Increase</th>
          <th>15% Increase</th>
        </tr>

        <tr>
          <td>Construction</td>
          <td>$500,000</td>
          <td>$550,000</td>
          <td>$575,000</td>
        </tr>

        <tr>
          <td>Furniture</td>
          <td>$80,000</td>
          <td>$88,000</td>
          <td>$92,000</td>
        </tr>

        <tr>
          <td>Technology</td>
          <td>$120,000</td>
          <td>$132,000</td>
          <td>$138,000</td>
        </tr>

        <tr class="total-row">
          <td>Total Expenditures</td>
          <td>$700,000</td>
          <td>$770,000</td>
          <td>$805,000</td>
        </tr>
      </table>
    </div>
  </div>

  <footer>
    Created by: Orquin
  </footer>

</body>
</html>
