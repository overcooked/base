#!/bin/bash
set -x # Show the output of the following commands (useful for debugging)

# Import the SSH deployment key
openssl aes-256-cbc -K $encrypted_b0b2958c016f_key -iv $encrypted_b0b2958c016f_iv -in .travis/travis_rsa.enc -out ~/.ssh/travis_rsa -d
rm deploy-key.enc # Don't need it anymore
chmod 600 deploy-key
mv deploy-key ~/.ssh/id_rsa

# Install zopfli
git clone https://code.google.com/p/zopfli/
cd zopfli
make
chmod +x zopfli
cd ..
