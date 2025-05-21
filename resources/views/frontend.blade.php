<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Frontend</title>
  <!-- Font Fredoka -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #6C63FF;       /* ungu lembut */
      --secondary: #FF85A1;     /* pink pastel */
      --bg: #fffafc;            /* putih pinkish */
      --text-dark: #333;
      --card-start: #f3f0ff;
      --card-end: #ffe6ef;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--card-start), var(--card-end));
      color: var(--text-dark);
      padding: 20px;
      background-attachment: fixed;
    }

    header {
      background: none;
      text-align: center;
      margin-bottom: 40px;
    }

    header h1 {
      font-size: 44px;
      font-weight: 700;
      color: var(--primary);
      letter-spacing: 1px;
      text-shadow: 1px 1px 2px rgba(108, 99, 255, 0.2);
      margin-bottom: 8px;
    }

    header p {
      font-size: 20px;
      color: var(--secondary);
      font-weight: 500;
      letter-spacing: 0.5px;
    }

    .container {
      display: grid;
      max-width: 1100px;
      margin: 0 auto;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 30px;
      animation: fadeIn 1s ease-in-out;
    }

    .card {
      background: linear-gradient(135deg, #e0e7ff, #fff0f5);
      border-radius: 20px;
      padding: 30px 20px;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none;
      color: var(--text-dark);
      position: relative;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .card h3 {
      font-size: 20px;
      font-weight: 600;
      margin-top: 10px;
      position: relative;
      z-index: 2;
    }

    .card::before {
      content: "📘";
      font-size: 40px;
      position: absolute;
      top: 20px;
      left: 20px;
      opacity: 0.08;
      z-index: 1;
    }
  </style>
</head>
<body>

  <header>
    <h1>Amelia Rusbandiyah</h1>
    <p>Pemrograman WEB</p>
  </header>

  <div class="container">
    <a href="pertama" class="card"><h3>Pertama</h3></a>
    <a href="bootstap1" class="card"><h3>Bootstrap</h3></a>
    <a href="latihankode2" class="card"><h3>Latihan Kode 2</h3></a>
    <a href="tugaslinktree" class="card"><h3>Tugas Linktree</h3></a>
    <a href="js1" class="card"><h3>JavaScript 1</h3></a>
    <a href="js2" class="card"><h3>JavaScript 2</h3></a>
    <a href="index" class="card"><h3>Index Halaman</h3></a>
    <a href="danone" class="card"><h3>Danone</h3></a>
  </div>

</body>
</html>
