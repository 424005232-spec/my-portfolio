# DevFolio — BSIT 2.1 Web Dev Finals Project

A full-stack portfolio website built for the Web Development Fundamentals Final Integrative Project (A.Y. 2025–2026).

## 👥 Group Members
- Alina Belano — Team Lead / Bootstrap UI
- John Carlos — Git & Deployment
- John Isaac Protacio — PHP Back-End Developer
- Rossel Garlit — UI / Cards & Modal
- Xandra Misa — Content & QA Tester

## 📚 Course Information
- **Course:** Web Development Fundamentals
- **Section:** BSIT 2.1
- **Instructor:** Edward James V. Grageda
- **Academic Year:** 2025–2026

## 🌐 Live Site
👉 https://424005232-spec.github.io/my-portfolio

## 🛠️ Technologies Used
- HTML5
- Bootstrap 5 (via CDN)
- CSS Custom Properties (Variables)
- Vanilla JavaScript
- PHP 8 (Back-End)
- Git & GitHub

## 📁 Project Structure
```
my-portfolio/
├── index.html        # Main front-end file
├── contact.php       # PHP back-end form handler
├── css/              # Custom CSS files
├── js/               # JavaScript files
├── images/           # Image assets
├── README.md         # Project documentation
└── .gitignore        # Git ignore rules
```

## ✨ Features
- Responsive navbar with mobile hamburger menu
- Hero section with animated text
- Bootstrap card grid (3 project cards)
- Contact modal with Bootstrap form validation
- CSS custom properties for unique theming
- Team section with all 5 members
- PHP contact form handler with input sanitization

## 🖥️ How to Run the PHP Back-End Locally

### Option A — Using XAMPP
1. Download and install XAMPP from https://www.apachefriends.org
2. Copy the `my-portfolio` folder into `C:/xampp/htdocs/`
3. Open XAMPP Control Panel → Start **Apache**
4. Open your browser and go to: `http://localhost/my-portfolio`
5. Fill out the contact form and submit to test `contact.php`

### Option B — Using PHP Built-in Server
1. Make sure PHP is installed on your machine
2. Open terminal/Git Bash in the project folder
3. Run:
```bash
php -S localhost:8000
```
4. Open your browser and go to: `http://localhost:8000`
5. Fill out the contact form and submit to test `contact.php`

## 📝 Git Workflow
- Main branch: `main` (production)
- PHP feature branch: `feature/php-form`
- Minimum 5 meaningful commits maintained throughout development

## 🔒 Security
- All PHP form inputs sanitized using `htmlspecialchars()`
- Server-side validation for empty fields
- Client-side Bootstrap form validation as first line of defense
