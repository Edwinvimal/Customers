#!/usr/bin/env bash
tar -cv \
  --exclude=.env \
  --exclude=ASSESSMENT.md \
  --exclude=customers.tar.gz \
  --exclude=package.sh \
  --exclude=storage/framework/sessions/* \
  --exclude=storage/framework/views/*.php \
  --exclude=storage/logs/laravel.log \
  --exclude=vendor \
  -f customers.tar .

tar -rvf customers.tar storage/framework/sessions/.gitignore
gzip -f customers.tar
