

<link rel="stylesheet" href="../style/sidebar.css">





<a class="link" href="/index.html" >Home</a>
<a class="link" href="/education.html" >Education</a>


<!-- <button onclick="updateColor(this)">
    <a href="/index.html" class="link selected">Home</a>
</button>

<button onclick="updateColor(this)">
    <a href="/education.html" class="link">Education</a>
</button>
<button onclick="updateColor(this)">
    <a href="/resume.html" class="link" >Resume</a>
</button>
    
<button onclick="updateColor(this)">
    <a href="/projects.html" class="link" >Projects</a>
</button> 
<button onclick="updateColor(this)">
    <a href="/about_me.html" class="link" >About Me</a>
</button> -->



<h3>
    Reach Out!
</h3>

<h4>Email</h4>
<a loading="lazy" href="mailto:osmunaj@gmail.com" class="small-link">osmunaj@gmail.com</a>
<h4>Linked in</h4>
<a loading="lazy" href="https://www.linkedin.com/in/ari-osmun/" class="small-link">www.linkedin.com/in/ari-osmun</a>
<h4>Cell Phone</h4>
<p class="small-link">(720)520-2105</p>
<h4>Github</h4>
<a loading="lazy" href="https://github.com/osmunaj" class="small-link">github.com/osmunaj</a>

<script>
    alert("run");
    const allElems = document.getElementsByClassName("link");


    allElems.forEach((navlink) => {
        alert('hi')

    // navlink.addEventListener("click", () => {
        //     alert('click');
        //     navlink.classList.add('selected');
    // });
});
</script>