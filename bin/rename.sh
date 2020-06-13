#!/bin/bash



PACKAGE_AUTHOR='phppackageauthor'
PACKAGE_NAME='phppackagename'
PACKAGE_NAME_CAMEL='PhpPackage'

PACKAGE_NAMESPACE='PhpPackageNamespace'
PACKAGE_CLASS='PhpPackageClass'
PACKAGE_METHOD='phpPackageName'

PACKAGE_DESCRIPTION='phppackagedescription'

find . -type f -name 'Lucky-*' | while read FILE ; do
    newfile="$(echo ${FILE} |sed -e 's/\\#U00a9/safe/')" ;
    mv "${FILE}" "${newfile}" ;
done