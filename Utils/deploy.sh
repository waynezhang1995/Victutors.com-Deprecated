#!/bin/sh

# set -x

copyDirectoryandFiles () {
    echo "\n\n******* Copying direcotry *******\n\n"
    scp -r ./CSS/ victutors@victutors.com:public_html/
    scp -r ./javascript/ victutors@victutors.com:public_html/
    echo "******* Copying php files *******\n\n"
    scp ./*.* victutors@victutors.com:public_html/
}

echo "\n\n******* Deploy Script for Victutors by Wayne Zhang *******\n\n"

if [ -z "$1" ]; then
    echo " ====> No option detected ! Default to Directories AND Files\n\n"
    copyDirectoryandFiles
elif [ "$1" = "js" ]; then
    echo " ====> Javascript option detected\n\n"
    echo "\n\n******* Copying Javascript files *******\n\n"
    scp -r ./javascript/ victutors@victutors.com:public_html/
elif [ "$1" = "css" ]; then
    echo " ====> CSS option detected\n\n"
    echo "\n\n******* Copying CSS files *******\n\n"
    scp -r ./CSS/ victutors@victutors.com:public_html/
elif [ "$1" = "php" ]; then
    echo "******* Copying php files *******\n\n"
    scp ./*.* victutors@victutors.com:public_html/
else
    echo " No such option ! Please try again\n  js ===> javascript\n css ===> CSS\n php ===> php files\n"
    exit 1
fi

echo "\n\n******* Done ! *******"