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
<link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">Execute</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="signup.php">Login/Sign-up</a>
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