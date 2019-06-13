#!/bin/bash


# ToDo:
#   Create git branch with $templateName

branch=$(git symbolic-ref --short HEAD)

if [ "$branch" != "master" ] && [ "$branch" != "shellScript" ]; then
  echo "Commit or stash any changes and switch to the master branch \n"
  exit 0
fi

read -p "Input the name of the new template (do not use spaces): " templateName

if ! [[ "$templateName" =~ [^-a-z0-9] ]]; then
  printf "Valid name \n"
else
  printf "Invalid name. You may only use lowercase letters, numbers and dashes \n"
  exit 0
fi

if [ `git branch --list "$templateName" `]
then
   echo "Branch name "$templateName" already exists."
   exit 0
fi

git checkout -b "$templateName"

read -p "Include a description of the template: " templateDescription

if [ -d "./$templateName" ]; then
  printf "%s already exists" "$templateName"
  exit 0
fi

printf "Creating folder /%s\n" "$templateName"
mkdir "./$templateName"

phpFile="./$templateName/$templateName.php"
printf "Creating file %s \n" "$phpFile"
touch "$phpFile"
cat > "$phpFile" <<- EOF
<div class="full-width $templateName">

</div>
EOF

phpFunctionsFile="./$templateName/functions.php"
printf "Creating file %s \n" "$phpFunctionsFile"
touch "$phpFunctionsFile"
cat > "$phpFunctionsFile" <<- EOF
<?php
  // Location: $phpFunctionsFile
EOF

scssFile="./$templateName/$templateName.scss"
printf "Creating file %s \n" "$scssFile"
touch "$scssFile"
cat > "$scssFile" <<- EOF
.$templateName {

}

// Small devices (landscape phones, 576px and up)
@media (min-width: 576px) {
  .$templateName {

  }
}

// Medium devices (tablets, 768px and up)
@media (min-width: 768px) {
  .$templateName {

  }
}

// Large devices (desktops, 992px and up)
@media (min-width: 992px) {
  .$templateName {

  }
}

// Extra large devices (large desktops, 1200px and up)
@media (min-width: 1200px) {
  .$templateName {

  }
}

// Super wide devices (full width)
@media (min-width: 1440px) {
  .$templateName {

  }
}
EOF

templatesPHPIncludeFile="./template-includes.php"
printf "Updating file %s \n" "$templatesPHPIncludeFile"
cat >> "$templatesPHPIncludeFile" <<-EOF
include_once("$templateName/functions.php");
EOF

templatesScssFile="./templates.scss"
printf "Updating file %s \n" "$templatesScssFile"
cat >> "$templatesScssFile" <<-EOF
@import "$templateName/$templateName";
EOF

jsFile="./$templateName/$templateName.js"
printf "Creating file %s \n" "$jsFile"
touch "$jsFile"
cat > "$jsFile" <<- EOF

EOF

readmeFile="./$templateName/readme.md"
printf "Creating file %s \n" "$readmeFile"
touch "$readmeFile"
cat > "$readmeFile" <<- EOF
# Description
$templateDescription

# Usuage Example

EOF

exit 0
