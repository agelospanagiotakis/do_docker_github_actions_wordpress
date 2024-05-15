#!/bin/bash

# Load environment variables from .env file
source .env
echo "PROJECT_NAME: $PROJECT_NAME"
echo "PROJECT_BASE_URL: $PROJECT_BASE_URL"

docker exec -it  "${PROJECT_NAME}_nginx" bash
