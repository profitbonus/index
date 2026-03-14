<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIChatForLawyers | Premier AI Intake</title>
<script src="https://www.aichatforlawyers.com/app/chat-widget.js?e=993" async></script>
    <style>
        :root {
            --primary: #0f172a; 
            --accent: #2563eb;  
            /* Luxury Gold Metallic Gradient */
            --gold: linear-gradient(135deg, #f5d17e 0%, #e4a22d 25%, #fce99d 50%, #d49215 75%, #f5d17e 100%);
            --bg-gradient: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            --bot-msg: #ffffff;
            --user-msg: #2563eb;
            --text-main: #334155;
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: var(--bg-gradient);
            margin: 0;
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* EXTRAVAGANT NAVIGATION */
        nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 30px rgba(0,0,0,0.07);
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255,255,255,0.3);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            transition: transform 0.2s ease;
        }

        .logo-container:hover { transform: scale(1.02); }

        /* THE EXTRAVAGANT ICON */
        .icon-crest {
            width: 50px;
            height: 50px;
            background: var(--primary);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border: 2px solid transparent;
            background-clip: padding-box;
        }

        .icon-crest::before {
            content: '';
            position: absolute;
            inset: -2px;
            z-index: -1;
            background: var(--gold);
            border-radius: 16px;
        }

        .logo-text-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo-top {
            font-size: 1.6rem;
            font-weight: 900;
            letter-spacing: -1px;
            color: var(--primary);
            margin: 0;
            line-height: 0.9;
        }

        .logo-top span {
            background: var(--gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h1 span {
            background: var(--gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


        .logo-bottom {
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #64748b;
            margin-top: 4px;
        }

        .buy-now-btn {
            background: var(--primary);
            color: white;
            padding: 12px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 800;
            font-size: 0.9rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .buy-now-btn:hover {
            transform: translateY(-2px);
            background: var(--accent);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
        }

        /* HERO AREA */
        .hero-section {
            margin: 110px auto 30px;
            max-width: 1200px;
            width: 92%;
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 50px;
            align-items: center;
            flex-grow: 1;

        }

        h1 {
            font-size: 3.8rem;
            color: var(--primary);
            line-height: 1;
            margin: 0 0 20px 0;
            letter-spacing: -2px;
        }

        p.sub-lead {
            font-size: 1.3rem;
            color: #475569;
            margin-bottom: 25px;
            max-width: 500px;
        }

        .features {
            list-style: none;
            padding: 0;
        }

        .features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .features li::before {
            content: "✓";
            background: var(--gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 900;
        }

        /* CHATBOX */
        #chat-container {
            width: 100%;
            height: 450px;
            background: white;
            border-radius: 24px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 20px 50px -10px rgba(0,0,0,0.15);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        #header {
            padding: 15px 20px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .status-dot {
            width: 8px; height: 8px;
            background: #22c55e;
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.2);
        }

        #messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #f8fafc;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .msg {
            padding: 12px 16px;
            border-radius: 14px;
            max-width: 85%;
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .bot { background: white; border: 1px solid #e2e8f0; align-self: flex-start; border-bottom-left-radius: 4px; }
        .user { background: var(--accent); color: white; align-self: flex-end; border-bottom-right-radius: 4px; }

        #input-area {
            padding: 15px 20px;
            background: white;
            border-top: 1px solid #f1f5f9;
            display: flex;
            gap: 10px;
        }

        input {
            flex: 1;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            outline: none;
        }

        .send-btn {
            background: #004cff;
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
        }


        @media (max-width: 992px) {
            .hero-section { grid-template-columns: 1fr; margin-top: 120px; text-align: center; }
            h1 { font-size: 2.8rem; }
            #chat-container { max-width: 450px; margin: 0 auto; }
            p.sub-lead { margin: 0 auto 25px; }
            .features li { justify-content: center; }
        }
    </style>
</head>
<body>

<nav>
    <a href="#" class="logo-container">
        <div class="icon-crest">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L3 7V12C3 17.5 7.5 21.1 12 22C16.5 21.1 21 17.5 21 12V7L12 2Z" stroke="url(#goldGrad)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 6V18M8 10H16M9 14H15" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <defs>
                    <linearGradient id="goldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#f5d17e" />
                        <stop offset="100%" style="stop-color:#d49215" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="logo-text-group">
            <h1 class="logo-top">AIChat<span>ForLawyers</span></h1>
            <div class="logo-bottom">Elite Intake Intelligence</div>
        </div>
    </a>
    <a href="buy-now" class="buy-now-btn">Buy Now</a>
</nav>




<section class="hero-section">
        <div class="hero-content">
            <h1>The Gold Standard in <span>Legal Intake</span></h1>
            <p class="sub-lead">
                Convert high-value leads while you sleep. Our AI-driven intelligence screens, qualifies, and schedules your premium clients with surgical precision.
            </p>
            <ul class="features">
                <li>24/7 Automated Case Qualification</li>
                <li>Instant Legal Conflict Screening</li>
                <li>Seamless Practice Management Integration</li>
                <li>Luxury Experience for Every Lead</li>
            </ul>
        </div>

        <div id="chat-container" style="display:none;">
            <div id="header">
                <div class="status-dot"></div>
                <div style="font-weight: 700; font-size: 0.9rem; color: var(--primary);">Legal Intake Concierge</div>
            </div>
            <div id="messages">
                <div class="msg bot">
                    Hello! Thank you for contacting the firm. To better assist you, could you briefly describe your legal matter?
                </div>
                <div class="msg user">
                    I was involved in a multi-car accident on I-95 yesterday and need to discuss my options.
                </div>
                <div class="msg bot">
                    I'm sorry to hear that. I can certainly help. Are you currently receiving medical treatment for any injuries?
                </div>
                <div class="msg user">
                    Yes, I'm at the hospital now.
                </div>
                <div class="msg bot">
                    Understood. Based on these details, you qualify for a priority consultation. Would you like to schedule a call with one of our partners in the next 15 minutes?
                </div>
            </div>
            <div id="input-area">
                <input type="text" placeholder="Type your response..." disabled>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

<style>
    /* MINIMAL FOOTER */
    .mini-footer {
        background: #fff;
        padding: 40px 5%;
        margin-top: auto;
        border-top: 1px solid rgba(255,255,255,0.1);
        text-align: center;
        font-family: 'Inter', sans-serif;
    }
    .footer-brand {
        color: black;
        font-weight: 800;
        font-size: 1.1rem;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 10px;
    }
    .footer-brand span {
        background: var(--gold);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .footer-tagline {
        color: #94a3b8;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }
</style>

<footer class="mini-footer">
    <a href="#" class="footer-brand">AIChat<span>ForLawyers</span></a>
    <div class="footer-tagline">
        &copy; 2026 Elite Intake Intelligence. All rights reserved.
    </div>
</footer>
