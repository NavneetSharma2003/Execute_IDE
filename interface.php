<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execute CodeEditor</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/python/python.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/java/java.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/clike/clike.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/default.min.css">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f0f0;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #000;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
        }

        .user-profile {
            width: 30px;
            background-color: #fff;
            border-radius: 50%;
            text-align: center;
        }

        /* Toolbar */
        .toolbar {
            background-color: #e0e0e0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .language-select {
            padding: 8px 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: white;
        }

        .toolbar-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .icon {
            height: 4vh;
        }

        .run-button {
            background-color: #008000;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Main Content */
        .main-content {
            display: flex;
            padding: 20px;
            gap: 20px;
            height: calc(100vh - 120px);
        }

        .code-area {
            flex: 2;
        }

        .CodeMirror {
            height: 100%;
            width: 60%;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            font-family: 'Courier New', Courier, monospace;
        }


        .CodeMirror-linenumber {
            color: #333;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            text-align: center;
        }

        .CodeMirror-gutters {
            background-color: #f0f0f0;
            border-right: 2px solid #ccc;
        }
        
        .output-section { 
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 10px;
         }

        .output-box {
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: white;
            height: 100%;
            padding: 10px;
            border: 1px solid;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">Execute</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Let's Code</a>
            <a href="#">Login/Sign-up</a>
        </div>
        <div class="user-profile"><img src="res/profile_icon.svg" alt=""></div>
    </nav>

    <div class="toolbar">
    <select class="language-select">
  <option value="" disabled selected>Select Language</option>
  <option value="javascript">Javascript</option>
  <option value="java">Java</option>
  <option value="python">Python</option>
  <option value="c++">C++</option>
  <option value="c">C</option>
</select>
        </select>
        <div class="toolbar-actions">
            <span><img src="res/download-svgrepo-com.svg" class="icon"></span>
            <span><img src="res/setting-svgrepo-com.svg" class="icon"></span>
            <span><img src="res/copy-svgrepo-com.svg" class="icon"></span>
            <span><img src="res/reload-svgrepo-com.svg" class="icon"></span>
            <button class="run-button">RUN</button>
        </div>
    </div>

    <div class="main-content">
        <textarea name="" class="code-area" id="code-area"></textarea>
        <div class="output-section">
            <div class="output-box">
                <div class="section-title" id="output-section" >OUTPUT :</div>
            </div>
        </div>
    </div>
    <script src="interface.js"></script>
</body>

</html>