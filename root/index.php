<?php require_once('../views/header.php'); ?>
        <h1>Andrew Rasmussen</h1>
        <h2>arasmussen (at) katworks (dot) com</h2>
        <div id="accordion">
          <h3>About me</h3>
          <div>
            <ul>
              <li>Originally from Seattle, WA</li>
              <li>21 years old</li>
              <li>Currently in my 4th year of my Bachelor of Software Engineering at the University of Waterloo in Ontario, Canada</li>
              <li>I love side projects and have a hard time working on one without thinking about a business model</li>
              <li>I'm currently looking for a software engineering internship at an earlier stage startup in the Bay Area, New York City, or Seattle</li>
              <li>I've lived in San Diego CA, Mountain View CA, Seattle WA, New York NY, Waterloo ON, and London ON</li>
              <li>Right now I'm working on a website that will let people create chess algorithms and compete against other algorithms</li>
            </ul>
          </div>
          <h3>Work experience</h3>
          <div>
            <p>I've had six software development internships</p>
            <ul>
              <li>Facebook (Menlo Park, CA): May-Aug 2012</li>
              <li>Digital Extremes (London, ON): Sep-Dec 2011</li>
              <li>Morgan Stanley (New York, NY): Jan-Apr 2011</li>
              <li>Qualcomm (San Diego, CA): May-Aug 2010</li>
              <li>Microsoft (Seattle, WA): Jun-Aug 2008, Jun-Aug 2009</li>
            </ul>
            <p>I've done some consulting too!</p>
            <ul>
              <li>Tungsten Property (New York, NY): Dec 2011 to current</li>
            </ul>
          </div>
          <h3>Stuff I've built</h3>
          <div>
            <div id="tabs">
              <ul>
                <li><a href="#tab1">Tungsten Property</a></li>
                <li><a href="#tab2">Chess AI Site</a></li>
                <li><a href="#tab3">3D OpenGL Demo</a></li>
                <li><a href="#tab4">Tri Grid Viewer</a></li>
                <li><a href="#tab5">Rasmuzen</a></li>
              </ul>
              <div id="tab1">
                <p>I single-handedly developed and launched Tungsten Property's <a href="http://www.tungstenproperty.com">current site</a> using ec2/LAMP. I still maintain the site and work on new features when I have time to.</p>
                <a href="http://www.tungstenproperty.com"><img src="/img/tungsten.png" alt="tungsten" /></a>
              </div>
              <div id="tab2">
                <p>I'm currently working on a website which would allow users to upload their chess algorithm to see how it does against other users' chess algorithms and watch the games live online. The website is written in PHP using CodeIgniter and the service running the algorithms is written in C++. PHP scripts communicate with the C++ service via Thrift.</p>
                <img src="/img/chess.png" alt="chess" />
              </div>
              <div id="tab3">
                <p>Having played a ton of video games as a kid, I got a pretty deep interest in computer graphics when I got to school. I tried using game engines such as OGRE and Unity but ended up finding it much more interesting to work directly with OpenGL. The project shown lets the user, a beautiful cube, walk around a heightmap terrain with all the associated physics/collision detection. Written from scratch using C++ and modern OpenGL with shaders.</p>
                <img src="/img/graphics.jpg" alt="graphics" />
              </div>
              <div id="tab4">
                <p>This project is super small, but was a really fun take-home interview assignment! As you can see from the image below, I can easily enjoy blowing a lot of time using this app.</p>
                <p>Try it out <a href="http://trigrid.rasmuzen.com">here</a>!</p>
                <a href="http://trigrid.rasmuzen.com"><img src="/img/trigrid.png" alt="trigrid" /></a>
              </div>
              <div id="tab5">
                <p>Rasmuzen is this actual site that you're on right now. I enjoy creating an online identity for myself by keeping a graphical collection of my past/current projects and providing links to many other websites that I spend a lot of time on.</p>
                <p>As you can see it's not the prettiest right now and still has a long way to go!</p>
              </div>
            </div>
          </div>
        </div>

<?php require_once('../views/footer.php'); ?>
