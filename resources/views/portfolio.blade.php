<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Panji</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(ellipse at center, #0f0f23 0%, #000000 70%);
            color: #f8fafc;
            overflow-x: hidden;
            line-height: 1.7;
            position: relative;
        }

        /* Space Background Effects */
        .space-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -2;
            background:
                radial-gradient(2px 2px at 20px 30px, #eee, transparent),
                radial-gradient(2px 2px at 40px 70px, rgba(255,255,255,0.8), transparent),
                radial-gradient(1px 1px at 90px 40px, #fff, transparent),
                radial-gradient(1px 1px at 130px 80px, rgba(255,255,255,0.6), transparent),
                radial-gradient(2px 2px at 160px 30px, #ddd, transparent);
            background-repeat: repeat;
            background-size: 200px 100px;
            animation: sparkle 20s linear infinite;
        }

        @keyframes sparkle {
            0% { transform: translateY(0px); }
            100% { transform: translateY(-100px); }
        }

        /* Nebula Effect */
        .nebula {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            background:
                radial-gradient(circle at 20% 20%, rgba(138, 43, 226, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(30, 144, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 70%, rgba(255, 20, 147, 0.08) 0%, transparent 50%);
            animation: nebulaFloat 15s ease-in-out infinite alternate;
        }

        @keyframes nebulaFloat {
            0% { transform: translateX(-20px) translateY(-10px) rotate(0deg); }
            100% { transform: translateX(20px) translateY(10px) rotate(2deg); }
        }

        /* Shooting Stars */
        .shooting-star {
            position: fixed;
            width: 2px;
            height: 2px;
            background: linear-gradient(90deg, #ffffff, transparent);
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
        }

        .shooting-star::before {
            content: '';
            position: absolute;
            width: 50px;
            height: 1px;
            background: linear-gradient(90deg, rgba(255,255,255,0.8), transparent);
            top: 50%;
            transform: translateY(-50%);
            left: -50px;
        }

        .shooting-star:nth-child(1) {
            top: 15%;
            right: 100%;
            animation: shootingStar1 3s linear infinite;
            animation-delay: 2s;
        }

        .shooting-star:nth-child(2) {
            top: 40%;
            right: 100%;
            animation: shootingStar2 4s linear infinite;
            animation-delay: 5s;
        }

        .shooting-star:nth-child(3) {
            top: 70%;
            right: 100%;
            animation: shootingStar3 3.5s linear infinite;
            animation-delay: 8s;
        }

        @keyframes shootingStar1 {
            0% { right: 100%; opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { right: -100px; opacity: 0; }
        }

        @keyframes shootingStar2 {
            0% { right: 100%; opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { right: -100px; opacity: 0; }
        }

        @keyframes shootingStar3 {
            0% { right: 100%; opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { right: -100px; opacity: 0; }
        }

        /* Floating Particles */
        .particle {
            position: fixed;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
            animation: floatUp 8s linear infinite;
        }

        .particle:nth-child(odd) {
            width: 3px;
            height: 3px;
            animation-duration: 6s;
        }

        .particle:nth-child(even) {
            width: 2px;
            height: 2px;
            animation-duration: 8s;
        }

        @keyframes floatUp {
            0% {
                opacity: 0;
                transform: translateY(100vh) translateX(0px);
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translateY(-100px) translateX(50px);
            }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(5, 5, 20, 0.9);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(138, 43, 226, 0.3);
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(138, 43, 226, 0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 600;
            color: #f1f5f9;
            font-family: 'JetBrains Mono', monospace;
            text-shadow: 0 0 10px rgba(138, 43, 226, 0.5);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: #f1f5f9;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .mobile-menu-btn:hover {
            background: rgba(138, 43, 226, 0.2);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: #60a5fa;
            text-shadow: 0 0 10px rgba(96, 165, 250, 0.5);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -8px;
            left: 0;
            background: linear-gradient(90deg, #60a5fa, #8b5cf6);
            transition: width 0.3s ease;
            box-shadow: 0 0 10px rgba(96, 165, 250, 0.5);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Sections */
        section {
            min-height: 100vh;
            padding: 80px 2rem 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 1200px;
            width: 100%;
        }

        /* Home Section */
        .home-content {
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        .home-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #f1f5f9 0%, #60a5fa 30%, #8b5cf6 70%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.02em;
            text-shadow: 0 0 30px rgba(96, 165, 250, 0.3);
            animation: titleGlow 3s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            0% { filter: brightness(1); }
            100% { filter: brightness(1.2); }
        }

        .home-description {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
            color: #cbd5e1;
            font-weight: 400;
        }

        .btn-group {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 32px;
            border: none;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.5);
            background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-secondary {
            background: rgba(30, 41, 59, 0.8);
            color: #f1f5f9;
            border: 2px solid rgba(139, 92, 246, 0.5);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(139, 92, 246, 0.2);
            border-color: #8b5cf6;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
        }

        /* Content Cards */
        .card {
            background: rgba(15, 15, 35, 0.6);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2.5rem;
            margin: 1.5rem 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(138, 43, 226, 0.2);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(138, 43, 226, 0.3);
            border-color: rgba(96, 165, 250, 0.4);
            background: rgba(15, 15, 35, 0.8);
        }

        .section-title {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #f1f5f9 0%, #60a5fa 50%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.02em;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            align-items: center;
        }

        .profile-img {
            width: 350px;
            height: 350px;
            border-radius: 180px;
            object-fit: cover;
            border: 3px solid rgba(139, 92, 246, 0.5);
            box-shadow: 0 20px 60px rgba(139, 92, 246, 0.3);
            transition: all 0.4s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
            border-color: rgba(96, 165, 250, 0.8);
            box-shadow: 0 25px 80px rgba(139, 92, 246, 0.5);
        }

        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #60a5fa;
            font-weight: 600;
        }

        .about-text p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #cbd5e1;
            font-size: 1.1rem;
        }

        /* Timeline Styles */
        .timeline-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom,
                #8b5cf6 0%,
                #60a5fa 50%,
                #ec4899 100%);
            transform: translateX(-50%);
            border-radius: 2px;
            box-shadow: 0 0 20px rgba(139, 92, 246, 0.6);
            animation: pulseTimeline 3s ease-in-out infinite alternate;
        }

        @keyframes pulseTimeline {
            0% {
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.6);
                filter: brightness(1);
            }
            100% {
                box-shadow: 0 0 30px rgba(96, 165, 250, 0.8);
                filter: brightness(1.2);
            }
        }

        .timeline-item {
            position: relative;
            margin: 3rem 0;
            display: flex;
            align-items: center;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-item:nth-child(even) .timeline-card {
            margin-right: 0.5rem;
            margin-left: 0;
        }

        .timeline-item:nth-child(odd) .timeline-card {
            margin-left: 0.5rem;
        }

        .timeline-dot {
            position: absolute;
            left: 50%;
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, #8b5cf6 0%, #60a5fa 100%);
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 10;
            box-shadow: 0 0 20px rgba(139, 92, 246, 0.8);
            border: 3px solid rgba(15, 15, 35, 1);
            animation: dotPulse 2s ease-in-out infinite alternate;
        }

        @keyframes dotPulse {
            0% {
                transform: translateX(-50%) scale(1);
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.8);
            }
            100% {
                transform: translateX(-50%) scale(1.2);
                box-shadow: 0 0 30px rgba(96, 165, 250, 0.9);
            }
        }

        .timeline-card {
            width: 45%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .timeline-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 80px rgba(139, 92, 246, 0.4);
            border-color: rgba(96, 165, 250, 0.5);
        }

        /* Connecting Lines Animation */
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg,
                transparent 0%,
                rgba(139, 92, 246, 0.8) 20%,
                rgba(96, 165, 250, 0.8) 80%,
                transparent 100%);
            z-index: 5;
            animation: connectingLine 2s ease-in-out infinite alternate;
        }

        .timeline-item:nth-child(odd)::before {
            transform: translateX(-50%);
            background: linear-gradient(90deg,
                rgba(139, 92, 246, 0.8) 0%,
                rgba(96, 165, 250, 0.8) 50%,
                transparent 100%);
        }

        .timeline-item:nth-child(even)::before {
            transform: translateX(-50%);
            background: linear-gradient(90deg,
                transparent 0%,
                rgba(96, 165, 250, 0.8) 50%,
                rgba(139, 92, 246, 0.8) 100%);
        }

        @keyframes connectingLine {
            0% { opacity: 0.6; }
            100% { opacity: 1; }
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2.5rem;
        }

        .project-card {
            background: rgba(15, 15, 35, 0.6);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(138, 43, 226, 0.2);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }

        .project-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 80px rgba(139, 92, 246, 0.4);
            border-color: rgba(96, 165, 250, 0.5);
        }

        .project-img {
            width: 100%;
            height: 220px;
            position: relative;
            overflow: hidden;
            border-radius: 5px;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .project-card:hover .project-img img {
            transform: scale(1.3);
        }

        .project-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
            z-index: 1;
        }

        .project-card:hover .project-img::before {
            left: 100%;
        }

        .project-content {
            padding: 2rem;
        }

        .project-content h4 {
            color: #60a5fa;
            margin-bottom: 1rem;
            font-weight: 600;
            font-size: 1.3rem;
        }

        .project-content p {
            color: #cbd5e1;
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .skill-item {
            text-align: center;
            padding: 2rem;
            background: rgba(15, 15, 35, 0.4);
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 1px solid rgba(138, 43, 226, 0.2);
        }

        .skill-item:hover {
            transform: translateY(-5px);
            background: rgba(15, 15, 35, 0.6);
            border-color: rgba(96, 165, 250, 0.4);
            box-shadow: 0 15px 40px rgba(139, 92, 246, 0.2);
        }

        .skill-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #8b5cf6;
            text-shadow: 0 0 10px rgba(139, 92, 246, 0.5);
        }

        .skill-icon img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            display: block;
            margin: 0 auto 10px;
        }

        .skill-item h4 {
            color: #60a5fa;
            margin-bottom: 1rem;
        }

        .skill-item p {
            color: #cbd5e1;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .contact-item {
            padding: 2rem;
            background: rgba(15, 15, 35, 0.4);
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 1px solid rgba(138, 43, 226, 0.2);
        }

        .contact-item:hover {
            transform: translateY(-8px);
            background: rgba(15, 15, 35, 0.6);
            border-color: rgba(96, 165, 250, 0.4);
            box-shadow: 0 15px 40px rgba(139, 92, 246, 0.3);
        }

        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #8b5cf6;
            text-shadow: 0 0 10px rgba(139, 92, 246, 0.5);
        }

        .contact-icon img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            display: block;
            margin: 0 auto 10px;
        }

        .contact-item h4 {
            margin-bottom: 0.5rem;
            color: #60a5fa;
        }

        .contact-item a {
            color: #8b5cf6;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-item a:hover {
            color: #60a5fa;
            text-shadow: 0 0 10px rgba(96, 165, 250, 0.5);
        }

        .footer {
            background: rgba(5, 5, 20, 0.9);
            color: #fff;
            text-align: center;
            padding: 30px 0;
            margin-top: 40px;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-top: 1px solid rgba(138, 43, 226, 0.3);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ========== TABLET RESPONSIVE ========== */
        @media (max-width: 1024px) {
            .nav-container {
                padding: 0 1.5rem;
            }

            .logo {
                font-size: 1.3rem;
            }

            .nav-links {
                gap: 1.5rem;
            }

            .nav-links a {
                font-size: 0.9rem;
            }

            .home-title {
                font-size: 3rem;
            }

            .home-description {
                font-size: 1.2rem;
                padding: 0 1rem;
            }

            .section-title {
                font-size: 2.4rem;
                margin-bottom: 2.5rem;
            }

            .about-content {
                gap: 3rem;
            }

            .profile-img {
                width: 280px;
                height: 280px;
            }

            .about-text h3 {
                font-size: 1.7rem;
            }

            .card {
                padding: 2rem;
                margin: 1rem 0;
            }

            .projects-grid {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 2rem;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
            }

            .contact-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
            }

            .timeline-card {
                width: 48%;
            }
        }

        /* ========== MOBILE RESPONSIVE ========== */
        @media (max-width: 768px) {
            /* Mobile Navigation */
            .mobile-menu-btn {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(5, 5, 20, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 2rem 0;
                gap: 1.5rem;
                text-align: center;
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                border-top: 1px solid rgba(138, 43, 226, 0.3);
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .nav-links a {
                font-size: 1.1rem;
                padding: 0.5rem 1rem;
                border-radius: 8px;
                display: inline-block;
            }

            .nav-links a:hover {
                background: rgba(139, 92, 246, 0.2);
            }

            /* Home Section Mobile */
            .home-title {
                font-size: 2.2rem;
                margin-bottom: 1rem;
                line-height: 1.2;
            }

            .home-description {
                font-size: 1.1rem;
                margin-bottom: 2rem;
                padding: 0 0.5rem;
            }

            .btn-group {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .btn {
                padding: 12px 24px;
                font-size: 0.9rem;
                width: 200px;
                justify-content: center;
            }

            /* Sections Mobile */
            section {
                padding: 60px 1rem 2rem;
                min-height: auto;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }

            .card {
                padding: 1.5rem;
                margin: 1rem 0;
                border-radius: 16px;
            }

            /* About Section Mobile */
            .about-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .profile-img {
                width: 200px;
                height: 200px;
                margin: 0 auto;
            }

            .about-text h3 {
                font-size: 1.4rem;
                margin-bottom: 1rem;
            }

            .about-text p {
                font-size: 1rem;
                text-align: left;
            }

            /* Timeline Mobile */
            .timeline-container {
                padding: 1rem 0;
            }

            .timeline-line {
                left: 30px;
            }

            .timeline-item {
                flex-direction: row !important;
                padding-left: 70px;
                margin: 2rem 0;
            }

            .timeline-item:nth-child(even) .timeline-card,
            .timeline-item:nth-child(odd) .timeline-card {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }

            .timeline-dot {
                left: 30px;
                width: 16px;
                height: 16px;
            }

            .timeline-item::before {
                left: 30px;
                width: 40px;
                background: linear-gradient(90deg,
                    rgba(139, 92, 246, 0.8) 0%,
                    transparent 100%);
            }

            /* Projects Mobile */
            .projects-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .project-card {
                border-radius: 16px;
            }

            .project-img {
                height: 180px;
            }

            .project-content {
                padding: 1.5rem;
            }

            .project-content h4 {
                font-size: 1.2rem;
            }

            .project-content p {
                font-size: 0.95rem;
            }

            /* Skills Mobile */
            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 1rem;
            }

            .skill-item {
                padding: 1.5rem 1rem;
                border-radius: 16px;
            }

            .skill-icon img {
                width: 40px;
                height: 40px;
            }

            .skill-item h4 {
                font-size: 1rem;
                margin-bottom: 0.5rem;
            }

            .skill-item p {
                font-size: 0.9rem;
            }

            /* Contact Mobile */
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
                max-width: 400px;
                margin: 0 auto;
            }

            .contact-item {
                padding: 1.5rem;
                border-radius: 16px;
            }

            .contact-icon img {
                width: 35px;
                height: 35px;
            }

            .contact-item h4 {
                font-size: 1rem;
            }

            .contact-item a {
                font-size: 0.9rem;
                word-break: break-word;
            }

            /* Footer Mobile */
            .footer {
                padding: 20px 1rem;
                font-size: 13px;
            }
        }

        /* ========== SMALL MOBILE (iPhone SE, etc) ========== */
        @media (max-width: 480px) {
            .nav-container {
                padding: 0 1rem;
            }

            .home-title {
                padding-top: 100px;
            }

            .logo {
                font-size: 1.2rem;
            }

            .home-title {
                font-size: 1.8rem;
                margin-bottom: 1rem;
            }

            .home-description {
                font-size: 1rem;
                padding: 0;
            }

            .section-title {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }

            .card {
                padding: 1.2rem;
                border-radius: 12px;
            }

            .profile-img {
                width: 180px;
                height: 180px;
            }

            .about-text h3 {
                font-size: 1.2rem;
            }

            .btn {
                width: 180px;
                padding: 10px 20px;
                font-size: 0.85rem;
            }

            .timeline-item {
                padding-left: 60px;
            }

            .timeline-line {
                left: 25px;
            }

            .timeline-dot {
                left: 25px;
                width: 14px;
                height: 14px;
            }

            .timeline-item::before {
                left: 25px;
                width: 35px;
            }

            .project-img {
                height: 160px;
            }

            .project-content {
                padding: 1.2rem;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            }

            .skill-item {
                padding: 1.2rem 0.8rem;
            }

            .skill-icon img {
                width: 35px;
                height: 35px;
            }

            .contact-item {
                padding: 1.2rem;
            }
        }

        /* ========== LANDSCAPE MOBILE ========== */
        @media (max-width: 768px) and (orientation: landscape) {
            section {
                min-height: auto;
                padding: 80px 1rem 2rem;
            }

            .home-content {
                padding: 2rem 0;
            }

            .timeline-container {
                max-width: 800px;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation for images */
        img {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        img.loaded {
            opacity: 1;
        }

        /* Floating particles for timeline */
        .timeline-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(96, 165, 250, 0.7);
            border-radius: 50%;
            animation: timelineFloat 4s ease-in-out infinite;
        }

        .timeline-particle:nth-child(1) {
            left: 48%;
            top: 10%;
            animation-delay: 0s;
        }

        .timeline-particle:nth-child(2) {
            left: 52%;
            top: 30%;
            animation-delay: 1s;
        }

        .timeline-particle:nth-child(3) {
            left: 48%;
            top: 60%;
            animation-delay: 2s;
        }

        @keyframes timelineFloat {
            0%, 100% {
                transform: translateY(0px) translateX(0px);
                opacity: 0.7;
            }
            25% {
                transform: translateY(-10px) translateX(5px);
                opacity: 1;
            }
            50% {
                transform: translateY(-5px) translateX(-5px);
                opacity: 0.8;
            }
            75% {
                transform: translateY(-15px) translateX(3px);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Space Background Effects -->
    <div class="space-bg"></div>
    <div class="nebula"></div>

    <!-- Shooting Stars -->
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>

    <!-- Particles Container -->
    <div id="particles-container"></div>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="#home" class="logo">Panji's Space</a>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="bi bi-list"></i>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <div class="home-content">
                <h1 class="home-title">Muhammad Panji Nurcahyo</h1>
                <p class="home-description">
                    <strong>Crafting Code and Creative</strong>
                </p>
                <div class="btn-group">
                    <a href="#projects" class="btn btn-primary">Explore Projects</a>
                    <a href="#contact" class="btn btn-secondary">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="card">
                <div class="about-content">
                    <div>
                        <img src="{{ asset('assets/profil.jpg') }}" alt="Profile" class="profile-img">
                    </div>
                    <div class="about-text">
                        <h3>Hybrid Developer-Designer | Crafting Code and Creative Experiences</h3>
                        <p>
                            Mahasiswa Sistem Informasi yang memiliki ketertarikan dengan komputer. Berdedikasi tinggi pada dunia
                            programmer, serta kemampuan analis yang baik. Menyukai olahraga yang melibatkan fisik. Senang
                            belajar dan mempelajari hal-hal baru serta memiliki semangat besar untuk menjadi seorang developer
                            dan designer yang ahli.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">
            <h2 class="section-title">My Journey</h2>
            <div class="timeline-container">
                <!-- Timeline Line -->
                <div class="timeline-line"></div>

                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-dot"></div>
                    <div class="card timeline-card">
                        <div class="experience-item">
                            <h4>Education</h4>
                            <div class="date">2022 - Present</div>
                            <p><strong>Universitas Gunadarma - Sistem Informasi</strong></p>
                            <p>Mengembangkan pemahaman mendalam tentang sistem informasi dan teknologi terkini.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-dot"></div>
                    <div class="card timeline-card">
                        <div class="experience-item">
                            <h4>Volunteer</h4>
                            <div class="date">2024</div>
                            <p><strong>Olimpiade Gunadarma - Divisi Olahraga</strong></p>
                            <p>Mengembangkan dan mengelola lembar skor pertandingan dengan presisi serta mengkoordinasikan jadwal pertandingan.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-dot"></div>
                    <div class="card timeline-card">
                        <div class="experience-item">
                            <h4>Freelance</h4>
                            <div class="date">2023 - Present</div>
                            <p><strong>Tennis Coach</strong></p>
                            <p>Melatih teknik dasar dan advanced tennis untuk berbagai level serta membangun mental strength dan strategic thinking dalam bermain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                <div class="card project-card">
                    <div class="project-img">
                        <img src="{{ asset('assets/game.jpg') }}" alt="Game Suit Semut-Gajah-Manusia">
                    </div>
                    <div class="project-content">
                        <h4>Pengembangan Game Suit Semut-Gajah-Manusia Berbasis Web</h4>
                        <p>Mengembangkan game suit gunting, batu, kertas dengan kearifan lokal menjadi semut,
                            gajah, manusia berbasis web.</p>
                        <p><strong>Tech Stack :</strong> HTML, CSS, JavaScript</p>
                        <a href="https://panjinurcahyo1.github.io/Game-suit-8-/" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="display: inline-block; margin-top: 1rem;">🔭 Click to explore!</a>
                    </div>
                </div>

                <div class="card project-card">
                    <div class="project-img">
                        <img src="{{ asset('assets/sewa.png') }}" alt="Aplikasi Sewa Lapangan Tenis">
                    </div>
                    <div class="project-content">
                        <h4>Membuat Aplikasi Sewa Lapangan Tenis Brimob Tennis Center Berbasis Web</h4>
                        <p>Merancang dan membuat aplikasi sewa lapangan tenis di brimob berbasis website.</p>
                        <p><strong>Tech Stack :</strong> PHP, Laravel, MySQL, JavaScript, Bootstrap</p>
                        <a href="https://brimobtenniscenter.web.id" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="display: inline-block; margin-top: 1rem;">🔭 Click to explore!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="card">
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="{{ asset('assets/programming.png') }}" alt="Programming">
                        </div>
                        <h4>Programming</h4>
                        <p>PHP, JavaScript, HTML, CSS, Python</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="{{ asset('assets/app-development.png') }}" alt="Web Development">
                        </div>
                        <h4>Web Development</h4>
                        <p>Laravel, React.js</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="{{ asset('assets/database-storage.png') }}" alt="Database">
                        </div>
                        <h4>Database</h4>
                        <p>MySQL</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="{{ asset('assets/montage.png') }}" alt="Design Editing">
                        </div>
                        <h4>Design Editing</h4>
                        <p>Figma, Capcut, Photoshop, Filmora</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Connect with Me</h2>
            <div class="card">
                <div class="contact-grid">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('assets/linkedin.png') }}" alt="LinkedIn">
                        </div>
                        <h4>LinkedIn</h4>
                        <a href="https://www.linkedin.com/in/panji-nurcahyo-84504724b/" target="_blank">Click to see my resume!</a>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('assets/instagram.png') }}" alt="Instagram">
                        </div>
                        <h4>Instagram</h4>
                        <a href="https://instagram.com/panjinurcahyo._" target="_blank">Click to see my social media!</a>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('assets/github.png') }}" alt="GitHub">
                        </div>
                        <h4>GitHub</h4>
                        <a href="https://github.com/panjinurcahyo1" target="_blank">Click to see my projects!</a>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('assets/gmail.png') }}" alt="Email">
                        </div>
                        <h4>Email</h4>
                        <a href="mailto:panjinurcahyo2309@gmail.com">Click to email me!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Panji's Space Portfolio 🚀</p>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');
        const menuIcon = mobileMenuBtn.querySelector('i');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');

            // Toggle menu icon
            if (navLinks.classList.contains('active')) {
                menuIcon.classList.remove('bi-list');
                menuIcon.classList.add('bi-x');
            } else {
                menuIcon.classList.remove('bi-x');
                menuIcon.classList.add('bi-list');
            }
        });

        // Close mobile menu when clicking on a link
        navLinks.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                navLinks.classList.remove('active');
                menuIcon.classList.remove('bi-x');
                menuIcon.classList.add('bi-list');
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenuBtn.contains(e.target) && !navLinks.contains(e.target)) {
                navLinks.classList.remove('active');
                menuIcon.classList.remove('bi-x');
                menuIcon.classList.add('bi-list');
            }
        });

        // Add floating particles to timeline
        function addTimelineParticles() {
            const timeline = document.querySelector('.timeline-container');
            if (timeline) {
                for (let i = 0; i < 3; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'timeline-particle';
                    timeline.appendChild(particle);
                }
            }
        }

        // Initialize timeline effects when page loads
        document.addEventListener('DOMContentLoaded', function() {
            addTimelineParticles();

            // Add intersection observer for timeline animations
            const timelineItems = document.querySelectorAll('.timeline-item');
            const observerOptions = {
                threshold: 0.3,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        entry.target.style.transition = 'all 0.8s ease';
                    }
                });
            }, observerOptions);

            timelineItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(30px)';
                item.style.transitionDelay = `${index * 0.2}s`;
                observer.observe(item);
            });
        });

        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles-container');
            const numberOfParticles = window.innerWidth < 768 ? 10 : 20; // Reduce particles on mobile

            for (let i = 0; i < numberOfParticles; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.animationDelay = Math.random() * 8 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Create additional dynamic effects
        function createDynamicEffects() {
            console.log('Dynamic effects initialized');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 50) {
                nav.style.background = 'rgba(5, 5, 20, 0.95)';
                nav.style.boxShadow = '0 5px 30px rgba(138, 43, 226, 0.4)';
            } else {
                nav.style.background = 'rgba(5, 5, 20, 0.9)';
                nav.style.boxShadow = '0 5px 20px rgba(138, 43, 226, 0.2)';
            }

            // Hide/show nav on scroll (mobile)
            if (window.innerWidth <= 768) {
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    nav.style.transform = 'translateY(-100%)';
                } else {
                    nav.style.transform = 'translateY(0)';
                }
            }

            lastScrollTop = scrollTop;
        });

        // Add mousemove effect for nebula (disable on mobile for performance)
        if (window.innerWidth > 768) {
            document.addEventListener('mousemove', function(e) {
                const nebula = document.querySelector('.nebula');
                const xPos = e.clientX / window.innerWidth;
                const yPos = e.clientY / window.innerHeight;

                nebula.style.transform = `translateX(${xPos * 10 - 5}px) translateY(${yPos * 10 - 5}px)`;
            });
        }

        // Initialize effects when page loads
        window.addEventListener('load', function() {
            createParticles();
            createDynamicEffects();

            // Add entrance animation to cards
            const cards = document.querySelectorAll('.card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.8s ease forwards';
                    }
                });
            });

            cards.forEach(card => {
                observer.observe(card);
            });

            // Image loading animation
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                if (img.complete) {
                    img.classList.add('loaded');
                } else {
                    img.addEventListener('load', () => {
                        img.classList.add('loaded');
                    });
                }
            });
        });

        // Add parallax effect to background elements (reduce on mobile)
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset;
            const nebula = document.querySelector('.nebula');
            const spaceBg = document.querySelector('.space-bg');

            if (window.innerWidth > 768) {
                nebula.style.transform = `translateY(${scrollTop * 0.2}px)`;
                spaceBg.style.transform = `translateY(${scrollTop * 0.1}px)`;
            } else {
                // Reduced parallax on mobile for better performance
                nebula.style.transform = `translateY(${scrollTop * 0.1}px)`;
                spaceBg.style.transform = `translateY(${scrollTop * 0.05}px)`;
            }
        });

        // Add click effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255,255,255,0.6)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.pointerEvents = 'none';

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
            .btn {
                position: relative;
                overflow: hidden;
            }
        `;
        document.head.appendChild(style);

        // Handle window resize
        window.addEventListener('resize', function() {
            // Close mobile menu on resize
            if (window.innerWidth > 768) {
                navLinks.classList.remove('active');
                menuIcon.classList.remove('bi-x');
                menuIcon.classList.add('bi-list');
            }
        });

        // Optimize animations based on device capabilities
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            // Disable animations for users who prefer reduced motion
            document.body.style.setProperty('--animation-duration', '0s');
        }

        // Touch events for better mobile interaction
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }
    </script>
</body>
</html>
