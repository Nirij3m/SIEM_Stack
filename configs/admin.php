<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Admin Panel</title>

  <style>
    :root{
      --bg: #f6f7f9;
      --card-bg: #ffffff;
      --text: #0f1724;
      --muted: #6b7280;
      --border: #e6e9ef;
    }

    html,body{
      height:100%;
      margin:0;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: var(--bg);
      color: var(--text);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    .wrap{
      min-height:100%;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:32px;
      box-sizing:border-box;
    }

    .card{
      width: min(780px, 94%);
      background: var(--card-bg);
      border-radius:8px;
      border: 1px solid var(--border);
      padding:36px 40px;
      box-shadow: 0 6px 20px rgba(15,23,36,0.04);
      display:flex;
      flex-direction:column;
      align-items:center;
      text-align:center;
    }

    h1 {
      margin:0;
      font-size: clamp(28px, 4.8vw, 40px);
      font-weight:600;
      letter-spacing:0.6px;
    }

    p {
      margin: 12px 0 0 0;
      color: var(--muted);
      font-size:14px;
    }

 
    .meta {
      margin-top:18px;
      font-size:12px;
      color: #9aa0ab;
    }

    @media (max-width:480px){
      .card { padding:20px; }
      h1 { font-size:22px; }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <main class="card" role="main" aria-labelledby="admin-title">
      <h1 id="admin-title">╔════════════════════════╗
║  w3b_fuzz1ng_m4st3r   ║
╚════════════════════════╝</h1>
      <p>You found the admin panel !</p>
      <div class="meta">Congrats</div>
    </main
