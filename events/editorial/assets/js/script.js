function editorView() {
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/vibrant_ink");
    editor.session.setMode("ace/mode/c_cpp");
    editor.session.setUseSoftTabs(true);
    document.getElementById('editor').style.fontSize = '24px';
}

function myFunction() {
    var x = document.getElementById("editor");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        editorView();
    }
}