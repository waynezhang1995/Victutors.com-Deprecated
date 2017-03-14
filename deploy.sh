#!/bin/sh

set -x

scp -r ./*/ victutors@victutors.com:public_html/
scp ./*.* victutors@victutors.com:public_html/