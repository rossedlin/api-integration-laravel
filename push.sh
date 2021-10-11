#!/usr/bin/env bash

# Tag the image
docker tag api-integration-demo asia-southeast1-docker.pkg.dev/portfolio-327611/portfolio/api-integration-demo

#Push to GCloud
docker push asia-southeast1-docker.pkg.dev/portfolio-327611/portfolio/api-integration-demo
