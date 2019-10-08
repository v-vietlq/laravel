#!/bin/bash
IP=$1

scp -i /opt/prod ./jenkins/deploy/publish root@$IP:/tmp/publish
scp -i /opt/prod -prq laravel/ root@$IP:~/
ssh -i /opt/prod root@$IP "sudo bash /tmp/publish"