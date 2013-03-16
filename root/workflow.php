<?php require_once('../views/header.php'); ?>
<h1>Tungsten Wiki</h1>
<h3>Apache</h3>
<p>Apache is what we use to serve the site. It's configuration lives here:</p>
<pre>/etc/apache2</pre>
<p>You can see the VirtualHosts here:</p>
<pre>/etc/apache2/sites-enabled/001-tungstenproperty.com</pre>
<p>To restart apache, run:</p>
<pre>sudo /etc/init.d/apache2 restart</pre>
<h3>General Workflow</h3>
<ul>
<li>
<h4>1. Make changes to the test site</h4>
<p>The test site lives here:</p>
<pre>~/www/test.tungstenproperty.com</pre>
<p>First things first, prepare to make a new git branch.</p>
<pre>
$ cd ~/www/test.tungstenproperty.com
$ git status
# On branch master
# Changed but not updated:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#       modified:   script/fix_static.sh
#
# Untracked files:
#   (use "git add <file>..." to include in what will be committed)
#
#       foo.txt
no changes added to commit (use "git add" and/or "git commit -a")
</pre>
<p>Uh oh, this means you or I left over some changes from some other time. Kindly move them over to another branch so that you can begin working:</p>
<pre>
$ git stash
$ git checkout -b SomeBranch
$ git stash apply
$ git commit -am 'you left these'
$ git checkout master
$ git status
</pre>
<p>Now you should be able to do git status and see a clean master</p>
<pre>
$ cd ~/www/test.tungstenproperty.com
$ git status
# On branch master
nothing to commit (working directory clean)
</pre>
<p>This is the good to go, make your new branch and change away:</p>
<pre>git checkout -b MyAwesomeBranch</pre>
</li>
<li>
<h4>2. Review your changes on the main site.</h4>
<p>The test site can be accessed here:</p>
<pre>http://test.tungstenproperty.com</pre>
<p>You should review your changes and make sure they look legit before asking for a code review.</p>
</li>
<li>
<h4>3. Get a code review</h4>
<p>Make your commit and then tell me the branch name and I'll come take a look</p>
<pre>
$ git commit -am 'make a descriptive commit message!'
</pre>
<p>If you want to review my commit, then checkout the branch that my commit is in and do a git diff</p>
<pre>
$ git checkout -b AndrewsBranch
$ git diff HEAD^
</pre>
</li>
<li>
<h4>4. Push your changes</h4>
<p>After your code review gets approved, go ahead and push to origin/master and then checkout master and delete your branch.</p>
<pre>
$ git push origin/master
$ git checkout master
$ git branch -D MyAwesomeBranch
</pre>
</li>
<li>
<h4>5. Pull into prod</h4>
<p>After pushing to origin/master, you can go ahead and pull into the prod branch/directory</p>
<pre>
$ cd ~/www/tungstenproperty.com
$ git status
# On branch master
nothing to commit (working directory clean)
$ # no changes, sweet.
$ git fetch
$ git rebase origin/master
</li>
</ul>
<?php require_once('../views/footer.php'); ?>
