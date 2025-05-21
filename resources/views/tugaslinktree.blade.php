<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>O.TWO.O Linktree</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&family=Inter:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, #ffffff, #f4d1e9);
      text-align: center;
      font-family: 'DM Sans', sans-serif;
      padding: 20px 10px 60px 10px;
      color: #141212;
      margin: 0;
      font-size: 10px; 
    }

    .header {
      position: sticky;
      max-width: 600px;
      margin: auto;
      padding-top: 10px;
    }
    
    .menu-icon {
      position: sticky;
      top: 0;
      right: 0;
      background-color: #aaa;
      color: white;
      border-radius: 50%;
      width: 44px;
      height: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      margin-left: auto;
      margin-right: 10px;
      cursor: pointer;
    }

    .menu-icon:hover {
      background-color: #bdbdbd;
    }

    .profile-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 70%;
      margin: 10px auto 0px;
      background: #000;
    }

    h5 {
      font-weight: 700;
      font-size: 24px;
      margin: 8px auto 30px;
    }

    .link-container {
      max-width: 600px;
      margin: auto;
    }

    .link-item {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      margin: 12px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 9px 9px;
      position: relative;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .link-item:hover {
      transform: scale(1.01); 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
    }

    .link-item:active {
      transform: scale(0.985); 
    }


    .link-left {
      display: flex;
      align-items: center;
    }

    .link-left img {
      width: 50px;
      height: 50px;
    }

    .link-center {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-weight: 500;
      font-size: 16px;
      color: #f40b72;
      pointer-events: none;
    }

    .three-dots {
      font-size: 20px;
      color: #ed87b5;
      user-select: none;
    }

    .link-item:hover .three-dots {
      color: #d81b60; 
    }


    a.link-wrapper {
      text-decoration: none;
      color: inherit;
      display: block;
      width: 100%;
    }

    .linktree-footer {
      margin-top: 40px;
      text-align: center;
    }

    .small-link-button {
      display: inline-flex;
      align-items: center;
      gap: 15px;
      background-color: #faf9f9;
      color: #000;
      font-weight: 600;
      font-size: 16px;
      padding: 14px 12px;
      border-radius: 999px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .small-link-button:hover {
      background-color: #ffffff;
    }

    .link-logo {
      height: 16px;
      width: auto;
      vertical-align: middle;
    }
    .cookie-preferences {
      position: fixed;
      bottom: 0px;
      left: 5px;
      color: #857979;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 10px;
    }

    .cookie-preferences:hover {
      color: #080808;
    }
  </style>
</head>
<body>
  
  <div class="header">
    <div class="menu-icon">⋯</div>
    <img src="otwoo1.webp" alt="Profile" class="profile-img" />
    <h5>@otwoo_idn</h5>
  </div>

  <div class="link-container">
    <a href="http://wa.me/628119729200" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="whatsapp.jpeg" alt="WhatsApp" /></div>
        <div class="link-center">Cs O.TWO.O</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://s.lazada.co.id/s.NRPOL" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="lazada.webp" alt="Lazada" /></div>
        <div class="link-center">Lazada O.TWO.O Official</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://shope.ee/8KOKscvkEC" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="shopee1.webp" alt="Shopee" /></div>
        <div class="link-center">Shopee O.TWO.O Official</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://shopee.co.id/otwooshop.id" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="shopee2.webp" alt="Shopee Indo" /></div>
        <div class="link-center">Shopee O.TWO.O Indonesia Store</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://tokopedia.link/mKprxKKCcEb" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="tokopedia.webp" alt="Tokopedia" /></div>
        <div class="link-center">Tokopedia O.TWO.O Official</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://www.tiktok.com/@otwoo.id/" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="tiktok.webp" alt="Tiktok" /></div>
        <div class="link-center">Tiktok O.TWO.O Official</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://www.instagram.com/otwoo_id/" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="instagram.webp" alt="Instagram" /></div>
        <div class="link-center">Instagram O.TWO.O Official</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <a href="https://otwoo.id/" class="link-wrapper">
      <div class="link-item">
        <div class="link-left"><img src="otwoo2.webp" alt="Website" /></div>
        <div class="link-center">Website O.TWO.O Official</div>
        <div class="three-dots">⋮</div>
      </div>
    </a>

    <div class="linktree-footer">
      <a href="https://linktr.ee/?utm_source=linktree&amp;utm_medium=profile&amp;utm_campaign=footer_logo_cta&amp;utm_content=otwoo_idn" class="small-link-button" target="_blank">
        <img src="logo.jpg" alt="Logo" class="link-logo" />
        <span>Join otwoo_idn on Linktree</span>
      </a>
    </div>

  </div> 
  <div class="cookie-preferences">
    Cookie Preferences
  </div>
</body>
</html>
