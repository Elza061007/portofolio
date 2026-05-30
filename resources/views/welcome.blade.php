<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Elza Fikri Dinata | Professional Portfolio</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-on-surface": "#eff1f3",
                    "on-primary-container": "#dad7ff",
                    "surface-container-high": "#e6e8ea",
                    "on-tertiary-container": "#d9d8ff",
                    "tertiary-fixed-dim": "#c0c1ff",
                    "tertiary-fixed": "#e1e0ff",
                    "on-primary-fixed": "#0f0069",
                    "primary": "#3525cd",
                    "surface-container": "#eceef0",
                    "surface-container-highest": "#e0e3e5",
                    "surface-dim": "#d8dadc",
                    "inverse-surface": "#2d3133",
                    "on-tertiary-fixed-variant": "#2f2ebe",
                    "primary-fixed-dim": "#c3c0ff",
                    "on-surface-variant": "#464555",
                    "surface": "#f7f9fb",
                    "tertiary": "#3130c0",
                    "surface-container-low": "#f2f4f6",
                    "secondary-fixed": "#d8e3fb",
                    "on-primary": "#ffffff",
                    "inverse-primary": "#c3c0ff",
                    "secondary": "#545f73",
                    "primary-fixed": "#e2dfff",
                    "on-error-container": "#93000a",
                    "surface-variant": "#e0e3e5",
                    "surface-tint": "#4d44e3",
                    "on-secondary": "#ffffff",
                    "on-secondary-fixed": "#111c2d",
                    "on-surface": "#191c1e",
                    "on-error": "#ffffff",
                    "on-secondary-container": "#586377",
                    "secondary-container": "#d5e0f8",
                    "surface-bright": "#f7f9fb",
                    "on-primary-fixed-variant": "#3323cc",
                    "primary-container": "#4f46e5",
                    "outline": "#777587",
                    "tertiary-container": "#4b4dd8",
                    "background": "#f7f9fb",
                    "secondary-fixed-dim": "#bcc7de",
                    "on-tertiary-fixed": "#07006c",
                    "on-background": "#191c1e",
                    "surface-container-lowest": "#ffffff",
                    "error-container": "#ffdad6",
                    "error": "#ba1a1a",
                    "outline-variant": "#c7c4d8",
                    "on-secondary-fixed-variant": "#3c475a",
                    "on-tertiary": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "sm": "16px",
                    "base": "4px",
                    "md": "24px",
                    "xs": "8px",
                    "lg": "48px",
                    "gutter": "24px",
                    "container-max": "1200px",
                    "xl": "80px"
            },
            "fontFamily": {
                    "label-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "body-md": ["Inter"]
            },
            "fontSize": {
                    "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "display-lg-mobile": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "headline-md": ["30px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .project-card:hover .project-image {
            transform: scale(1.05);
        }
        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
<!-- Top Navigation Bar -->
<nav class="sticky top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-md border-b border-outline-variant/30 dark:border-outline/20 shadow-sm glass-nav">
<div class="flex justify-between items-center h-20 px-gutter max-w-container-max mx-auto">
<div class="font-headline-sm text-headline-sm font-bold text-primary dark:text-inverse-primary">
                Elza Fikri Dinata
            </div>
<div class="hidden md:flex items-center gap-lg">
<a class="text-secondary dark:text-secondary-fixed-dim hover:text-primary transition-colors font-label-md text-label-md" href="#about">About</a>
<a class="text-secondary dark:text-secondary-fixed-dim hover:text-primary transition-colors font-label-md text-label-md" href="#projects">Projects</a>
<a class="text-secondary dark:text-secondary-fixed-dim hover:text-primary transition-colors font-label-md text-label-md" href="#skills">Skills</a>
<a class="text-secondary dark:text-secondary-fixed-dim hover:text-primary transition-colors font-label-md text-label-md" href="#contact">Contact</a>
<button class="bg-primary-container text-on-primary font-label-md text-label-md px-md py-base rounded-lg hover:shadow-lg active:scale-95 transition-all duration-300">
                    Hire Me
                </button>
</div>
<!-- Mobile Menu Toggle (Simplified for UI) -->
<button class="md:hidden text-primary">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</nav>
<main>
<!-- Hero Section -->
<section class="relative overflow-hidden pt-xl pb-xl md:pt-[120px] md:pb-[120px] px-gutter">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center gap-lg">
<div class="flex-1 space-y-md text-center md:text-left">
<div class="inline-flex items-center gap-xs px-sm py-base bg-primary-fixed text-on-primary-fixed rounded-full font-label-sm text-label-sm">
<span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                        Available for Work
                    </div>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg tracking-tight text-on-surface">
                        Hi, I'm <span class="text-primary">Elza Fikri Dinata</span>
</h1>
<p class="font-headline-sm text-headline-sm text-on-surface-variant max-w-xl mx-auto md:mx-0">
                        Fresh Graduate &amp; Aspiring Professional dedicated to crafting efficient digital experiences through clean code and modern design.
                    </p>
<div class="flex flex-col sm:flex-row gap-sm pt-base justify-center md:justify-start">
<a class="bg-primary text-on-primary px-lg py-sm rounded-lg font-label-md text-label-md flex items-center justify-center gap-xs hover:shadow-xl transition-all duration-300 active:scale-95" href="#projects">
                            View My Work
                            <span class="material-symbols-outlined">arrow_forward</span>
</a>
<a class="border border-outline text-on-surface px-lg py-sm rounded-lg font-label-md text-label-md flex items-center justify-center gap-xs hover:bg-surface-container transition-all duration-300" href="#contact">
                            Get in Touch
                        </a>
</div>
</div>
<div class="flex-1 relative w-full aspect-square max-w-[500px]">
<div class="absolute inset-0 bg-primary-container rounded-3xl rotate-3 opacity-10"></div>
<img alt="Elza Fikri Dinata Professional Portrait" class="relative z-10 w-full h-full object-cover rounded-3xl shadow-xl" data-alt="A high-quality professional portrait of a young male professional in a smart-casual blazer, smiling confidently against a minimalist light grey studio background. The lighting is soft and even, highlighting a clean and modern aesthetic. The overall mood is approachable yet highly competent, reflecting a corporate modern fresh graduate identity with professional indigo color accents in the environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAP2yJZIjswO6dsCms0qkrz4AKF4-uvit0hlM_Xhiia3a24Jfy9NTM_1TsnhRro89uGOvXgKgaFmfPkzjRnxuf122eWr_CmRZ8T01vhT3iqpTfSGONDNVse9PNXtIGUUruaVV-ct1gxPeD9PqQFJuUuN-5sJiV9mEjhcl9gvQL5QW5jm-Wl6tiTw_dI4u-2WMqwyVnEpM2olMpn1P_o21T5d-B_Lo2x2XnqoekYt9_Tv1p09ePM3M43G53Mua7ev4Em0_aoyCMFZBg"/>
</div>
</div>
</section>
<!-- About Section -->
<section class="py-xl bg-surface-container-lowest border-y border-outline-variant/30" id="about">
<div class="max-w-container-max mx-auto px-gutter grid md:grid-cols-12 gap-lg items-center">
<div class="md:col-span-5 space-y-sm">
<h2 class="font-headline-md text-headline-md text-primary">About Me</h2>
<div class="w-16 h-1 bg-primary rounded-full"></div>
</div>
<div class="md:col-span-7 space-y-md">
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        As a highly motivated fresh graduate with a strong foundation in digital technologies, I thrive at the intersection of technical discipline and creative problem-solving. My academic journey has equipped me with a robust understanding of modern frameworks and design principles.
                    </p>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        I am dedicated to continuous learning and am currently seeking opportunities to contribute to innovative teams where I can apply my skills in web development and strategic design to deliver high-impact results.
                    </p>
<div class="grid grid-cols-2 gap-md pt-sm">
<div class="p-sm bg-surface-container rounded-xl">
<span class="font-label-sm text-label-sm text-primary uppercase tracking-widest block mb-base">Education</span>
<span class="font-headline-sm text-headline-sm block">B.S. Computer Science</span>
</div>
<div class="p-sm bg-surface-container rounded-xl">
<span class="font-label-sm text-label-sm text-primary uppercase tracking-widest block mb-base">Focus</span>
<span class="font-headline-sm text-headline-sm block">Fullstack Systems</span>
</div>
</div>
</div>
</div>
</section>
<!-- Projects Section (Bento Grid Style) -->
<section class="py-xl px-gutter" id="projects">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-lg space-y-base">
<h2 class="font-headline-md text-headline-md">Featured Projects</h2>
<p class="text-on-surface-variant font-body-md">A selection of my recent work and academic initiatives.</p>
</div>
<div class="grid md:grid-cols-3 gap-md">
<!-- Project 1 -->
<div class="project-card group bg-surface border border-outline-variant/50 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500">
<div class="aspect-video overflow-hidden">
<img alt="Web Development Project" class="project-image w-full h-full object-cover transition-transform duration-700" data-alt="A clean screenshot of a modern web application interface displayed on a sleek laptop screen. The UI features a minimalist dashboard with indigo accents, crisp typography, and generous whitespace. The setting is a bright, modern office with soft natural light, emphasizing a high-tech and professional atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzQBqXQdc5vywb1_CDEBpsfc1r5P7lFocX_swQHax45eNjND_WlUQxDMsQT26JQvR2kZ5sCJOF7iGxq4JG1BaBes0rZhSonp_axNOReLH0QPrpnMKUBzHg0gKzXP9LNwrUUqG3Hvt1Wr4RRuV3MoyxlH3nVvSm18ucCKG4Y0HkTBreGw5oTGQJN3KZOeswjLkmyOw1uNZWqxIOy1YkTHrIgugfxUEMybF4EdATMBVVueYgvXNMoA2-grgUXwXT-jl59mnT7Mi4Ddg"/>
</div>
<div class="p-md space-y-sm">
<div class="flex justify-between items-start">
<h3 class="font-headline-sm text-headline-sm group-hover:text-primary transition-colors">Web Development Project</h3>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">open_in_new</span>
</div>
<p class="text-on-surface-variant font-body-md">A high-performance full-stack application built with modern React patterns and a robust backend architecture.</p>
<div class="flex flex-wrap gap-xs pt-base">
<span class="px-sm py-1 bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm rounded-full">React</span>
<span class="px-sm py-1 bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm rounded-full">Node.js</span>
</div>
</div>
</div>
<!-- Project 2 -->
<div class="project-card group bg-surface border border-outline-variant/50 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500">
<div class="aspect-video overflow-hidden">
<img alt="Design Initiative" class="project-image w-full h-full object-cover transition-transform duration-700" data-alt="A flat-lay view of design prototypes and wireframes on a clean white desk surface. The composition includes high-end design tools, a tablet showing a mobile app interface, and minimalist sketches. The lighting is bright and airy, using professional indigo and slate grey as core design colors in the interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgCwxzPoLctBr_iqPw-8ooENHpzuX5CRkEwUSAkFf1E6iE7edE0NJr5wyih0NoKzWrjscsn4pOPl10mqiiAeDuq82BNI-_o86n9A4Bgs6-LYzebYVI6rv9yPhE4YZM_gwDQrkEGwMSjGzgRP5a_OiA1pf9ItTzyU7Pbd5hmk1cpubEU3oI69uhLezWWbXroFbS5d8wpmm7rTsTKtiqq6vP-G1VcpW5ZWeCWMg4cSSCSiEWVGehnpfOkN7OxcyiKYCI8MZvwNxEIw4"/>
</div>
<div class="p-md space-y-sm">
<div class="flex justify-between items-start">
<h3 class="font-headline-sm text-headline-sm group-hover:text-primary transition-colors">Design Initiative</h3>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">open_in_new</span>
</div>
<p class="text-on-surface-variant font-body-md">Comprehensive brand and UI/UX design system developed to solve user journey friction in digital commerce.</p>
<div class="flex flex-wrap gap-xs pt-base">
<span class="px-sm py-1 bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm rounded-full">Figma</span>
<span class="px-sm py-1 bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm rounded-full">UI/UX</span>
</div>
</div>
</div>
<!-- Project 3 -->
<div class="project-card group bg-surface border border-outline-variant/50 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500">
<div class="aspect-video overflow-hidden">
<img alt="Academic Research" class="project-image w-full h-full object-cover transition-transform duration-700" data-alt="A focused close-up of complex data visualizations and analytical graphs on a large high-resolution monitor. The scene reflects deep academic inquiry, with stacks of neatly organized journals and a minimalist desk setup. The color palette is composed of soft whites, professional indigo data points, and sharp digital clarity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnqoX8teWBFbPXyPD7TLDwJIKkUUMJRtWL-fXtTx24ZzSblNkc1zfX3AZfior6j6HgSE-uo9VAcf-_en6tCGgiyXYcEdaeZGBhqbUCOlRV_EGQ3lYjWtRg0n5rrguC2edifBGlbpshIt2udzcTHLWMluqOprNWrDJEQXn3e8pWROynvBaWQDBUB3O-9faUq25-kpY2SwSAbu5XjhnFEOgTZaJ9981ksfZ6bKceh1iY9n20p_xdT_Le8CyOcKyK16kPJdA7CftPJn4"/>
</div>
<div class="p-md space-y-sm">
<div class="flex justify-between items-start">
<h3 class="font-headline-sm text-headline-sm group-hover:text-primary transition-colors">Academic Research</h3>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">open_in_new</span>
</div>
<p class="text-on-surface-variant font-body-md">Deep dive research paper analyzing the impact of AI on front-end performance and user accessibility.</p>
<div class="flex flex-wrap gap-xs pt-base">
<span class="px-sm py-1 bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm rounded-full">Python</span>
<span class="px-sm py-1 bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm rounded-full">AI/ML</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Skills Section -->
<section class="py-xl bg-surface-container-low" id="skills">
<div class="max-w-container-max mx-auto px-gutter">
<div class="grid md:grid-cols-2 gap-lg">
<div class="space-y-md">
<h2 class="font-headline-md text-headline-md text-on-surface">Technical Proficiencies</h2>
<p class="text-on-surface-variant font-body-md max-w-md">My core technical stack focus on building scalable, accessible, and performant web applications.</p>
<div class="flex flex-wrap gap-sm">
<span class="px-md py-sm bg-primary-fixed text-on-primary-fixed rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base">code</span> JavaScript
                            </span>
<span class="px-md py-sm bg-primary-fixed text-on-primary-fixed rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base">terminal</span> React
                            </span>
<span class="px-md py-sm bg-primary-fixed text-on-primary-fixed rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base">database</span> SQL &amp; NoSQL
                            </span>
<span class="px-md py-sm bg-primary-fixed text-on-primary-fixed rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base">css</span> Tailwind CSS
                            </span>
<span class="px-md py-sm bg-primary-fixed text-on-primary-fixed rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base">settings_ethernet</span> Git/GitHub
                            </span>
</div>
</div>
<div class="space-y-md">
<h2 class="font-headline-md text-headline-md text-on-surface">Soft Skills</h2>
<p class="text-on-surface-variant font-body-md max-w-md">Professional attributes that define my collaborative approach to complex projects.</p>
<div class="flex flex-wrap gap-sm">
<span class="px-md py-sm bg-secondary-container text-on-secondary-container rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base" data-weight="fill">psychology</span> Problem Solving
                            </span>
<span class="px-md py-sm bg-secondary-container text-on-secondary-container rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base" data-weight="fill">groups</span> Teamwork
                            </span>
<span class="px-md py-sm bg-secondary-container text-on-secondary-container rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base" data-weight="fill">chat</span> Communication
                            </span>
<span class="px-md py-sm bg-secondary-container text-on-secondary-container rounded-lg font-label-md text-label-md flex items-center gap-xs">
<span class="material-symbols-outlined text-base" data-weight="fill">timer</span> Adaptability
                            </span>
</div>
</div>
</div>
</div>
</section>
<!-- Contact Section -->
<section class="py-xl px-gutter max-w-container-max mx-auto" id="contact">
<div class="bg-surface-container-highest rounded-3xl overflow-hidden shadow-sm border border-outline-variant/30 flex flex-col lg:flex-row">
<div class="lg:w-1/3 bg-primary p-lg text-on-primary space-y-lg">
<div class="space-y-base">
<h2 class="font-headline-md text-headline-md">Let's Connect</h2>
<p class="text-on-primary-container font-body-md">Open for collaboration and full-time opportunities.</p>
</div>
<div class="space-y-md">
<div class="flex items-center gap-md">
<div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined">mail</span>
</div>
<div>
<p class="font-label-sm text-label-sm uppercase opacity-70">Email Me</p>
<p class="font-label-md text-label-md">elza.fikri@example.com</p>
</div>
</div>
<div class="flex items-center gap-md">
<div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined">distance</span>
</div>
<div>
<p class="font-label-sm text-label-sm uppercase opacity-70">Location</p>
<p class="font-label-md text-label-md">Jakarta, Indonesia</p>
</div>
</div>
</div>
<div class="pt-lg flex gap-md">
<a class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center hover:bg-white/10 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">share</span>
</a>
<a class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center hover:bg-white/10 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">code</span>
</a>
</div>
</div>
<div class="flex-1 p-lg bg-surface">
<form class="grid sm:grid-cols-2 gap-md">
<div class="space-y-base">
<label class="font-label-md text-label-md text-on-surface-variant">Full Name</label>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-lg p-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="John Doe" type="text"/>
</div>
<div class="space-y-base">
<label class="font-label-md text-label-md text-on-surface-variant">Email Address</label>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-lg p-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="john@example.com" type="email"/>
</div>
<div class="sm:col-span-2 space-y-base">
<label class="font-label-md text-label-md text-on-surface-variant">Message</label>
<textarea class="w-full bg-surface-container-low border border-outline-variant rounded-lg p-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="How can I help you?" rows="4"></textarea>
</div>
<div class="sm:col-span-2">
<button class="w-full bg-primary text-on-primary py-md rounded-lg font-label-md text-label-md hover:shadow-lg active:scale-[0.98] transition-all duration-300" type="submit">
                                Send Message
                            </button>
</div>
</form>
</div>
</div>
</section>
</main>
<!-- Footer Component -->
<footer class="bg-surface-container-lowest dark:bg-inverse-surface w-full py-lg border-t border-outline-variant/30">
<div class="flex flex-col md:flex-row justify-between items-center px-gutter max-w-container-max mx-auto gap-md">
<div class="font-headline-sm text-headline-sm text-on-surface dark:text-inverse-on-surface font-bold">
                Elza Fikri Dinata
            </div>
<div class="flex gap-lg">
<a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors font-body-md text-body-md" href="#">LinkedIn</a>
<a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors font-body-md text-body-md" href="#">GitHub</a>
<a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors font-body-md text-body-md" href="#">Twitter</a>
<a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors font-body-md text-body-md" href="#">Email</a>
</div>
<div class="text-on-surface-variant dark:text-surface-variant font-body-md text-body-md opacity-60">
                © 2024 Elza Fikri Dinata. All rights reserved.
            </div>
</div>
</footer>
<script>
        // Simple micro-interaction for scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Add active state to nav links based on scroll position
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav a');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-primary', 'font-bold', 'border-b-2', 'border-primary', 'pb-1');
                link.classList.add('text-secondary');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-primary', 'font-bold', 'border-b-2', 'border-primary', 'pb-1');
                    link.classList.remove('text-secondary');
                }
            });
        });
    </script>
</body></html>