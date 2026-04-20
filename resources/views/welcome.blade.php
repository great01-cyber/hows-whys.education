
<style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap');
  *{box-sizing:border-box;margin:0;padding:0}
  :root{
    --ink:#0f1117;
    --muted:#5a6272;
    --line:#e2e5ec;
    --surface:#f7f8fb;
    --accent:#1a56db;
    --accent-light:#e8effd;
    --green:#1a7f4b;
    --green-light:#e8f5ee;
    --white:#ffffff;
  }
  body{font-family:'DM Sans',sans-serif;color:var(--ink);background:#fff;font-size:16px;line-height:1.6}
  .serif{font-family:'DM Serif Display',serif}

  /* NAV */
  nav{position:sticky;top:0;z-index:100;background:#fff;border-bottom:0.5px solid var(--line);padding:0 2rem;display:flex;align-items:center;justify-content:space-between;height:60px}
  .logo{font-family:'DM Serif Display',serif;font-size:20px;letter-spacing:-0.3px;color:var(--ink)}
  .logo span{color:var(--accent)}
  nav ul{list-style:none;display:flex;gap:2rem}
  nav ul a{text-decoration:none;font-size:14px;color:var(--muted);font-weight:400}
  nav ul a:hover{color:var(--ink)}
  .nav-btn{background:var(--ink);color:#fff;border:none;padding:8px 18px;border-radius:6px;font-size:13px;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif}

  /* SECTIONS */
  section{padding:80px 2rem;max-width:960px;margin:0 auto}
  .full-bleed{max-width:100%;padding-left:0;padding-right:0}
  .full-bleed-inner{max-width:960px;margin:0 auto;padding:0 2rem}

  /* HERO */
  .hero{padding:100px 2rem 80px;text-align:center;max-width:800px;margin:0 auto}
  .hero-kicker{display:inline-block;font-size:12px;letter-spacing:1.2px;text-transform:uppercase;color:var(--accent);font-weight:500;margin-bottom:20px;border:0.5px solid var(--accent);padding:4px 12px;border-radius:100px}
  .hero h1{font-family:'DM Serif Display',serif;font-size:clamp(36px,5vw,58px);line-height:1.12;letter-spacing:-0.5px;margin-bottom:24px;color:var(--ink)}
  .hero h1 em{font-style:italic;color:var(--accent)}
  .hero p{font-size:18px;color:var(--muted);max-width:580px;margin:0 auto 36px;font-weight:300;line-height:1.7}
  .btn-row{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
  .btn-primary{background:var(--ink);color:#fff;border:none;padding:13px 28px;border-radius:7px;font-size:15px;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif}
  .btn-secondary{background:#fff;color:var(--ink);border:1px solid var(--line);padding:13px 28px;border-radius:7px;font-size:15px;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif}
  .hero-visual{margin-top:56px;background:var(--surface);border:0.5px solid var(--line);border-radius:12px;padding:32px;display:grid;grid-template-columns:1fr 1fr;gap:20px}

  /* MOCK STUDENT CARD */
  .student-card{background:#fff;border:0.5px solid var(--line);border-radius:8px;padding:20px;text-align:left}
  .card-label{font-size:11px;letter-spacing:0.8px;text-transform:uppercase;color:var(--muted);margin-bottom:8px}
  .card-question{font-size:14px;font-weight:500;color:var(--ink);margin-bottom:12px}
  .card-answer{font-size:13px;color:#444;line-height:1.6;background:var(--surface);padding:10px 12px;border-radius:6px;border-left:2px solid var(--accent)}
  .card-tag{display:inline-block;margin-top:10px;font-size:11px;background:var(--accent-light);color:var(--accent);padding:3px 10px;border-radius:100px}

  /* MOCK DASHBOARD */
  .dash-card{background:#fff;border:0.5px solid var(--line);border-radius:8px;padding:20px;text-align:left}
  .dash-title{font-size:13px;font-weight:500;margin-bottom:14px}
  .heat-row{display:flex;align-items:center;gap:8px;margin-bottom:8px;font-size:12px}
  .heat-bar-wrap{flex:1;background:var(--surface);border-radius:3px;height:8px;overflow:hidden}
  .heat-bar{height:100%;border-radius:3px}
  .heat-name{min-width:120px;color:var(--muted)}
  .heat-val{min-width:28px;text-align:right;color:var(--ink);font-weight:500}

  /* 3-BLOCK SECTION */
  .blocks{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
  .block{border:0.5px solid var(--line);border-radius:10px;padding:28px}
  .block-icon{width:40px;height:40px;border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:16px;font-size:18px}
  .block-icon.blue{background:var(--accent-light)}
  .block-icon.green{background:var(--green-light)}
  .block-icon.amber{background:#fef3e2}
  .block h3{font-size:15px;font-weight:500;margin-bottom:8px}
  .block p{font-size:14px;color:var(--muted);line-height:1.6}
  .block-num{font-family:'DM Serif Display',serif;font-size:36px;color:var(--line);line-height:1;margin-bottom:8px}

  /* SECTION LABELS */
  .section-kicker{font-size:11px;letter-spacing:1.2px;text-transform:uppercase;color:var(--accent);font-weight:500;margin-bottom:12px}
  .section-headline{font-family:'DM Serif Display',serif;font-size:clamp(28px,3.5vw,40px);line-height:1.15;letter-spacing:-0.3px;margin-bottom:16px}
  .section-sub{font-size:17px;color:var(--muted);font-weight:300;line-height:1.7;max-width:560px;margin-bottom:40px}

  /* TRUST POINTS */
  .trust-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
  .trust-item{padding:28px;background:var(--surface);border-radius:10px}
  .trust-item h4{font-size:15px;font-weight:500;margin-bottom:8px}
  .trust-item p{font-size:14px;color:var(--muted);line-height:1.6}
  .trust-source{display:inline-block;margin-top:12px;font-size:11px;color:var(--muted);border-top:0.5px solid var(--line);padding-top:8px;width:100%}

  /* TABLE */
  .curr-table{width:100%;border-collapse:collapse;font-size:14px}
  .curr-table th{text-align:left;font-size:11px;letter-spacing:0.8px;text-transform:uppercase;color:var(--muted);font-weight:500;padding:10px 16px;border-bottom:0.5px solid var(--line)}
  .curr-table td{padding:14px 16px;border-bottom:0.5px solid var(--line);color:var(--ink);vertical-align:top}
  .curr-table tr:last-child td{border-bottom:none}
  .ks-badge{display:inline-block;font-size:11px;font-weight:500;padding:2px 8px;border-radius:100px}
  .ks2{background:#e8effd;color:var(--accent)}
  .ks3{background:var(--green-light);color:var(--green)}

  /* PILOT */
  .pilot-wrap{background:var(--ink);border-radius:14px;padding:56px;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
  .pilot-wrap h2{font-family:'DM Serif Display',serif;font-size:clamp(26px,3vw,38px);line-height:1.2;color:#fff;margin-bottom:16px}
  .pilot-wrap p{font-size:16px;color:rgba(255,255,255,0.65);font-weight:300;line-height:1.7;margin-bottom:0}
  .pilot-features{display:flex;flex-direction:column;gap:14px}
  .pilot-feat{display:flex;align-items:flex-start;gap:12px}
  .feat-check{width:20px;height:20px;border-radius:50%;background:rgba(255,255,255,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px}
  .feat-check svg{width:10px;height:10px;stroke:#fff;fill:none;stroke-width:2.5}
  .pilot-feat span{font-size:14px;color:rgba(255,255,255,0.75)}
  .btn-white{background:#fff;color:var(--ink);border:none;padding:13px 28px;border-radius:7px;font-size:15px;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif;margin-top:28px;display:inline-block}

  /* ABOUT */
  .about-grid{display:grid;grid-template-columns:200px 1fr;gap:48px;align-items:start}
  .about-avatar{width:160px;height:160px;border-radius:10px;background:var(--accent-light);display:flex;align-items:center;justify-content:center;font-family:'DM Serif Display',serif;font-size:48px;color:var(--accent);border:0.5px solid var(--line)}
  .about-content h3{font-family:'DM Serif Display',serif;font-size:28px;margin-bottom:4px}
  .about-role{font-size:14px;color:var(--muted);margin-bottom:20px}
  .about-content p{font-size:15px;color:var(--muted);line-height:1.7;margin-bottom:16px}
  .about-tags{display:flex;flex-wrap:wrap;gap:8px}
  .tag{font-size:12px;border:0.5px solid var(--line);padding:4px 12px;border-radius:100px;color:var(--muted)}

  /* CONTACT */
  .contact-form{display:grid;gap:14px;max-width:540px}
  .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
  .contact-form input,.contact-form textarea{width:100%;border:0.5px solid var(--line);border-radius:7px;padding:12px 14px;font-size:14px;font-family:'DM Sans',sans-serif;color:var(--ink);background:#fff;outline:none}
  .contact-form input:focus,.contact-form textarea:focus{border-color:var(--accent)}
  .contact-form textarea{resize:vertical;min-height:100px}
  .gdpr-note{font-size:12px;color:var(--muted);margin-top:4px}

  /* DIVIDER */
  .divider{border:none;border-top:0.5px solid var(--line);margin:0}

  /* DASHBOARD PREVIEW */
  .dash-preview{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:40px}
  .progress-bar-wrap{margin-top:8px}
  .mini-label{font-size:11px;color:var(--muted);margin-bottom:4px}
  .pbar{height:6px;background:var(--surface);border-radius:3px;overflow:hidden;margin-bottom:10px}
  .pbar-fill{height:100%;border-radius:3px;background:var(--accent)}
  .pbar-fill.g{background:var(--green)}
  .pbar-fill.a{background:#e59f0a}
  .sample-card{background:var(--surface);border-radius:8px;padding:16px;border:0.5px solid var(--line)}
  .sample-q{font-size:12px;color:var(--muted);margin-bottom:6px}
  .sample-a{font-size:13px;color:var(--ink);line-height:1.5;padding:10px;background:#fff;border-radius:5px;border:0.5px solid var(--line)}
  .feedback-tag{display:inline-block;margin-top:8px;font-size:11px;padding:3px 8px;border-radius:100px}
  .feedback-tag.miss{background:#fef3e2;color:#8a5b00}
  .feedback-tag.good{background:var(--green-light);color:var(--green)}
  @media(max-width:700px){
    .hero-visual,.blocks,.trust-grid,.dash-preview,.pilot-wrap,.about-grid{grid-template-columns:1fr}
    .form-row{grid-template-columns:1fr}
  }
</style>

<!-- NAV -->
<nav>
  <div class="logo">Hows <span>&</span> Whys</div>
  <ul>
    <li><a href="#">How it works</a></li>
    <li><a href="#">Research</a></li>
    <li><a href="#">Curriculum</a></li>
    <li><a href="#">About</a></li>
  </ul>
  <button class="nav-btn">Request a Pilot</button>
</nav>

<!-- HERO -->
<div class="hero">
  <span class="hero-kicker">UK Curriculum · KS2–KS3</span>
  <h1>Teach students to explain their thinking — not just <em>memorise facts</em></h1>
  <p>A reasoning-first learning tool that helps students answer how and why questions, and gives teachers clear insight into misconceptions.</p>
  <div class="btn-row">
    <button class="btn-primary">Request a School Pilot</button>
    <button class="btn-secondary">See How It Works</button>
  </div>
  <div class="hero-visual">
    <div class="student-card">
      <div class="card-label">Student response · KS3 Biology</div>
      <div class="card-question">Why do plants need sunlight to make food?</div>
      <div class="card-answer">"Plants use sunlight to power the reactions inside the leaf that turn water and carbon dioxide into glucose."</div>
      <span class="card-tag">Reasoning identified</span>
    </div>
    <div class="dash-card">
      <div class="dash-title">Class misconceptions — Year 8</div>
      <div class="heat-row">
        <span class="heat-name">Photosynthesis</span>
        <div class="heat-bar-wrap"><div class="heat-bar" style="width:72%;background:#e24b4a"></div></div>
        <span class="heat-val">72%</span>
      </div>
      <div class="heat-row">
        <span class="heat-name">Energy transfer</span>
        <div class="heat-bar-wrap"><div class="heat-bar" style="width:48%;background:#e59f0a"></div></div>
        <span class="heat-val">48%</span>
      </div>
      <div class="heat-row">
        <span class="heat-name">Cell structure</span>
        <div class="heat-bar-wrap"><div class="heat-bar" style="width:21%;background:#1a7f4b"></div></div>
        <span class="heat-val">21%</span>
      </div>
      <div style="font-size:11px;color:var(--muted);margin-top:12px">% of students with incomplete explanations</div>
    </div>
  </div>
</div>

<hr class="divider">

<!-- HOW IT WORKS -->
<section>
  <div class="section-kicker">How it works</div>
  <div class="section-headline">Three simple steps</div>
  <div class="blocks">
    <div class="block">
      <div class="block-num">01</div>
      <div class="block-icon blue" style="font-size:20px">✏️</div>
      <h3>Students explain</h3>
      <p>"How" and "why" questions aligned with the UK national curriculum — written by students in their own words.</p>
    </div>
    <div class="block">
      <div class="block-num">02</div>
      <div class="block-icon amber" style="font-size:20px">🔍</div>
      <h3>AI analyses reasoning</h3>
      <p>Identifies misconceptions, missing steps, and shallow explanations — without grading or replacing teacher judgement.</p>
    </div>
    <div class="block">
      <div class="block-num">03</div>
      <div class="block-icon green" style="font-size:20px">📊</div>
      <h3>Teachers see insights</h3>
      <p>A clear dashboard shows reasoning quality, common gaps, and individual progress over time.</p>
    </div>
  </div>
</section>

<hr class="divider">

<!-- WHY REASONING MATTERS -->
<section>
  <div class="section-kicker">The research case</div>
  <div class="section-headline">Why reasoning matters</div>
  <div class="section-sub">Hows & Whys is grounded in education research — not AI hype.</div>
  <div class="trust-grid">
    <div class="trust-item">
      <h4>Ofsted's deep learning agenda</h4>
      <p>Ofsted's inspection framework emphasises conceptual understanding and the ability to explain — not surface recall.</p>
      <span class="trust-source">Ofsted Education Inspection Framework</span>
    </div>
    <div class="trust-item">
      <h4>Examiner reports flag explanation</h4>
      <p>KS2 and GCSE examiner reports consistently identify students' inability to explain their reasoning as a core deficit.</p>
      <span class="trust-source">AQA & Pearson Examiner Reports</span>
    </div>
    <div class="trust-item">
      <h4>Self-explanation theory</h4>
      <p>Research from Chi et al. shows that self-explanation during learning significantly improves long-term retention and transfer.</p>
      <span class="trust-source">Chi, de Leeuw, Chiu & LaVancher (1994)</span>
    </div>
  </div>
</section>

<hr class="divider">

<!-- CURRICULUM ALIGNMENT -->
<section>
  <div class="section-kicker">Curriculum alignment</div>
  <div class="section-headline">Built around what you already teach</div>
  <div class="section-sub">Questions are mapped to the UK national curriculum — ready to use alongside your existing scheme of work.</div>
  <table class="curr-table">
    <thead>
      <tr>
        <th>Topic</th>
        <th>How question</th>
        <th>Why question</th>
        <th>Key Stage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>Photosynthesis</strong></td>
        <td>How do plants make their own food?</td>
        <td>Why do plants need sunlight for this process?</td>
        <td><span class="ks-badge ks3">KS3 Biology</span></td>
      </tr>
      <tr>
        <td><strong>Fractions</strong></td>
        <td>How do we add fractions with different denominators?</td>
        <td>Why must denominators match before adding?</td>
        <td><span class="ks-badge ks2">KS2 Maths</span></td>
      </tr>
      <tr>
        <td><strong>Forces</strong></td>
        <td>How does friction slow a moving object?</td>
        <td>Why do heavier objects not always fall faster?</td>
        <td><span class="ks-badge ks3">KS3 Physics</span></td>
      </tr>
      <tr>
        <td><strong>The Water Cycle</strong></td>
        <td>How does water move between the sea and the clouds?</td>
        <td>Why does water evaporate more quickly on a warm day?</td>
        <td><span class="ks-badge ks2">KS2 Geography</span></td>
      </tr>
      <tr>
        <td><strong>WW2 Causes</strong></td>
        <td>How did the Treaty of Versailles contribute to unrest?</td>
        <td>Why did appeasement fail to prevent war?</td>
        <td><span class="ks-badge ks3">KS3 History</span></td>
      </tr>
    </tbody>
  </table>
</section>

<hr class="divider">

<!-- DASHBOARD PREVIEW -->
<section>
  <div class="section-kicker">Teacher dashboard</div>
  <div class="section-headline">Clear insight, no extra workload</div>
  <div class="section-sub">Designed for teachers who are already stretched thin. Everything at a glance.</div>
  <div class="dash-preview">
    <div class="dash-card">
      <div class="dash-title">Reasoning progress — Class 8B</div>
      <div class="progress-bar-wrap">
        <div class="mini-label">Strong explanations <strong>34%</strong></div>
        <div class="pbar"><div class="pbar-fill g" style="width:34%"></div></div>
        <div class="mini-label">Partial explanations <strong>51%</strong></div>
        <div class="pbar"><div class="pbar-fill a" style="width:51%"></div></div>
        <div class="mini-label">Incomplete explanations <strong>15%</strong></div>
        <div class="pbar"><div class="pbar-fill" style="width:15%;background:#e24b4a"></div></div>
      </div>
      <div style="font-size:11px;color:var(--muted);margin-top:8px">Based on 28 student responses · Photosynthesis unit</div>
    </div>
    <div>
      <div class="sample-card" style="margin-bottom:14px">
        <div class="sample-q">Why do plants need sunlight?</div>
        <div class="sample-a">"Because photosynthesis needs it and without it plants die."</div>
        <span class="feedback-tag miss">Missing: mechanism not explained</span>
      </div>
      <div class="sample-card">
        <div class="sample-q">Why do plants need sunlight?</div>
        <div class="sample-a">"Sunlight provides the energy that powers the chemical reaction converting CO₂ and water into glucose."</div>
        <span class="feedback-tag good">Strong causal reasoning</span>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- PILOT -->
<section style="padding-top:60px;padding-bottom:60px">
  <div class="pilot-wrap">
    <div>
      <div style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.45);margin-bottom:14px;font-weight:500">Free pilot programme</div>
      <h2>Try Hows & Whys in your school for 4–6 weeks</h2>
      <p>No cost. No commitment. Minimal setup. We handle the rest.</p>
      <button class="btn-white">Request a Pilot</button>
    </div>
    <div class="pilot-features">
      <div class="pilot-feat">
        <div class="feat-check"><svg viewBox="0 0 12 12"><polyline points="2,6 5,9 10,3"/></svg></div>
        <span>Free for 1–2 classes, no cost to the school</span>
      </div>
      <div class="pilot-feat">
        <div class="feat-check"><svg viewBox="0 0 12 12"><polyline points="2,6 5,9 10,3"/></svg></div>
        <span>Teacher training and onboarding included</span>
      </div>
      <div class="pilot-feat">
        <div class="feat-check"><svg viewBox="0 0 12 12"><polyline points="2,6 5,9 10,3"/></svg></div>
        <span>GDPR compliant and data-safe by design</span>
      </div>
      <div class="pilot-feat">
        <div class="feat-check"><svg viewBox="0 0 12 12"><polyline points="2,6 5,9 10,3"/></svg></div>
        <span>End-of-pilot report with your class data</span>
      </div>
      <div class="pilot-feat">
        <div class="feat-check"><svg viewBox="0 0 12 12"><polyline points="2,6 5,9 10,3"/></svg></div>
        <span>No technical setup required from your IT team</span>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ABOUT -->
<section>
  <div class="section-kicker">About</div>
  <div class="about-grid">
    <div class="about-avatar">UJ</div>
    <div class="about-content">
      <h3>Ujah Obinna John</h3>
      <div class="about-role">Builder · Sheffield, UK</div>
      <p>I'm an engineer with an MSc in Advanced Engineering & Management and a deep interest in cognitive science and how people learn. I built Hows & Whys because I believe the most important skill we can teach students isn't what to think — it's how to explain their thinking.</p>
      <p>The tool is designed specifically for the UK curriculum and shaped by research in self-explanation theory and formative assessment.</p>
      <div class="about-tags">
        <span class="tag">MSc Advanced Engineering & Management</span>
        <span class="tag">Cognitive science & reasoning</span>
        <span class="tag">UK education</span>
        <span class="tag">Sheffield</span>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- CONTACT -->
<section>
  <div class="section-kicker">Get in touch</div>
  <div class="section-headline">Request a pilot or ask a question</div>
  <div class="section-sub">We respond within one working day.</div>
  <div class="contact-form">
    <div class="form-row">
      <input type="text" placeholder="Your name">
      <input type="text" placeholder="School name">
    </div>
    <input type="email" placeholder="Email address">
    <textarea placeholder="Tell us about your school and what you're hoping to achieve"></textarea>
    <div>
      <button class="btn-primary" style="width:100%">Send message</button>
      <div class="gdpr-note">Your data is handled in line with GDPR and used only to respond to your enquiry.</div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<div style="border-top:0.5px solid var(--line);padding:24px 2rem;display:flex;justify-content:space-between;align-items:center;font-size:13px;color:var(--muted)">
  <span class="logo" style="font-size:16px">Hows <span style="color:var(--accent)">&</span> Whys</span>
  <span>© 2025 · Sheffield, UK · GDPR compliant</span>
</div>
