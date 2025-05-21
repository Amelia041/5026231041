<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Latihan PWEB</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    body {
      display: flex;
      overflow-x: hidden;
      background-color: #f8f9fa;
    }

    #sidebar {
      width: 280px;
      background: #0d2f63;
      color: white;
      transition: all 0.3s;
      min-height: 100vh;
      padding: 20px;
      position: fixed;
      display: flex;
      flex-direction: column;
    }

    #sidebar .sidebar-header {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      margin-top: 50px;
    }

    #sidebar .sidebar-header img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }

    #sidebar .menu {
      margin-top: 6px;
    }

    #sidebar a {
      color: white;
      text-decoration: none;
      padding: 12px 15px;
      display: flex;
      align-items: center;
      border-radius: 5px;
      transition: 0.3s;
    }

    #sidebar a:hover,
    #sidebar a:focus {
      background: #092443;
    }

    #sidebar a i {
      margin-right: 10px;
    }

    .hidden-sidebar {
      margin-left: -280px;
    }

    .toggle-btn {
      position: absolute;
      top: 20px;
      left: 260px;
      background: #0d2f63;
      border: none;
      color: white;
      font-size: 24px;
      cursor: pointer;
      transition: left 0.3s;
    }

    .hidden-sidebar + .toggle-btn {
      left: 10px;
    }

    .sidebar-footer {
      margin-top: auto;
      padding-bottom: 50px;
      display: flex;
      justify-content: center;
    }

    .sidebar-footer a {
      font-size: 14px;
      padding: 8px 20px;
      color: white;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.2);
      border: none;
    }

    .sidebar-footer a:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    .main-content {
      flex: 1;
      margin-left: 280px;
      padding: 20px;
    }

    .info-table {
      width: 400px;
      border-collapse: collapse;
      text-align: center;
      margin-top: 1rem;
    }

    .info-table td {
      border: 1px solid #ddd;
      padding: 10px;
      width: 50%;
    }

    .info-table h3 {
      margin: 0;
      font-size: 24px;
      color: #111827;
    }

    .info-table p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #333;
    }

    .info-table i {
      color: #efc727;
      margin-right: 5px;
    }

    .biodata-table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .biodata-header {
      background-color: #e5e7eb;
      font-weight: bold;
      font-size: 20px;
      padding: 12px 16px;
      border-bottom: none;
    }

    .biodata-table td {
      padding: 12px 16px;
      font-size: 16px;
      border: 1px solid #ddd;
    }

    .biodata-table tr:first-child td {
      border: none;
      font-size: 18px;
    }

    .edit-button {
      margin-top: 20px;
      background-color: #0d2f63;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .image-section img {
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .image-sc img {
      margin-right: 10px;
      border-radius: 8px;
    }

    .job-title {
      font-size: 18px;
      color: #555;
    }
  </style>
</head>
    <body>
        <div id="sidebar">
          <button id="toggleSidebar" class="toggle-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <div class="sidebar-header">
            <img src="gambar.png" alt="Admin" />
            <div>
              <h5 class="mb-0">Admin</h5>
              <p class="mb-0" style="font-size: 0.8rem;">admin@mail.com</p>
            </div>
          </div>
      
          <div class="menu">
            <a href="#"><i class="fas fa-clipboard-list"></i> Helperlog</a>
            <a href="#"><i class="fas fa-search"></i> Helperfind</a>
          </div>
      
          <div class="sidebar-footer">
            <a href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
          </div>
        </div>
      
        <div class="main-content">
          <div class="detail-prt mb-3">
            <button
              id="toggleBtn1"
              class="btn btn-sm"
              style="top: 20px; left: 300px; z-index: 1050;"
            >
              <i class="fa fa-arrow-left mr-2"></i>
              <span style="font-weight: bold;">Detail PRT</span>
            </button>
          </div>
      
          
          <div class="row">
            <div class="col-md-6">
              <div class="image-section">
                <img src="gambarorang1.jpg" alt="Foto Utama" class="img-fluid mb-3 rounded" width="65%" />
                <div class="image-sc d-flex">
                  <img src="gambarorang2.jpg" class="img-fluid" width="90" />
                  <img src="gambarorang3.jpg" class="img-fluid" width="90" />
                  <img src="gambarorang4.jpg" class="img-fluid" width="90" />
                </div>
              </div>
            </div>
      
            <div class="col-md-5">
              <div class="profile-card">
                <h2>Nagisa Natsumi</h2>
                <p class="job-title">Perawat Lansia</p>
      
                <table class="info-table mb-4">
                  <tr>
                    <td>
                      <h3>4</h3>
                      <p>Tahun Pengalaman</p>
                    </td>
                    <td>
                      <h3><i class="far fa-star"></i> 4.6</h3>
                      <p>Rating</p>
                    </td>
                  </tr>
                </table>
            
                <div class="biodata-section">
                  <table class="biodata-table mb-3">
                    <tr>
                      <td colspan="2" class="biodata-header">Biodata</td>
                    </tr>
                    <tr><td>Keahlian 1</td><td>: Memasak</td></tr>
                    <tr><td>Keahlian 2</td><td>: Mencuci Baju</td></tr>
                    <tr><td>Keahlian 3</td><td>: Menyetir</td></tr>
                    <tr><td>Keahlian 4</td><td>: -</td></tr>
                  </table>
                </div>
      
                <button class="edit-button">Edit Data</button>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Script toggle -->
        <script>
          $(document).ready(function () {
            $("#toggleSidebar").click(function () {
              $("#sidebar").toggleClass("hidden-sidebar");
              $(".main-content").toggleClass("ml-0");
              let icon = $("#toggleSidebar i");
              icon.toggleClass("fa-chevron-left fa-chevron-right");
            });
          });
        </script>
      </body>
      
</html>
