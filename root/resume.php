<!doctype html>
<html>
  <head>
    <title>Andrew Rasmussen - Resume</title>
    <style type="text/css" media="screen">
      #wrapper {
        margin: 0 auto;
      }
    </style>
    <style type="text/css">
      * {
        color:#000;
        font-size:1em;
        margin:0;
        padding:0;
      }

      body {
        font:11px verdana;
        line-height:13px;
      }

      h2 {
        border-bottom:dotted 1px #777;
        font:bold 1.4em verdana;
        margin:0.8em 0 0.2em;
        text-transform:uppercase;
      }

      h4 {
        display:inline;
        padding-right:4px;
      }

      p, ul {
        margin-bottom:1.4em;
      }

      ul {
        margin-bottom:0;
        margin-left:1.2em;
        padding-left:1.2em;
      }

      li {
        margin-bottom: .2em;
      }

      #experience h3 {
        font-weight:normal;
      }

      #title {
        text-align:center;
      }

      #title p {
        margin:0;
      }

      #title h1 {
        font:normal 1.8em verdana;
      }

      #skills {
        clear:both;
      }

      #skills p {
        display:inline;
        margin:none;
      }

      #other h3, #other p {
        display:inline;
      }

      #wrapper {
        width:800px;
      }

      #entries .entry {
        float:left;
        height:140px;
        border-bottom:1px dotted black;
      }

      #entries .entry:nth-child(even) {
        padding-left:10px;
        width:390px;
      }

      #entries .entry:nth-child(odd) {
        border-right:1px dotted black;
        padding-right:5px;
        width:394px;
      }

      #entries .entry:nth-child(5),
      #entries .entry:nth-child(6) {
        border-bottom:none;
        height:125px;
      }

      .for {
        font:bold 1em verdana;
        position:relative;
      }

      .for span {
        font-style:oblique;
        font:normal 1em verdana;
        position:absolute;
        right:0;
        top:0;
      }
    </style>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34368328-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
    <div id="wrapper">
      <div id="masthead">
        <div id="title">
          <h1>Andrew Rasmussen</h1>
          <p>3B Software Engineering - University of Waterloo</p>
          <p>arasmussen (at) katworks (dot) com</p>
        </div>
      </div>
      <div id="skills" class="section">
        <h2>Technical Skills</h2>
        <ul>
          <li>Eight years of programming experience
            <ul>
              <li><h4>C/C++ (8 years)</h4>- 3D games (OpenGL), extensive experience with pointers, STL, OOP, templates</li>
              <li><h4>PHP, MySQL (3 years)</h4>- Backend of numerous web applications, industry experience at Facebook</li>
              <li><h4>OpenGL/GLSL (1 year)</h4>- Modern OpenGL using vertex buffer objects, fragment/vertex shaders</li>
              <li><h4>C# (8 months)</h4>- Windows Forms GUI applications, backend of ASP.NET web applications</li>
              <li><h4>JavaScript, jQuery, AJAX (1 year)</h4>- Interactive web applications, industry experience at Facebook</li>
              <li><h4>Python (6 months)</h4>- 2D games using PyGame (Astroids and Breakout clones)</li>
            </ul>
          </li>
          <li>Familiarity: XML, JSON, Regex, HTML, CSS, Scheme, ASP.NET, Perl, Lua, Bash</li>
          <li>Platforms: Linux (Ubuntu, Red Hat, Fedora), Windows</li>
          <li>Editors: Vim, Visual Studio 2008/2010, Eclipse</li>
        </ul>
      </div>
      <div id="experience" class="section">
        <h2>Relevant Work Experience</h2>
        <div id="entries">
          <div class="entry">
            <div class="for">Facebook: Menlo Park, CA<span>May-August, 2012</span></div>
            <h3>Photos Team Engineer</h3>
            <ul>
              <li>Owned a project that was taken from initial design to internal photos team launch (public launch coming soon)</li>
              <li>Participated in multiple overnight hackathons, hacking on internal side projects</li>
              <li>Helped with general weekly photos team bugs/tasks</li>
              <li>Technologies: PHP, JavaScript, CSS</li>
            </ul>
          </div>
          <div class="entry">
            <div class="for">Digital Extremes: London, ON<span>September-December, 2011</span></div>
            <h3>Star Trek Gameplay Programming</h3>
            <div class="details">
              <ul>
                <li>Independently designed, implemented, and tested many new features and bug fixes</li>
                <li>Touched a large spectrum of the codebase from low-level network serialization in the engine to high-level visible gameplay features</li>
                <li>Technologies: C++, Lua</li>
              </ul>
            </div>
          </div>
          <div class="entry">
            <div class="for">Morgan Stanley: New York, NY<span>January-April, 2011</span></div>
            <h3>Electronic Trading Infrastructure</h3>
            <div class="details">
              <ul>
                <li>Enhanced and fixed a C++ project which serializes C++ objects into specific formats</li>
                <li>Project was distributed for use in internal trading applications in production</li>
                <li>Solely responsible for the design and testing of my enhancements and bug fixes</li>
                <li>Technologies: C++, Bash, Perl, Python, JSON</li>
              </ul>
            </div>
          </div>
          <div class="entry">
            <div class="for">Qualcomm Incorporated: San Diego, CA<span>May-August, 2010</span></div>
            <h3>QDSP6 Audio Test Framework</h3>
            <div class="details">
              <ul>
                <li>Designed and developed a Perl script to automate audio testing with extensive capabilities, including running overnight stress tests, recording audio playback, and comparing audio output using bit exactness</li>
                <li>Ran stability and stress tests for bi-weekly builds</li>
                <li>Assisted our development team in developing these C++ tests</li>
                <li>Technologies: Perl, C++, Bash</li>
              </ul>
            </div>
          </div>
          <div class="entry">
            <div class="for">Microsoft Corporation: Redmond, WA<span>June-August, 2009</span></div>
            <h3>Visual Studio 2010 Globalization</h3>
            <div class="details">
              <ul>
                <li>Developed and tested a web-based Silverlight application that could be localized for multiple locales as a presentation piece to help explain the process of Globalization</li>
                <li>Pseudo-localized a daily build of Visual Studio 2010 for familiarity with the globalization process</li>
                <li>Technologies: ASP.NET, Silverlight, C#, HTML, CSS</li>
              </ul>
            </div>
          </div>
          <div class="entry">
            <div class="for">Microsoft Corporation: Redmond, WA<span>June-August, 2008</span></div>
            <h3>Windows Embedded, Point of Service</h3>
            <div class="details">
              <ul>
                <li>Developed an application that kept an inventory of POS devices and associated information</li>
                <li>Designed a neat, systematic, GUI that could be accessed throughout the entire team (over network)</li>
                <li>Technologies: C#, Windows Forms, SQL, ADO.NET</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="other">
        <div id="activities" class="section">
          <h2>Related Activities</h2>
          <ul>
            <li>
              <h3>Freelance Work</h3>
              <ul>
                <li>Tungsten Property - single handedly launched <a href="http://www.tungstenproperty.com">Tungsten Property's site</a> from scratch (AWS/LAMP)</li>
                <li>Directory Remover - an easily configurable DOS Batch script to schedule the removal of certain directories - for Global Labs</li>
              </ul>
            </li>
            <li>
              <h3>Game/Graphics Programming:</h3>
              <ul>
                <li>3D games (C++, modern OpenGL) using vertex buffer objects and shaders (GLSL)</li>
                <li>Rendered ~3 million textured triangles using VBOs with &gt;300fps in a minecraft-like game (including physics)</li>
                <li>Designed and implemented a game using a heightmap and associated collision detection</li>
              </ul>
            </li>
            <li>
              <h3>Web Programming:</h3>
              <ul>
                <li>Interactive web plugins using vanilla JavaScript or jQuery</li>
                <li>Applications with a PHP/MySQL backend and careful, secure, graphical interface to the database</li>
              </ul>
            </li>
            <li><h3>Stack Overflow: </h3>Over 130 answers, have a reputation in the top 12% of users; mostly from answering C++/OpenGL questions</li>
            <li><h3>Project Euler: </h3>Completion of the dozens of challenges on this programming challenge/contest site for fun</li>
            <li><h3>UW/Google AI Challenge: </h3>Participation in two Google sponsored, UW hosted, AI programming competitions. Overall ranking in both challenges were in the top quartile. Competition subjects include Rock Paper Scissors and Tron.</li>
          </ul>
        </div>
        <div id="education" class="section">
          <h2>Education</h2>
          <ul>
            <li><h3>Candidate for Bachelor of Software Engineering </h3>at the University of Waterloo, June 2014. Relevant courses include Operating Systems, Algorithms, Object Oriented Software Development, Data Structures</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
