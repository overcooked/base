#!/bin/bash

# print outputs and exit on first failure
# mac@138.68.237.56:/var/www/overcooked.ca
set -xe

if [ $TRAVIS_BRANCH == "dev" ] ; then

    # setup ssh agent, git config and remote
    eval "$(ssh-agent -s)"
    ssh-add ~/.ssh/travis_rsa
    git remote add deploy "travis@138.68.237.56:/var/www/overcooked.ca"
    git config user.name "Travis CI"
    git config user.email "travis@overcooked.ca"

    # commit compressed files and push it to remote
    git add .
    git status # debug
    git commit -m "Deploy built files"
    git push -f deploy HEAD:master

    echo "DONE!"

else

    echo "No deploy script for branch '$TRAVIS_BRANCH'"

fi
