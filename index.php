<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Report a User</title>
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hBNJ1jB2A1V.ico">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 980px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        .report-card {
            width: 396px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            padding: 20px 0 24px;
            box-sizing: border-box;
            text-align: center;
        }
        .report-card h1 {
            font-size: 24px;
            color: #1c1e21;
            margin-bottom: 10px;
        }
        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 1px solid #ddd; /* Optional: subtle border */
        }
        .report-message {
            font-size: 17px;
            color: #1c1e21;
            margin: 0 20px 20px;
            line-height: 1.5;
        }
        .login-to-report-button {
            width: calc(100% - 40px); /* Adjust for padding */
            padding: 12px 16px;
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none; /* For anchor tag */
            display: inline-block;
        }
        .login-to-report-button:hover {
            background-color: #166fe5;
        }

        /* Footer styles (copied from previous index.php for consistency) */
        .page-footer {
            margin-top: 28px;
            font-size: 12px;
            color: #8a8d91;
            width: 100%;
            max-width: 980px; /* Align with main content width */
            padding: 0 20px;
            box-sizing: border-box;
            text-align: center; /* Default for mobile, will adjust for desktop */
        }
        .page-footer .language-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center languages on mobile */
            border-bottom: 1px solid #dadde1; /* Separator for languages */
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .page-footer .language-list li {
            margin: 0 8px 5px 0;
        }
        .page-footer .language-list li a {
            color: #8a8d91;
            text-decoration: none;
        }
        .page-footer .language-list li a:hover {
            text-decoration: underline;
        }
        .page-footer .language-list li:last-child {
            margin-right: 0; /* Remove right margin from last item */
        }
        .page-footer .more-links-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center links on mobile */
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }
        .page-footer .more-links-section li {
            margin: 0 8px 5px 0;
        }
        .page-footer .more-links-section li a {
            color: #8a8d91;
            text-decoration: none;
        }
        .page-footer .more-links-section li a:hover {
            text-decoration: underline;
        }
        .page-footer .copyright {
            margin-top: 10px;
            text-align: center; /* Center copyright on mobile */
        }


        /* Responsive adjustments */
        @media (min-width: 850px) {
            .main-container {
                flex-direction: row;
                justify-content: center; /* Center content on desktop */
            }
            .report-card {
                margin-top: 50px; /* Adjust vertical position */
            }
            .page-footer {
                text-align: left; /* Align footer left on desktop */
            }
            .page-footer .language-list,
            .page-footer .more-links-section {
                justify-content: flex-start; /* Align links left on desktop */
            }
            .page-footer .copyright {
                text-align: left; /* Align copyright left on desktop */
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="report-card">
            <h1>Report Collins Kipchumba</h1>
            <img class="profile-pic" src="https://static.xx.fbcdn.net/rsrc.php/yv/r/FhY3Cq3pL2H.png" alt="Profile Picture">
            <p class="report-message">
                To proceed with reporting Collins Kipchumba's profile, you need to verify your identity by logging in.
                This ensures the integrity of the reporting process.
            </p>
            <a href="/login_page.php" class="login-to-report-button">Log In to Report</a>
        </div>
    </div>
    <div class="page-footer">
        <ul class="language-list">
            <li><a href="#">English (UK)</a></li>
            <li><a href="#">Kiswahili</a></li>
            <li><a href="#">Français (France)</a></li>
            <li><a href="#">Español</a></li>
            <li><a href="#">Português (Brasil)</a></li>
            <li><a href="#">العربية</a></li>
            <li><a href="#">Deutsch</a></li>
            <li><a href="#">Italiano</a></li>
            <li><a href="#">Türkçe</a></li>
            <li><a href="#">हिन्दी</a></li>
            <li><a href="#">中文(简体)</a></li>
        </ul>
        <ul class="more-links-section">
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log in</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Facebook Lite</a></li>
            <li><a href="#">Video</a></li>
            <li><a href="#">Meta Pay</a></li>
            <li><a href="#">Meta Store</a></li>
            <li><a href="#">Meta Quest</a></li>
            <li><a href="#">Ray-Ban Meta</a></li>
            <li><a href="#">Meta AI</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Threads</a></li>
            <li><a href="#">Voting Information Centre</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Privacy Centre</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Create ad</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">AdChoices</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact uploading and non-users</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Activity log</a></li>
        </ul>
        <div class="copyright">
            Meta © 2025
        </div>
    </div>
</body>
</html>
