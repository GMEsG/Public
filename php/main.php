<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<script>
function open_my_github_page(){window.open("https://github.com/GMEsG/Public");}
</script>

<button class="sub", onclick="open_my_github_page()">Sub us on Github</button>

<div class="script_margin"><pre> 1.|import turtle as t
 2.|def sierpinski(len, lvl):
 3.|    if lvl==0:[t.fd(len) or t.lt(120) for _ in range(3)]
 4.|    else:[sierpinski(len/2,lvl-1),t.fd(len/2),sierpinski(len/2,lvl-1),t.bk(len/2),t.lt(60),t.fd(len/2),t.rt(60),sierpinski(len/2, lvl-1),t.lt(60),t.bk(len/2),t.rt(60)]
 5.|t.speed(0),sierpinski(100,4)</pre></div>

<button class="run", class="script_margin">Run</button>

</body>
</html> 