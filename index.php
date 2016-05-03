$ git init
$ heroku git:remote -a "name of heroku app"


Commit your code to the repository and deploy it to Heroku using Git.

$ git add .
$ git commit -am "make it better"
$ git push heroku master
$ heroku open