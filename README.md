# CMPE272
## To connect to EC2 instance

```
ssh -i "Class 272.pem" ubuntu@ec2-18-219-100-124.us-east-2.compute.amazonaws.com
```

## To install apache and php in Ubuntu

```
sudo apt-get install apache2 php libapache2-mod-php
```

## To make php as default config

```
sudo nano /etc/apache2/mods-enabled/dir.conf
```
make index.php as first one. replace php with html.

## To start, restart or check status

```
sudo systemctl start apache2
sudo systemctl restart apache2
sudo systemctl status apache2
```
