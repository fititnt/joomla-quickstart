#### PHP | Joomla | Quickstart of Joomla extension

Look inside each directory for more info

All subdiretories here contains one quickstart for some diferent types of Joomla extensions. The next
code show how you clone *only* one subdirectory and mantain his history on your project. This is good
for how will start from one of this quickstarts, but not recomended for how will pack more than one
extension in one same git repository. At least if sources are from diferent places than this one.


<pre>
#Clone entire repository
git clone --no-hardlinks git@github.com:fititnt/joomla-template.git .
#Choose subdirectory. library/simple, for example
git filter-branch --subdirectory-filter joomla/ HEAD
#clean up what is not necessary
rm -rf .git/refs/original/
git reflog expire --expire=now --all
git gc --aggressive --prune=now
</pre>

Reference: http://stackoverflow.com/questions/359424/detach-subdirectory-into-separate-git-repository

TIP 1: after clone, maybe you wanna change the origin from this repository to your repository git. You
can do changing /.git/config file, whre have ```"url = git@github.com:fititnt/joomla-template.git"``` to
your repository.

TIP 2: digit gitk command on command line and will open one Git commit viewer 