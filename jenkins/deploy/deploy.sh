#!/bin/bash


scp -i /opt/prod ./jenkins/deploy/publish root@144.202.3.128:/tmp/publish
scp -i /opt/prod -r laravel/* root@144.202.3.128:~/laravel/
ssh -i /opt/prod root@144.202.3.128 "sudo bash /tmp/publish"