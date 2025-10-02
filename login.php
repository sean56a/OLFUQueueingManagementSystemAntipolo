<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login — OLFU Queueing</title>

  <!-- Simple, self-contained styling (still HTML file) -->

  <style>   
    :root{
      --bg:#f4f7fb;
      --card:#ffffff;
      --accent:#2563eb; /* blue */
      --muted:#6b7280;
      --danger:#ef4444;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", sans-serif;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    html,body{
      height:100%;
      margin:0;
      background: linear-gradient(180deg, var(--bg), #eef2ff 60%);
      color:#111827;
    }

    .center {
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:24px;
    }

    .card {
      width:100%;
      max-width:420px;
      background:var(--card);
      border-radius:12px;
      box-shadow: 0 10px 30px rgba(2,6,23,0.08);
      padding:28px;
      box-sizing:border-box;
    }

    h1 {
      margin:0 0 8px 0;
      font-size:20px;
      letter-spacing: -0.2px;
    }

    p.lead {
      margin:0 0 20px 0;
      color:var(--muted);
      font-size:14px;
    }

    form {
      display:flex;
      flex-direction:column;
      gap:12px;
    }

    label {
      font-size:13px;
      margin-bottom:6px;
      display:block;
      color:#111827;
    }

    .field {
      display:flex;
      flex-direction:column;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      padding:12px 14px;
      border:1px solid #e6e9ef;
      border-radius:8px;
      font-size:14px;
      outline: none;
      transition: box-shadow .12s, border-color .12s;
      background: #fbfdff;
    }

    input:focus {
      border-color: var(--accent);
      box-shadow: 0 6px 18px rgba(37,99,235,0.08);
    }

    .row {
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:12px;
      font-size:13px;
    }

    .checkbox {
      display:flex;
      align-items:center;
      gap:8px;
    }

    .submit {
      margin-top:8px;
      padding:12px 14px;
      font-size:15px;
      border-radius:10px;
      border:0;
      cursor:pointer;
      background:var(--accent);
      color:#fff;
    }

    .submit:active { transform: translateY(1px); }

    .meta {
      text-align:center;
      margin-top:14px;
      font-size:13px;
      color:var(--muted);
    }

    a.link {
      color:var(--accent);
      text-decoration:none;
    }

    .note {
      font-size:12px;
      color:var(--muted);
    }

    /* Responsive */
    @media (max-width:460px){
      .card { padding:18px; border-radius:10px; }
      h1 { font-size:18px; }
    }

    /* Lightweight visual hint for form errors using HTML validity (no JS) */
    input:invalid {
      border-color: var(--danger);
      box-shadow: 0 6px 18px rgba(239,68,68,0.06);
    }
  </style>

</head>
<body>
  <main class="center" role="main">
    <section class="card" aria-labelledby="login-heading">
      <header>
        <h1 id="login-heading">Sign in to your account</h1>
        <p class="lead">Enter your credentials to access the OLFU Queueing Management System.</p>
      </header>

```
  <!-- HTML-only form: uses HTML5 validation attributes -->
  <form action="#" method="post" novalidate>
    <!-- You can change the input type to "email" if you require email-only logins -->
    <div class="field">
      <label for="username">Username or Email</label>
      <input
        id="username"
        name="username"
        type="text"
        inputmode="email"
        autocomplete="username"
        placeholder="e.g. jerry.perez or jerry@example.com"
        required
        minlength="3"
        aria-describedby="username-help"
      />
      <div id="username-help" class="note">Use your school username or email.</div>
    </div>

    <div class="field">
      <label for="password">Password</label>
      <input
        id="password"
        name="password"
        type="password"
        autocomplete="current-password"
        placeholder="Your secure password"
        required
        minlength="6"
        aria-describedby="pwd-help"
      />
      <div id="pwd-help" class="note">Minimum 6 characters.</div>
    </div>

    <div class="row">
      <label class="checkbox">
        <input type="checkbox" name="remember" id="remember" />
        <span>Remember me</span>
      </label>

      <div>
        <a class="link" href="#" aria-label="Forgot password">Forgot password?</a>
      </div>
    </div>

    <button type="submit" class="submit">Sign in</button>
  </form>

  <div class="meta">
    <p class="note">Don't have an account? <a class="link" href="#">Create account</a></p>
  </div>
</section>
```

  </main>
</body>
</html>
