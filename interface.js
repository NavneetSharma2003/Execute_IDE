const languageSelect = document.querySelector(".language-select");
const outputSection = document.getElementById("output-section");
const codeArea = document.getElementById("code-area");

let editor;

function initializeEditor(mode) {
    if (editor) {
      editor.toTextArea(); 
    }
  
    editor = CodeMirror.fromTextArea(codeArea, {
      mode: mode,
      lineNumbers: true,
      theme: "default", 
    });
  }
  

// Functions for different languages

function jsFunction() {
    console.log("JavaScript selected!");
    outputSection.innerText = "JavaScript function called!";
    initializeEditor("javascript"); // CodeMirror mode for JavaScript
  }
  
  function javaFunction() {
    console.log("Java selected!");
    outputSection.innerText = "Java function called!";
    initializeEditor("text/x-java"); // CodeMirror mode for Java
  }
  
  function pythonFunction() {
    console.log("Python selected!");
    outputSection.innerText = "Python function called!";
    initializeEditor("python"); // CodeMirror mode for Python
  }
  
  function cppFunction() {
    console.log("C++ selected!");
    outputSection.innerText = "C++ function called!";
    initializeEditor("text/x-c++src"); // CodeMirror mode for C++
  }
  
  function cFunction() {
    console.log("C selected!");
    outputSection.innerText = "C function called!";
    initializeEditor("text/x-csrc"); // CodeMirror mode for C
  }
  

// Switch case event listener for language selection
languageSelect.addEventListener("change", function () {
  const language = languageSelect.value.toLowerCase(); // Get selected language

  switch (language) {
    case "javascript":
      jsFunction();
      break;
    case "java":
      javaFunction();
      break;
    case "python":
      pythonFunction();
      break;
    case "c++":
      cppFunction();
      break;
    case "c":
      cFunction();
      break;
    default:
      console.log("No matching language function.");
      outputSection.innerText = "Please select a valid language.";
      break;
  }
});

  
