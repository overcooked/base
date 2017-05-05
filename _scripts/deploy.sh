#!/bin/bash
set -x
if [ $TRAVIS_BRANCH == 'dev' ] ; then
    cd html
    git init

    git remote add deploy "deploy@138.68.237.56:/var/www/html"
    git config user.name "Travis CI"
    git config user.email "travis@overcooked.ca"

    git add .
    git commit -m "Deploy"
    git push --force deploy dev
else
    echo "Not deploying, since this branch isn't dev."
fi
